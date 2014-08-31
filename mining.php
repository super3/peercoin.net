<?php  $page_title = "Mining"; $no_container = true; include ('header.php'); ?>
	<div class="container">
	    <div class="row" style="margin-bottom: 0px;">
			<div class="col-md-10 col-md-offset-1">
				<img class="svg-fullwidth" src="assets/img/mining/mining-banner.svg">
			</div>
		</div>
	</div>
	<div style="background-color:#f8f8f8;">
		<br><br><br>
	    <div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-1 col-sm-4 text-center vcenter svg-container">
					<img class="svg-fullwidth" src="assets/img/mining/compatibility.svg">
				</div><!--
				--><div class="col-md-4 col-sm-7 vcenter">
					<h3><?php echo $Locale->getText("mining.compatible_with_bitcoin"); ?></h3>
					<p>
						<?php echo $Locale->getText("mining.compatible_with_bitcoin_desc"); ?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-1 vcenter">
					<h3><?php echo $Locale->getText("mining.fair_distribution"); ?></h3>
					<p>
						<?php echo $Locale->getText("mining.fair_distribution_desc"); ?>
					</p>
				</div><!--
				--><div class="col-md-3 col-sm-3 text-center vcenter svg-container">
					<img class="svg-fullwidth" src="assets/img/mining/fairness.svg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-1 col-sm-4 text-center vcenter svg-container">
					<img class="svg-fullwidth" src="assets/img/mining/sustainable.svg">
				</div><!--
				--><div class="col-md-4 col-sm-7 vcenter">
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
