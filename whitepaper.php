<?php include ('header.php'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $Locale->getText("documents_whitepaper_title"); ?></h1>

            <p><strong><?php echo $Locale->getText("documents_whitepaper_select_language"); ?></strong></p>

            <p><?php echo $Locale->getText("documents_whitepaper_pdf"); ?></p>
        </div>

        <div class="col-lg-12 whitepapers">
            <ul>
                 <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>English</h2><a href="assets/paper/peercoin-paper.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>Chinese/中文</h2><a href="assets/papers/peercoin-paper-cn.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>Spanish/Español</h2><a href="assets/paper/peercoin-paper-es.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>Dutch/Nederlands</h2><a href="assets/paper/peercoin-paper-nl.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>French/Français</h2><a href="assets/paper/peercoin-paper-fr.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>German/Deutsch</h2><a href="assets/paper/peercoin-paper-de.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>Japanese/日本語</h2><a href="assets/paper/peercoin-paper-jp.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2>Korean/한국말</h2><a href="assets/paper/peercoin-paper-kr.pdf"
                        target="_blank"><?php echo $Locale->getText("documents_whitepaper_download_pdf"); ?></a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<?php include ('footer.php'); ?>
