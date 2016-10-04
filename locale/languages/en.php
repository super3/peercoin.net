<?php
$lang['en'] = array();

$lang['en'] += array(
	//Developers
	'developers.rapid_pace' => 'Peercoin development is moving ahead at a rapid pace.',
	'developers.core_protocol' => 'Core Protocol',
	'developers.core_protocol_desc' => 'Upcoming editions of the core protocol wallet will contain the following features:',
	'developers.cold_wallet_minting' => 'Cold Wallet Minting',
	'developers.cold_wallet_minting_desc' => 'Currently, in order to mint new coins, users must keep a wallet connected to the network, which is known as a <strong>hot wallet</strong>. Hot wallets are at a greater risk of malware stealing their coins, because they must remain connected to the internet during the minting process. In upcoming versions of Peercoin, special <strong>minting keys</strong> will allow users to mint while keeping their spending keys entirely offline.',
	'developers.optional_checkpointing' => 'Optional Checkpointing',
	'developers.optional_checkpointing_desc' => 'Today, the network uses centralized checkpointing to protect against attacks. The need for this security decreases as the network grows, upcoming versions will make these checkpoints optional. A future version will turn off checkpoints by default.',
	'developers.peercoin_ecosystem' => 'Peercoin Ecosystem',
	'developers.peer4commit' => 'Would you like to get involved in Peercoin development <strong>and</strong> get paid for it? Here’s your chance! <a href="http://peer4commit.com/">Peer4commit</a> provides a central hub for development. You can:',
	'developers.peer4commit.1' => 'Select a project on the site, work on it, and receive peercoins as a reward.',
	'developers.peer4commit.2' => 'Pick a project you’d like to support, and contribute peercoins toward it.',
	'developers.peer4commit.3' => 'Think up a new project, submit it, and receive donations towards its development.',
	'developers.what_are_you_waiting_for' => 'Well, what are you waiting for?',
	'developers.get_started' => 'Get started with Peer4commit',
	'developers.notable_community_projects' => 'Current community projects',
	'developers.peerunity_desc' => '<b>Peerunity</b> is wallet software that is developed and maintained by the Peercoin community. It includes many extra features that the official wallet lacks, such as coin control and one click minting. Future releases will contain a redesigned theme, Peershares integration and a minting tab.',
	'developers.peershares_desc' => '<b>Peershares</b> is an inexpensive and decentralized ledger to be used by businesses for raising funds, tracking share ownership and distributing dividends in an automated fashion. Each business using Peershares has its own blockchain that is independent of all others and secured cheaply and easily using Peercoin’s proof-of-stake.',
	'developers.peerbox_desc' => '<b>Peerbox</b> is a secure operating system for minting and running Peercoin nodes, and is currently under active development. It focuses on inexpensive, energy-efficient devices such as the Raspberry Pi, which is compatible with Peercoin\'s goal of providing an energy efficient cryptocurrency. If ASIC is a term for dedicated and energy efficient mining, then Peerbox is the ASIC of Proof-of-Stake.',
	'developers.nubits_desc' => '<b>NuBits</b> is a project by the creator of Peershares, Jordan Lee. NuBits is the first implementation of Peershares. It is intended to solve the problem of volatility in cryptocurrencies.',
	'developers.devforums' => 'Find more innovative ideas on our <a href="https://www.peercointalk.org/index.php?board=61.0">forums</a>, you can also discuss or share your own by visiting our <a href="https://peercoin.chat">chat</a>.',
);

$lang['en'] += array(
	//Exchanges
	'exchanges.what_are' => 'What is an Exchange?',
	'exchanges.what_are_desc' => '<b>Exchanges</b> enable you to trade your government-backed currency, such as US Dollars or Euros, in order to buy and sell Peercoins. Exchanges also facilitate trade between peercoins and other cryptocurrencies, such as Bitcoin.',
	'exchanges.buy_sell' => 'Placing an Order',
	'exchanges.buy_sell_desc' => 'Trades begin by the placing of buy and sell orders. Create a <b>Buy order</b> to request a certain amount of Peercoins for a specific price. Create a <b>Sell order</b> to offer to sell Peercoins. When different orders overlap in price, the trade is automatically completed, and the accounts of both parties are credited with the currencies they traded. A <b>Market Order</b> will trade immediately at the price currently available.',
	'exchanges.fees' => 'Fees',
	'exchanges.fees_desc' => 'Each time a trade occurs, a small percentage is taken by the exchange for facilitating the transaction. This is known as a <b>Trading Fee</b>. Some exchanges also charge a <b>Withdrawal Fee</b> when you withdraw your new currency from the exchange.',
	'exchanges.choosing' => 'Select an exchange',
	'exchanges.disclaimer' => 'Reminder: Be sure to withdraw your Peercoins from the exchange after you purchase them. Storing coins in your own wallet is more secure, and makes you eligible for Peercoin’s 1&#37; minting reward.',
	'exchanges.location' => 'Location',
	'exchanges.notes' => 'Notes',
	'exchanges.visit' => 'Visit',
);


