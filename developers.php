<?php  $page_title = "Developers"; include ('header.php'); ?>

	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<img src="assets/img/types/developer/banner.svg" class="svg-fullwidth" />
		</div>
	</div>
	<div class="row text-center">
		<h2><?php echo $Locale->getText("developers.rapid_pace"); ?></h2>
	</div>
	<div class="row">
		<div class="col-lg-5 col-lg-offset-1 col-md-6">
			<h1 class="h-smargin"><?php echo $Locale->getText("developers.core_protocol"); ?></h1>
			<p>
				<?php echo $Locale->getText("developers.core_protocol_desc"); ?>
			</p>
			<h4 class="h-smargin"><?php echo $Locale->getText("developers.cold_wallet_minting"); ?></h4>
			<p>
				<?php echo $Locale->getText("developers.cold_wallet_minting_desc"); ?>
			</p>
			<h4 class="h-smargin"><?php echo $Locale->getText("developers.optional_checkpointing"); ?></h4>
			<p>
				<?php echo $Locale->getText("developers.optional_checkpointing_desc"); ?>
			</p>
		</div>
		<div class="col-lg-5 col-md-6">
			<h1 class="h-smargin"><?php echo $Locale->getText("developers.peercoin_ecosystem"); ?></h1>
			<a href="http://peer4commit.com/"><img class="svg-full-width" src="assets/img/types/developer/peer4commit.svg" /></a>
			<p>
				<?php echo $Locale->getText("developers.peer4commit"); ?>
			</p>
			<ul>
				<li><?php echo $Locale->getText("developers.peer4commit.1"); ?></li>
				<li><?php echo $Locale->getText("developers.peer4commit.2"); ?></li>
				<li><?php echo $Locale->getText("developers.peer4commit.3"); ?></li>
			</ul>
			<p><strong><?php echo $Locale->getText("developers.what_are_you_waiting_for"); ?> &nbsp;&nbsp;&nbsp;<a class="btn btn-xs btn-primary" href="http://peer4commit.com/"><?php echo $Locale->getText("developers.get_started"); ?></a></strong></p>
		</div>
	</div>
	<div class="row text-center">
		<h2><?php echo $Locale->getText("developers.notable_community_projects"); ?></h2>
	</div>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-1 col-md-4 text-center vcenter">
			<img src="assets/img/logos/peerunity.svg" class="svg-halfwidth" />
		</div>
		<div class="col-lg-7 col-md-8 vcenter">
			<h1 class="h-smargin">Peerunity</h1>
			<p>
				<?php echo $Locale->getText("developers.peerunity_desc"); ?>
			</p>
			<a href="http://www.peercointalk.org/index.php?board=64.0" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("forum"); ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-1 col-md-4 text-center vcenter">
			<img src="assets/img/types/developer/peershares.svg" class="svg-halfwidth" />
		</div>
		<div class="col-lg-7 col-md-8 vcenter">
			<h1 class="h-smargin">Peershares</h1>
			<p>
				<?php echo $Locale->getText("developers.peershares_desc"); ?>
			</p>
			<a href="http://www.peershares.net/" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("website"); ?></a>
			<a href="http://www.peercointalk.org/index.php?board=61.0" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("forum"); ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-1 col-md-4 text-center vcenter">
			<img src="assets/img/types/developer/peerbox.svg" class="svg-halfwidth" />
		</div>
		<div class="col-lg-7 col-md-8 vcenter">
			<h1 class="h-smargin">Peerbox</h1>
			<p>
				<?php echo $Locale->getText("developers.peerbox_desc"); ?>
			</p>
			<a href="http://www.peerbox.me/" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("website"); ?></a>
			<a href="http://www.peercointalk.org/index.php?board=68.0" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("forum"); ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-lg-offset-1 col-md-4 text-center vcenter">
			<img src="assets/img/types/developer/nubits.png" class="svg-halfwidth" />
		</div>
		<div class="col-lg-7 col-md-8 vcenter">
			<h1 class="h-smargin">NuBits</h1>
			<p>
				<?php echo $Locale->getText("developers.nubits_desc"); ?>
			</p>
			<a href="http://www.nubits.com/" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("website"); ?></a>
			<a href="http://www.peercointalk.org/index.php?board=61.0" class="btn btn-primary" target="_BLANK"><?php echo $Locale->getText("forum"); ?></a>
		</div>
	</div>
	<div class="row text-center">
		<h3><?php echo $Locale->getText("developers.devforums"); ?></h3>
	</div>
</div>
<?php include ('footer.php'); ?>
