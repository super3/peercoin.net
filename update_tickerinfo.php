<?
require('include/simple_html_dom.php');

// Configuration values
define('DATA_PATH', 'ppcmarket.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded (currently unused)
define('TRY_CMC', TRUE); // Whether or not we try to get data from CoinMarketCap


// Just return the price from BTC-e
function fetch_btce_market_price() {
    $data = file_get_contents('https://btc-e.com/api/2/ppc_usd/ticker');
    $data = json_decode($data, true);
    $ppc_usd = json_decode['ticker']['last'];

    return $ppc_usd;
}


// Get the total circulation from blockr.io to calculate market cap
function fetch_total_circulation() {
    $data = file_get_contents('http://ppc.blockr.io/api/v1/coin/info');
    $data = json_decode($data, true);
    $total_ppc = json_decode['data']['volume']['current'];

    return $total_ppc;
}


function fetch_market_info() {
    $total_supply = fetch_total_circulation();
    $price = fetch_btce_market_price();
    $market_cap = $price * $total_supply;

    $info = array(
        'price' => floatval($price),
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


// Get the total circulation from blockr.io to calculate market cap (THIS IS NOT A BACKUP)
function fetch_total_circulation() {
    $data = file_get_contents('http://ppc.blockr.io/api/v1/coin/info');
    $data = json_decode($data, true);
    $total_ppc = json_decode['data']['volume']['current'];

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
        $info = fetch_market_info();
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
