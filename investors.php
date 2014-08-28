<?php  $page_title = "Investors"; include ('header.php'); ?>

	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<img src="assets/img/types/investor/banner.svg" class="svg-fullwidth" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-offset-2 text-center vcenter">
			<img class="svg-full-width" src="assets/img/types/investor/network.svg">
		</div>
		<div class="col-sm-4 vcenter">
			<h3><?php echo $Locale->getText("investors.established_network"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.established_network_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3 vcenter">
			<h3><?php echo $Locale->getText("investors.limited_supply"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.limited_supply_desc"); ?>
			</p>
		</div>
		<div class="col-sm-2 text-center vcenter">
			<img class="svg-full-width" src="assets/img/types/investor/limited.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-offset-2 text-center vcenter">
			<img class="svg-threeq" src="assets/img/types/investor/efficiency.svg">
		</div>
		<div class="col-sm-5 vcenter">
			<h3><?php echo $Locale->getText("investors.efficient_security"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.efficient_security_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3 vcenter">
			<h3><?php echo $Locale->getText("investors.guaranteed_returns"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.guaranteed_returns_desc"); ?>
			</p>
		</div>
		<div class="col-sm-2 text-center vcenter">
			<img class="svg-full-width" src="assets/img/minting/dividend.svg">
		</div>
	</div>
	<br><br>
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