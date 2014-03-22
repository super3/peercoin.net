<?php
/*file to print out tab info as own single page*
//NOTE the relative CSS we are using causes output from this page to not be formatted in current form.  
//Finalize all page areas then come back to this engine and link CSS properly
*/
$page =$_GET['doc'];
$body=''; //will store tab contents if valid tab id passed
switch($page)
{
//news
case 'news':
$body = file_get_contents('page_content/news_and_events/tab_news_news.php');
$body = "<h1>News</h1>".$body;  //add title to page
break;

case 'events':
$body = file_get_contents('page_content/news_and_events/tab_events_news.php');
$body = "<h1>Events</h1>".$body; //add title to page
break;

//resources
case 'start':
$body = file_get_contents('page_content/resources/tab_res_getting_started.php');
$body = "<h1>Get Started</h1>".$body;  //add title to page
break;

case 'tools':
$body = file_get_contents('page_content/resources/tab_res_tools.php');
$body = "<h1>Tools</h1>".$body; //add title to page
break;

case 'mine':
$body = file_get_contents('page_content/resources/tab_res_mine.php');
$body = "<h1>Mine</h1>".$body; //add title to page
break;

case 'exchange':
$body = file_get_contents('page_content/resources/tab_res_exchange.php');
$body = "<h1>Exchange</h1>".$body; //add title to page
break;

case 'shop':
$body = file_get_contents('page_content/resources/tab_res_shop.php');
$body = "<h1>Shop</h1>".$body; //add title to page
break;

//community
case 'forum':
$body = file_get_contents('page_content/community/tab_community_forum.php');
$body = "<h1>Community forums</h1>".$body;
break;

case 'overview':
$body = file_get_contents('page_content/community/tab_community_overview.php');
$body = "<h1>Community Overview</h1>".$body;
break;

case 'socialmedia':
$body = file_get_contents('page_content/community/tab_community_socialmedia.php');
$body = "<h1>Social Media</h1>".$body;
break;

//use
case 'mine':
$body = file_get_contents('page_content/use/tab_use_mining_tutorial.php');
$body = "<h1>Mine</h1>".$body;
break;

case 'mint':
$body = file_get_contents('page_content/use/tab_use_minting_tutorial.php');
$body = "<h1>Mint</h1>".$body;
break;

case 'spend':
$body = file_get_contents('page_content/use/tab_use_spending_tutorial.php');
$body = "<h1>Spend</h1>".$body;
break;

case 'tools':
$body = file_get_contents('page_content/use/tab_use_tools_tutorial.php');
$body = "<h1>Tools</h1>".$body;
break;

//understand
case 'about_mining':
$body = file_get_contents('page_content/understand/tab_about_mining.php');
$body = "<h1>About Mining</h1>".$body;
break;

case 'about_minting':
$body = file_get_contents('page_content/understand/tab_about_minting.php');
$body = "<h1>About Minting</h1>".$body;
break;

case 'about_spending':
$body = file_get_contents('page_content/understand/tab_about_spending.php');
$body = "<h1>About Spending</h1>".$body;
break;

case 'about_peercoin':
$body = file_get_contents('page_content/understand/tab_about_peercoin.php');
$body = "<h1>About Peercoin</h1>".$body;
break;

//support
case 'participate':
$body = file_get_contents('page_content/support/tab_support_participate.php');
$body = "<h1>Participate</h1>".$body;
break;

case 'volunteer':
$body = file_get_contents('page_content/support/tab_support_participate.php');
$body = "<h1>Volunteer</h1>".$body;
break;

default:
header('location: http://peercoin.net/404.php');//relative path messed up by rewrite 
}
include('header.php');
echo $body;
echo"</div>";
include ('footer.php');
?>