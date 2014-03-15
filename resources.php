    <?php include ('header.php'); ?>

      <div class="row">
        <!-- Page Title -->
        <h1> Resources</h1>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#start" data-toggle="tab">
              <h2>Get Started</h2>
            </a>
          </li>
          <li>
          <a href="#tools" data-toggle="tab">
         <h2>Tools</h2>
          </a>
          <li> 
          <li>
            <a href="#mine" data-toggle="tab">
          <h2>Mine</h2>
          </a>
          </li>
            <li>
              <a href="#exchange" data-toggle="tab">
              <h2>Exchange</h2>
              </a>
            </li>
            <li>
              <a href="#shop" data-toggle="tab">
            <h2>Shop</h2>
              </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active fade in" id="start">
            <?php include ('page_content/resources/tab_res_getting_started.php'); ?>
          </div>
        <div class="tab-pane active fade" id="tools">
          <?php include ('page_content/resources/tab_res_tools.php'); ?>
          </div>
          <!-- Tab panes -->
          <div class="tab-pane active fade" id="mine">
            <?php include ('page_content/resources/tab_res_mine.php'); ?>
        </div>
          <!-- Tab panes -->
          <div class="tab-pane active fade" id="exchange">
            <?php include ('page_content/resources/tab_res_exchange.php'); ?>
          </div>
          <!-- Tab panes -->
            <div class="tab-pane active fade" id="shop">
              <?php include ('page_content/resources/tab_res_shop.php'); ?>  
          </div>

        </div>
        <!-- end tab panes -->
    

    <?php include ('footer.php'); ?>
