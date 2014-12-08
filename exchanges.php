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
	<div class="row">
		<div class="col-lg-12 text-center">
			<a href="#" class="exchange-button active" data-toggle="tooltip" data-placement="top" title="AllCoin" data-exchange="allcoin"><img src="assets/img/exchanges/logos/AllCoin.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="AllCrypt" data-exchange="allcrypt"><img src="assets/img/exchanges/logos/AllCrypt.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="ANXPRO" data-exchange="anxpro"><img src="assets/img/exchanges/logos/ANXPRO.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Anycoin Direct" data-exchange="anycoin_direct"><img src="assets/img/exchanges/logos/Anycoin_Direct.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Atomic Trade" data-exchange="atomic_trade"><img src="assets/img/exchanges/logos/Atomic_Trade.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bitspark" data-exchange="bitspark"><img src="assets/img/exchanges/logos/Bitspark.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bittylicious" data-exchange="bittylicious"><img src="assets/img/exchanges/logos/bittylicious.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bleutrade" data-exchange="bleutrade"><img src="assets/img/exchanges/logos/Bleutrade.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC38" data-exchange="btc38"><img src="assets/img/exchanges/logos/btc38.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC-e" data-exchange="btce"><img src="assets/img/exchanges/logos/btce.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTER" data-exchange="bter"><img src="assets/img/exchanges/logos/BTER.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BX Thailand" data-exchange="bx_thailand"><img src="assets/img/exchanges/logos/BX_Thailand.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="CCEDK" data-exchange="ccedk"><img src="assets/img/exchanges/logos/CCEDK.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinbroker" data-exchange="coinbroker"><img src="assets/img/exchanges/logos/Coinbroker.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="CoinMkt" data-exchange="coinmkt"><img src="assets/img/exchanges/logos/CoinMkt.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinomat" data-exchange="coinomat"><img src="assets/img/exchanges/logos/coinomat.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coins-E" data-exchange="coins-e"><img src="assets/img/exchanges/logos/Coins-E.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Comkort" data-exchange="comkort"><img src="assets/img/exchanges/logos/Comkort.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptonit" data-exchange="cryptonit"><img src="assets/img/exchanges/logos/Cryptonit.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Crypto-Trade" data-exchange="crypto-trade"><img src="assets/img/exchanges/logos/Crypto-Trade.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptsy" data-exchange="cryptsy"><img src="assets/img/exchanges/logos/cryptsy.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Excoin" data-exchange="excoin"><img src="assets/img/exchanges/logos/Excoin.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="HolyTransaction" data-exchange="holytransaction"><img src="assets/img/exchanges/logos/HolyTransaction.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="LiteBit" data-exchange="litebit"><img src="assets/img/exchanges/logos/LiteBit.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="NIX-E" data-exchange="nix-e"><img src="assets/img/exchanges/logos/NIX-E.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Poloniex" data-exchange="poloniex"><img src="assets/img/exchanges/logos/Poloniex.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="ShapeShift" data-exchange="shapeshift"><img src="assets/img/exchanges/logos/ShapeShift.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="SWISSCEX" data-exchange="swisscex"><img src="assets/img/exchanges/logos/SWISSCEX.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="The Rock" data-exchange="therock"><img src="assets/img/exchanges/logos/therock.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Vault of Satoshi" data-exchange="vault-of-satoshi"><img src="assets/img/exchanges/logos/vault-of-satoshi.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Vircurex" data-exchange="vircurex"><img src="assets/img/exchanges/logos/Vircurex.png"></a>
		</div>
		<div class="col-lg-12">

			<div id="exchange-allcoin" class="exchange-info active">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/AllCoin.png"> AllCoin</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>British Virgin Islands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.allcoin.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-allcrypt" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/AllCrypt.png"> AllCrypt</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>-</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.allcrypt.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-anxpro" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/ANXPRO.png"> ANXPRO</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Hong Kong</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://anxpro.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-anycoin_direct" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Anycoin_Direct.png"> Anycoin Direct</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>The Netherlands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://anycoindirect.eu/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-atomic_trade" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Atomic_Trade.png"> Atomic Trade</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Canada</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.atomic-trade.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-bitspark" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Bitspark.png"> Bitspark</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Hong Kong</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.bitspark.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
			<div id="exchange-bleutrade" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Bleutrade.png"> Bleutrade</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Brazil</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bleutrade.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.btc38.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-btce" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/btce.png"> BTC-e</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Bulgaria</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://btc-e.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-bter" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/BTER.png"> BTER</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>British Virgin Islands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bter.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-bx_thailand" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/BX_Thailand.png"> BX Thailand</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Thailand</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bx.in.th/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-ccedk" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/CCEDK.png"> CCEDK</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Denmark</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.ccedk.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-coinbroker" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Coinbroker.png"> Coinbroker</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>-</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinbroker.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-coinmkt" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/CoinMkt.png"> CoinMkt</b></h3>
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
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinmkt.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
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
			<div id="exchange-coins-e" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Coins-E.png"> Coins-E</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Canada</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.coins-e.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-comkort" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Comkort.png"> Comkort</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Estonia</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://comkort.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-cryptonit" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Cryptonit.png"> Cryptonit</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>England and Wales</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://cryptonit.net/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-crypto-trade" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Crypto-Trade.png"> Crypto-Trade</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Hong Kong</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://crypto-trade.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
			<div id="exchange-excoin" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Excoin.png"> Excoin</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>-</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://exco.in/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-holytransaction" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/HolyTransaction.png"> HolyTransaction</b></h3>
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
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://holytransaction.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-litebit" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/LiteBit.png"> LiteBit</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>The Netherlands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.litebit.eu/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-nix-e" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/NIX-E.png"> NIX-E</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Russia</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.nix-e.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-poloniex" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Poloniex.png"> Poloniex</b></h3>
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
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://poloniex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-shapeshift" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/ShapeShift.png"> ShapeShift</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>-</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Buy Coins Instantly. No Account Needed.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://shapeshift.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-swisscex" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/SWISSCEX.png"> SWISSCEX</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Switzerland</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.swisscex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.therocktrading.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-vault-of-satoshi" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/vault-of-satoshi.png" height="50" width="50"> Vault of Satoshi</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Canada</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.vaultofsatoshi.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-vircurex" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Vircurex.png" height="50" width="50"> Vircurex</b></h3>
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
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://vircurex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<?php $exchange_page = true; include ('footer.php'); ?>
