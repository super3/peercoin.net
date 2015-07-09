<?
require('include/simple_html_dom.php');

// Configuration values
define('DATA_PATH', 'ppcmarket.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded (currently unused)
define('TRY_CMC', TRUE); // Whether or not we try to get data from CoinMarketCap

// Grab new data from CoinMarketCap
function fetch_cmc_market_info() {
    // Grab the CMC API
    $api = file_get_api('https://coinmarketcap-nexuist.rhcloud.com/api/ppc');

    // Don't try to parse the API if it isn't there
    if ($api == FALSE) {
        return FALSE;
    }

    // Grab market cap from CMC
    $api = json_decode($api, true);
    $market_cap = $api['market_cap']['usd'];
    return round($market_cap, 0);
    }
    else {
        $market_cap = null;
    }

    // Grab price from CMC
    $api = json_decode($api, true);
    $ppc_usd = $api['price']['usd'];
    return round($ppc_usd, 2);
    }
    else {
        $ppc_usd = null;
    }
    
    // Grab total supply from CMC
    $api = json_decode($api, true);
    $total_supply = $api['supply'];
    return round($total_supply, 0);
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

// Alternative: Get PPC price from BTC-e
function fetch_btce_market_price() {
    $data = file_get_contents('https://btc-e.com/api/2/ppc_usd/ticker');
    $data = json_decode($data, true);
    $ppc_usd = $data['ticker']['last'];
    return round($ppc_usd, 2);
}

// Alternative: Get the total circulation from Blockr.io
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
        'market_cap' => round(floatval($market_cap), 0),
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
