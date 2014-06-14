<!-- Grey Wrap / Site Stats -->
	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("links"); ?></h2>
					<ul>
						<li><a href="https://github.com/ppcoin/ppcoin">Source Code (Github)</a></li>
						<li><a href="https://github.com/ppcoin/ppcoin/wiki">Wiki</a></li>
						<li><a href="http://www.peercointalk.org/">Forum</a></li>
						<li><a href="http://peercoinmyths.com/">Myths</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("tools"); ?></h2>
					<ul>
						<li><a href="http://wallet.peercointalk.org/">Wallet Generator (Beta!)</a></li>
						<li><a href="http://ppc.blockr.io/">Blockr.io - Block Explorer</a></li>
						<li><a href="http://bkchain.org/ppc">bkchain.org - Block Explorer</a></li>
						<li><a href="http://bitinfocharts.com/comparison/hashrate-ppc.html">Network Statistics</a></li>
						<li><a href="http://www.coinwarz.com/calculators/peercoin-mining-calculator/">Mining Calculator</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("exchanges"); ?></h2>
					<ul>
						<li><a href="http://www.btc38.com/trade.html?btc38_trade_coin_name=ppc">BTC38</a></li>
						<li><a href="https://btc-e.com/exchange/ppc_btc/">BTC-E</a></li>
						<li><a href="https://coinomat.com/#BTC/PPC">Coinomat</a></li>
						<li><a href="https://www.cryptsy.com/markets/view/28">Cryptsy</a></li>
						<li><a href="https://www.vaultofsatoshi.com/">Vault of Satoshi</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("mining"); ?></h2>
					<ul>
						<li><a href="https://peercoin.blockmines.com/">Blockmines</a></li>
						<li><a href="https://peercoin.ecoining.com/">Ecoining Pool</a></li>
						<li><a href="https://www.coinotron.com/">Coinotron</a></li>
						<li><a href="https://ppcoin.d7.lt/">D7 Pool</a></li>
					</ul>
				</div>
			</div><!-- /row -->

			<div class="row">
				<div id="footer-language-bar" class="col-lg-12">
	            	<span><?php echo $Locale->getText("languages"); ?></span>

	            	<?php
		            	foreach($Locale->getLanguages() as $language_code => $language_text):
			            	if($Locale->locale_code!=$language_code){
			            		$url_loc = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], '.php')+4);
			            		echo "<a href=\"".$url_loc."?locale=".$language_code."\">".$language_text."</a>";
			            	}
		            	endforeach;
	            	?>
	        	</div>
			</div><!-- /row -->

			<div class="row">
				<div class="col-lg-12 social-icons">
			        <a target="_blank" href="https://www.facebook.com/Peercoin">
			              <img src="assets/img/icons/social-fb.png" alt="Visit us on Facebook">
			        </a>
			            <a target="_blank" href="http://www.reddit.com/r/peercoin">
			              <img src="assets/img/icons/social-reddit.png" alt="Reddit">
			        </a>
			            <a target="_blank" href="https://twitter.com/PeercoinPPC">
			              <img src="assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
			        </a>
			            <a target="_blank" href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
			              <img src="assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
			        </a>
	          	</div>
          	</div><!-- /row -->

		</div><!-- /container -->
	</footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/retina.js/1.0.1/retina.min.js"></script>
    <script type="text/javascript">
        var secondText = "<?php echo $Locale->getText("second_ago"); ?>";
        var secondsText = "<?php echo $Locale->getText("seconds_ago"); ?>";
    </script>
    <script src="assets/js/ticker.js"></script>
	<script src="assets/js/peercoin.js"></script>

	<!-- Drop down menu in minting -->
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.collapse').on('shown.bs.collapse', function() {
				$(this).parent().find(".glyphicon-down").removeClass("glyphicon-down").addClass("glyphicon-up");
			}).on('hidden.bs.collapse', function() {
				$(this).parent().find(".glyphicon-up").removeClass("glyphicon-up").addClass("glyphicon-down");
			});
		});
	</script>

  </body>
</html>
