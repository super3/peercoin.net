<?php include ('header.php'); ?>

	<div class="row">
		<div class="col-sm-12">
			<img class="svg-fullwidth" src="assets/img/minting/banner.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Introduction</h3>
			<p>
				Peercoin (PPC) uses a novel and environmentally-friendly method of network validation and mining. Most cryptocurrencies in existence today are copies of Bitcoin, with changed mining parameters or different mining algorithms. Miners maintain and secure the network and check transactions, while spending a lot of energy on cryptographic brute force puzzles. <a href="https://blockchain.info/stats">Blockchain.info</a> estimates that mid December 2013, Bitcoin mining takes up 22 million dollars or 150,000 megawatts of energy <em>per day</em>! Peercoin also started out as a proof-of-work network, but as more blocks and coins are mined, the network gradually shifts towards proof-of-stake security. In Peercoin terms, this process of generating coins by stake is called "minting." If you own any Peercoins, you can mint too!
			</p>
			<p>
				Proof-of-work and proof-of-stake are methods of securing cryptocurrency networks. Bitcoin uses a purely proof-of-work-based system, in which the probability of solving a block (and getting the block reward) depends on hashrate. On the Bitcoin network, rewards are distributed solely according to work done by miners.
			</p>
			<p>
				Peercoin uses a hybrid proof-of-work/proof-of-stake system. Instead of being dependent only on hashing power available, proof-of-stake blocks are distributed according to possession of Peercoins. For example, an individual possessing 1% of all Peercoins currently in existence would be able to mint 1% of the proof-of-stake blocks. Notice that the term "mint" is used in generation of proof-of-stake blocks, while the term "mine" refers specifically to the generation of proof-of-work blocks. Minting can be performed by running a full node of the Peercoin client and does not require many resources.
			</p>
			<p>
				Just like proof-of-work blocks, proof-of-stake blocks generate currency rewards. When generating proof-of-stake blocks, a user sends already-possessed coins to himself in exchange for a preset reward, which is set by the protocol at 1% per year. These transactions increase the "consumed coin age" of the blockchain, a property that Peercoin uses to determine the trustworthiness of the blockchain.</p>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 text-center vcenter">
			<img class="svg-200" src="assets/img/minting/efficiency.svg">
		</div>
		<div class="col-sm-8 vcenter">
			<h3>Efficiency</h3>
			<p>
				Proof-of-work security is based on hashing power, and consumes a large amount of energy to solve blocks. This means that mining is much too difficult for those that do not have access to powerful hardware. As the Peercoin network shifts towards proof-of-stake security over time, minting proof-of-stake blocks provides security in a sustainable and environmentally-friendly way without requiring consuming large amounts of energy.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7 vcenter">
			<h3>Security</h3>
			<p>
				In Peercoin's proof-of-stake system, an attacker must possess 51% of all minting coins, which makes any attack much more difficult. This is also a natural deterrent, since an attack would cause the value of the currency to drop. A party that possesses a large number of the coins is naturally motivated to not crash their value in an attack.			</p>
			<p>
				In a hybrid proof-of-work/proof-of-stake system, an attacker must possess 51% of mining power <em>and</em> 51% of all minting Peercoins, which makes any attack much more difficult. This is also a natural deterrent, since an attack would cause the value of the currency to drop. A party that possesses a majority of the coins is naturally motivated to not crash their value in an attack.
			</p>
		</div>
		<div class="col-md-4 vcenter">
			<img class="svg-fullwidth" src="assets/img/minting/security.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 vcenter">
			<img class="svg-fullwidth" src="assets/img/minting/closeup.svg">
		</div>
		<div class="col-md-7 vcenter">
			<h3>How exactly does it work?</h3>
			<p>
				All coins in the Peercoin network collect coin age since the last transaction. Your stake is calculated from this coin age, multiplied by the number of coins you control (time * coins). Transferred coins lose their age and start a new "life" as fresh coins. After you keep coins for 30 days without moving or spending them, they are old enough to start the minting process. From that moment, the software tests the "search space" given by the coin age, and the limited options are tested to see if they "solve the puzzle" like in Bitcoin mining. You can simply think of this by comparing it with a raffle, but it is a raffle that lets you keep the tickets every time you do not win a round. Over time, the chance of producing a valid solution of the next puzzle increases. More coins equals more raffle tickets. So, 100 coins at an age of 30 days are twice as likely to solve the "puzzle" as 50 coins with 30 age days. The maximum age a coin can have is 90 days, after this the coin does not age further. When a puzzle is solved, your coins mint additional coins, based on 1% per year growth, and you "consume" your built-up coin age. Proof-of-stake minting requires significantly less power than proof-of-work mining, because miners test against a limited number of raffle tickets (the "limited search space"). More information can be found in the Peercoin <a href="/whitepaper">whitepaper</a>.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 vcenter">
			<h3>Minting Rewards</h3>
			<p>
				Statistically, you will get 1% interest on average on your coins per year. You can only mint when your wallet is open, but this will not slow down your computer or waste much power. During this time, your wallet is unlocked, but you will still need your passphrase for transactions. An alternative strategy is to wait with your coins for about 90 days, until you have a lot of coin age and have a higher chance of minting a block quickly. However, your return will be slightly less compared with constant minting, due to compounding interest.
			</p>
			<p>
                When a block is minted, your new coins will be unspendable for a period of 520 blocks (about 3.6 days, since blocks arrive about 10 minutes apart). The Peercoin-QT wallet software takes care of this whole process automatically, but it needs some configuration before it can start. A future wallet version will support in-wallet minting, possibly without unlocking your wallet.</p>
			</p>
		</div>
		<div class="col-md-3 vcenter">
			<img class="svg-fullwidth" src="assets/img/minting/dividend.svg">
		</div>
	</div>
	<div class="row text-center">
		<a href="mining-guide"><img class="svg-quickstart" src="assets/img/misc/quick-start.svg"></a>
	</div>
</div>
<?php include ('footer.php'); ?>
