<?php include ('header.php'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1>Whitepaper</h1>

            <p><strong>Please select your preferred language!</strong></p>

            <p>The whitepapers are available in Portable Document Format
            (PDF). Please use your preferred <a href=
            "http://pdfreaders.org/">software for reading</a>.</p>
        </div>

        <div class="col-lg-12 whitepapers">
            <ul>
                <?php
                $languages = array(
                    '' => 'English',
                    'cn' => 'Chinese/中文',
                    'es' => 'Spanish/Español',
                    'nl' => 'Dutch/Nederlands',
                    'fr' => 'French/Français',
                    'de' => 'German/Deutsch',
                    'jp' => 'Japanese/日本語',
                    'kr' => 'Korean/한국말'
                );

                foreach($languages as $code => $language) {
                ?>
                <li class="col-lg-3 pdf">
                    <div class="inner">
                        <h2><?php echo $language; ?></h2><a href="assets/paper/peercoin-paper<?php echo ($code ? "-$code" : ''); ?>.pdf"
                        target="_blank">Download PDF</a>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php include ('footer.php'); ?>
