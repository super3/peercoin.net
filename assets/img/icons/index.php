<?php
$files = glob("*.svg");
foreach($files as $jpg){
	echo "<div style=\"display:inline-block;margin:20px 20px 20px 20px\">";
    echo "<img src=\"$jpg\" \><br>$jpg";
    echo "</div>";
}
?>