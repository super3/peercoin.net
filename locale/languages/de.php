<?php
$lang['de'] = array();

$lang['de'] += array(
	//Developers
	'developers.rapid_pace' => 'Die Entwicklung von Peercoin schreitet mit hoher Geschwindigkeit voran.',
	'developers.core_protocol' => 'Kernprotokoll',
	'developers.core_protocol_desc' => 'Die nächste Version des Geldbörsen-Kernprotokolls (Version 0.5) wird folgende Funktionen enthalten:',
	'developers.cold_wallet_minting' => 'Prägung ohne Netzwerkverbindung',
	'developers.cold_wallet_minting_desc' => 'Momentan muss eine Geldbörse mit dem Netzwerk verbunden sein um neue Münzen zu prägen. Ist sie mit dem Netz verbunden bezeichnet man sie auch als <strong>heiße Geldbörse</strong>. Bei einer heißen Geldbörse besteht allerdings die Gefahr das sie durch Malware auf ihrem Host-System angegriffen und ausgeräumt wird, da ihr Host ebenfalls für den gesamten Prägungsprozess mit dem Internet verbunden bleiben muss. Um dieses Problem zu beheben wird es ab der nächsten Peercoin Version spezielle <strong>Prägungsschlüssel</string> geben die es einem Nutzer erlauben neue Peercoins zu erzeugen und gleichzeitig die zum Versenden von Geld nötigen Hauptschlüssel offline halten zu können.',
	'developers.optional_checkpointing' => 'Optionale Checkpoints',
	'developers.optional_checkpointing_desc' => 'Heutzutage nutzt das Peercoin Netzwerk ein zentrales Checkpointing System um sich gegen Angriffe zu schützen. Da das Netzwerk immer weiter wächst, wird dieser Sicherheitsmechanismus allerdings immer unwichtiger weshalb es in der nächste Peercoin Version die Möglichkeit geben wird ihn zu deaktivieren. In späteren Versionen wird er voraussichtlich von vornherein deaktiviert ausgeliefert.',
	'developers.peercoin_ecosystem' => 'Peercoin Ökosystem',
	'developers.peer4commit' => 'Würdest du dich gerne an der Peercoin Entwicklung beteiligen <strong>und</strong> und dafür bezahlt werden? Hier ist deine Chance! <a href="http://peer4commit.com/">Peer4commit</a> bietet einen zentralen Hub für Projekte rund um Peercoin. Du kannst:',
	'developers.peer4commit.1' => 'Ein Projekt auf der Seite auswählen, Arbeit für das Projekt verrichten und dafür Peercoins als Entlohnung erhalten.',
	'developers.peer4commit.2' => 'Ein existierendes Projekt unterstützen indem du ihm Peercoins zukommen lässt.',
	'developers.peer4commit.3' => 'Dir ein neues Projekt ausdenken, es hinzufügen und Peercoins für die Entwicklung des Projekts erhalten',
	'developers.what_are_you_waiting_for' => 'Also auf was wartest du?',
	'developers.get_started' => 'Lege los mit Peer4Commit',
	'developers.notable_community_projects' => 'Aktuelle Gemeinschaftsprojekte',
	'developers.peerunity_desc' => '<b>Peerunity</b> ist eine Geldbörsen-Software die von der Peercoin Gemeinschaft entwickelt wird. Sie enthält viele zusätzliche Funktionen die der offiziellen Geldbörsen-Software fehlen wie zum beispiel CoinControl und Ein-Klick-Peercoin-Prägung. Zukünftige Veröffentlichungen werden eine überarbeitete Oberfläche, die Integration von Peershares und einen Reiter für Peercoin-Prägung beinhalten.',
	'developers.peershares_desc' => '<b>Peershares</b> ist ein kostengünstiges und dezentrales Bestandsbuch das von Unternehmen genutzt werden kann um Anteilsscheine auszugeben, zurückzuverfolgen wer wie viele Anteile besitzt und automatisch Dividenden an Anteilseigner auszuzahlen. Jedes Unternehmen das Peershares nutzt bekommt seine eigene Blockchain und wird kostengünstig über das Proof-of-Stake System von Peercoin gesichert.',
	'developers.peerbox_desc' => '<b>Peerbox</b> ist ein aktiv in Entwicklung befindliches, sicheres Betriebssystem um darauf Peercoins Knoten laufen zu lassen und neue Peercoins zu prägen. Sein Fokus liegt auf günstigen, energieeffizienten Geräten wie dem Raspberry Pi, welche dazu geeignet sich dem Ziel einer energieeffizienten Kryptowährung näher zu kommen. Wenn ASIC ein Begriff für dezidiertes und energieeffizientes Mining ist, dann ist Peerbox ASIC für Proof-of-Stake.',
	'developers.nubits_desc' => '<b>NuBits</b> ist ein noch unveröffentlichtes Projekt des Peershares Entwickler Jordan Lee und wird die erste Implementierung auf Basis von Peershares sein. Das Ziel von NuBits ist das Problem der starken Wertschwankungen von Kryptowährungen zu lösen.',
);

