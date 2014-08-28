<?php  $page_title = "Mining"; $no_container = true; include ('header.php'); ?>
	<div class="container">
	    <div class="row" style="margin-bottom: 0px;">
			<div class="col-sm-10 col-sm-offset-1">
				<img class="svg-fullwidth" src="assets/img/mining/mining-banner.svg">
			</div>
		</div>
	</div>
	<div style="background-color:#f8f8f8;">
		<br><br><br>
	    <div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1 text-center vcenter">
					<img class="svg-full-width" src="assets/img/mining/compatibility.svg">
				</div>
				<div class="col-sm-4 vcenter">
					<h3><?php echo $Locale->getText("mining.compatible_with_bitcoin"); ?></h3>
					<p>
						<?php echo $Locale->getText("mining.compatible_with_bitcoin_desc"); ?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 col-sm-offset-3 vcenter">
					<h3><?php echo $Locale->getText("mining.fair_distribution"); ?></h3>
					<p>
						<?php echo $Locale->getText("mining.fair_distribution_desc"); ?>
					</p>
				</div>
				<div class="col-sm-3 text-center vcenter">
					<img class="svg-full-width" src="assets/img/mining/fairness.svg">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1 text-center vcenter">
					<img class="svg-full-width" src="assets/img/mining/sustainable.svg">
				</div>
				<div class="col-sm-5 vcenter">
					<h3><?php echo $Locale->getText("mining.sustainable_reward"); ?></h3>
					<p>
						<?php echo $Locale->getText("mining.sustainable_reward_desc"); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="videoWrapper">
				    <!-- Copy & Pasted from YouTube -->
				    <iframe width="560" height="315" src="//www.youtube.com/embed/7tra0vmparI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row text-center">
			<a href="mining-guide"><img class="svg-quickstart" src="assets/img/misc/quick-start.svg"></a>
		</div>
	</div>

</div>
<?php include ('footer.php'); ?>
