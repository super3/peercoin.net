<?php $page_title = "FAQ"; include ('header.php'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img class="svg-fullwidth" src="assets/img/faq/banner.svg" alt="Frequently Asked Questions">
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q1"); ?></h2>
			<p>
				<strong><?php echo $Locale->getText("faq.yes"); ?>.</strong>  <?php echo $Locale->getText("faq.q1_ans"); ?>
			</p>
			<p>
				<strong><?php echo $Locale->getText("faq.sources"); ?>:</strong><br>
				<a href="https://bitcointalk.org/index.php?topic=99735.0">https://bitcointalk.org/index.php?topic=99735.0</a><br>
				<a href="https://bitcointalk.org/index.php?topic=101820.0">https://bitcointalk.org/index.php?topic=101820.0</a><br>
				<a href="https://bitcointalk.org/index.php?topic=101820.msg1114141#msg1114141">https://bitcointalk.org/index.php?topic=101820.msg1114141#msg1114141</a>
			</p>
		</div>
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q2"); ?></h2>
			<p>
				<?php echo $Locale->getText("faq.q2_ans"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q3"); ?></h2>
			<p>
				<strong><?php echo $Locale->getText("faq.no"); ?>.</strong>  <?php echo $Locale->getText("faq.q3_ans"); ?>
			</p>
		</div>
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q4"); ?></h2>
			<p>
				<strong><?php echo $Locale->getText("faq.no"); ?>.</strong>  <?php echo $Locale->getText("faq.q4_ans"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q5"); ?></h2>
			<p>
				<strong><?php echo $Locale->getText("faq.yes"); ?>.</strong> <?php echo $Locale->getText("faq.q5_ans"); ?>
			</p>
		</div>
		<div class="col-md-6">
			<h2><?php echo $Locale->getText("faq.q6"); ?></h2>
			<p>
				<?php echo $Locale->getText("faq.q6_ans"); ?>
			</p>
			<ul>
				<li><?php echo $Locale->getText("faq.q6_l1"); ?></li>
				<li><?php echo $Locale->getText("faq.q6_l2"); ?></li>
				<li><?php echo $Locale->getText("faq.q6_l3"); ?></li>
			</ul>
			<p>
				<?php echo $Locale->getText("faq.q6_ans2"); ?>
			</p>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>