$lang['en'] += array(
	'footer.links' => 'Links',
	'footer.tools' => 'Tools',
	'footer.exchanges' => 'Exchanges',
	'footer.mining' => 'Mining',
);

$lang['en'] += array(
	// FAQ
	'faq.yes' => 'Yes',
	'faq.no' => 'No',
	'faq.sources' => 'Sources',
	'faq.q1' => 'Was Peercoin fairly launched?',
	'faq.q1_ans' => 'Sunny King announced the planned release of Peercoin 9 days before the release. There were no blocks mined prior to launch. One forum member wrote, “[Sunny King] released a link to the source in the other thread at the promised time (5 min before 18:00 UTC). There was no premine. By the time I had built from source and got things running, there were 5 blocks mined.”',
	'faq.q2' => 'What is the purpose of checkpointing?',
	'faq.q2_ans' => 'As of version 0.2, centrally-broadcasted checkpointing is no longer a critical part of the protocol. Its purpose is to defend the network during the initial growth period, and to help ensure a smooth upgrade path. Central checkpointing is now being gradually weakened, and will be eventually removed, to achieve a similar decentralization level to Bitcoin. The checkpoints exist solely as a security measure: if something terrible were to happen, we have the checkpoints as a backup.',
	'faq.q3' => 'Is Peercoin a clone of Bitcoin?',
	'faq.q3_ans' => 'Peercoin is one of the truly unique alternative coins. Although its code is based on Bitcoin, Peercoin is the first coin to introduce Proof of Stake to secure the network. Proof of Work is also used in Peercoin, to promote fair coin distribution, but is not necessary for the security of the network.',
	'faq.q4' => 'Is Peercoin a pump-and-dump coin?',
	'faq.q4_ans' => 'Peercoin brings innovative features, active developers and significant community involvement. As of August 1, 2014, Peercoin is nearly two years old, and has a market cap of over $20 million USD.',
	'faq.q5' => 'Is the 1&#37; minting reward fair for all users?',
	'faq.q5_ans' => 'When the entire money supply grows due to the minting process, all Peercoin holders who participate in minting maintain their relative share of the network. Although large stakeholders generate a higher total number of Peercoins, they cannot, in percentage terms, pull ahead of other minters.',
	'faq.q6' => 'Is Peercoin inflationary?',
	'faq.q6_ans' => 'The change of PPC money supply is determined by:',
	'faq.q6_l1' => 'Proof of Work mining (increases supply)',
	'faq.q6_l2' => 'Number of transactions (decreases supply by 0.01 PPC per transaction)',
	'faq.q6_l3' => 'Proof of Stake minting (increases supply at a rate up to 1&#37; per year)',
	'faq.q6_ans2' => 'Thanks to increased mining participation, Peercoin inflation rate has consistently remained below 5&#37; for the first half of 2014. At the current adoption rate, this rate will decline further over time, making Peercoin less inflationary and more sustainable than most other cryptocoins.',

);


$lang['en'] += array(
	// Global
	'homepage_title' => '﻿Peercoin - Secure & Sustainable Cryptocoin.',

	'second_ago' => 'second ago',
	'seconds_ago' => 'seconds ago',

	'website' => 'Website',
	'forum' => 'Forum',
);


$lang['en'] += array(
	// Header
	'header.get_started' => 'Get Started',
	'header.newcomers' => 'Newcomers',
	'header.investors' => 'Investors',
	'header.merchants' => 'Merchants',
	'header.miners' => 'Miners',
	'header.developers' => 'Developers',

	'header.learn' => 'Learn',
	'header.frequently_asked_questions' => 'Frequently Asked Questions',
	'header.peercoin_whitepaper' => 'Peercoin Whitepaper',
	'header.exchanges' => 'Exchanges',
	'header.mint_peercoins' => 'Peercoin Minting',

	'header.wallet' => 'Wallets',

	'header.community' => 'Community',

	'header.languages' => 'Languages',
);

