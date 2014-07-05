<?php include ('header.php'); ?>
<?php
    $OSList = array
    (
            // Match user agent string with operating systems
            'win' => '(Windows 95)|(Win95)|(Windows_95)|(Win16)|(Windows 98)|(Win98)|(Windows NT 5.0)|(Windows 2000)|(Windows NT 5.1)|(Windows XP)|(Windows NT 5.2)|(Windows NT 6.0)|(Windows NT 7.0)|(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)|(Windows ME)|(Win32)',
            'lin' => '(Linux)|(X11)',
            'osx' => '(Mac_PowerPC)|(Macintosh)',
    );
     
    // Loop through the array of user agents and matching operating systems
    foreach($OSList as $CurrOS=>$Match)
    {
            // Find a match
            if (eregi($Match, $_SERVER['HTTP_USER_AGENT']))
            {
                    // We found the correct match
                    break;
            }
    }
    //echo $CurrOS;
?>
<h1 class="page-title">Peercoin-QT - The Official Peercoin Wallet</h1>
<div class="row">
    <div class="col-md-6"><img src="assets/img/downloads/wallet_ss.png" style="width:100%" /></div>
    <div class="col-md-6"></div>
</div>

</div>
<?php include ('footer.php'); ?>
