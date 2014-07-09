<?php include ('header.php'); ?>
<h1 class="page-title"><?php echo $Locale->getText("wallet"); ?></h1>
<div class="row">
    <div class="col-md-3 col-md-offset-2"><img src="assets/img/downloads/wallet.png" style="width:100%" /></div>
    <div class="col-md-2"><img src="assets/img/downloads/transaction.png" style="width:100%" /></div>
    <div class="col-md-3"><img src="assets/img/downloads/wallet.png" style="width:100%" /></div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <p style="font-size: 18px"><?php echo $Locale->getText("wallet_desc"); ?></p>
        <br>
        <p class="alert alert-warning"><?php echo $Locale->getText("wallet_disclaimer"); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <div class="tile text-center wallet-entry">
            <img src="assets\img\logos\logo.png" height="100px" width="100px" alt="" class="tile-image big-illustration">
            <h3 class="tile-title">Peercoin-QT</h3>
            <p>
                <?php echo $Locale->getText("peercoin-qt-desc"); ?>
            </p>
            <div>
                <span class="label label-success download-label"><?php echo $Locale->getText("official_wallet"); ?></span>
                <a class="btn btn-primary btn-large btn-block" href="download"><?php echo $Locale->getText("download"); ?></a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="tile text-center wallet-entry">
            <img src="assets\img\logos\peerunity.png" height="100px" width="100px" alt="" class="tile-image big-illustration">
            <h3 class="tile-title">Peerunity</h3>
            <p>
                <?php echo $Locale->getText("peerunity-desc"); ?>
            </p>
            <div>
                <span class="label label-success download-label"><?php echo $Locale->getText("community_wallet"); ?></span>
                <a class="btn btn-primary btn-large btn-block" href="http://www.peercointalk.org/index.php?topic=2902.0"><?php echo $Locale->getText("download"); ?></a>
            </div>
        </div>
    </div>
</div>

</div>
<?php include ('footer.php'); ?>