$lang['de'] += array(
	//Exchanges
	'exchanges.what_are' => 'Was ist ein Handelsplatz?',
	'exchanges.what_are_desc' => 'Ein <b>Handelsplatz</b> ermöglicht es dir von Regierungen geschtüzte Währungen, wie zum Beispiel US Dollar oder Euro gegen Peercoins zu tauschen. Weiterhin ermöglichen Handelsplätze den Tausch von Peercoins gegen andere Kryptowährungen wie zum Beispiel Bitcoin.',
	'exchanges.buy_sell' => 'Einen Auftrag platzieren',
	'exchanges.buy_sell_desc' => 'Ein Handel beginnt durch die Platzierung eines Auftrag zum Kauf oder Verkauf von Geld in einer Währungseinheit. Erstelle einen <b>Kaufauftrag</b> um eine Bestimmte Anzahl an Peercoins zu einem bestimmten Preis zu erhalten. Erstelle einen <b>Verkaufsauftrag</b> um Peercoins zu verkaufen. Sobald zwei Aufträge sich preislich überschneiden wird der Handel automatisch durchgeführt und die Konten beider Parteien werden entsprechend belastet. Ein <b>Auftrag zum Marktpreis</b> wird sofort ausgeführt wobei der aktuelle Marktpreis für die entsprechende Menge angewandt wird.',
	'exchanges.fees' => 'Gebühren',
	'exchanges.fees_desc' => 'Jedes Mal wenn ein Handel durchgeführt wird, wird ein kleiner Prozentbetrag des Handelsvolumens an den Handelsplatz gezahlt um ihn für seine Dienstleistung zu entlohnen. Diesen Betrag nennt man <b>Handelsgebühr</b>. Manche Handelsplätze erheben auch <b>Abhebegebühren</b> wenn du deine neuen Peercoins vom Handelsplatz in deine lokale Geldbörse transferierst.',
	'exchanges.choosing' => 'Wähle einen Handelsplatz',
	'exchanges.disclaimer' => 'Mahnung: Stell sicher das du deine Peercoins vom Handelsplatz abziehst nachdem du sie gekauft hast. Peercoins in deiner eigenen Geldbörse zu verwahren ist sicherer und berechtigt dich darüber hinaus dazu die 1&#37; Belohnung für das Prägen weiter Peercoins einzustreichen.',
	'exchanges.location' => 'Ort',
	'exchanges.notes' => 'Anmerkung',
	'exchanges.visit' => 'Besuchen',
);


$lang['de'] += array(
	'footer.links' => 'Links',
	'footer.tools' => 'Werkzeuge',
	'footer.exchanges' => 'Handelsplätze',
	'footer.mining' => 'Prägen',
);

