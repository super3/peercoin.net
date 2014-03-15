<?php include ('header.php'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1>Peercoin-Qt Downloads</h1>
        </div>

        <div class="col-lg-12 downloads">
            <ul>
                <li class="col-lg-3 windows">
                    <div class="inner">
                        <span class="icon"></span>
                        <h2>Windows</h2>
                        <a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-win32-setup.exe/download">Download Windows Wallet</a>
                    </div>
                </li>
                <li class="col-lg-3 mac">
                    <div class="inner">
                        <span class="icon"></span>
                        <h2>Mac</h2>
                        <a href="https://mega.co.nz/#!gQwxGTJC!B6D6f1RWbFRBTp-4U0KYYAmAfzEz-myKVzyIPEppHfk">Download Mac Wallet</a>
                    </div>
                </li>
                <li class="col-lg-3 linux">
                    <div class="inner">
                        <span class="icon"></span>
                        <h2>Linux</h2>
                        <a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-linux.tar.gz/download">Download Linux Wallet</a>
                    </div>
                </li>
                <li class="col-lg-3">
                    <div class="inner">
                        <h2>Source Code</h2>
                        <a href="https://github.com/ppcoin/ppcoin">Go to Github</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class=
                        "accordion-toggle collapsed" data-parent="#accordion"
                        data-toggle="collapse" href=
                        "#collapseSignatures"><span class="fui-plus"></span> Signatures</a></h4>
                    </div>

                    <div class="panel-collapse collapse" id="collapseSignatures">
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>File</th>
                                    <th>SHA-256</th>
                                </tr>
                                <tr>
                                    <td><code>ppcoin-0.3.0-win32-setup.exe</code></td>
                                    <td>47ede22cce02b77566258ced1131ce91a6c7fe872af9a10c8bd5034678fd7d07</td>
                                </tr>
                                <tr>
                                    <td><code>PPcoin-Qt.dmg</code></td>
                                    <td>ca9d89439a915ff222d4792617aa34f6be5c62a2b36dfaf2a3298c5cf70cee2a</td>
                                </tr>
                                <tr>
                                    <td><code>ppcoin-0.3.0-linux.tar.gz</code></td>
                                    <td>919bb1c60eeebdd173ddcd4c83264f745bbf2af29410ded062f6c6bfce44f694</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class=
                        "accordion-toggle collapsed" data-parent="#accordion"
                        data-toggle="collapse" href=
                        "#collapseLicense"><span class="fui-plus"></span> License</a></h4>
                    </div>

                    <div class="panel-collapse collapse" id="collapseLicense">
                        <div class="panel-body">
                            <p>The MIT License (MIT)</p>

                            <p>Copyright © 2011-<?php echo(date("Y")); ?>
                            Peercoin Developers</p>

                            <p>Copyright © 2009-2012 Bitcoin Developers</p>

                            <p>Permission is hereby granted, free of charge, to
                            any person obtaining a copy of this software and
                            associated documentation files (the "Software"), to
                            deal in the Software without restriction, including
                            without limitation the rights to use, copy, modify,
                            merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to
                            whom the Software is furnished to do so, subject to
                            the following conditions:</p>

                            <p>The above copyright notice and this permission
                            notice shall be included in all copies or
                            substantial portions of the Software.</p>

                            <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT
                            WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
                            BUT NOT LIMITED TO THE WARRANTIES OF
                            MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE
                            AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
                            OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
                            DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
                            CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF
                            OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
                            OTHER DEALINGS IN THE SOFTWARE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="maintitle">Installation Instructions</h2>

            <div class="item">
                <div class="markdown-body">
                    <div class="item">
                        <h3>Windows</h3>

                        <ul>
                            <li>Install
                            <code>ppcoin-0.3.0-win32-setup.exe</code> (<a href=
                            "http://cryptocurrencynews.wordpress.com/2013/04/19/getting-started-with-ppcoin/">guide</a>)</li>

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

                    <div class="item">
                        <h3>OS X</h3>

                        <ul>
                            <li>Mount <code>PPCoin-Qt.dmg</code> by opening
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

                    <div class="item">
                        <h3>Linux</h3>

                        <ul>
                            <li>Unpack
                            <code>ppcoin-0.3.0-linux.tar.gz</code></li>

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

                    <div class="item">
                        <h2 id="config">Configuration</h2>

                        <p><em>Note: Optional if you only use
                        PPCoin-Qt.</em></p>

                        <p>Create <code><a class="internal present" href=
                        "#ppconf">ppcoin.conf</a></code> in the wallet
                        directory.</p>
                    </div>

                    <div class="item">
                        <h3>Enable RPC query capabilities with PPCoin-Qt</h3>

                        <p>Change or add <code>server=1</code> to
                        <code>ppcoin.conf</code>.</p>
                    </div>

                    <div class="item">
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

                    <h2>Mining</h2>

                    <p>You should be able to use most <a href=
                    "https://en.bitcoin.it/wiki/Category:Miners">Bitcoin
                    miners</a>. Default RPC port is 9902 for
                    <code>ppcoind</code>.</p>

                    <p><em>Note: Peercoin does not support <a href=
                    "http://dot-bit.org/Merged_Mining">merged mining</a> with
                    Bitcoin.</em></p>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->

</div>
<?php include ('footer.php'); ?>