$lang['en'] += array(
	// Index page
	'index.why_peercoin' => 'Why Peercoin',
	'index.download_wallet' => 'Download Wallet',
	'index.price' => 'Price',
	'index.market_cap' => 'Market Cap',
	'index.total_supply' => 'Total Supply',
	'index.last_updated' => 'Last Updated:',
	'index.last_updated_never' => 'never',
	'index.why_peercoin_q' => 'Why <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin seeks to be the most secure cryptocoin at the lowest cost, rewarding all users for strengthening the network by giving them 1&#37; return on their investment.',
	'index.built_to_last' => 'Built <b>to Last</b>',
	'index.built_to_last_desc' => 'The world\'s first Proof-of-Stake coin.',
	'index.fair_distribution' => '<b>Fair</b> Distribution',
	'index.fair_distribution_desc' => 'No insider pre-sale or instant mining.',
	'index.transparent_protocol' => 'Stable and <b>Secure</b>',
	'index.transparent_protocol_desc' => 'Protecting your investment since 2012.',
	'index.energy_efficient' => 'Energy <b>Efficient</b>',
	'index.energy_efficient_desc' => 'Mint Peercoins on any device.',
	'index.learn_more' => 'Learn more',
	'index.get_started' => 'Get started',
	'index.newcomers' => 'Newcomers',
	'index.newcomers_desc' => '﻿Learn how to buy, sell, spend, and store Peercoin.',
	'index.investors' => 'Investors',
	'index.investors_desc' => 'Guaranteed 1&#37; return on your investment.',
	'index.merchants' => 'Merchants',
	'index.merchants_desc' => '﻿It\'s time to cut down on transaction fees.',
	'index.miners' => 'Miners',
	'index.miners_desc' => '﻿Put your mining equipment to good use.',
	'index.developers' => 'Developers',
	'index.developers_desc' => 'Take a look at some innovations in the pipeline.',
	'index.newsletter' => 'Newsletter',
	'index.newsletter_placeholder' => 'Enter your e-mail address...',
	'index.newsletter_submit' => 'Sign me up!',
);


$lang['en'] += array(
	//Investors
	'investors.established_network' => 'Established Network',
	'investors.established_network_desc' => 'Peercoin was launched in 2012, making it one of the oldest and most reliable cryptocoin networks in existence.',
	'investors.limited_supply' => 'Limited Supply',
	'investors.limited_supply_desc' => 'Peercoin’s annual inflation rate has averaged below 5&#37; during the year 2014, and continues to fall. See <a href="http://peerchain.net/charts.html">peerchain.net</a> for detailed historic data.',
	'investors.efficient_security' => 'Efficient Security',
	'investors.efficient_security_desc' => 'Peercoin is the first proof-of-stake coin, which means it doesn’t require massive computing power to secure the network. Get into the nitty-gritty with the <a href="whitepaper">Peercoin whitepaper</a>.',
	'investors.guaranteed_returns' => 'Guaranteed Returns',
	'investors.guaranteed_returns_desc' => 'After Peercoins are held for 30 days, they are eligible to earn a 1&#37; annualized reward. <a href="minting">Learn more about minting</a> or you can also buy coins from one of the many <a href="exchanges">Peercoin exchange</a>.',

);


$lang['en'] += array(
	//Merchants
	'merchants.instant' => 'Get paid instantly',
	'merchants.instant_desc' => 'Transactions are processed almost immediately via Peercoin’s blockchain technology. A block explorer instantly verifies an incoming payment.',
	'merchants.no_chargebacks' => 'Avoid chargebacks',
	'merchants.no_chargebacks_desc' => 'Once a payment has been confirmed by the network, it is secured by world-class cryptography, making it impossible for the customer to reverse.',
	'merchants.no_transaction_fees' => 'Cut out transaction fees',
	'merchants.no_transaction_fees_desc' => 'To make a payment, each sender pays a fee of just 0.01 Peercoin. As a merchant, you pay absolutely nothing.',

);


