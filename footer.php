<!-- Grey Wrap / Site Stats -->
	<!-- FOOTER -->
	<footer class="footer" style="padding: 0px 0 10px;">
		<div class="container">
<!--
			<div class="row">
				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("footer.links"); ?></h2>
					<ul>
						<li><a href="https://github.com/ppcoin/ppcoin">Source Code (Github)</a></li>
						<li><a href="https://github.com/ppcoin/ppcoin/wiki">Wiki</a></li>
						<li><a href="http://www.peercointalk.org/">Forum</a></li>
						<li><a href="http://peercoinmyths.com/">Myths</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("footer.tools"); ?></h2>
					<ul>
						<li><a href="http://wallet.peercointalk.org/">Wallet Generator (Beta!)</a></li>
						<li><a href="http://ppc.blockr.io/">Blockr.io - Block Explorer</a></li>
						<li><a href="http://bkchain.org/ppc">bkchain.org - Block Explorer</a></li>
						<li><a href="http://bitinfocharts.com/comparison/hashrate-ppc.html">Network Statistics</a></li>
						<li><a href="http://www.coinwarz.com/calculators/peercoin-mining-calculator/">Mining Calculator</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("footer.exchanges"); ?></h2>
					<ul>
						<li><a href="http://www.btc38.com/trade.html?btc38_trade_coin_name=ppc">BTC38</a></li>
						<li><a href="https://btc-e.com/exchange/ppc_btc/">BTC-E</a></li>
						<li><a href="https://coinomat.com/#BTC/PPC">Coinomat</a></li>
						<li><a href="https://www.cryptsy.com/markets/view/28">Cryptsy</a></li>
						<li><a href="https://www.vaultofsatoshi.com/">Vault of Satoshi</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("footer.mining"); ?></h2>
					<ul>
						<li><a href="https://peercoin.blockmines.com/">Blockmines</a></li>
						<li><a href="https://peercoin.ecoining.com/">Ecoining Pool</a></li>
						<li><a href="https://www.coinotron.com/">Coinotron</a></li>
						<li><a href="https://ppcoin.d7.lt/">D7 Pool</a></li>
					</ul>
				</div>
			</div><!-- /row -->

			<div class="row">
				<div class="col-lg-12 social-icons" style="margin:1em 0">
			        <a target="_blank" href="https://www.facebook.com/Peercoin">
			              <img src="assets/img/icons/social-fb.png" alt="Visit us on Facebook">
			        </a>
			            <a target="_blank" href="http://www.reddit.com/r/peercoin">
			              <img src="assets/img/icons/social-reddit.png" alt="Reddit">
			        </a>
			            <a target="_blank" href="https://twitter.com/PeercoinPPC">
			              <img src="assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
			        </a>
			            <a target="_blank" href="https://www.youtube.com/user/peercoin">
			              <img src="assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
			        </a>
			            <a target="_blank" href="https://github.com/super3/Peercoin.net">
			              <img src="assets/img/icons/social-github.png" alt="Source code on GitHub">
			        </a>
			            <a target="_blank" href="https://www.transifex.com/projects/p/website-ppc/">
			              <img src="assets/img/icons/social-transifex.png" alt="Translate website on Transifex">
			        </a>
	          	</div>
          	</div><!-- /row -->

			<div class="row">
				<div id="footer-language-bar" class="col-lg-12">
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

		</div><!-- /container -->
	</footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var secondText = "<?php echo $Locale->getText("second_ago"); ?>";
        var secondsText = "<?php echo $Locale->getText("seconds_ago"); ?>";
    </script>
    <script src="assets/js/ticker.js"></script>
	<script src="assets/js/peercoin.js"></script>
	<script src="assets/js/grids.min.js"></script>

	<!-- Drop down menu in minting -->
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.collapse').on('shown.bs.collapse', function() {
				$(this).parent().find(".glyphicon-down").removeClass("glyphicon-down").addClass("glyphicon-up");
			}).on('hidden.bs.collapse', function() {
				$(this).parent().find(".glyphicon-up").removeClass("glyphicon-up").addClass("glyphicon-down");
			});
		});

		$(window).load(function() {
			$('.wallet-entry').responsiveEqualHeightGrid();
			setTimeout(function() { $('.wallet-entry > div').addClass('wallet-entry-bottom'); }, 500);
		});

		$(window).resize(function() {
			$('.wallet-entry > div').removeClass('wallet-entry-bottom');
			$('.wallet-entry').responsiveEqualHeightGrid();
			setTimeout(function() { $('.wallet-entry > div').addClass('wallet-entry-bottom'); }, 500);
		});
	</script>

	<!-- Only for the exchange page -->
	<?php if(isset($exchange_page)) { ?>
	<script>
		$(document).ready(function() {
			$(".exchange-button").tooltip();
			$(".exchange-button").click(function(e) {
				e.preventDefault();
				$(".exchange-button").removeClass("active");
				$(this).addClass("active");
				$(".exchange-info").removeClass("active");
				$("#exchange-"+$(this).data("exchange")).addClass("active");
			});
		});
	</script>
	<?php } ?>

  </body>
</html>
