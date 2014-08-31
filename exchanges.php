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
		<p>
			<?php echo $Locale->getText("exchanges.buy_sell_desc2"); ?>
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
	<div class="row">
		<div class="col-lg-12 text-center">
			<a href="#" class="exchange-button active" data-toggle="tooltip" data-placement="top" title="Vault of Satoshi" data-exchange="vault-of-satoshi"><img src="assets/img/exchanges/logos/vault-of-satoshi.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTCe" data-exchange="btce"><img src="assets/img/exchanges/logos/btce.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinomat" data-exchange="coinomat"><img src="assets/img/exchanges/logos/coinomat.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptsy" data-exchange="cryptsy"><img src="assets/img/exchanges/logos/cryptsy.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BitTrex" data-exchange="bittrex"><img src="assets/img/exchanges/logos/bittrex.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="The Rock" data-exchange="therock"><img src="assets/img/exchanges/logos/therock.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bittylicious" data-exchange="bittylicious"><img src="assets/img/exchanges/logos/bittylicious.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC38" data-exchange="btc38"><img src="assets/img/exchanges/logos/btc38.png"></a>
		</div>
		<div class="col-lg-12">
			<div id="exchange-coinomat" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/coinomat.png"> Coinomat</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>British Virgin Islands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Allows instant trades at market price. No registration is required.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinomat.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-vault-of-satoshi" class="exchange-info active">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/vault-of-satoshi.png" height="50" width="50"> Vault of Satoshi</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Canada</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Well-designed, with a good reputation.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.vaultofsatoshi.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-btce" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/btce.png"> BTCe</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Bulgaria</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>
								High Peercoin volume.
								<br>
								Warning: Withdrawal for new users on this exchange is available only after 3 days.
							</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://btc-e.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-cryptsy" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/cryptsy.png"> Cryptsy</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>United States</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.cryptsy.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-bittrex" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/bittrex.png"> BitTrex</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>United States</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bittrex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-therock" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/therock.png"> The Rock</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Malta</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>On the scene for more than 7 years.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.therocktrading.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-bittylicious" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/bittylicious.png"> Bittylicious</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>England</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bittylicious.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-btc38" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/btc38.png"> BTC38</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>China</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.btc38.com/trade.html?btc38_trade_coin_name=ppc"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<?php $exchange_page = true; include ('footer.php'); ?>
