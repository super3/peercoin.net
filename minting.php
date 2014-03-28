<?php include ('header.php'); ?>

		<div class="row">
			<div class="col-lg-12">
				<h1>What is Proof-of-Stake/Minting?</h1>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Introduction</strong><br />
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
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Efficiency</strong><br />
						Proof-of-work security is based on hashing power, and consumes a large amount of energy to solve blocks. This means that mining is much too difficult for those that do not have access to powerful hardware. As the Peercoin network shifts towards proof-of-stake security over time, minting proof-of-stake blocks provides security in a sustainable and environmentally-friendly way without requiring consuming large amounts of energy.
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Security</strong><br />
						In a proof-of-work system, the network is thought to be secure as long as no single party controls more than 51% of mining power. To perform an attack, a single attacker must be able to outpace the rest of the network in block generation. This may seem unlikely, but Bitcoin mining pools have approached 51% of the network hashrate in the past. At the time of writing, two mining pools control more than 51% of the Bitcoin network; an attack could be performed by coercing just two people (the pool operators) to collude.
					</p>
					<p>
					    In a hybrid proof-of-work/proof-of-stake system, an attacker must possess 51% of mining power <em>and</em> 51% of all minting Peercoins, which makes any attack much more difficult. This is also a natural deterrent, since an attack would cause the value of the currency to drop. A party that possesses a majority of the coins is naturally motivated to not crash their value in an attack.
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Technical Details</strong><br />
All coins in the Peercoin network collect coin age since the last transaction. Your stake is calculated from this coin age, multiplied by the number of coins you control (time * coins). Transferred coins lose their age and start a new "life" as fresh coins. After you keep coins for 30 days without moving or spending them, they are old enough to start the minting process. From that moment, the software tests the "search space" given by the coin age, and the limited options are tested to see if they "solve the puzzle" like in Bitcoin mining. You can simply think of this by comparing it with a raffle, but it is a raffle that lets you keep the tickets every time you do not win a round. Over time, the chance of producing a valid solution of the next puzzle increases. More coins equals more raffle tickets. So, 100 coins at an age of 30 days are twice as likely to solve the "puzzle" as 50 coins with 30 age days. The maximum age a coin can have is 90 days, after this the coin does not age further. When a puzzle is solved, your coins mint additional coins, based on 1% per year growth, and you "consume" your built-up coin age. Proof-of-stake minting requires significantly less power than proof-of-work mining, because miners test against a limited number of raffle tickets (the "limited search space"). More information can be found in the Peercoin <a href="/whitepaper">whitepaper</a>.
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Minting Rewards</strong><br />
						Statistically, you will get 1% interest on average on your coins per year. You can only mint when your wallet is open, but this will not slow down your computer or waste much power. During this time, your wallet is unlocked, but you will still need your passphrase for transactions. An alternative strategy is to wait with your coins for about 90 days, until you have a lot of coin age and have a higher chance of minting a block quickly. However, your return will be slightly less compared with constant minting, due to compounding interest.
					</p>
                    <p>
                         When a block is minted, your new coins will be unspendable for a period of 520 blocks (about 3.6 days, since blocks arrive about 10 minutes apart). The Peercoin-QT wallet software takes care of this whole process automatically, but it needs some configuration before it can start. A future wallet version will support in-wallet minting, possibly without unlocking your wallet.</p>
				</div>
			</div>

			<div class="col-lg-12">
				<h1>How to start minting?</h1>
			</div>

			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down"></span> Windows Minting Guide</a>
						</h2>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="item">
							<div class="col-lg-12">
								<h4>Set-up required software:</h4>
								<p>	Download and install the <a href="/downloads">Peercoin-Qt wallet</a> if you have not done so already.
								Encrypt your wallet with a good passphrase. Write this down and keep it somewhere safe; if you forget the passphrase you will lose your coins.
								The wallet encryption option can be found under the settings tab in the Peercoin-Qt wallet program. </p>
								<h4>Configure the software: </h4>
								<p>Open up explorer and select the navigation bar. Type in: %appdata%/PPCoin</p>
								<img src="/assets/img/minting/minting1.png" alt="Minting" />
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<p>Now create a text document. Open it up in notepad and copy the following information.<br />
								The reserve balance option sets the number of coins you do not put up for stake. These are the coins for daily use. The newly minted coins cannot be spent for 520 blocks (~ 3.6 days)!
								<br />Be sure to edit the rpc user and rpc password lines! Pick a good long random password; do not use your wallet passphrase!</p>
