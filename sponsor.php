<?php include ('header.php'); ?>

<!-- Tri-Leaf Section -->
	<div class="row centered">
		<br>
		<br>
		<div class="col-lg-8 col-lg-offset-2">
			<h3><?php echo $Locale->getText("contribute_sponsor_tri_leaf"); ?></h3>
			<p class="lead">
				<?php echo $Locale->getText("contribute_sponsor_tri_leaf_desc1"); ?>
			</p>
		</div><!-- col-lg-8 -->
		<br>
		<div class="col-lg-10 col-lg-offset-1">
			<img class="img-responsive" src="assets/img/sponsor/tri-leaf-banner.jpg" alt="">
		</div><!-- col-lg-10 -->
	</div><!-- row -->

	<div class="row sinfo">
		<div class="col-lg-4 col-lg-offset-2">
			<p>
				<?php echo $Locale->getText("contribute_sponsor_tri_leaf_desc2"); ?>
			</p> 
						
		</div><!-- col-lg-3 -->
	
		<div class="col-lg-4">
			<p>
				<?php echo $Locale->getText("contribute_sponsor_tri_leaf_desc3"); ?>
			</p>
		</div>

	</div><!-- row -->

<!-- Leaf Section -->
	<div class="row centered">
		<br>
		<br>
		<div class="col-lg-8 col-lg-offset-2">
			<h3><?php echo $Locale->getText("contribute_sponsor_leaf"); ?></h3>
			<p class="lead">
				<?php echo $Locale->getText("contribute_sponsor_leaf_desc1"); ?>
			</p>
		</div><!-- col-lg-8 -->
		<br>
		
		<div class="col-lg-10 col-lg-offset-1">
			<img class="img-responsive" src="assets/img/sponsor/leaf-banner.jpg" alt="">
		</div><!-- col-lg-10 -->
	</div><!-- row -->

	<div class="row sinfo">
		<div class="col-lg-4 col-lg-offset-2">
			<p>
				<?php echo $Locale->getText("contribute_sponsor_leaf_desc2"); ?>
			</p>

		</div><!-- col-lg-3 -->

		<div class="col-lg-4">
			<h6><?php echo $Locale->getText("contribute_sponsor_leaf_sponsors"); ?></h6>
			<ul>
				<li><a href="https://peercoin.blockmines.com/">Blockmines</a> - Donates 5% of Pool Fee</li>
			</ul>
		</div>
	</div><!-- row -->
</div><!-- container -->

<?php include ('footer.php'); ?>
