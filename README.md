Peercoin.net Repo
============
The static html files for [Peercoin.net](http://peercoin.net). The website is automatically updated from this repo every 10 minutes, so be careful with any commits to the `master` branch.


### Issues
Content requests, bugs, etc. are all handled through [Github Issues](https://github.com/super3/Peercoin.net/issues). We will try to get to your issue as soon as possible.

### Pull Requests
If you have a simple change to the website, we ask that you put in a pull request instead of an issue. These include things like link changes, text errors, etc. We can add these to the live site with the push of a button, which makes everything easier. We are currently using [Tip4Commit](http://tip4commit.com/projects/222) and [Peer4Commit](http://peer4commit.com/projects/2) to reward commiters. Fluff commits will be rejected. 

[![tip for next commit](http://tip4commit.com/projects/222.svg)](http://tip4commit.com/projects/222) [![tip for next commit](http://peer4commit.com/projects/2.svg)](http://peer4commit.com/projects/2)

If don't know how to submit a pull request use these helpful guides: [one](https://help.github.com/articles/using-pull-requests) and [two](https://gun.io/blog/how-to-github-fork-branch-and-pull-request/). 

## Installing and Running
Below are just some notes for running the website yourself. We run the website on a simple [Apache2](https://httpd.apache.org/) server with [PHP5](http://php.net/) installed.

### Deploy
URL Rewriting via Apache's ```mod_rewrite``` module has issues when the ```MultiViews``` [option](https://httpd.apache.org/docs/2.2/mod/core.html#options) is set in any of the config files in the ```sites-available``` directory. Ensure this option is removed from your site's config files or errors will occur with URL rewriting (```/mining.php -> /mining```)

We run the deploy.sh every 10 minutes, so that the live site is always up to date. This also calls the market ticker updater. The cron job
is listed below:

	*/10 * * * * /root/deploy.sh > /root/error.txt 2>&1

The script(deploy.sh):

    #!/bin/bash

	# Install - Only Run Once
	# git clone https://github.com/super3/peercoin.net.git /var/www
	
	# Update
	cd /var/www/
	git fetch origin
	git reset --hard origin/master
	
	# Update Ticker
	php /var/www/update_tickerinfo.php


### Market Ticker
The ticker sources data from CoinMarketCap, and if that fails, falls back to the Vircurex API. `tickerinfo.php` returns a JSON array containing the last price, market capitalization, and total number of PPC in circulation.

Ensure that `ppcmarket.txt` is writeable by the PHP user so that the ticker can store updated information. Running `update_tickerinfo.php` will update the info provided by the ticker. This should be run via cron.