$lang['de'] += array(
	// FAQ
	'faq.yes' => 'Ja',
	'faq.no' => 'Nein',
	'faq.sources' => 'Quellen',
	'faq.q1' => 'Wurde Peercoin fair veröffentlicht?',
	'faq.q1_ans' => 'Sunny King hat die Veröffentlichung von Peercoin 9 Tage vorab bekanntgegeben. Es wurden keine Blöcke und damit auch keine Peercoins vorab erzeugt. Ein Forenmitglied schrieb: “[Sunny King] released a link to the source in the other thread at the promised time (5 min before 18:00 UTC). There was no premine. By the time I had built from source and got things running, there were 5 blocks mined.”',
	'faq.q2' => 'Was soll mit dem zentral gesteuerten Checkpoints bezweckt werden?',
	'faq.q2_ans' => 'Seit Version 0.2 ist das zentralisierte Checkpointing-System kein kritischer Teil des Protokolls mehr. Sein Zweck ist das Netzwerk in seiner ersten Wachstumsphase zu schützen und Netzwerkweite Updates zu erleichtern. Das System wird nun schritt für schritt abgeschwächt und wird letztendlich entfernt. Sobald es entfernt ist wird Peercoin genauso dezentral organisiert sein wie Bitcoin. Die Checkpoints existieren ausschließlich als Sicherheit und Backup um das Netzwerk retten zu können sollte etwas unvorhergesehen katastrophales geschehen.',
	'faq.q3' => 'Ist Peercoin ein Bitcoin Klon?',
	'faq.q3_ans' => 'Peercoin ist einer der wenigen wirklich echten alternativen Coins. Seine Codebasis stammt zwar von Bitcoin doch führte er als erster Coin das Proof-of-Stake Konzept zur Netzwerksicherung ein. Proof-of-Work findet zwar auch Anwendung im Peercoin Protkoll, allerdings nur um die fairere Verteilung der Coins sicherzustellen. Zur Sicherung des Netzwerkes wird Proof-of-Work nicht benötigt.',
	'faq.q4' => 'Ist Peercoin ein pump-and-dump Coin?',
	'faq.q4_ans' => 'Peercoin bietet innovative Funktionen, aktive Entwickler und einen hohen Beteiligungsgrad der Peercoin-Gemeinschaft. Seit August 2014 ist Peercoin zwei Jahre alt und weist eine Marktkapitalisierung von $20 Millionen auf.',
	'faq.q5' => 'Sind die 1&#37; Vergütung für die Prägung neuer Coins gerecht für alle Nutzer?',
	'faq.q5_ans' => 'Durch den Prägungsprozess wächst die gesamte Geldmenge an. Da jeder, der sich an der Prägung beteiligt, 1&#37; neue Coins erhält behält jeder seinen relativen Anteil an der Gesamtgeldmenge bei. Auch wenn Besitzer großer Mengen Peercoins dadurch in absoluten Zahlen mehr Coins generieren können steigt dadurch ihr relativer Anteil an der Gesamtmenge nicht an.',
	'faq.q6' => 'Ist Peercoin inflationär?',
	'faq.q6_ans' => 'Die Änderung der Geldmenge wird bestimmt durch:',
	'faq.q6_l1' => 'Proof-of-Work Mining (erhöht die Geldmenge)',
	'faq.q6_l2' => 'Die Anzahl an Transaktionen (vermindert die Geldmenge um 0.01 PPC pro Transaktion)',
	'faq.q6_l3' => 'Proof-of-Stake Prägungsprozess (erhöht die Geldmenge um bis zu 1&#37; pro Jahr)',
	'faq.q6_ans2' => 'Dank sich erhöhender Beteiligung am Mining lag die Inflationsrate von Peercoin beständig unter 5&#37; für die erste Hälfte des Jahres 2014. Bei gleichbleibender Entwicklung wird die Inflationsrate noch weiter sinken und Peercoin zu einer der nachhaltigsten Kryptowährungen weltweit machen.',

);


$lang['de'] += array(
	// Global
	'homepage_title' => '﻿Peercoin - Sicher & nachhaltige Kryptowährung.',

	'second_ago' => 'Sekunde vergangen',
	'seconds_ago' => 'Sekunden vergangen',

	'website' => 'Webseite',
	'forum' => 'Forum',
);


