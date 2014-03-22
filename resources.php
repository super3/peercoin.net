    <?php include ('header.php'); ?>

      <div class="row">
        <!-- Page Title -->
        <h1> Resources</h1>
        <!-- Nav tabs -->
        <div style="text-align: center;">
          <ul class="nav nav-tabs" style=" display: inline-block; padding: 0px; list-style:none; overflow: hidden;">
            <li class="active">
              <a href="#start" data-toggle="tab">
                Get Started
              </a>
            </li>
            <li>
              <a href="#tools" data-toggle="tab">
                Tools
              </a>
            </li>
            <li>
              <a href="#mine" data-toggle="tab">
                Mine
              </a>
            </li>
            <li>
              <a href="#exchange" data-toggle="tab">
                Exchange
              </a>
            </li>
            <li>
              <a href="#shop" data-toggle="tab">
                Shop
              </a>
            </li>
          </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">

          <div class="tab-pane active fade in" id="start">
            <?php include ('page_content/resources/tab_res_getting_started.php'); ?>
            <a href ="./page/start" target="_blank"> view tab as page</a>
          </div>
          <div class="tab-pane fade" id="tools">
            <?php include ('page_content/resources/tab_res_tools.php'); ?>
            <a href ="./page/tools" target="_blank"> view tab as page</a>
          </div>
          <div class="tab-pane fade" id="mine">
            <?php include ('page_content/resources/tab_res_mine.php'); ?>
            <a href ="./page/mine" target="_blank"> view tab as page</a>
          </div>
          <div class="tab-pane fade" id="exchange">
            <?php include ('page_content/resources/tab_res_exchange.php'); ?>
            <a href ="./page/exchange" target="_blank"> view tab as page</a>
          </div>
          <div class="tab-pane fade" id="shop">
            <?php include ('page_content/resources/tab_res_shop.php'); ?>
            <a href ="./page/shop" target="_blank"> view tab as page</a>
          </div>

        </div>
        <!-- end tab panes -->

      <!-- End Row -->
      </div>

    <!-- End container -->
    </div>
    

    <?php include ('footer.php'); ?>
