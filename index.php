<?php 
	$index = true;
	include ('header.php');
?>

  <!-- Headerwrap -->
		<div class="container" id="header-banner">
			<div class="col-sm-4 col-sm-offset-1 text-right">
				<img src="assets/img/logos/logo.png" class="plogo" alt="peercoin" />
			</div>
			<div class="col-sm-6 text-left" style="padding-left: 30px;">
				<div>
					<img src="assets/img/logos/peercoin_ltext.png" class="pltext" alt="peercoin" />
					<br><br>
					<a href="investors" class="btn btn-primary"><?php echo $Locale->getText("index.why_peercoin"); ?></a>
					<a href="wallet" class="btn btn-primary"><?php echo $Locale->getText("index.download_wallet"); ?></a>
				</div>
	    	</div>
		</div>
		<div class="container centered marketcap">
				<div class="col-sm-2 col-sm-offset-3">
					<b><span id="current-price"></span></b>
					<br>
				    <?php echo $Locale->getText("index.price"); ?>
				</div>
				<div class="col-sm-2">
					<b><span id="market-cap"></span></b>
					<br>
					<?php echo $Locale->getText("index.market_cap"); ?>
				</div>
				<div class="col-sm-2">
					<b><span id="total-supply"></span></b>
					<br>
					<?php echo $Locale->getText("index.total_supply"); ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="updated">
			        <span><?php echo $Locale->getText("index.last_updated"); ?></span>
	    	        <span id="seconds-since-update"><?php echo $Locale->getText("index.last_updated_never"); ?></span>
		        </div>
			</div>
		</div><!-- /container -->
	</header>

    <!-- Call To Action -->
	<div class="cta" id="whypeercoin">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("index.why_peercoin_q"); ?></h2>
			<p class="col-lg-8"><?php echo $Locale->getText("index.why_peercoin_desc"); ?></p>
		</div><!-- /container -->
	</div><!-- /cta -->

    <div class="container centered container-spacer" style="padding-bottom:30px;">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-6 text-left">
				<div class="leafList">
					<div class="item">
						<img src="assets/img/types/investor/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name"><?php echo $Locale->getText("index.built_to_last"); ?></div>
							<div class="description"><?php echo $Locale->getText("index.built_to_last_desc"); ?></div>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/types/investor/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name"><?php echo $Locale->getText("index.fair_distribution"); ?></div>
							<div class="description"><?php echo $Locale->getText("index.fair_distribution_desc"); ?></div>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/types/investor/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name"><?php echo $Locale->getText("index.transparent_protocol"); ?></div>
							<div class="description"><?php echo $Locale->getText("index.transparent_protocol_desc"); ?></div>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/types/investor/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name"><?php echo $Locale->getText("index.energy_efficient"); ?></div>
							<div class="description"><?php echo $Locale->getText("index.energy_efficient_desc"); ?></div>
						</div>
					</div>
					<a href="investors" style="margin-left:60px;" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.learn_more"); ?></a>
				</div>
				<br><br>
			</div>
			<div class="col-lg-6 col-md-7 col-sm-6">
				<div class="videoWrapper">
				    <!-- Copy & Pasted from YouTube -->
				    <iframe width="560" height="315" src="//www.youtube.com/embed/7tra0vmparI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			
		</div>
	</div>


	<div class="container centered container-spacer" style="padding-bottom:30px;">
		<div class="svgicons">
			<div class="col-lg-2 col-lg-offset-1 col-md-6">
				<!--<div><img src="assets/img/icons/card.svg" alt="Individual" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("index.newcomers"); ?></h3>
				<?php echo $Locale->getText("index.newcomers_desc"); ?>
				<br><br>
				<a href="newcomers" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.get_started"); ?></a>
			</div>
			<div class="col-lg-2 col-md-6">
				<!--<div><img src="assets/img/icons/basket.svg" alt="Merchant" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("index.investors"); ?></h3>
				<?php echo $Locale->getText("index.investors_desc"); ?>
				<br><br>
				<a href="investors" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.get_started"); ?></a>
			</div>
			<div class="col-lg-2 col-md-6">
				<!--<div><img src="assets/img/icons/basket.svg" alt="Merchant" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("index.merchants"); ?></h3>
				<?php echo $Locale->getText("index.merchants_desc"); ?>
				<br><br>
				<a href="merchants" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.get_started"); ?></a>
			</div>
			<div class="col-lg-2 col-md-6">
				<!--<div style="padding-top:10px;"><img src="assets/img/icons/dynamite.svg" alt="Miner" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("index.miners"); ?></h3>
				<?php echo $Locale->getText("index.miners_desc"); ?>
				<br><br>
				<a href="mining" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.get_started"); ?></a>
			</div>
			<div class="col-lg-2 col-lg-offset-0 col-md-6 col-md-offset-3">
				<!--<div style="padding-top:10px;"><img src="assets/img/icons/pc.svg" alt="Developer" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("index.developers"); ?></h3>
				<?php echo $Locale->getText("index.developers_desc"); ?>
				<br><br>
				<a href="developers" class="btn btn-primary btn-lg"><?php echo $Locale->getText("index.get_started"); ?></a>
			</div>
		</div>
	</div>

    <!-- Newsletter -->
	<div class="newsletter">
		<div class="container centered">
			<h2 class="col-md-4"><?php echo $Locale->getText("index.newsletter"); ?></h2>
			<form>
				<div class="col-md-8">
					<div class="col-sm-8">
						<input type="text" name="email" placeholder="<?php echo $Locale->getText("index.newsletter_placeholder"); ?>" />
					</div>
					<div class="col-sm-4">
						<input type="submit" value="<?php echo $Locale->getText("index.newsletter_submit"); ?>" />
					</div>
				</div>
			</form>
		</div><!-- /container -->
	</div><!-- /newesletter -->

	</div><!-- /G Wrap -->
	<?php include ('footer.php'); ?>
