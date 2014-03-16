<?php
  include ('locale/locale.php');
  $Locale = new Loc();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<!-- Title here -->
	<title><?php echo $Locale->getText("homepage_title"); ?></title>

	<!-- Description, Keywords and Author -->
	<meta name="description" content="Secure and sustainable cryptocoin." />
	<meta name="keywords" content="peercoin, bitcoin, litecoin, primecoin, cryptocurrency, sustainable, cryptocoin">
	<meta name="author" content="Peercoin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- open graph tags -->
	<meta property="og:title" content="Peercoin" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://peercoin.net" />
	<meta property="og:image" content="http://peercoin.net/assets/img/logos/logo.png"/>
	<meta property="og:description" content="Secure and sustainable cryptocoin." />

	<meta name="google-site-verification" content="-GOUzkxsjMUypgT8xj6GD4W9xNv_SMeorTZtOKPRzg8" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

 	<!-- Bootstrap core CSS -->
 	<link href="assets/css/bootstrap.css" rel="stylesheet">
 	<link href="assets/css/flat-ui.css" rel="stylesheet">

 	<!-- Custom styles for this template -->
 	<link href="assets/css/main.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/revolution.css" media="screen"/>
	<link rel="stylesheet" href="assets/css/media-slideshow.css" media="screen"/>

    	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
      	<script src="assets/js/html5shiv.js"></script>
      	<script src="assets/js/respond.min.js"></script>
    	<![endif]-->

	<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-40768937-3', 'peercoin.net');
	ga('send', 'pageview');
	</script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img src="/assets/img/logos/Dark-Text-350.png" width="170" alt="Peercoin">
            <span style="width=100%; font-size:12px; text-align:center;"><?php echo $Locale->getText("homepage_title"); ?></span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("dropdown_title_docs_and_press"); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="whitepaper"><?php echo $Locale->getText("dropdown_docs_and_press_whitepaper"); ?></a></li>
                <li><a href="http://peercoin.net/news"><?php echo $Locale->getText("dropdown_docs_news"); ?></a></li> 
                <li><a href="http://www.peercointalk.org/index.php?topic=1616.0"><?php echo $Locale->getText("dropdown_docs_and_press_kit"); ?></a></li>
                <li><a href="http://www.peercointalk.org/index.php?topic=2219.0"><?php echo $Locale->getText("dropdown_docs_and_press_articles_interviews"); ?></a></li>
                <?php
                if (!file_exists('include/recaptcha_keys.php')) {
                ?>
                 <li><a href="mailto:sunnyking9999@gmail.com?cc=john.manglaviti@gmail.com&amp;subject=Sunny%20King%20Interview%20Request"><?php echo $Locale->getText("dropdown_docs_and_press_sunny_king_interview"); ?></a></li>
                <?php } else { ?>
                <li><a href="interview"><?php echo $Locale->getText("dropdown_docs_and_press_sunny_king_interview"); ?></a></li>
                <?php } ?>
              </ul>
            </li>
            <li><a href="http://peercoin.net/resources"><?php echo $Locale->getText("dropdown_title_use_peercoins"); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("dropdown_title_peercoins"); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
		            <li><a href="mining"><?php echo $Locale->getText("dropdown_peercoins_mine"); ?></a></li>
        		    <li><a href="minting"><?php echo $Locale->getText("dropdown_peercoins_mint"); ?></a></li>
        		    <li><a href="buying"><?php echo $Locale->getText("dropdown_peercoins_buy"); ?></a></li>
                <li><a href="http://peer4commit.com">Peer4commit</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("dropdown_title_contribute"); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="https://docs.google.com/forms/d/1uJbNEJThRc3TqnwbVVrd__UQWVUOOr4QSEMbMIIF--s/viewform"><?php echo $Locale->getText("dropdown_contribute_volunteer"); ?></a></li>
                <li><a href="participate"><?php echo $Locale->getText("dropdown_contribute_participate"); ?></a></li>
                <!--<li><a href="sponsor">Sponsor</a></li>-->
                <!-- TODO: add more ways to contribute and support the Peercoin community -->
              </ul>
            </li>
            <li><a href="http://www.peercointalk.org/"><?php echo $Locale->getText("dropdown_forum"); ?></a></li>
            <li class="wallet"><a class="btn btn-primary btn-lg" role="button" href="downloads"><?php echo $Locale->getText("download_wallet"); ?>!</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<?php if($_SERVER['PHP_SELF'] != "/index.php") {echo ' 
<div class="container content">
<div class="top_social_other">
Like Peercoin
        <a target="_blank" href="https://www.facebook.com/Peercoin">
              <img src="./assets/img/icons/social-fb.png" alt="Visit us on Facebook">
        </a>
            <a target="_blank" href="http://www.reddit.com/r/peercoin">
              <img src="/assets/img/icons/social-reddit.png" alt="Reddit">
        </a>
            <a target="_blank" href="https://twitter.com/PeercoinPPC">
              <img src="/assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
        </a>
            <a target="_blank" style="margin:0px; width:50%" href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
              <img src="/assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
        </a>
          </div>';} ?>
<?php if($_SERVER['PHP_SELF'] == "/index.php") { echo ' 
     <!-- Headerwrap -->
      <header id="headerwrap-2">
        <div class="container-content">
          <div class ="top_social">
            <a target="_blank" href="https://www.facebook.com/Peercoin">
              <img src="/assets/img/icons/social-fb.png" alt="Visit us on Facebook">
        </a>
            <a target="_blank" href="http://www.reddit.com/r/peercoin">
              <img src="/assets/img/icons/social-reddit.png" alt="Reddit">
        </a>
            <a target="_blank" href="https://twitter.com/PeercoinPPC">
              <img src="/assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
        </a>
            <a target="_blank" style="margin:0px; width:50%" href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
              <img src="/assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
        </a>
          </div>';}?>
