<?php  $page_title = "Investors"; include ('header.php'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img src="assets/img/types/investor/banner.svg" class="svg-fullwidth" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2 col-sm-4 text-center vcenter svg-container">
			<img class="svg-fullwidth" src="assets/img/types/investor/network.svg">
		</div><!--
		--><div class="col-md-4 col-sm-6 vcenter text-left">
			<h3><?php echo $Locale->getText("investors.established_network"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.established_network_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-2 vcenter text-left">
			<h3><?php echo $Locale->getText("investors.limited_supply"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.limited_supply_desc"); ?>
			</p>
		</div><!--
		--><div class="col-md-2 col-sm-4 text-center vcenter svg-container">
			<img class="svg-fullwidth" src="assets/img/types/investor/limited.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2 col-sm-4 text-center vcenter svg-container">
			<img class="svg-threeq" src="assets/img/types/investor/efficiency.svg">
		</div><!--
		--><div class="col-md-4 col-sm-6 vcenter text-left">
			<h3><?php echo $Locale->getText("investors.efficient_security"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.efficient_security_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-2 vcenter text-left">
			<h3><?php echo $Locale->getText("investors.guaranteed_returns"); ?></h3>
			<p>
				<?php echo $Locale->getText("investors.guaranteed_returns_desc"); ?>
			</p>
		</div><!--
		--><div class="col-md-2 col-sm-4 text-center vcenter svg-container">
			<img class="svg-fullwidth" src="assets/img/minting/dividend.svg">
		</div>
	</div>
	<br><br>
</div>
<?php include ('footer.php'); ?>