$lang['en'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Compatible with Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin uses the same mining algorithm as Bitcoin, known as SHA-256. Any hardware that works on the Bitcoin network can also be used to mine Peercoins.',
	'mining.fair_distribution' => 'Fair Distribution',
	'mining.fair_distribution_desc' => 'Proof of Work mining is used to spread the distribution of new coins, while the security of the network is maintained entirely by Proof of Stake minting. This means that Bitcoin mining vulnerabilities such as Selfish Mining do not impact Peercoin security.',
	'mining.sustainable_reward' => 'Sustainable Reward',
	'mining.sustainable_reward_desc' => 'The reward for mining a block gradually declines as the computing power of the network grows. Over time, mining will have an ever-decreasing impact on the growth of the money supply.',
);


$lang['en'] += array(
	'mintguide.title' => 'Follow the guide corresponding to your Peercoin client to start minting!',
	'mintguide.qt_step1' => 'Ensure your wallet is encrypted with a good passphrase. Write this down and keep it somewhere safe; if you forget the passphrase you will lose your coins. The wallet encryption option can be found under the settings tab in the Peercoin-Qt wallet program.',
	'mintguide.qt_step2' => 'To start minting go to help -> debug window -> console and enter: <br><kbd>walletpassphrase abc 999999 true</kbd><br> where "abc" is your passphrase and "999999" is the time you want to mint for in seconds. You can change the amount of time to whatever you like, but it is usually easiest just to set it at a very high number. If your passphrase has spaces then enclose it in quotation marks.',
	'mintguide.qt_step3' => 'Clear your passphrase by pressing Ctrl-L.',
	'mintguide.qt_step4' => 'You can check you are minting by looking at the little padlock in the bottom right corner of the client. After a few moments it should become unlocked. If you hover your mouse over it, it should say "Wallet is encrypted and currently unlocked for block minting only".',
	'mintguide.peerunity' => 'Peerunity is a client developed by the Peercoin community. It has more features than the standard Peercoin v0.4 client, and also has an easier method for minting. It is available for Windows, Linux, and OS X. You can download it here and view the launch thread <a href="http://www.peercointalk.org/index.php?topic=2902.0">here</a>.',
	'mintguide.peerunity_step1' => 'Ensure your wallet is encrypted with a good passphrase. Write this down and keep it somewhere safe; if you forget the passphrase you will lose your coins. The wallet encryption option can be found under the settings tab in Peerunity.',
	'mintguide.peerunity_step2' => 'To start minting, simply press the "Unlock Wallet for Minting Only" button, enter your passphrase and press OK.',
	'mintguide.peerunity_step3' => 'You can check you are minting by looking at the little padlock in the bottom right corner of the client. After a few moments it should become unlocked. If you hover your mouse over it, it should say "Wallet is encrypted and currently unlocked for block minting only".',

);


$lang['en'] += array(
	// minting
	'minting.mint_anywhere' => 'Mint Anywhere',
	'minting.mint_anywhere_desc' => 'Most cryptocoin mining requires specialized hardware, but Peercoin minting can be done on any computer. Minting is energy-efficient, because it is based on the Peercoins you hold, rather than on your processing power.',
	'minting.secure_the_network' => 'Secure the Network',
	'minting.secure_the_network_desc' => 'Each time your minting generates a block, your coins help guard the network. To reliably attack the Peercoin network, a malicious user must control the majority of all minting coins, which could even end up harming his own investment.',
	'minting.earn_reward' => 'Earn a Reward',
	'minting.earn_reward_desc' => 'Minting earns you 1&#37; annually. Coins are first eligible to mint 30 days after they have been transferred, and after 90 days, their chance of success is maximized. If you mint more often, your earnings will compound!',

);


$lang['en'] += array(
	//Newcomers
	'newcomers.getting_started' => 'Getting Started with Peercoin',
	'newcomers.downlaod_wallet' => 'Download wallet software',
	'newcomers.download_wallet_desc' => 'Head on over to the <a href="wallet">download page</a>, where you can grab the program you’ll need to store and manage your new coins.',
	'newcomers.buy_from_exchange' => 'Buy from an exchange',
	'newcomers.buy_from_exchange_desc' => 'Send your money to a <a href="exchanges">Peercoin exchange</a>, where you’ll be able to buy from other traders in the open market.',
	'newcomers.withdraw_coins' => 'Withdraw your coins',
	'newcomers.withdraw_coins_desc' => 'Take possession of your peercoins by sending them to an address generated by the wallet software. This will protect you in the event that the exchange closes its doors while your money is inside.',
	'newcomers.learn_more' => 'Learn More',
	'newcomers.learn_more_desc' => 'Now that you have coins in your wallet, it’s time to learn how to grow your investment with <a href="minting">Peercoin Minting</a>.',

);


