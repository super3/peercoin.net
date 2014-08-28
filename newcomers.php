<?php $page_title = "Newcomers"; include ('header.php'); ?>

	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<img src="assets/img/types/newcomer/newcomer.svg" class="svg-fullwidth" />
		</div>
	</div>
	<div class="col-md-8 col-md-offset-1">
		<h1><?php echo $Locale->getText("newcomers.getting_started"); ?></h1>
	</div>
	<div class="row row-nomargin">
		<div class="col-md-4 col-md-offset-1 step">
			<span class="number">1.</span> <span class="name"> <?php echo $Locale->getText("newcomers.downlaod_wallet"); ?></span>
			<br>
			<a href="wallet"><img src="assets/img/types/newcomer/download.svg" class="svg-halfwidth" /></a>
			<p>
				<?php echo $Locale->getText("newcomers.download_wallet_desc"); ?>
			</p>
		</div>
		<div class="col-md-4 col-md-offset-1 step">
			<span class="number">2.</span> <span class="name"> <?php echo $Locale->getText("newcomers.buy_from_exchange"); ?></span>
			<br>
			<a href="exchanges"><img src="assets/img/types/newcomer/send-to-exchange.svg" class="svg-90p" /></a>
			<p>
				<?php echo $Locale->getText("newcomers.buy_from_exchange_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1 step">
			<span class="number">3.</span> <span class="name"> <?php echo $Locale->getText("newcomers.withdraw_coins"); ?></span>
			<br>
			<a href="wallet"><img src="assets/img/types/newcomer/withdraw-coins.svg" class="svg-threeq" /></a>
			<p>
				<?php echo $Locale->getText("newcomers.withdraw_coins_desc"); ?>	
			</p>
		</div>
		<div class="col-md-4 col-md-offset-1 step">
			<span class="number">4.</span> <span class="name"> <?php echo $Locale->getText("newcomers.learn_more"); ?></span>
			<br>
			<a href="wallet"><img src="assets/img/types/newcomer/learn-more.svg" class="svg-third" /></a>
			<p>
				<?php echo $Locale->getText("newcomers.learn_more_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="videoWrapper">
			    <!-- Copy & Pasted from YouTube -->
			    <iframe width="560" height="315" src="//www.youtube.com/embed/7tra0vmparI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>