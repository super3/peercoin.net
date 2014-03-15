<?
require('include/simple_html_dom.php');

// Configuration values
define('DATA_PATH', 'ppcmarket.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded (currently unused)
define('TRY_CMC', TRUE); // Whether or not we try to get data from CoinMarketCap

// Grab new data from CoinMarketCap
function fetch_cmc_market_info() {
    // Grab the CMC homepage
    $html = file_get_html("http://www.coinmarketcap.com/");

    // Don't try to parse the HTML if it isn't there
    if ($html == FALSE) {
        return FALSE;
    }

    // Get Peercoin's table
    $ppc_data = $html->find('#ppc', 0);
    if (!is_object($ppc_data)) {
        return FALSE;
    }

    // Market cap is stored in the "data-usd" tag of a 'td'
    $market_cap_td = $ppc_data->find('td[class=market-cap]', 0);
    if (is_object($market_cap_td)) {
        $market_cap = $market_cap_td->getAttribute('data-usd');
        // Market cap is returned with commas that break floatval()
        $market_cap = str_replace(",", "", $market_cap);
    }
    else {
        $market_cap = null;
    }

    // Individual price is stored in the "data-usd" tag of an 'a'
    $ppc_usd_a = $ppc_data->find('a[class=price]', 0);
    if (is_object($ppc_usd_a)) {
        $ppc_usd = $ppc_usd_a->getAttribute('data-usd');
    }
    else {
        $ppc_usd = null;
    }
    
    // Total supply does not have a marking class,
    // but at the time of writing is the 5th <td>
    $total_supply_td = $ppc_data->find('td', 4);
    if (is_object($total_supply_td)) {
        $total_supply = $total_supply_td->plaintext;
        // Ugly hack because CMC doesn't provide a data tag
        // so we have to strip off the text
        $total_supply = str_replace(",", "", $total_supply);
        $total_supply = str_replace(" PPC", "", $total_supply);
    }
    else {
        $total_supply = null;
    }

    // Prepare an array for the data,
    // returned as floats
    $info = array(
        'price' => floatval($ppc_usd),
        'market_cap' => floatval($market_cap),
        'total_supply' => intval($total_supply),
    );
    
    return $info;
}

// Just return the price from Vircurex
function fetch_vircurex_market_price() {
    $btc_usd_json = file_get_contents('https://api.vircurex.com/api/get_highest_bid.json?base=BTC&alt=USD');
    $btc_usd = json_decode($btc_usd_json)->value;

    $ppc_btc_json = file_get_contents('https://api.vircurex.com/api/get_highest_bid.json?base=PPC&alt=BTC');
    $ppc_btc = json_decode($ppc_btc_json)->value;

    $ppc_usd = $btc_usd * $ppc_btc;
    return round($ppc_usd, 2);
}

// Get the total circulation from CCE to calculate market cap without CoinMarketCap
function fetch_total_circulation() {
    $total_ppc = floatval(file_get_contents('http://ppc.cryptocoinexplorer.com/chain/PPCoin/q/totalbc'));
    return $total_ppc;
}

function fetch_alternative_market_info() {
    $total_supply = fetch_total_circulation();
    $price = fetch_vircurex_market_price();
    $market_cap = $price * $total_supply;

    $info = array(
        'price' => floatval($price),
        'market_cap' => floatval($market_cap),
        'total_supply' => intval($total_supply),
    );

    return $info;
}

// Update the market info file
function update_market_info() {
    if (TRY_CMC) {
        $info = fetch_cmc_market_info();
    }
    else {
        $info = FALSE;
    }

    if ($info == FALSE || $info['price'] == 0 || $info['market_cap'] == 0 || $info['total_supply'] == 0) {
        echo "*falling back to alt data sources*\n";
        $info = fetch_alternative_market_info();
    }

    $info['updated'] = time();
    file_put_contents(DATA_PATH, json_encode($info));
}

update_market_info();
echo '*updated*';

?>
