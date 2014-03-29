<?php include ('header.php'); ?>

		<div class="row">
			<div class="col-lg-12">
				<h1><?php echo $Locale->getText("get_peercoins_minting"); ?></h1>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong><?php echo $Locale->getText("get_peercoins_minting_intro"); ?></strong><br />
						<?php echo $Locale->getText("get_peercoins_minting_intro_desc"); ?>
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong><?php echo $Locale->getText("get_peercoins_minting_efficiency"); ?></strong><br />
						<?php echo $Locale->getText("get_peercoins_minting_efficiency_desc"); ?>
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong><?php echo $Locale->getText("get_peercoins_minting_security"); ?></strong><br />
						<?php echo $Locale->getText("get_peercoins_minting_security_desc"); ?>
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong><?php echo $Locale->getText("get_peercoins_minting_what"); ?></strong><br />
						<?php echo $Locale->getText("get_peercoins_minting_what_desc"); ?>
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong><?php echo $Locale->getText("get_peercoins_minting_return"); ?></strong><br />
						<?php echo $Locale->getText("get_peercoins_minting_return_desc"); ?>
					</p>
				</div>
			</div>

			<div class="col-lg-12">
				<h1><?php echo $Locale->getText("get_peercoins_minting_howto_start"); ?></h1>
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
								<img src="assets/img/minting/minting1.png" alt="Minting" />
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
								<img src="assets/img/minting/minting2.png" alt="Minting" />
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
								<img src="assets/img/minting/minting3.png" alt="Minting" />
								<p>Now double click the minting.bat file and enter your passphrase.<br /></p>
								<img src="assets/img/minting/minting4.png" alt="Minting" /><br />
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
