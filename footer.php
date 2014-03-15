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
						<li><a href="http://ppc.blockr.io/">Block Explorer</a></li>
						<li><a href="http://bitinfocharts.com/comparison/hashrate-ppc.html">Network Statistics</a></li>
						<li><a href="http://www.coinwarz.com/calculators/peercoin-mining-calculator/">Mining Calculator</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2><?php echo $Locale->getText("exchanges"); ?></h2>
					<ul>
						
						<li><a href="https://www.cryptsy.com/markets/view/28">Cryptsy</a></li>
						<li><a href="http://www.btc38.com/trade.html?btc38_trade_coin_name=ppc">BTC38</a></li>
						<li><a href="https://www.vaultofsatoshi.com/">Vault of Satoshi</a></li>
						<li><a href="https://btc-e.com/exchange/ppc_btc/">BTC-E</a></li>
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
			            		echo "<a href=\"".$_SERVER['PHP_SELF']."?locale=".$language_code."\">".$language_text."</a>";
			            	}
		            	endforeach;
	            	?>
	        	</div>
			</div>

		</div><!-- /container -->
	</footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
    <script type="text/javascript">
        var secondText = "<?php echo $Locale->getText("second_ago"); ?>";
        var secondsText = "<?php echo $Locale->getText("seconds_ago"); ?>";
    </script>
    <script src="assets/js/ticker.js"></script>
	<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/js/jquery.themepunch.plugins.min.js"></script>
	<script src="assets/js/peercoin.js"></script>
	<script>
	$(document).ready(function() {
	//Slideshow
	$('.banner').revolution({
	delay:9000,
	startwidth:1040,
	startheight:463,
	onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

	thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
	thumbHeight:50,
	thumbAmount:3,

	hideThumbs:0,
	navigationType:"bullet",				// bullet, thumb, none
	navigationArrows:"none",				// nexttobullets, solo (old name verticalcentered), none

	navigationStyle:"round-old",			// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


	navigationHAlign:"center",				// Vertical Align top,center,bottom
	navigationVAlign:"bottom",				// Horizontal Align left,center,right
	navigationHOffset:-419,
	navigationVOffset:72,

	touchenabled:"on",						// Enable Swipe Function : on/off

	stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
	stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

	hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
	hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
	hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


	fullWidth:"on",

	shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
	})

	});
	</script>

<!-- Drop down menu in minting -->
<script type='text/javascript'>
$(document).ready(function() {
$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-down").removeClass("glyphicon-down").addClass("glyphicon-up");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-up").removeClass("glyphicon-up").addClass("glyphicon-down");
});
});
</script>



  </body>
</html>
