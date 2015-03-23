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
			<a href="#" class="exchange-button active" data-toggle="tooltip" data-placement="top" title="247exchange" data-exchange="247exchange"><img src="assets/img/exchanges/logos/247exchange.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="AllCoin" data-exchange="allcoin"><img src="assets/img/exchanges/logos/AllCoin.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Anycoin Direct" data-exchange="anycoin_direct"><img src="assets/img/exchanges/logos/Anycoin_Direct.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Banx.io" data-exchange="banx"><img src="assets/img/exchanges/logos/Banx.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bitspark" data-exchange="bitspark"><img src="assets/img/exchanges/logos/Bitspark.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bittylicious" data-exchange="bittylicious"><img src="assets/img/exchanges/logos/bittylicious.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bleutrade" data-exchange="bleutrade"><img src="assets/img/exchanges/logos/Bleutrade.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC38" data-exchange="btc38"><img src="assets/img/exchanges/logos/btc38.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC-e" data-exchange="btce"><img src="assets/img/exchanges/logos/btce.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BX Thailand" data-exchange="bx_thailand"><img src="assets/img/exchanges/logos/BX_Thailand.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="CCEDK" data-exchange="ccedk"><img src="assets/img/exchanges/logos/CCEDK.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinbroker" data-exchange="coinbroker"><img src="assets/img/exchanges/logos/Coinbroker.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinnector" data-exchange="coinnector"><img src="assets/img/exchanges/logos/Coinnector.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coinomat" data-exchange="coinomat"><img src="assets/img/exchanges/logos/coinomat.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Coins-E" data-exchange="coins-e"><img src="assets/img/exchanges/logos/Coins-E.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Comkort" data-exchange="comkort"><img src="assets/img/exchanges/logos/Comkort.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptonit" data-exchange="cryptonit"><img src="assets/img/exchanges/logos/Cryptonit.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptsy" data-exchange="cryptsy"><img src="assets/img/exchanges/logos/cryptsy.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="ExchangeMyCoins" data-exchange="exchangemycoins"><img src="assets/img/exchanges/logos/ExchangeMyCoins.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="HolyTransaction" data-exchange="holytransaction"><img src="assets/img/exchanges/logos/HolyTransaction.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Jubi" data-exchange="jubi"><img src="assets/img/exchanges/logos/Jubi.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="LiteBit" data-exchange="litebit"><img src="assets/img/exchanges/logos/LiteBit.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Melotic" data-exchange="melotic"><img src="assets/img/exchanges/logos/Melotic.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="NIX-E" data-exchange="nix-e"><img src="assets/img/exchanges/logos/NIX-E.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Poloniex" data-exchange="poloniex"><img src="assets/img/exchanges/logos/Poloniex.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="PS Coin" data-exchange="ps_coin"><img src="assets/img/exchanges/logos/PS_Coin.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="ShapeShift" data-exchange="shapeshift"><img src="assets/img/exchanges/logos/ShapeShift.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="The Rock" data-exchange="therock"><img src="assets/img/exchanges/logos/therock.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Tuminium" data-exchange="tuminium"><img src="assets/img/exchanges/logos/Tuminium.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Vircurex" data-exchange="vircurex"><img src="assets/img/exchanges/logos/Vircurex.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="YoBit" data-exchange="yobit"><img src="assets/img/exchanges/logos/YoBit.png"></a>
		</div>
		<div class="col-lg-12">

			<div id="exchange-247exchange" class="exchange-info active">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/247exchange.png"> 247exchange</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Belize</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>OTC exchange between cryptocurrencies and fiat</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.247exchange.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-allcoin" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/AllCoin.png"> AllCoin</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>British Virgin Islands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.allcoin.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>OTC exchange between cryptocurrencies and fiat</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://anycoindirect.eu/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-banx" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Banx.png"> Banx.io</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Panama</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.banx.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
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
							<td>OTC exchange between cryptocurrencies and fiat</td>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://btc-e.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinbroker.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-coinnector" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Coinnector.png"> Coinnector</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Belize</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Instant OTC exchange between cryptocurrencies</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinnector.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Instant OTC exchange between cryptocurrencies</td>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://cryptonit.net/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.cryptsy.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-exchangemycoins" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/ExchangeMyCoins.png"> ExchangeMyCoins</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Denmark</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Instant OTC exchange between cryptocurrencies</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.exchangemycoins.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Instant OTC exchange between cryptocurrencies</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://holytransaction.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-jubi" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Jubi.png"> Jubi</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>China</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.jubi.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>OTC exchange between cryptocurrencies and fiat</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.litebit.eu/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-melotic" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Melotic.png"> Melotic</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Hong Kong</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.melotic.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://poloniex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-ps_coin" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/PS_Coin.png"> PS Coin</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>United States</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://pscoin.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Instant OTC exchange between cryptocurrencies</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://shapeshift.io/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.therocktrading.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-tuminium" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/Tuminium.png"> Tuminium</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>Mexico</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://tuminium.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
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
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://vircurex.com/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
			<div id="exchange-yobit" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/YoBit.png" height="50" width="50"> YoBit</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.location"); ?>:</b></td>
							<td>-</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b><?php echo $Locale->getText("exchanges.notes"); ?>:</b></td>
							<td>Market trading exchange</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://yobit.net/"><?php echo $Locale->getText("exchanges.visit"); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<?php $exchange_page = true; include ('footer.php'); ?>
