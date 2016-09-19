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
        'market_cap' => round(floatval($market_cap),0),
        'total_supply' => intval($total_supply),
    );
    
    return $info;
}

// Get PPC price from BTC-e
function fetch_btce_market_price() {
    $data = file_get_contents('https://btc-e.com/api/2/ppc_usd/ticker');
    $data = json_decode($data, true);
    $ppc_usd = $data['ticker']['last'];
    return round($ppc_usd, 2);
}

// Get the total circulation from blockr.io
function fetch_total_circulation() {
    $data = file_get_contents('http://ppc.blockr.io/api/v1/coin/info');
    $data = json_decode($data, true);
    $total_ppc = $data['data']['volume']['current'];
    return round($total_ppc, 0);
}

function fetch_alternative_market_info() {
    $total_supply = fetch_total_circulation();
    $price = fetch_btce_market_price();
    $market_cap = $price * $total_supply;

    $info = array(
        'price' => floatval($price),
        'market_cap' => round(floatval($market_cap),0),
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