$lang['de'] += array(
	// Header
	'header.get_started' => 'Get started',
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

$lang['de'] += array(
	// Index page
	'index.why_peercoin' => 'Why Peercoin',
	'index.download_wallet' => 'Download Wallet',
	'index.price' => 'Price',
	'index.market_cap' => 'Market Cap',
	'index.total_supply' => 'Total Supply',
	'index.last_updated' => 'Last Updated:',
	'index.last_updated_never' => 'never',
	'index.why_peercoin_q' => 'Why <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin seeks to be the most secure cryptocoin at the lowest cost, by rewarding all users for strengthening the network.',
	'index.built_to_last' => 'Built <b>to Last</b>',
	'index.built_to_last_desc' => 'The world\'s first Proof-of-Stake coin.',
	'index.fair_distribution' => '<b>Fair</b> Distribution',
	'index.fair_distribution_desc' => 'No insider pre-sale or instant mining.',
	'index.transparent_protocol' => '<b>Transparent</b> Protocol',
	'index.transparent_protocol_desc' => 'The network is fully open source.',
	'index.energy_efficient' => 'Energy <b>Efficient</b>',
	'index.energy_efficient_desc' => 'Mint Peercoins on any device.',
	'index.learn_more' => 'Learn more',
	'index.get_started' => 'Get started',
	'index.newcomers' => 'Newcomers',
	'index.newcomers_desc' => '﻿Learn how to buy, sell, spend, and store Peercoin.',
	'index.investors' => 'Investors',
	'index.investors_desc' => 'Minting yields a guaranteed 1&#37; reward.',
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


$lang['de'] += array(
	//Investors
	'investors.established_network' => 'Established Network',
	'investors.established_network_desc' => 'Peercoin was launched in 2012, making it one of the oldest and most reliable cryptocoin networks in existence.',
	'investors.limited_supply' => 'Limited Supply',
	'investors.limited_supply_desc' => 'Peercoin’s annual inflation rate has averaged below 5&#37; during the year 2014, and continues to fall. See <a href="http://peerchain.net/charts.html">peerchain.net</a> for detailed historic data.',
	'investors.efficient_security' => 'Efficient Security',
	'investors.efficient_security_desc' => 'Peercoin is the first proof-of-stake coin, which means it doesn’t require massive computing power to secure the network. Get into the nitty-gritty with the <a href="whitepaper">Peercoin whitepaper</a>.',
	'investors.guaranteed_returns' => 'Guaranteed Returns',
	'investors.guaranteed_returns_desc' => 'After Peercoins are held for 30 days, they are eligible to earn a 1&#37; annualized reward. <a href="minting">Click here to learn more</a>.',

);


$lang['de'] += array(
	//Merchants
	'merchants.instant' => 'Get paid instantly',
	'merchants.instant_desc' => 'Transactions are processed almost immediately via Peercoin’s blockchain technology. A block explorer instantly verifies an incoming payment.',
	'merchants.no_chargebacks' => 'Avoid chargebacks',
	'merchants.no_chargebacks_desc' => 'Once a payment has been confirmed by the network, it is secured by world-class cryptography, making it impossible for the customer to reverse.',
	'merchants.no_transaction_fees' => 'Cut out transaction fees',
	'merchants.no_transaction_fees_desc' => 'To make a payment, each sender pays a fee of just 0.01 Peercoin. As a merchant, you pay absolutely nothing.',

);


$lang['de'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Compatible with Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin uses the same mining algorithm as Bitcoin, known as SHA-256. Any hardware that works on the Bitcoin network can also be used to mine Peercoins.',
	'mining.fair_distribution' => 'Fair Distribution',
	'mining.fair_distribution_desc' => 'Proof of Work mining is used to spread the distribution of new coins, while the security of the network is maintained entirely by Proof of Stake minting. This means that Bitcoin mining vulnerabilities such as Selfish Mining do not impact Peercoin security.',
	'mining.sustainable_reward' => 'Sustainable Reward',
	'mining.sustainable_reward_desc' => 'The reward for mining a block gradually declines as the computing power of the network grows. Over time, mining will have an ever-decreasing impact on the growth of the money supply.',
);


$lang['de'] += array(
	'mintguide.title' => 'Follow the guide corresponding to your Peercoin client to start minting!',
	'mintguide.qt_step1' => 'Ensure your wallet is encrypted with a good passphrase. Write this down and keep it somewhere safe; if you forget the passphrase you will lose your coins. The wallet encryption option can be found under the settings tab in the Peercoin-Qt wallet program.',
	'mintguide.qt_step2' => 'To start minting go to help -> debug window -> console and enter: <br><kbd>walletpassphrase abc 999999 true</kbd><br> where "abc" is your passphrase and "999999" is the time you want to mint for in seconds. You can change the amount of time to whatever you like, but it is usually easiest just to set it at a very high number. If your passphrase has spaces then enclose it in quotation marks.',
	'mintguide.qt_step3' => 'Clear your passphrase by pressing Ctrl-L.',
	'mintguide.qt_step4' => 'You can check you are minting by looking at the little padlock in the bottom right corner of the client. After a few moments it should become unlocked. If you hover your mouse over it, it should say "Wallet is encypted and currently unlocked for block minting only".',
	'mintguide.peerunity' => 'Peerunity is a client developed by the Peercoin community. It has more features than the standard Peercoin v0.4 client, and also has an easier method for minting. It is available for Windows, Linux, and OS X. You can download it here and view the launch thread <a href="http://www.peercointalk.org/index.php?topic=2902.0">here</a>.',
	'mintguide.peerunity_step1' => 'Ensure your wallet is encrypted with a good passphrase. Write this down and keep it somewhere safe; if you forget the passphrase you will lose your coins. The wallet encryption option can be found under the settings tab in Peerunity.',
	'mintguide.peerunity_step2' => 'To start minting, simply press the "Unlock Wallet for Minting Only" button, enter your passphrase and press OK.',
	'mintguide.peerunity_step3' => 'You can check you are minting by looking at the little padlock in the bottom right corner of the client. After a few moments it should become unlocked. If you hover your mouse over it, it should say "Wallet is encypted and currently unlocked for block minting only".',

);


$lang['de'] += array(
	// minting
	'minting.mint_anywhere' => 'Mint Anywhere',
	'minting.mint_anywhere_desc' => 'Most cryptocoin mining requires specialized hardware, but Peercoin minting can be done on any computer. Minting is energy-efficient, because it is based on the Peercoins you hold, rather than on your processing power.',
	'minting.secure_the_network' => 'Secure the Network',
	'minting.secure_the_network_desc' => 'Each time your minting generates a block, your coins help guard the network. To reliably attack the Peercoin network, a malicious user must control the majority of all minting coins, which could even end up harming his own investment.',
	'minting.earn_reward' => 'Earn a Reward',
	'minting.earn_reward_desc' => 'Minting earns you 1&#37; annually. Coins are first eligible to mint 30 days after they have been transferred, and after 90 days, their chance of success is maximized. If you mint more often, your earnings will compound!',

);


$lang['de'] += array(
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


$lang['de'] += array(
	'pig.title' => 'Use the following steps to accept Peercoins on your website:',
	'pig.step1' => 'Use the Bulk Wallet tab at <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a> to pre-generate a large number of Peercoin addresses. Copy and paste the generated comma separated values (CSV) list to a secure text file on your computer. Back up the file to a secure location.',
	'pig.step2' => 'Import the public peercoin addresses into a database table on your web server. Do not import the private keys, but instead keep them offline in order to protect them from hackers.',
	'pig.step3' => 'Provide an option on your website shopping cart for your customer to pay in Peercoin. When this option is selected, display one of the addresses from your database to the customer as a payment address, and save it with the shopping cart order.',
	'pig.step4' => 'Use a block explorer to detect the incoming payment. One such service can be found at <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'Peercoins sent to the imported addresses are secured by their private keys. To spend them, use the original wallet file generated in step 1.',
	'pig.step6' => 'If you encounter any issues, feel free to post in the <a href="http://peercointalk.org">community forums</a>.',
	
);


$lang['de'] += array(
	'waldownload.download' => 'Download',
	'waldownload.source' => 'Source Code',
	'waldownload.license' => 'License',
	'waldownload.other_platforms' => 'Other platforms',
	'waldownload.signatures' => 'Signatures',
	'waldownload.qt_title' => 'Peercoin-QT',
	'waldownload.peerunity_title' => 'Peerunity',	
);


$lang['de'] += array(
	// Wallet
	'wallet.title' => 'Wallets',
	'wallet.desc' => 'A Peercoin wallet is an application used to store and transact Peercoins with other users. Peercoin has two desktop wallets: Peerunity and Peercoin-QT. We recommend Peerunity for most users. For more information on how to use your wallet software, visit the <a href="newcomer">Newcomers page</a>.',
	'wallet.peerunity' => 'Peerunity (recommended)',
	'wallet.peerunity_desc' => 'Peerunity is developed by the Peercoin community. It includes features beyond the core protocol wallet, such as one-click minting and coin control. Future releases will contain a redesigned control panel, Peershares integration, and a dedicated Minting tab.',
	'wallet.peercoinqt' => 'Peercoin-QT<br>(core protocol)',
	'wallet.peercoinqt_desc' => 'Peercoin-QT is Peercoin’s core protocol, built and maintained by Peercoin developer Sunny King. It receives only high-priority updates.',
	'wallet.paper_wallet' => 'Paper Wallet',
	'wallet.paper_wallet_desc' => 'A paper wallet stays completely offline, printed onto on a piece of paper for safekeeping. Use a paper wallet if you want to limit access to your Peercoins, and plan to store them for a long period of time.',
	'wallet.download' => 'Download',
);


$lang['de'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'Download PDF',
	'whitepaper.software' => 'The whitepapers are available in Portable Document Format (PDF). Please use your preferred <a href="http://pdfreaders.org/">software for reading</a>.',

);