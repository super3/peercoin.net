<?php  $page_title = "Merchants"; include ('header.php'); ?>

	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<img src="assets/img/types/merchant/banner.svg" class="svg-fullwidth" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1 text-center vcenter">
			<img class="svg-full-width" src="assets/img/types/merchant/instant.svg">
		</div>
		<div class="col-sm-4 vcenter">
			<h3><?php echo $Locale->getText("merchants.instant"); ?></h3>
			<p>
				<?php echo $Locale->getText("merchants.instant_desc"); ?>.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3 vcenter">
			<h3><?php echo $Locale->getText("merchants.no_chargebacks"); ?></h3>
			<p>
				<?php echo $Locale->getText("merchants.no_chargebacks_desc"); ?>
			</p>
		</div>
		<div class="col-sm-2 text-center vcenter">
			<img class="svg-full-width" src="assets/img/types/merchant/chargebacks.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-offset-2 text-center vcenter">
			<img class="svg-full-width" src="assets/img/types/merchant/fees.svg">
		</div>
		<div class="col-sm-5 vcenter">
			<h3><?php echo $Locale->getText("merchants.no_transaction_fees"); ?></h3>
			<p>
				<?php echo $Locale->getText("merchants.no_transaction_fees_desc"); ?>
			</p>
		</div>
	</div>
	<br>
	<div class="row text-center">
		<a href="payment-integration-guide"><img class="svg-quickstart" src="assets/img/types/merchant/guide.svg"></a>
	</div>
</div>
<?php include ('footer.php'); ?>