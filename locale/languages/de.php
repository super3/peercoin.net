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

	'second_ago' => 'Sekunde her',
	'seconds_ago' => 'Sekunden her',

	'website' => 'Webseite',
	'forum' => 'Forum',
);


$lang['de'] += array(
	// Header
	'header.get_started' => 'Leg los',
	'header.newcomers' => 'Neulinge',
	'header.investors' => 'Investoren',
	'header.merchants' => 'Händler',
	'header.miners' => 'Miner',
	'header.developers' => 'Entwickler',

	'header.learn' => 'Lernen',
	'header.frequently_asked_questions' => 'Häufig gestellte Fragen',
	'header.peercoin_whitepaper' => 'Peercoin Whitepaper',
	'header.exchanges' => 'Handelsplätze',
	'header.mint_peercoins' => 'Präge Peercoins',

	'header.wallet' => 'Geldbörse',

	'header.community' => 'Gemeinschaft',

	'header.languages' => 'Sprachen',
);

$lang['de'] += array(
	// Index page
	'index.why_peercoin' => 'Warum Peercoin',
	'index.download_wallet' => 'Geldbörse Downloaden',
	'index.price' => 'Preis',
	'index.market_cap' => 'Marktkapitalisierung',
	'index.total_supply' => 'Gesamtmenge',
	'index.last_updated' => 'Letztes Update:',
	'index.last_updated_never' => 'nie',
	'index.why_peercoin_q' => 'Warum <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin strebt an die sicherste und kostengünstige Kryptowährung zu werden und dabei jeden Nutzer für seinen Anteil an der Sicherung des Netzwerks zu belohnen..',
	'index.built_to_last' => 'Für <b>Beständigkeit</b> konzipiert',
	'index.built_to_last_desc' => 'Der weltweit erste Proof-of-Stake Coin.',
	'index.fair_distribution' => '<b>Faire</b> Verteilung',
	'index.fair_distribution_desc' => 'Kein Insider Vorverkauf oder Vorab-Mining.',
	'index.transparent_protocol' => '<b>Transparentes</b> Protokoll',
	'index.transparent_protocol_desc' => 'Die Software und damit das Netzwerk ist komplett Open Source.',
	'index.energy_efficient' => '<b>Energieeffizient</b>',
	'index.energy_efficient_desc' => 'Präge Peercoins mit jedem Gerät.',
	'index.learn_more' => 'Lerne mehr',
	'index.get_started' => 'Los geht\'s',
	'index.newcomers' => 'Neulinge',
	'index.newcomers_desc' => '﻿Learne wie du Peercoins kaufen, verkaufen, ausgeben und aufbewahren kannst.',
	'index.investors' => 'Investoren',
	'index.investors_desc' => 'Coins Prägen erzielt einen garantierten Ertrag von 1&#37;.',
	'index.merchants' => 'Händler',
	'index.merchants_desc' => 'Es ist Zeit Transaktionsgebühren einzusparen.',
	'index.miners' => 'Miner',
	'index.miners_desc' => '﻿Verwende deine Mining Ausrüstung sinnvoll.',
	'index.developers' => 'Entwickler',
	'index.developers_desc' => 'Schau dir an was wir für Innovationen in der Pipeline haben.',
	'index.newsletter' => 'Newsletter',
	'index.newsletter_placeholder' => 'E-Mailadresse eingeben...',
	'index.newsletter_submit' => 'Trag mich ein!',
);


