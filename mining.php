<?php include ('header.php'); ?>

		<div class="row">

			<div class="col-lg-12">
				<h1>Peercoin Pool Mining Guide</h1>
				<p><strong>Introduction</strong></p>
			</div>

			<div class="col-lg-6">
				<p>
					Peercoin is a hybrid Proof-Of-Work / Proof-Of-Stake coin that uses the same proof-of-work algorithm as Bitcoin. This means you can mine Peercoin with GPUs, FGPAs and ASICs using Bitcoin mining software.
					Through Peercoin's increasing popularity, the transition to proof-of-stake, and the decreasing return on mining, competition for blocks becomes more fierce.
				</p>
			</div>

			<div class="col-lg-6">
				<p>
					Even with powerful hardware it is difficult to mine alone.	Mining pools combine the power of all participants to find blocks, and share the reward proportionally based on shares. These guides
					show you how to poolmine at some of the largest PPC pools. Also make sure to take a look at our <a href="/minting">Minting Guide</a>, as you can also earn up 1% on top of your mining rewards. 
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="item">
					<p>
						<strong>1) Set up a Peercoin wallet</strong><br />
						<a href="downloads">Download the Peercoin wallet</a> if you did not do this already.
					</p>
				</div>

				<div class="item">
					<p>
						<strong>2) Sign up at a mining pool</strong><br />
						You can find a list of pools in the <a href="resources#pools">resources page</a>. Here you can find instructions to join some of these pools.
					</p>
				</div>
				<div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h2 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down"></span> Ecoining Pool </a>
                                                </h2>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
					
					<div class="item">
						<p>
							<strong>·</strong> Go to the pool website: <a href="https://peercoin.ecoining.com">https://peercoin.ecoining.com</a> and sign up [1]. A valid email address is not required, but it is recommended if you wish to receive worker and pool notifications or reset your password in the future. You should also enter a 4 number PIN that will be required to change your payout address and for manual payouts. Don't forget to read and accept the Terms and Conditions [2].
						</p>
						<a href="/assets/img/mining/mining7.png" target="_blank"><img src="/assets/img/mining/mining7.png" alt="Mining" /></a>
					</div>
                                        
					<div class="item">
						<p>
                                        		<strong>·</strong> Log in and setup your workers clicking the "My Workers" section [1]. Add a different worker for every machine you mine with. Here you can activate the worker monitoring, which will notify you if your workers stop mining [2].
                                        	</p>
						<a href="/assets/img/mining/mining8.png" target="_blank"><img src="/assets/img/mining/mining8.png" alt="Mining" /></a>
					</div>
                                        
					<div class="item">
						<p>
                                                	<strong>·</strong> Click on "Edit Account" [1] and set up your wallet address [2]. Here you can also set up your payout threshold, which determines the account balance required for an automatic payout to your personal address. You can also add a donation percentage to help with the pool's operational costs. Keep in mind that you will need to enter the 4 digit PIN [3] every time you want to change these settings.
                                        	</p>
						<a href="/assets/img/mining/mining9.png" target="_blank"><img src="/assets/img/mining/mining9.png" alt="Mining" /></a>
					</div>
					
					<div class="item">
						<p>
							<strong>·</strong> Now just point your BFGminer/CGminer to <strong>"-o stratum+tcp://peercoin.ecoining.com:3336 -u username.workername -p workerpassword"</strong>. If you have any doubt or suggestion contact us at <strong>support@ecoining.com</strong> or use the contact form in the pool.
							<br /> Thanks for your support!
						</p>
					</div>
				</div>

				<div class="panel-heading">
				      <h2 class="panel-title">
					       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span> D7 Pool</a>
                                                </h2>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                	<div class="item">
						<p>
							Go over to the pool website: <a href="https://ppcoin.d7.lt">https://ppcoin.d7.lt</a> and sign up
						</p>
						<a href="/assets/img/mining/mining1.png" target="_blank"><img src="/assets/img/mining/mining1.png" alt="Mining" /></a>
					</div>
	
					<div class="item">
						<p>
							Set up your wallet address and specify a minimum payout, fill in 1. Don't forget to press update after setting both the fields.
						</p>
						<a href="/assets/img/mining/mining2.png" target="_blank"><img src="/assets/img/mining/mining2.png" alt="Mining" /></a>
					</div>
	
					<div class="item">
						<p>
							Your workers are here, you can mine on multiple PCs. Remember the worker's details. Leave the difficulty as is.
						</p>
						<a href="/assets/img/mining/mining3.png" target="_blank"><img src="/assets/img/mining/mining3.png" alt="Mining" /></a>
					</div>

					<div class="item">
						<p>
							Download the software from here. The link is where arrow 2 points to. The pool settings are where arrow 3 points.
						</p>
						<a href="/assets/img/mining/mining4.png" target="_blank"><img src="/assets/img/mining/mining4.png" alt="Mining" /></a>
						<p>Download the zip file, and save it to C:/Peercoin. If the file downloaded without a .zip extension, rename it and add .zip to the end of the filename. Extract the archive and open the folder "ppc".</p>
					</div>

					<div class="item">
						<p>
							<strong>Set Up the Miner</strong><br />
							For the first worker, no setup is required! Just double click start.bat and you should see this
						</p>
						<a href="/assets/img/mining/mining5.png" target="_blank"><img src="/assets/img/mining/mining5.png" alt="Mining" /></a>
						<p>In the above image [2] displays the mining rate and [3] are submitted shares accepted by the pool!</p>
					</div>

					<div class="item">
						<p>
							Now to add another worker, create a worker on the pool website and remember the details. Right click the start.bat file and click edit, press OK on the dialog. Now edit the text behind the -u (see [3]) and -p (see [4]) flags to the settings of the new worker.
							<br />Save, hit start.bat and you are mining!
							<br />You can see your results on the first page, see image one!
							<br />
							<br />Happy mining!
						</p>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div>
	    </div>	
	</div>
</div>
<?php include ('footer.php'); ?>
