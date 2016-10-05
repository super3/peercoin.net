<?php  $page_title = "Minting Guide"; include ('header.php'); ?>

	<div class="row text-center">
		<img class="svg-quickstart" src="assets/img/misc/minting-guide.png" />
	</div>

	<div class="row row-nomargin">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h2><?php echo $Locale->getText("mintguide.title"); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1>Peercoin Client v0.4</h1>
			<ol>
				<li><?php echo $Locale->getText("mintguide.qt_step1"); ?></li>
				<li><?php echo $Locale->getText("mintguide.qt_step2"); ?></li>
				<li><?php echo $Locale->getText("mintguide.qt_step3"); ?></li>
				<li><?php echo $Locale->getText("mintguide.qt_step4"); ?></li>
			</ol>
		</div>
		<div class="col-md-6">
			<h1 class="h-smargin">Peerunity Client</h1>
			<p><?php echo $Locale->getText("mintguide.peerunity"); ?></p>
			<ol>
				<li><?php echo $Locale->getText("mintguide.peerunity_step1"); ?></li>
				<li><?php echo $Locale->getText("mintguide.peerunity_step2"); ?></li>
				<li><?php echo $Locale->getText("mintguide.peerunity_step3"); ?></li>
			</ol>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>