$lang['de'] += array(
	//Investors
	'investors.established_network' => 'Etabliertes Netzwerk',
	'investors.established_network_desc' => 'Peercoin wurde 2012 veröffentlich was es weltweit zu einem der ältesten und bewährtesten Netzwerken macht.',
	'investors.limited_supply' => 'Limitierte Geldmenge',
	'investors.limited_supply_desc' => 'Peercoins jährliche Inflationsrate betrug im Jahr 2014 durchschnittlich unter 5&#37; und fällt weiter. Siehe <a href="http://peerchain.net/charts.html">peerchain.net</a> für detaillierte historische Daten.',
	'investors.efficient_security' => 'Effiziente Sicherheit',
	'investors.efficient_security_desc' => 'Peercoin ist der erste Proof-of-Stake Coin. Im Gegensatz zu Proof-of-Work Coins benötigt er keine großen Mengen an Rechenleistung um sein Netzwerk zu sichern. Du willst tiefergehende Informationen? Schau dir das <a href="whitepaper">Peercoin whitepaper</a> an.',
	'investors.guaranteed_returns' => 'Garantierter Gewinn',
	'investors.guaranteed_returns_desc' => 'Sobald du deine Peercoins mindestens 30 Tage gehalten hast darfst du mit ihnen 1&#37; pro Jahr durch das Prägen weiterer Coins zu verdienen. <a href="minting">Erfahre mehr</a>.',

);


$lang['de'] += array(
	//Merchants
	'merchants.instant' => 'Erhalte dein Geld sofort',
	'merchants.instant_desc' => 'Transaktionen werden dank Peercoin Blockchain Technologie sehr zeitnah durchgeführt. Zusätzlich kann ein Blockexplorer dazu benutzt werden Überweisungen sofort zu verifizieren.',
	'merchants.no_chargebacks' => 'Vermeide Chargebacks',
	'merchants.no_chargebacks_desc' => 'Sobald eine Überweisung vom Netzwerk bestätigt wurde, ist sie durch Weltklasse Kryptografie gesichert und kann von Kunden nicht mehr rückgängig gemacht werden.',
	'merchants.no_transaction_fees' => 'Spare Transaktionsgebühren',
	'merchants.no_transaction_fees_desc' => 'Um eine Bezahlung durchzuführen muss vom Kunden eine Transaktionsgebühr von gerademal 0.01 Peercoin gezahlt werden. Als Händler und damit Empfänger des Geldes zahlst du nichts.',

);


$lang['de'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Kompatibel zu Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin nutzt genauso wie Bitcoin SHA-256 als Mining-Algorithmus. Hardware die zum Bitcoin Mining eingesetzt werden kann lässt sich auch zum Peercoin Mining verwenden.',
	'mining.fair_distribution' => 'Faire Verteilung',
	'mining.fair_distribution_desc' => 'Proof-of-Work Mining wird verwendet um die Verteilung der Peercoins sicherzustellen. Die Netzwerksicherheit wird ausschließlich über Proof-of-Stake gewährleistet. Dies bedeutet das Probleme wie Selfish-Mining sie unter Bitcoin verursacht für die Sicherheit von Peercoin nicht relevant sind.',
	'mining.sustainable_reward' => 'Nachhaltige Entlohnung',
	'mining.sustainable_reward_desc' => 'Die Entlohnung pro erzeugtem Block reduziert sich schrittweise solange die für das Mining verwendete Rechenleistung steigt. Im Laufe der Zeit wird Mining eine immer geringere Rolle im Bezug auf die Geldmenge spielen.',
);


