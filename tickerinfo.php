<?php

// Configuration values
define('DATA_PATH', 'ppcmarket.txt');

// Get market data from file
function market_info() {    
    $info = json_decode(file_get_contents(DATA_PATH));
    return $info;
}

// Return a JSON array of price / market cap / total supply
echo(JSON_encode(market_info()));

?>