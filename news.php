    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">News & Events</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#peercoinnews" data-toggle="tab">
        <h2>Peercoin News</h2>
      </a>
    </li>
    <!--ACTIVATE AFTER ADDING CRYPTO NEWS   <li>     
            <a href="#cryptonews" data-toggle="tab">Crypto News</a>
          <li> -->
    <li>
      <a href="#events" data-toggle="tab">
        <h2>Events</h2>
      </a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="peercoinnews">
      <!-- Peercoin News Items -->
      <?php include('page_content/news_and_events/tab_news_news.php'); ?>
      <!-- end PPC News items-->
    </div><!-- end news tab-->
    <!-- ACTIVATE AFTER ADDING CRYPTO NEWS  <div class="tab-pane" id="crypto news">
        <div class="row">
        <!- Crypto News Items-
        <!- ACTIVATE AFTER ADDING CRYPTO NEWS-
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="article_container">
            </div>
          </div>
        </div>  END-
        <!- end Crypto News row-
      </div>
      <!- ends cryptot news tab-->
    <div class="tab-pane fade" id="events"><!-- Event Items -->
        <?php include ('page_content/news_and_events/tab_events_news.php') ?><!-- end events tab-->
    </div><!-- ends tabs-->
  </div>
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
