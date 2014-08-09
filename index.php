<?php 
	$index = true;
	include ('header.php');
?>

  <!-- Headerwrap -->
		<div class="row" style="max-width:100%; margin:0px;">
			<div id="header-left">
				<img src="assets/img/logos/logo_shadow.png" alt="peercoin" />
			</div>
			<div id="header-right">
				<div>
					<img src="assets/img/logos/peercoin_ltext.png" alt="peercoin" />
					<br><br>
					<a href="" class="btn btn-primary"><?php echo $Locale->getText("why_peercoin_title"); ?></a>
					<a href="wallet" class="btn btn-primary"><?php echo $Locale->getText("download_wallet"); ?></a>
				</div>
	    	</div>
		</div>
		<div class="container centered marketcap">
				<div class="col-md-3 col-md-offset-2">
					<b><span id="current-price"></span></b>
					<br>
				    <span><?php echo $Locale->getText("price"); ?></span>
				</div>
				<div class="col-md-3">
					<b><span id="market-cap"></span></b>
					<br>
					<span><?php echo $Locale->getText("market_cap"); ?></span>
				</div>
				<div class="col-md-3">
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
	</header>

    <!-- Call To Action -->
	<div class="cta" id="whypeercoin">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("why_peercoin_title"); ?></h2>
			<p class="col-lg-8"><?php echo $Locale->getText("why_peercoin_desc"); ?></p>
		</div><!-- /container -->
	</div><!-- /cta -->

    <div class="container centered container-spacer" style="padding-bottom:30px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-1 text-left">
				<div class="leafList">
					<div class="item">
						<img src="assets/img/minting/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name">Built <b>to Last</b></div>
							<div class="description">Peercoin is the world's first Proof-of-Stake coin.</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/minting/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name"><b>Transparent</b> protocol</div>
							<div class="description">The network is fully open source</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/img/minting/efficiency.svg" alt="bullet">
						<div class="text">
							<div class="name">Energy<b> Efficient</b></div>
							<div class="description">Mint Peercoins on any device.</div>
						</div>
					</div>
				</div>
				<a href="" style="margin-left:60px;" class="btn btn-primary btn-lg"><?php echo $Locale->getText("learn_more"); ?></a>
				<br><br>
			</div>
			<div class="col-md-6">
				<div class="videoWrapper">
				    <!-- Copy & Pasted from YouTube -->
				    <iframe width="560" height="315" src="//www.youtube.com/embed/7tra0vmparI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			
		</div>
	</div>


	<div class="container centered container-spacer" style="padding-bottom:30px;">
		<div class="svgicons">
			<div class="col-md-2 col-md-offset-1">
				<!--<div><img src="assets/img/icons/card.svg" alt="Individual" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("consumer"); ?></h3>
				<?php echo $Locale->getText("consumer_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-md-2">
				<!--<div><img src="assets/img/icons/basket.svg" alt="Merchant" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("investor"); ?></h3>
				<?php echo $Locale->getText("investor_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-md-2">
				<!--<div><img src="assets/img/icons/basket.svg" alt="Merchant" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("merchant"); ?></h3>
				<?php echo $Locale->getText("merchant_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-md-2">
				<!--<div style="padding-top:10px;"><img src="assets/img/icons/dynamite.svg" alt="Miner" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("miner"); ?></h3>
				<?php echo $Locale->getText("miner_desc"); ?>
				<br><br>
				<a href="" class="btn btn-primary btn-lg"><?php echo $Locale->getText("get_started"); ?></a>
			</div>
			<div class="col-md-2">
				<!--<div style="padding-top:10px;"><img src="assets/img/icons/pc.svg" alt="Developer" /></div>
				<br>-->
				<h3><?php echo $Locale->getText("developer"); ?></h3>
				<?php echo $Locale->getText("developer_desc"); ?>
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
