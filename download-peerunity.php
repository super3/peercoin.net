<?php $page_title = "Peerunity Download"; include ('header.php'); ?>
<?php
    // Download link list:
    $download_links = array(
        'windows' => 'https://github.com/Peerunity/Peerunity/releases/download/v0.2.0/peerunity-0.2.0-win-gitian.zip',
        'mac' => 'https://github.com/Peerunity/Peerunity/tree/0.2.0',
        'linux' => 'https://github.com/Peerunity/Peerunity/releases/download/v0.2.0/peerunity-0.2.0-linux-gitian.tar.xz'
    );

    $CurrOS = "windows";
    $OSList = array
    (
            // Match user agent string with operating systems
            'windows' => '(Windows 95)|(Win95)|(Windows_95)|(Win16)|(Windows 98)|(Win98)|(Windows NT 5.0)|(Windows 2000)|(Windows NT 5.1)|(Windows XP)|(Windows NT 5.2)|(Windows NT 6.0)|(Windows NT 7.0)|(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)|(Windows ME)|(Win32)',
            'linux' => '(Linux)|(X11)',
            'mac' => '(Mac_PowerPC)|(Macintosh)',
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

    switch ($CurrOS) {
        case 'windows':
            $remaining_os = array('linux', 'mac');
            break;
        case 'linux':
            $remaining_os = array('windows', 'mac');
            break;
        case 'mac':
            $remaining_os = array('windows', 'linux');
            break;
    }
?>
<h1 class="page-title"><?php echo $Locale->getText("waldownload.peerunity_title"); ?></h1>
<div class="row">
    <div class="col-md-6"><img src="assets/img/downloads/peerunity_ss_<?php echo $CurrOS; ?>.png" style="width:100%" /></div>
    <div class="col-md-6 downloads">
        <div class="main-os">
            <a href="<?php echo $download_links[$CurrOS]; ?>" class="btn btn-primary btn-lg <?php echo $CurrOS; ?>">
                <span class="icon"></span>
                <?php echo $Locale->getText("waldownload.download"); ?>
            </a>
            <p><?php echo substr($download_links[$CurrOS], strrpos($download_links[$CurrOS], '/')+1); ?></p>
            <p>
                <a href="https://github.com/Peerunity/Peerunity"><?php echo $Locale->getText("waldownload.source"); ?></a>
                <a href="#" data-toggle="modal" data-target="#license"><?php echo $Locale->getText("waldownload.license"); ?></a>
            </p>
        </div>
        <?php echo $Locale->getText("waldownload.other_platforms"); ?>:
        <br>
        <div class="second-os">
            <a href="<?php echo $download_links[$remaining_os[0]]; ?>" class="btn btn-primary btn-lg <?php echo $remaining_os[0]; ?>">
                <span class="icon"></span>
            </a>
        </div>
        <div class="second-os">
            <a href="<?php echo $download_links[$remaining_os[1]]; ?>" class="btn btn-primary btn-lg <?php echo $remaining_os[1]; ?>">
                <span class="icon"></span>
            </a>
        </div>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class=
                    "accordion-toggle collapsed" data-parent="#accordion"
                    data-toggle="collapse" href=
                    "#collapseSignatures"><span class="fui-plus"></span> <?php echo $Locale->getText("waldownload.signatures"); ?></a></h4>
                </div>

                <div class="panel-collapse collapse" id="collapseSignatures">
                    <div class="panel-body">
                        <table style="font-size: 12px">
                            <tr>
                                <th>File</th>
                                <th>SHA-256</th>
                            </tr>
                            <tr>
                                <td><code>peerunity-0.2.0-win-gitian.zip</code></td>
                                <td>8ec7c94c5cdba47846888c694474783717b89a8597cbd289bfd405e38f8a6b47</td>
                            </tr>
                            <tr>
                                <td><code>https://github.com/Peerunity/Peerunity/tree/0.2.0</code></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><code>peerunity-0.2.0-linux-gitian.tar.xz</code></td>
                                <td>e92bf0f22aa1439e5b4d1f244a9fa19aadf5e7081f408411c33bbd2ce6ad92f2</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="license" tabindex="-1" role="dialog" aria-labelledby="licenseLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">The MIT License (MIT)</h4>
      </div>
      <div class="modal-body">
Copyright (c) 2011-2016 The Peercoin developers<br>
Copyright (c) 2009-2012 The Bitcoin Core developers<br><br>

        Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
        The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
<?php include ('footer.php'); ?>
