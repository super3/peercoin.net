<?php include ('header.php'); ?>
<div class="row">
	<div class="col-md-6 vcenter">
		<img src="assets/img/exchanges/exchange.svg" />
	</div><!--
	--><div class="col-md-5 col-md-offset-1 vcenter">
		<h2>What are exchanges?</h2>
		<p><b>Exchanges</b> allow their users to exchange (hence the name) one currency for another. 
		Using them you can transfer your government-backed currency (such as USD or EUR) from your bank 
		account to buy Peercoin or sell Peercoin back to that currency.</p>
	</div>
</div>

<div class="row">
	<div class="col-md-5 col-md-offset-1 vcenter">
		<h2>How do they work?</h2>
		<p>
			To exchange one currency for another, first you are required to <b>deposit</b> the currency you currently own to an exchange. 
			As soon as the exchange recieves your money (or it passes a set number of confirmations in the case of cryptocurrency), 
			the exchange should register the amount in their system and you should be able to start trading between currencies. 
			At this state your money is just a number in the exchange's system. When you are done trading you can receive real 
			currency by <b>withdraw</b>ing it from the exchange.
		</p>
	</div><!--
	--><div class="col-md-6 vcenter">
		<img src="assets/img/exchanges/balance.svg" />
	</div>
</div>

<div class="row">
	<div class="col-md-6 vcenter">
		<img src="assets/img/exchanges/buy-sell-orders.svg" />
	</div><!--
	--><div class="col-md-5 vcenter">
		<h2>Buy/Sell orders</h2>
		<p>
			The actual exchange process is done by creating <b>Buy</b> and <b>Sell</b> orders. In a Peercoin exchange, by creating a <b>Buy</b> order 
			you are actually requesting to buy a certain amount of Peercoins for a lower price. And by creating a <b>Sell</b> order you are requesting 
			to sell Peercoins for a higher price. When different orders overlap in prices an agreement has been made and the trade happens automatically. 
			Accounts of both parties automatically get credited with the coins they traded.
		</p>
		<p>
			You can also choose to Buy/Sell at a <b>Market Price</b> which will do the trade immediately at the best price currently available on the exchange.
		</p>
	</div>
</div>

<div class="row">
	<div class="col-md-5 col-md-offset-1 vcenter">
		<h2>Fees</h2>
		<p>
			When a trade happens a small percentage is taken by the exchange for facilitating the transaction. This is known as a <b>Trading Fee</b>.
		</p>
		<p>
			Some exchanges charge so called <b>Withdrawal Fees</b> each time you withdraw currency. Sometimes these are caused by the actual 
			costs of the transactions (these are pretty large in traditional banking) and sometimes it is just a way for the exchange to earn 
			more money.
		</p>
	</div><!--
	--><div class="col-md-6 vcenter">
		<img src="assets/img/exchanges/fees.svg" />
	</div>
</div>

<section id="exchange-list">
	<div class="row text-center">
		<h2>Choosing an exchange</h2>
		<div class="col-md-12">
			<div class="alert alert-info text-center">
				<p><b>This list contained only trusted exchanges at the time when it was written. It is impossible to keep it fully updated at all times.
				You should do your own research before using any of these while you have to trust them with your personal information and money.</b></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="#" class="exchange-button active" data-toggle="tooltip" data-placement="top" title="Coinomat" data-exchange="coinomat"><img src="assets/img/exchanges/logos/coinomat.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Vault of Satoshi" data-exchange="vault-of-satoshi"><img src="assets/img/exchanges/logos/vault-of-satoshi.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTCe" data-exchange="btce"><img src="assets/img/exchanges/logos/btce.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Cryptsy" data-exchange="cryptsy"><img src="assets/img/exchanges/logos/cryptsy.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BitTrex" data-exchange="bittrex"><img src="assets/img/exchanges/logos/bittrex.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="The Rock" data-exchange="therock"><img src="assets/img/exchanges/logos/therock.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="Bittylicious" data-exchange="bittylicious"><img src="assets/img/exchanges/logos/bittylicious.png"></a>
			<a href="#" class="exchange-button" data-toggle="tooltip" data-placement="top" title="BTC38" data-exchange="btc38"><img src="assets/img/exchanges/logos/btc38.png"></a>
		</div>
		<div class="col-md-12">
			<div id="exchange-coinomat" class="exchange-info active">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/coinomat.png"> Coinomat</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>British Virgin Islands</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>The exchange allows you to trade instantly in market price. No registration is required, making it simple to use.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://coinomat.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-vault-of-satoshi" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/vault-of-satoshi.png" height="50" width="50"> Vault of Satoshi</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>Canada</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>Well designed and quality exchange.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.vaultofsatoshi.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-btce" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/btce.png"> BTCe</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>Bulgaria</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>
								Highest volume PPC exchange.
								<br>
								Warning: Withdrawal for new users on this exchange is available only after 3 days.
							</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://btc-e.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-cryptsy" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/cryptsy.png"> Cryptsy</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>United States</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://www.cryptsy.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-bittrex" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/bittrex.png"> BitTrex</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>United States</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bittrex.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-therock" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/therock.png"> The Rock</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>Malta</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>On the scene for more than 7 years.</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.therocktrading.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-bittylicious" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/bittylicious.png"> Bittylicious</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>England</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="https://bittylicious.com/">Visit</a>
				</div>
			</div>
			<div id="exchange-btc38" class="exchange-info">
				<div class="col-lg-6 col-lg-offset-3">
					<h3><b><img src="assets/img/exchanges/logos/btc38.png"> BTC38</b></h3>
					<table>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Location:</b></td>
							<td>China</td>
						</tr>
						<tr>
							<td style="padding: 0px 15px 0px 15px"><b>Notes:</b></td>
							<td>-</td>
						</tr>
					</table>
					<a class="btn btn-primary btn-large btn-block" target="_blank" href="http://www.btc38.com/trade.html?btc38_trade_coin_name=ppc">Visit</a>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<?php $exchange_page = true; include ('footer.php'); ?>