$lang['de'] += array(
	'mintguide.title' => 'Folge der Anleitung deiner Peercoin Software um mit dem Prägen neuer Münzen zu beginnen!',
	'mintguide.qt_step1' => 'Stelle sicher das deine Geldbörse mit einer guten Passphrase gesichert ist. Schreibe sie auf und bewahre sie sicher auf. Wenn du deine Passphrase vergisst verlierst du deine Coins. Die Verschlüsselungsfunktion findest du im Peercoin-Qt Client unter "Einstellungen".',
	'mintguide.qt_step2' => 'Um mit dem Prägen zu beginnen gehe zu "Help" -> "Debug Window" -> "Console" und gib folgendes ein: <br><kbd>walletpassphrase abc 999999 true</kbd><br> "abc" ersetzt du mit deiner Passphrase und "999999" ist die Zeit in Sekunden die du mit Prägen verbringen möchtest. Du kannst den Zeitraum variieren doch normalerweise ist es das einfachste einen möglichst langen Zeitraum zu wählen. Wenn deine Passphrase Leerzeichen enthält setze sie in Anführungszeichen.',
	'mintguide.qt_step3' => 'Lösche deine Passphrase indem du Ctrl-L gleichzeitig drückst.',
	'mintguide.qt_step4' => 'Du kannst überprüfen ob du gerade Münzen prägst indem auf das kleine Vorhängeschloss in der unteren rechten Ecke deines Clients schaust. Nach ein paar Augenblicken sollte es aufschnappen. Wenn du deine Maus darüber bewegst sollte so etwas wie "Wallet is encypted and currently unlocked for block minting only" angezeigt werden.',
	'mintguide.peerunity' => 'Peerunity ist ein Client der von der Peercoin Gemeinschaft entwickelt wird. Er hat mehr Funktionen als der Standard Peercoin v0.4 Client und hat ausserdem eine einfachere Funktion um das Prägen neuer Münzen zu aktivieren. Peerunity ist verfügbar für Windows, Linux, und OS X. Du kannst ihn über seinen <a href="http://www.peercointalk.org/index.php?topic=2902.0">Veröffentlichungs-Thread</a> herunterladen.',
	'mintguide.peerunity_step1' => 'Stelle sicher das deine Geldbörse mit einer guten Passphrase gesichert ist. Schreibe sie auf und bewahre sie sicher auf. Wenn du deine Passphrase vergisst verlierst du deine Coins. Die Verschlüsselungsfunktion findest du im Peerunity Client unter "Einstellungen".',
	'mintguide.peerunity_step2' => 'Um mit dem Prägen neuer Münzen zu beginnen klicke einfach auf den "Unlock Wallet for Minting Only" Knopf, gib deine Passphrase ein und drücke OK.',
	'mintguide.peerunity_step3' => 'Du kannst überprüfen ob du gerade Münzen prägst indem auf das kleine Vorhängeschloss in der unteren rechten Ecke deines Clients schaust. Nach ein paar Augenblicken sollte es aufschnappen. Wenn du deine Maus darüber bewegst sollte so etwas wie "Wallet is encypted and currently unlocked for block minting only" angezeigt werden.',

);


$lang['de'] += array(
	// minting
	'minting.mint_anywhere' => 'Präge überall',
	'minting.mint_anywhere_desc' => 'Die meisten Kryptowährungen erfordern dafür spezielle Hardware, doch Peercoins können auf jedem Gerät geprägt werden auf dem Peercoin Software läuft. Prägen ist energieeffizient da keine Rechenleistung sondern nur bereits existierende Peercoins benötigt werden.',
	'minting.secure_the_network' => 'Sichere das Netzwerk',
	'minting.secure_the_network_desc' => 'Jedes Mal wenn du über den Prägeprozess einen Block generierst hilfst du dabei das Netzwerk zu sichern. Um das Peercoin Netzwerk angreifen zu können muss ein Angreifer die Kontrolle über die Mehrheit aller im Prägungsprozess befindlichen Peercoins gewinnen. Sollte er dies schaffen und einen Angriff ausführen würde er dabei vor allem seinem eigenen Vermögen empfindlich schaden.',
	'minting.earn_reward' => 'Verdiene dir eine Belohnung',
	'minting.earn_reward_desc' => 'Durch den Prägunsprozess gewinnst du jährlich 1&#37; dazu. Peercoins können erstmalig 30 Tage nach ihrer letzten Transaktion zum Prägen neuer Coins verwendet werden. Nach 90 Tagen erhöht sich ihre Prägungseffizienz auf das Maximum. Wenn du den Prägungsprozess häufiger anstößt wird sich deine Entlohnung aufsummieren.',

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
	'wallet.desc' => 'A Peercoin wallet is an application used to store and transact Peercoins with other users. Peercoin has two desktop wallets: Peerunity and Peercoin-QT. We recommend Peerunity for most users. For more information on how to use your wallet software, visit the <a href="newcomers">Newcomers page</a>.',
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