<?php
  include ('locale/locale.php');
  $Locale = new Loc();
?>

<!doctype html>
<html lang="en">

  <head>

  	<meta charset="UTF-8">
  	<!-- Title -->
  	<title><?php if(isset($page_title)) echo $page_title . ' - '; echo $Locale->getText("homepage_title"); ?></title>

  	<!-- Description, Keywords and Author -->
  	<meta name="description" content="Secure and sustainable cryptocoin.">
  	<meta name="keywords" content="peercoin, bitcoin, litecoin, primecoin, cryptocurrency, sustainable, cryptocoin">
  	<meta name="author" content="Peercoin">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  	<!-- open graph tags -->
  	<meta property="og:title" content="Peercoin">
  	<meta property="og:type" content="website">
  	<meta property="og:url" content="http://peercoin.net">
  	<meta property="og:image" content="http://peercoin.net/assets/img/logos/logo.png">
  	<meta property="og:description" content="Secure and sustainable cryptocoin.">

    <!-- Misc Meta -->
  	<meta name="google-site-verification" content="-GOUzkxsjMUypgT8xj6GD4W9xNv_SMeorTZtOKPRzg8">
  	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

   	<!-- Bootstrap core CSS -->
   	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
   	<link rel="stylesheet" href="assets/css/flat-ui.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

   	<!-- Custom styles for this template -->
   	<link href="assets/css/main.css" rel="stylesheet">

  	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
  	<![endif]-->

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
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=".">
            <img src="assets/img/logos/Dark-Text-350.png" class="peercoin-logo" alt="Peercoin">
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("header.get_started"); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="newcomers"><?php echo $Locale->getText("header.newcomers"); ?></a></li>
                <li><a href="investors"><?php echo $Locale->getText("header.investors"); ?></a></li>
                <li><a href="merchants"><?php echo $Locale->getText("header.merchants"); ?></a></li>
                <li><a href="mining"><?php echo $Locale->getText("header.miners"); ?></a></li>
                <li><a href="developers"><?php echo $Locale->getText("header.developers"); ?></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("header.learn"); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="exchanges"><?php echo $Locale->getText("header.exchanges"); ?></a></li>
                <li><a href="minting"><?php echo $Locale->getText("header.mint_peercoins"); ?></a></li>
                <li><a href="whitepaper"><?php echo $Locale->getText("header.peercoin_whitepaper"); ?></a></li>
                <li><a href="faq"><?php echo $Locale->getText("header.frequently_asked_questions"); ?></a></li>
              </ul>
            </li>
            <li><a href="wallet"><?php echo $Locale->getText("header.wallet"); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Locale->getText("header.community"); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.peercointalk.org/">Peercointalk Forum</a></li>
                <li><a target="_blank" href="http://www.reddit.com/r/peercoin">Reddit</a></li>
                <li><a target="_blank" href="https://plus.google.com/109267388527420438684/posts">Google+</a></li>
                <li><a target="_blank" href="https://www.facebook.com/Peercoin">Facebook</a></li>
                <li><a target="_blank" href="https://twitter.com/PeercoinPPC">Twitter</a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/peercoin">YouTube</a></li>
                <li><a target="_blank" href="https://github.com/super3/Peercoin.net">GitHub</a></li>
                <li><a target="_blank" href="https://www.transifex.com/projects/p/website-ppc">Transifex</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-language">
              <a href="#" id="lang-tooltip" class="dropdown-toggle" data-toggle="dropdown" data-placement="left" title="<?php echo $Locale->getText("header.languages"); ?>"><i class="fa fa-language fa-3x"></i></a>
              <ul class="dropdown-menu">
                <?php
                  foreach($Locale->getLanguages() as $language_code => $language_text):
                    if($Locale->locale_code!=$language_code){
                      echo "<li><a href=\"".$_SERVER['SCRIPT_NAME']."?locale=".$language_code."\">".$language_text."</a></li>";
                    }
                  endforeach;
                ?>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php if (isset($index)) { ?>
  <!-- Headerwrap -->
  <header id="headerwrap-2">
    <div class="container">
<?php } else if(isset($no_container)) { ?>
    <div class="content">
<?php } else { ?>
    <div class="container content">
<?php }?>
