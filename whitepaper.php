<?php $page_title = "Whitepaper"; $no_container = true; include ('header.php'); ?>
<div class="container">
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-lg-8 col-lg-offset-2">
            <img src="assets/img/whitepaper/banner.svg">
        </div>
    </div>
</div>
<div style="background-color:#f8f8f8;">
    <div class="container" style="padding-top:0px">
        <div class="row">
            <div class="col-lg-12 whitepapers">
                <ul>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>English</h2><a href="assets/paper/peercoin-paper.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>Chinese/中文</h2><a href="assets/paper/peercoin-paper-cn.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>Spanish/Español</h2><a href="assets/paper/peercoin-paper-es.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>Dutch/Nederlands</h2><a href="assets/paper/peercoin-paper-nl.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>French/Français</h2><a href="assets/paper/peercoin-paper-fr.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>German/Deutsch</h2><a href="assets/paper/peercoin-paper-de.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>Japanese/日本語</h2><a href="assets/paper/peercoin-paper-jp.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                    <li class="col-lg-3 pdf">
                        <div class="inner">
                            <h2>Korean/한국말</h2><a href="assets/paper/peercoin-paper-kr.pdf"
                            target="_blank"><?php echo $Locale->getText("whitepaper.download_pdf"); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
            <br>
            <div class="col-lg-12">
                <p><?php echo $Locale->getText("whitepaper.software"); ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<?php include ('footer.php'); ?>
