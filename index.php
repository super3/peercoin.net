<?php 
	$index = true;
	include ('header.php');
?>

  <!-- Headerwrap -->
		<div class="row" style="max-width:100%; margin:0px;">
			<div id="header-left">
				<img src="assets/img/logos/logo_shadow_large.png" alt="peercoin" />
			</div>
			<div id="header-right">
				<div>
					<img src="assets/img/logos/peercoin_ltext.svg" alt="peercoin" />
					<br><br>
					<a href="" class="btn btn-primary"><?php echo $Locale->getText("why_peercoin_title"); ?></a>
					<a href="" class="btn btn-primary"><?php echo $Locale->getText("download_wallet"); ?></a>
				</div>
	    	</div>
		</div>
	</header>

    <!-- Call To Action -->
	<div class="cta" id="whypeercoin">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("why_peercoin_title"); ?></h2>
			<p class="col-lg-8"><?php echo $Locale->getText("why_peercoin_desc"); ?></p>
		</div><!-- /container -->
	</div><!-- /cta -->

	<!-- Services Section -->
	<div class="container sinfo container-spacer">

		<div class="services svgicons centered">
			<div class="col-lg-4">
				<img src="assets/img/icons/macbook.svg" alt="Digital Cryptocurrency">
				<h4><?php echo $Locale->getText("instant_transactions"); ?></h4>
				<p><?php echo $Locale->getText("instant_transactions_desc"); ?></p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<img src="assets/img/icons/money.svg" alt="Fast & Cheap Transactions">
				<h4><?php echo $Locale->getText("low_fees"); ?></h4>
				<p><?php echo $Locale->getText("low_fees_desc"); ?></p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<img src="assets/img/icons/clocks.svg" alt="Available 24/7">
				<h4><?php echo $Locale->getText("decentralized_currency"); ?></h4>
				<p><?php echo $Locale->getText("decentralized_currency_desc"); ?></p>
			</div><!-- col-lg-4 -->

		</div><!-- /row -->
	</div><!-- /container -->

    <!-- Call To Action -->
	<div class="cta">
		<div class="container centered marketcap">
			<div class="row">
				<div class="col-md-2 col-md-offset-3">
					<b><span id="current-price"></span></b>
					<br>
				    <span><?php echo $Locale->getText("price"); ?></span>
				</div>
				<div class="col-md-2">
					<b><span id="market-cap"></span></b>
					<br>
					<span><?php echo $Locale->getText("market_cap"); ?></span>
				</div>
				<div class="col-md-2">
					<b><span id="total-supply"></span></b>
					<br>
					<span><?php echo $Locale->getText("total_supply"); ?></span>
				</div>
			</div>
			<div class="col-md-12">
				<div class="updated">
			        <span><?php echo $Locale->getText("ticker_last_updated"); ?></span>
	    	        <span id="seconds-since-update"><?php echo $Locale->getText("ticker_last_updated_never"); ?></span>
		        </div>
			</div>
		</div><!-- /container -->
	</div><!-- /cta -->

	<div class="container centered container-spacer" style="padding-bottom:30px;">
		<div class="svgicons">
			<div class="col-lg-3">
				<div><img src="assets/img/icons/card.svg" alt="Individual" /></div>
				<br>
				<h2><?php echo $Locale->getText("individual"); ?></h2>
				<?php echo $Locale->getText("individual_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-lg-3">
				<div><img src="assets/img/icons/basket.svg" alt="Merchant" /></div>
				<br>
				<h2><?php echo $Locale->getText("merchant"); ?></h2>
				<?php echo $Locale->getText("merchant_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-lg-3">
				<div style="padding-top:10px;"><img src="assets/img/icons/pc.svg" alt="Developer" /></div>
				<br>
				<h2><?php echo $Locale->getText("developer"); ?></h2>
				<?php echo $Locale->getText("developer_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-lg-3">
				<div style="padding-top:10px;"><img src="assets/img/icons/dynamite.svg" alt="Miner" /></div>
				<br>
				<h2><?php echo $Locale->getText("miner"); ?></h2>
				<?php echo $Locale->getText("miner_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
		</div>
	</div>

    <!-- Newsletter -->
	<div class="newsletter">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("newsletter"); ?></h2>
			<form>
				<table class="col-lg-8">
					<tr>
						<td>
							<input type="text" name="email" placeholder="Enter your e-mail address..." />
						</td>
						<td>
							<input type="submit" value="Sign me up!" />
						</td>
					</tr>
				</table>
			</form>
		</div><!-- /container -->
	</div><!-- /newesletter -->

	</div><!-- /G Wrap -->
	<?php include ('footer.php'); ?>
