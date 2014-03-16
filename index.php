<?php include ('header_index.php'); ?>

  <!-- Headerwrap -->
			<div class="row" style="max-width:100%; margin:0px;">
        <h1 style="margin-top:90px;">
		          <?php echo $Locale->getText("big_welcome_header"); ?>
		        </h1>
				<a href="#cta" class="btn btn-embossed btn-primary smoothScroll"><?php echo $Locale->getText("why_peercoin_button"); ?></a>
		        <a href="downloads" target="_blank" class="btn btn-embossed btn-primary"><?php echo $Locale->getText("download_wallet"); ?>!</a>

		        <div class="marketcap">
			        <ul>
				        <li>
					        <span id="current-price"></span>
				        	<span><?php echo $Locale->getText("price"); ?></span>
				        </li>
				        <li>
					        <span id="market-cap"></span>
					        <span><?php echo $Locale->getText("market_cap"); ?></span>
				        </li>
				        <li>
					        <span id="total-supply"></span>
					        <span><?php echo $Locale->getText("total_supply"); ?></span>
				        </li>
			        </ul>
			        <div class="updated">
				        <span><?php echo $Locale->getText("ticker_last_updated"); ?></span>
	        	        <span id="seconds-since-update"><?php echo $Locale->getText("ticker_last_updated_never"); ?></span>
			        </div>
		        </div>

			</div>
    	</div>
    </header>

    <!-- Call To Action -->
	<div id="cta" name="cta">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("why_peercoin_title"); ?></h2>
			<p class="col-lg-8"><?php echo $Locale->getText("why_peercoin_desc"); ?></p>
			<br>

		</div><!-- /container -->
	</div><!-- /cta -->

	<!-- Services Section -->
	<div class="container sinfo" style="padding-bottom:0px;">

		<div class="services row svgicons centered">

			<div class="col-lg-4">
				<img src="/assets/img/icons/rocket.svg" alt="Original Innovation">
				<h4><?php echo $Locale->getText("why_peercoin_header_innovation"); ?></h4>
				<p><?php echo $Locale->getText("why_peercoin_desc_innovation"); ?></p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<img src="/assets/img/icons/key.svg" alt="Increased Security">
				<h4><?php echo $Locale->getText("why_peercoin_header_security"); ?></h4>
				<p><?php echo $Locale->getText("why_peercoin_desc_security"); ?></p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<img src="/assets/img/icons/earth.svg" alt="Energy and Cost Efficiency">
				<h4><?php echo $Locale->getText("why_peercoin_header_efficiency"); ?></h4>
				<p><?php echo $Locale->getText("why_peercoin_desc_efficiency"); ?></p>
			</div><!-- col-lg-4 -->

		</div><!-- /row -->
	</div><!-- /container -->

	<div class="video centered">
		<div class="videoWrapper">
			<!-- 
				As the "Great Firewall"(http://en.wikipedia.org/wiki/Golden_Shield_Project), Chinese people can't visit youtube.  
				So use a local video source withe Chinese captions.
			-->
			<?php if ($Locale->locale_code == 'zh') { ?>
				<iframe height=498 width=510 src="http://player.youku.com/embed/XNjQ4MjE1MTYw" frameborder=0 allowfullscreen></iframe>
			<?php } else { ?>
				<iframe width="560" height="315" src="//www.youtube.com/embed/TjL2AgCQDJ0?rel=0?modestbranding=1" frameborder="0" allowfullscreen></iframe>
			<?php } ?>
		</div>
	</div>

		   <!-- Call To Action -->
	<div id="cta" name="cta">
		<div class="container centered">
			<h2 class="col-lg-4"><?php echo $Locale->getText("fund_peercoin"); ?></h2>
			<p class="col-lg-8">
				<?php echo $Locale->getText("fund_peercoin_accepting_donations"); ?><br/>
				<?php echo $Locale->getText("fund_peercoin_donations_btc"); ?> 1MKMndP5iXKtdDd5M6bcsxVmLAirHW1j7i - 
				<a href="http://blockr.io/address/info/1MKMndP5iXKtdDd5M6bcsxVmLAirHW1j7i"><?php echo $Locale->getText("block_explorer"); ?></a><br/>
				<?php echo $Locale->getText("fund_peercoin_donations_ppc"); ?> P9ZveNqMmSSB5RApp3dcpDYXYXmKYUG7mN - 
				<a href="http://ppc.blockr.io/address/info/P9ZveNqMmSSB5RApp3dcpDYXYXmKYUG7mN"><?php echo $Locale->getText("block_explorer"); ?></a>
			</p>
			<br/>
		</div><!-- /container -->
	</div><!-- /cta -->



<div class="faq container">
		<h2 class="centered"><?php echo $Locale->getText("faq_header"); ?></h2>
		<div class="row">
			<div class="col-lg-8">
				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_innovation"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php echo $Locale->getText("faq_q_desc_innovation"); ?>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_security"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php echo $Locale->getText("faq_q_desc_security"); ?>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_efficiency"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php echo $Locale->getText("faq_q_desc_efficiency"); ?>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_myth1"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php echo $Locale->getText("faq_q_desc_myth1"); ?>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_myth2"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFive" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php echo $Locale->getText("faq_q_desc_myth2"); ?>
				      </div>
				    </div>
				  </div>
				  	  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
				          <span class="fui-plus"></span> <?php echo $Locale->getText("faq_q_title_myth3"); ?>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseSix" class="panel-collapse collapse" >
				      <div class="panel-body" >
				        <?php echo $Locale->getText("faq_q_desc_myth3"); ?>
				      </div>
				    </div>
				  </div>

				</div><!-- panel-group -->
			</div><!-- col-lg-8 -->

			<div class="col-lg-4 centered">
				<div class="alert alert-success">
				<h4><?php echo $Locale->getText("convinced_you_header"); ?></h4>
			    	<p><?php echo $Locale->getText("convinced_you_desc"); ?></p>
			        <a href="downloads" class="btn btn-primary btn-large"><i class="fui-link"></i> <?php echo $Locale->getText("download_wallet"); ?>!</a>
			        <div class="social">
			<a href="https://www.facebook.com/Peercoin"><img src="/assets/img/icons/social-fb.png" alt="Visit us on Facebook"></a>
			<a href="http://www.reddit.com/r/peercoin"><img src="/assets/img/icons/social-reddit.png" alt="Reddit"></a>
			<a href="https://twitter.com/PeercoinPPC"><img src="/assets/img/icons/social-twitter.png" alt="Follow us on Twitter"></a>
			<a href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT"><img src="/assets/img/icons/social-yt.png" alt="Watch videos on YouTube"></a>
		   </div>
			     </div>

			</div>

		</div>

	</div>
	<div class="tuts">
	<!-- Portfolio Section -->
	<div class="container">
	<div class="row centered">
		<h2><?php echo $Locale->getText("tutorials"); ?></h2>
		<div class="ch-grid">
			<div class="col-lg-4">
				<ul>
					<li>
						<div class="ch-item ch-img-1">
							<a href="downloads">
								<div class="ch-info">
									<h3><?php echo $Locale->getText("installing_wallet"); ?></h3>
								</div>
							</a>
						</div><!-- /ch-img-1 -->
						<h4><a href="downloads"><?php echo $Locale->getText("installing_wallet"); ?></a></h4>
					</li>
				</ul>
			</div><!-- /col-lg-4 -->

			<div class="col-lg-4">
				<ul>
					<li>
						<div class="ch-item ch-img-2">
							<a href="downloads#config">
								<div class="ch-info">
									<h3><?php echo $Locale->getText("setting_up_wallet"); ?></h3>
								</div>
							</a>
						</div><!-- /ch-img-1 -->
						<h4><a href="downloads#config"><?php echo $Locale->getText("setting_up_wallet"); ?></a></h4>
					</li>
				</ul>
			</div><!-- /col-lg-4 -->

		<div class="col-lg-4">
			<ul>
				<li>
					<div class="ch-item ch-img-3">
						<a href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
							<div class="ch-info">
								<h3><?php echo $Locale->getText("more_ellipsis"); ?></h3>
							</div>
						</a>
					</div><!-- /ch-img-1 -->
					<h4><a href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT"><?php echo $Locale->getText("more_ellipsis"); ?></a></h4>
				</li>
			</ul>
		</div><!-- /col-lg-4 -->
		</div><!-- /ch-igrid -->
	</div><!-- /row -->
	</div><!-- /container -->

	</div><!-- /G Wrap -->
	<?php include ('footer.php'); ?>