<pre>
	#ppcoin.conf
	# JSON-RPC options (for controlling a running ppcoind process)

	#Server mode allows Qt to accept JSON-RPC commands
	server=1

	# You must set rpcuser and rpcpassword to secure the JSON-RPC api
	rpcuser= "A username"
	rpcpassword= "A random password"

	#The reserve balance field is the minimum amount of coins you want to have available and NOT put up as stake.
	#The reason for this is that if you are generating proof of stake you cannot spend those coins for 520 blocks.
	#reservebalance=25
</pre>
								<p>Rename the file to PPCoin.conf</p>
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<h4>Set-up the minting daemon:</h4>
								<p>Go back to the Peercoin-Qt wallet folder and go to the daemon folder. Create a new text document. Copy over this information:</p>
								<img src="/assets/img/minting/minting2.png" alt="Minting" />
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
<pre>
	@echo off
	@echo Enter PPC password...
	SET /P variable=Password :
	ppcoind walletpassphrase %variable% 9999999 true
</pre>
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<p>Save the document and rename it to Minting.bat</p>
								<h4>Start minting:</h4>
								<p>Run the Peercoin-Qt wallet. The bottom left should display a message that the wallet is locked and the minting process is suspended.</p>
								<img src="/assets/img/minting/minting3.png" alt="Minting" />
								<p>Now double click the minting.bat file and enter your passphrase.<br /></p>
								<img src="/assets/img/minting/minting4.png" alt="Minting" /><br />
								<p>If the bottom right corner shows a unlocked padlock after 30 seconds you are now minting. <strong>Congratulations!</strong></p>
							</div>
						</div>
					</div>
    	<div class="panel-heading">
      <h2 class="panel-title">
       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span> Linux Minting Guide</a>
						</h2>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="item">
							<div class="col-lg-12">
								<p> For this tutorial we'll assume the binaries are installed. If you have you can skip the next few lines. Otherwise use the binaries provided on the <a href="/downloads">downloads</a> page.
								<br> Download the compressed binaries either by command line or via the browser. Decompress the binaries and copy over the contents of either the 32bit or 64bit folder (depending on your CPU) to the usr/bin directory or whichever directory you prefer for your binaries.
								We'll use the QT version of Peercoin: ppcoin-qt. Navigate to the /usr/bin folder and execute the ppcoin-qt binary. This will set-up the required folders. Encrypt the wallet and write down the passphrase. Don't lose it!
								Now close the Peercoin-QT client.</p>
								<p>Open a terminal and copy/type this block of text. Before you execute the command be sure to edit the password!</p>
<pre>
	cd ~
	echo '
	#ppcoin.conf
	# JSON-RPC options (for controlling a running ppcoind process)

	#Server mode allows Qt to accept JSON-RPC commands
	server=1

	# You must set rpcuser and rpcpassword to secure the JSON-RPC api
	rpcuser=rpcuser
	rpcpassword=&lt;A random password that is not your wallet passphrase&gt;

	#The reserve balance field is the minimum amount of coins you want to have available and NOT put up as stake.
	#The reason for this is that if you are generating proof of stake you cannot spend those coins for 520 blocks.
	#reservebalance=25
	' &gt; .ppcoin/ppcoin.conf
</pre>
					<p>Start the Peercoin-QT client. The bottom left should display a message that the wallet is locked and the minting process is suspended. Type this in the terminal: (If you have not installed Peercoin system-wide, you need to first go to the directory you installed it in)</p>
<pre>
	ppcoind walletpassphrase &lt;secretpasswordtoyourwallet&gt; 9999999 true
</pre>

								<p>This unlocks the wallet for minting and starts the minting process if you have the Peercoin-Qt client open. After a few second you should see the padlock on the bottom right unlock. Congratulations--you are minting!
										Don't forget to back-up your private key by backing-up the wallet.dat file from the ~/.ppcoin folder or extracting the private key.
								</p>
							</div>
						</div>
     </div>
    	<div class="panel-heading">
      <h2 class="panel-title">
       <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-chevron-down"></span> Mac Minting Guide</a>
						</h2>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="col-lg-12">
							<p>A Mac OS X tutorial, visually supported with step-by-step images,
										will follow soon. Step by step command line instructions for Mac Peercoin
										minting are available at the PeercoinTalk forum <a
										href="http://www.peercointalk.org/index.php?topic=1104.0">here</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end row -->
	</div>

	<?php include ('footer.php'); ?>
