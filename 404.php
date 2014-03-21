<?php include ('header_index.php'); ?>

  <!-- Headerwrap -->
			<div class="row">
        <h1 style="margin-top:90px;">
		          <?php echo $Locale->getText("big_404"); ?>
		        </h1>
				<a href="/#whypeercoin" class="btn btn-embossed btn-primary smoothScroll"><?php echo $Locale->getText("why_peercoin_button"); ?></a>
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

<!-- /G Wrap -->
	<?php include ('footer.php'); ?>
