<?php  $page_title = "Exchanges"; include ('header.php'); ?>
<div class="row">
	<div class="col-lg-5 col-md-6 col-lg-offset-1 vcenter">
		<h2><?php echo $Locale->getText("exchanges.what_are"); ?></h2>
		<p><?php echo $Locale->getText("exchanges.what_are_desc"); ?></p>
	</div><!--
	--><div class="col-lg-5 col-md-6 vcenter">
		<img src="assets/img/exchanges/exchange.svg" class="svg-fullwidth" />
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-md-6 vcenter">
		<img src="assets/img/exchanges/buy-sell-orders.svg" class="svg-fullwidth" />
	</div><!--
	--><div class="col-lg-5 col-md-6 vcenter">
		<h2><?php echo $Locale->getText("exchanges.buy_sell"); ?></h2>
		<p>
			<?php echo $Locale->getText("exchanges.buy_sell_desc"); ?>
		</p>
	</div>
</div>

<div class="row">
	<div class="col-lg-5 col-md-6 col-lg-offset-1 vcenter">
		<h2><?php echo $Locale->getText("exchanges.fees"); ?></h2>
		<p>
			<?php echo $Locale->getText("exchanges.fees_desc"); ?>
		</p>
	</div><!--
	--><div class="col-lg-6 col-md-6 vcenter">
		<img src="assets/img/exchanges/fees.svg" class="svg-fullwidth" />
	</div>
</div>

<section id="exchange-list">
	<div class="row text-center">
		<h2><?php echo $Locale->getText("exchanges.choosing"); ?></h2>
		<div class="col-lg-12">
			<div class="alert alert-info text-center">
				<p><b><?php echo $Locale->getText("exchanges.disclaimer"); ?></b></p>
			</div>
		</div>
	</div>
</section>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="videoWrapper">
		    <!-- Copy & Pasted from YouTube -->
		    <iframe width="560" height="315" src="//www.youtube.com/embed/-g6oz3one_k" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

</div>
<?php $exchange_page = true; include ('footer.php'); ?>
