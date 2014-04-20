<?php include ('header.php'); ?>

  <div class="col-sm-12">

    <h2 class="maintitle"><?php echo $Locale->getText("resources_table_contents"); ?></h2>

    <ul style="list-style-type: circle;">
      <li><a href="#gettingstarted"><?php echo $Locale->getText("resources_table_contents_start"); ?></a></li>
      <li><a href="#buying"><?php echo $Locale->getText("resources_table_contents_buying"); ?></a></li>
      <li><a href="#tools"><?php echo $Locale->getText("resources_table_contents_tools"); ?></a></li>
      <li><a href="#pools"><?php echo $Locale->getText("resources_table_contents_pools"); ?></a></li>
      <li><a href="#shops"><?php echo $Locale->getText("resources_table_contents_shops"); ?></a></li>
    </ul>

    <h2 class="maintitle" id="gettingstarted"><?php echo $Locale->getText("resources_start"); ?></h2>

    <p><strong><?php echo $Locale->getText("resources_start_tutorials"); ?></strong></p>

    <ul style="list-style-type: circle;">
      <li>
        <a href="https://www.youtube.com/watch?v=TjL2AgCQDJ0">What is Peercoin?</a> - YouTube Introduction into Peercoin; What makes it different from Bitcoin?
      </li>
      <li>
        <a href="http://www.ppcointalk.org/">Peercoin Talk</a> - Official Peercoin Forum
      </li>
      <li>
        <a href="http://www.reddit.com/r/Peercoin">/r/Peercoin</a> - Reddit Peercoin Subreddit
      </li>
      <li>
        <a href="https://bitcointalk.org/index.php?board=67.0">Bitcoin Talk</a> - BitcoinTalk Alternative Cryptocurrencies Subforum
      </li>
    </ul>

    <h2 class="maintitle" id="buying"><?php echo $Locale->getText("resources_buying"); ?></h2>

    <p>
      <strong><?php echo $Locale->getText("resources_buying_desc"); ?></strong>
    </p>
    <br>
    <p>
      <strong><?php echo $Locale->getText("resources_buying_fiat"); ?></strong>
    </p>
    <ul style="list-style-type: circle;">
      <li>
        <a href="https://www.vaultofsatoshi.com/orderbook">Vault Of Satoshi</a> -  Canadian/US exchange
      </li>
      <li>
        <a href="https://crypto-trade.com/trade/ppc_usd">Crypto Trade</a> -  First fiat/PPC exchange
      </li>
      <li>
        <a href="https://btc-e.com/">BTC-e</a> -  Russian exchange, largest trading volume
      </li>
      <li>
        <a href="https://coinmkt.com/#/">CoinMarket Exchange</a> -  US-based exchange
      </li>
      <li>
        <a href="https://796.com/ppcusd/market">796 - Hong Kong Exchange</a>
      </li>
    </ul>

    <p>
      <strong><?php echo $Locale->getText("resources_buying_crypto"); ?></strong>
    </p>
    <ul style="list-style-type: circle;">
      <li>
        <a href="https://vircurex.com/welcome/index?alt=ppc&amp;base=btc">Vircurex exchange</a> - High volume PPC/BTC exchange
      </li>
      <li>
        <a href="https://www.cryptsy.com/">Cryptsy exchange</a> - Support for almost all popular altcoins. Lots of trading pairs.
      </li>
      <li>
        <a href="http://cryptonit.net/">Cryptonit exchange</a> -  Low Fee exchange
      </li>
      <li>
        <a href="https://www.btc38.com/">Btc38 exchange</a> - Chinese exchange
      </li>
      <li>
        <a href="https://holytransaction.com/">HolyTransaction</a> - Consumer-oriented multi-currency wallet with exchange
      </li>
    </ul>

    <h2 class="maintitle" id="tools"><?php echo $Locale->getText("resources_tools"); ?></h2>

    <p>
      <strong><?php echo $Locale->getText("resources_tools_desc"); ?></strong>
    </p>

    <ul style="list-style-type: circle;">
      <li>
        <a href="http://blockexplorer.ppcointalk.org/">PPCoinTalk Explorer</a> -  Blockchain Viewer: View transactions on the blockchain
      </li>
      <li>
        <a href="http://ppc.cryptocoinexplorer.com/">CryptoCoinExplorer</a> -  Blockchain Explorer: View transactions by PPC address
      </li>
      <li>
        <a href="http://bitinfocharts.com/comparison/hashrate-ppc.html">BitInfoCharts Hashrate Comparison</a> -  Peercoin Network Statistics
      </li>
      <li>
        <a href="http://bitinfocharts.com/">BitInfoCharts</a> -  Compare Peercoin statistics to other cryptocurrencies
      </li>
      <li>
        <a href="http://poscalculator.peercointalk.org/">POS Calculator</a> -  Calculate expected return on PPC minting
      </li>
      <li>
        <a href="http://www.coinwarz.com/calculators/peercoin-mining-calculator">Coinwarz Mining Calculator</a> -  Calculate expected return on PPC mining
      </li>
    </ul>  


    <h2 class="maintitle" id="pools"><?php echo $Locale->getText("resources_pools"); ?></h2>

    <p>
      <?php echo $Locale->getText("resources_pools_desc"); ?>
    </p>

    <p>
      <strong><?php echo $Locale->getText("resources_pools_dedicated"); ?></strong>
    </p>
    
    <ul style="list-style-type: circle;">
      <li><a href="https://peercoin.blockmines.com/">Blockmines</a></li>
      <li>
        <a href="https://peercoin.ecoining.com/">Ecoining</a> -  1% fee, Dynamic PPLNS Payment System
      </li>
      <li>
        <a href="https://ppcoin.d7.lt/">D7</a> -  1.25% fee, PPLNS: payout per share of the last N rounds
      </li>
      <li>
        <a href="http://ppc.fixx.ru/">Fixx</a> -  1% fee, PPLNS: payout per share of the last N rounds
      </li>
      <li>
        <a href="https://hynodeva.com/">Hynodeva</a> - Currently under upgrade
      </li>
    </ul>

    <p>
      <strong><?php echo $Locale->getText("resources_pools_multi"); ?></strong>
    </p>

    <ul style="list-style-type: circle;">
      <li>
        <a href="https://www.coinotron.com/coinotron/">Coinotron</a> - Pay Per Share: 12% fee, Round-Based Pay Per Share: 2%
      </li>
      <li>
        <a href="http://www.multipool.us/">Multipool.us</a> - 1.5% fee, Pay Per Share
      </li>
    </ul>

    <h2 class="maintitle" id="shops"><?php echo $Locale->getText("resources_shops"); ?></h2>
    
    <p>
      <strong><?php echo $Locale->getText("resources_shops_desc"); ?></strong>
    </p>
    
    <p>
      <strong><?php echo $Locale->getText("resources_shops_physical_goods"); ?></strong>
    </p>
    
    <ul style="list-style-type: circle;">
      <li>
        <a href="http://www.allthingsluxury.biz/Pay-With-AltCoins.html">All Things Luxury</a> - British Columbia based discount fashion jewelry and luxury goods business.
      </li>
      <li>
        <a href="http://www.beesbros.com/">Bees Brothers</a> - Honey and Honey Products (Toffees, roasted almonds, lotion, etc..)
      </li>
      <li>
        <a href="http://bitelectronics.net">BitElectronics</a> - Consumer electronics &amp; PC part shop. Worldwide shipping
      </li>
      <li>
        <a href="https://directvoltage.com">Direct Voltage</a> - Solar power generators and alternative energy equipment.
      </li>
      <li>
        <a href="https://distinguishedimports.com/shop/">Distinguished Imports</a> - Online home goods retailer focused on old-world quality and craftsmanship.
      </li>
      <li>
        <a href="http://jaysjerkyandgoodies.com">Jays Jerky and Goodies</a> - Natural Buffalo Jerky, Beef Jerky, Seasonings and Herbs and Homemade Satin Fudge for Peercoin.
      </li>
      <li>
        <a href="http://btcpipeshop.com">Pipe Shop</a> - Pipes for smoking.
      </li>
      <li>
        <a href="http://wrol.info">Without Rule of Law</a> - Survival gear shop.
      </li>
    </ul>
      <!-- TODO: add more shops in here -->
  </div>

  </div>
<?php include ('footer.php'); ?>
