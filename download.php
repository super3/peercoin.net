<?php $page_title = "Wallet Download"; include ('header.php'); ?>
<?php
    // Download link list:
    $download_links = array(
        'windows' => 'http://downloads.sourceforge.net/project/ppcoin/0.4.1%20RC1/ppcoin-0.4.1rc1-win32-setup.exe',
        'mac' => 'https://github.com/ppcoin/ppcoin/tree/0.4.1',
        'linux' => 'http://downloads.sourceforge.net/project/ppcoin/0.4.1%20RC1/ppcoin-0.4.1ppc.rc1-linux.tgz'
    );

    $CurrOS = "windows";
    $OSList = array
    (
            // Match user agent string with operating systems
            'windows' => '(Windows 95)|(Win95)|(Windows_95)|(Win16)|(Windows 98)|(Win98)|(Windows NT 5.0)|(Windows 2000)|(Windows NT 5.1)|(Windows XP)|(Windows NT 5.2)|(Windows NT 6.0)|(Windows NT 7.0)|(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)|(Windows ME)|(Win32)|(Windows_10)|(Win10)|(Windows 10)',
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
<h1 class="page-title"><?php echo $Locale->getText("waldownload.qt_title"); ?></h1>
<div class="row">
    <div class="col-md-6"><img src="assets/img/downloads/wallet_ss_<?php echo $CurrOS; ?>.png" style="width:100%" /></div>
    <div class="col-md-6 downloads">
        <div class="main-os">
            <a href="<?php echo $download_links[$CurrOS]; ?>" class="btn btn-primary btn-lg <?php echo $CurrOS; ?>">
                <span class="icon"></span>
                <?php echo $Locale->getText("waldownload.download"); ?>
            </a>
            <p><?php echo substr($download_links[$CurrOS], strrpos($download_links[$CurrOS], '/')+1); ?></p>
            <p>
                <a href="https://github.com/ppcoin/ppcoin"><?php echo $Locale->getText("waldownload.source"); ?></a>
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
                                <td><code>ppcoin-0.4.1rc1-win32-setup.exe</code></td>
                                <td>c0fa41ad46ee6c27571a39e6bac4ef68d92f6e2b8c53919472ead98bc31c4bdb</td>
                            </tr>
                            <tr>
                                <td><code>https://github.com/ppcoin/ppcoin/tree/0.4.1</code></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><code>ppcoin-0.4.1ppc.rc1-linux.tgz</code></td>
                                <td>bdf52cf39aebf0d18561d56922054000811a216200ad58267052e245a6dd2b0c</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-subtitle">How to Install</h1>
        <ul class="nav nav-tabs" role="tablist">
          <li<?php if($CurrOS == "windows") echo " class=\"active\""; ?>><a href="#win" role="tab" data-toggle="tab">Windows</a></li>
          <li<?php if($CurrOS == "mac") echo " class=\"active\""; ?>><a href="#mac" role="tab" data-toggle="tab">OS X</a></li>
          <li<?php if($CurrOS == "linux") echo " class=\"active\""; ?>><a href="#lin" role="tab" data-toggle="tab">Linux</a></li>
          <li><a href="#adv" role="tab" data-toggle="tab">Advanced Configuration</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane<?php if($CurrOS == "windows") echo " active"; ?>" id="win">
            <h3>Windows</h3>

            <ul>
                <li>Install
                <code>ppcoin-0.4.1rc1-win32-setup.exe</code>

                <li>Default installation directory is
                <code>C:\Program Files\PPCoin</code></li>

                <li>Run <code>ppcoin-qt</code> from the Start menu
                or the installation directory</li>
            </ul>

            <h4>Daemon</h4>

            <ul>
                <li>Create <code><a class="internal present" href=
                "#ppconf">ppcoin.conf</a></code> in
                <code>%APPDATA%\PPCoin</code></li>

                <li>Run <code>daemon\ppcoind</code></li>
            </ul>

            <p>Your wallet is located in
            <code>C:\Users\&lt;username&gt;\AppData</code>
            <em>(hidden folder)</em>. Open the folder with
            <code>Start menu -&gt; Run...</code> (or press
            <code>Winkey-R</code>), type
            <code>%APPDATA%\PPCoin</code> into the field, and press
            <code>Enter</code>.</p>
          </div>
          <div class="tab-pane<?php if($CurrOS == "mac") echo " active"; ?>" id="mac">
            <h3>OS X</h3>

            <ul>
                <li>Mount <code>PPCoin-Qt-v0_4_0.dmg</code> by opening
                it</li>

                <li>Drag <code>PPCoin-Qt.app</code> to
                <code>Applications</code></li>

                <li>Go to <code>Applications</code> and open
                <code>PPCoin-Qt.app</code></li>
            </ul>

            <h4>Daemon</h4>

            <ul>
                <li>Unzip <code>ppcoind.zip</code></li>

                <li>Create <code><a class="internal present" href=
                "#ppconf">ppcoin.conf</a></code> in
                <code>~/Library/Application
                Support/PPCoin</code></li>

                <li>Run <code>ppcoind</code></li>
            </ul>

            <p>Your wallet is located in
            <code>~/Library/Application Support/PPCoin</code>. To
            open the folder, press <code>Command-Shift-G</code> in
            Finder, insert the path, and press
            <code>Enter</code>.</p>
          </div>
          <div class="tab-pane<?php if($CurrOS == "linux") echo " active"; ?>" id="lin">
            <h3>Linux</h3>

            <ul>
                <li>Unpack
                <code>ppcoin-0.4.1ppc.rc1-linux.tgz</code></li>

                <li>Run <code>bin/32/ppcoin-qt</code> <em>(requires
                libqt4-gui)</em></li>
            </ul>

            <h4>Daemon</h4>

            <ul>
                <li>Create <code><a class="internal present" href=
                "#ppconf">ppcoin.conf</a></code> in
                <code>~/.ppcoin</code></li>

                <li>Run <code>bin/32/ppcoind</code></li>
            </ul>

            <p>Your wallet is located in
            <code>~/.ppcoin</code>.</p>

            <p><em>Note: 64 bit binaries available in
            <code>bin/64/{ppcoin-qt,ppcoind}</code>.</em></p>
        </div>

        <div class="tab-pane" id="adv">
            <h2 id="config">Configuration</h2>

            <p><em>Note: Optional if you only use
            PPCoin-Qt.</em></p>

            <p>Create <code><a class="internal present" href=
            "#ppconf">ppcoin.conf</a></code> in the wallet
            directory.</p>

            <h3>Enable RPC query capabilities with PPCoin-Qt</h3>

            <p>Change or add <code>server=1</code> to
            <code>ppcoin.conf</code>.</p>

            <h3 id="ppconf">Sample PPCoin configuration</h3>

            <p>You have to set <code>rpcpassword</code> to
            something secure. If you run <code>ppcoind</code>
            without setting it you will get a computer generated
            password.</p>
            <pre>
            <code># ppcoin.conf configuration file. Lines beginning with # are comments.

            ### Network-related settings

            # Run on the test network instead of the production PPCoin network
            #testnet=0

            # Connect via a SOCKS4 proxy (default: none)
            #proxy=127.0.0.1:9050

            # Accept incoming connections
            #listen=1

            # Enable UPnP negotiation with router/firewall to accept incoming connections
            #upnp=1

            #################################################################
            ##           Quick Primer on 'addnode' vs 'connect'            ##
            ##                                                             ##
            ##  Let's say for instance you use 'addnode=4.2.2.4'.          ##
            ##                                                             ##
            ##  'addnode' will connect you to and tell you about the       ##
            ##    nodes connected to 4.2.2.4.  In addition it will tell    ##
            ##    the other nodes connected to it that you exist so        ##
            ##    they can connect to you.                                 ##
            ##  'connect' will not do the above when you 'connect' to it.  ##
            ##    It will *only* connect you to 4.2.2.4 and no one else.   ##
            ##                                                             ##
            ##  So if you're behind a firewall, or have other problems     ##
            ##  finding nodes, add some using 'addnode'.                   ##
            ##                                                             ##
            ##  If you want to stay private, use 'connect' to only         ##
            ##  connect to "trusted" nodes.                                ##
            ##                                                             ##
            ##  If you run multiple nodes on a LAN, there's no need for    ##
            ##  all of them to open lots of connections.  Instead          ##
            ##  'connect' them all to one node that is port forwarded      ##
            ##  and has lots of connections.                               ##
            ##                                                             ##
            ##            Thanks goes to [Noodle] on Freenode.             ##
            #################################################################

            # Use as many addnode= settings as you like to connect to specific peers
            #addnode=69.164.218.197
            #addnode=10.0.0.2:8333

            # ... or use as many connect= settings as you like to ONLY connect
            # to specific peers:
            #connect=69.164.218.197
            #connect=10.0.0.1:8333

            # Maximum number of inbound+outbound connections
            #maxconnections=


            ### JSON-RPC options (for controlling a running PPCoin-Qt/ppcoind process)

            # Enable JSON-RPC commands with PPCoin-Qt
            #server=0

            # You must set rpcuser and rpcpassword to secure the JSON-RPC API
            #rpcuser=Ulysseys
            #rpcpassword=YourSuperGreatPasswordNumber_DO_NOT_USE_THIS_OR_YOU_WILL_GET_ROBBED_385593

            # How many seconds PPCoin will wait for a complete RPC HTTP request
            # after the HTTP connection is established.
            #rpctimeout=30

            # By default, only RPC connections from localhost are allowed.  Specify
            # as many rpcallowip= settings as you like to allow connections from
            # other hosts (and you may use * as a wildcard character):
            #rpcallowip=10.1.1.34
            #rpcallowip=192.168.1.*

            # Listen for RPC connections on this TCP port:
            #rpcport=9902

            # You can use ppcoind to send commands to ppcoind
            # running on another host using this option:
            #rpcconnect=127.0.0.1

            # Use Secure Sockets Layer (also known as TLS or HTTPS) to communicate
            # with ppcoind
            #rpcssl=1

            # OpenSSL settings used when rpcssl=1
            #rpcsslciphers=TLSv1+HIGH:!SSLv2:!aNULL:!eNULL:!AH:!3DES:@STRENGTH
            #rpcsslcertificatechainfile=server.cert
            #rpcsslprivatekeyfile=server.pem


            ### Miscellaneous options

            # Set gen=1 to attempt to generate PPCoins using built-in CPU mining
            #gen=0

            # Use SSE instructions to try speeding up PPCoin generation
            # with built-in CPU mining.
            #4way=1

            # Pre-generate this many public/private key pairs, so wallet backups will be
            # valid for both prior transactions and several dozen future transactions.
            #keypool=100

            # Pay transaction fee amount per kilobyte. Default 0.01 (1 cent)
            # Minimum required 0.01 (1 cent)
            #paytxfee=0.01

            # Reserve amount of PPCoins to not use in proof-of-stake
            # (stake is withheld from spending for 520 blocks)
            #reservebalance=0
            </code>
            </pre>
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
Copyright (c) 2011-2015 The Peercoin developers<br>
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
