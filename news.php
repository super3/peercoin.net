    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">News & Events</h1>

  <!-- Nav tabs -->
<div style="text-align: center;">
  <ul class="nav nav-tabs" style=" display: inline-block; padding: 0px; list-style:none; overflow: hidden;">
    <li class="active">
      <a href="#peercoinnews" data-toggle="tab">
        Peercoin News
      </a>
    </li>
    <!--ACTIVATE AFTER ADDING CRYPTO NEWS   <li>     
            <a href="#cryptonews" data-toggle="tab">Crypto News</a>
          <li> -->
    <li>
      <a href="#events" data-toggle="tab">
        Events
      </a>
    </li>
  </ul>
</div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="peercoinnews">
      <!-- Peercoin News Items -->
      <?php include('page_content/news_and_events/tab_news_news.php'); ?>
      <br/>
      <a href ="./page/news" target="blank"> view tab as page</a>
      <!-- end PPC News items-->
    </div>
    <!-- end news tab-->
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
    <div class="tab-pane fade" id="events">
      <!-- Event Items -->
      <?php include ('page_content/news_and_events/tab_events_news.php') ?>
      <a href ="./page/events" target="blank"> view tab as page</a>
      <!-- end events tab-->
    </div>
    <!-- ends tabs-->
  </div>
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