$lang['en'] += array(
	'pig.title' => 'Use the following steps to accept Peercoins on your website:',
	'pig.step1' => 'Use the Bulk Wallet tab at <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a> to pre-generate a large number of Peercoin addresses. Copy and paste the generated comma separated values (CSV) list to a secure text file on your computer. Back up the file to a secure location.',
	'pig.step2' => 'Import the public peercoin addresses into a database table on your web server. Do not import the private keys, but instead keep them offline in order to protect them from hackers.',
	'pig.step3' => 'Provide an option on your website shopping cart for your customer to pay in Peercoin. When this option is selected, display one of the addresses from your database to the customer as a payment address, and save it with the shopping cart order.',
	'pig.step4' => 'Use a block explorer to detect the incoming payment. One such service can be found at <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'Peercoins sent to the imported addresses are secured by their private keys. To spend them, use the original wallet file generated in step 1.',
	'pig.step6' => 'If you encounter any issues, feel free to post in the <a href="http://peercointalk.org">community forums</a>.',
	
);


$lang['en'] += array(
	'waldownload.download' => 'Download',
	'waldownload.source' => 'Source Code',
	'waldownload.license' => 'License',
	'waldownload.other_platforms' => 'Other platforms',
	'waldownload.signatures' => 'Signatures',
	'waldownload.qt_title' => 'Peercoin-QT',
	'waldownload.peerunity_title' => 'Peerunity',	
);


$lang['en'] += array(
	// Wallet
	'wallet.title' => 'Wallets',
	'wallet.desc' => 'A Peercoin wallet is an application used to store and transact Peercoins with other users. Peercoin has two desktop wallets: Peerunity and Peercoin-QT. We recommend Peerunity for most users. For more information on how to use your wallet software, visit the <a href="newcomers">Newcomers page</a>.',
	'wallet.peerunity' => 'Peerunity (recommended)',
	'wallet.peerunity_desc' => 'Peerunity is developed by the Peercoin community. It includes features beyond the core protocol wallet, such as one-click minting and coin control. It features new Peercoin style theme and dedicated minting tab.',
	'wallet.peercoinqt' => 'Peercoin-QT<br>(core protocol)',
	'wallet.peercoinqt_desc' => 'Peercoin-QT is Peercoin’s core protocol, built and maintained by Peercoin developer Sunny King. It receives only high-priority updates.',
	'wallet.paper_wallet' => 'Paper Wallet',
	'wallet.paper_wallet_desc' => 'A paper wallet stays completely offline, printed onto on a piece of paper for safekeeping. Use a paper wallet if you want to limit access to your Peercoins, and plan to store them for a long period of time.',
	'wallet.android_wallet' => 'Android Wallet',
	'wallet.android_wallet_desc' => 'A mobile Peercoin wallet that allows you to manage your Peercoins without carrying a fullsized blockchain on your mobile phone. It conserves precious space on your android device and allows you to take your coins with you, wherever you are.',
	'wallet.bkchain_wallet' => 'Bkchain Wallet',
	'wallet.bkchain_wallet_desc' => 'Bkchain is an online, client-side wallet. It allows you to access your peercoins with a web browser using an electrum-like 12 word seed.',
	'wallet.download' => 'Download',
	'wallet.visit_site' => 'Visit',
);


$lang['en'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'Download PDF',
	'whitepaper.software' => 'The whitepapers are available in Portable Document Format (PDF). Please use your preferred <a href="http://pdfreaders.org/">software for reading</a>.',

);

$lang['en'] += array(
	'mineguide.title' => 'Follow these steps to start mining Peercoin!',
	'mineguide.step1' => 'Set up the wallet software',
	'mineguide.step1_desc' => 'If you haven\'t yet, download the <a href="wallet">Peercoin wallet</a>.',
	'mineguide.step2' => 'Select a mining pool',
	'mineguide.step2_poollist' => 'Peercoin-dedicated pools:',
	'mineguide.step2_multipoollist' => 'Multicoin pools:',
	'mineguide.step3' => 'Sign up with the pool',
	'mineguide.step3_desc' => 'Follow the instructions on the pool website.',
);
