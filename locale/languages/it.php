<?php
$lang['it'] = array();
$lang['it'] += array(
	//Developers
	'developers.rapid_pace' => 'Lo sviluppo di Peercoin procede rapidamente.',
	'developers.core_protocol' => 'Protocollo Centrale',
	'developers.core_protocol_desc' => 'La prossima edizione del portafoglio protocollo core, la versione 0.5, conterrà le seguenti funzionalità:',
	'developers.cold_wallet_minting' => 'Coniatura con Portafoglio Spento',
	'developers.cold_wallet_minting_desc' => 'Al momento, per coniare nuove monete, gli utenti devono avere il portafoglio connesso alla rete, che é conosciuto come <strong>hot wallet</strong>. Hot wallets sono a maggior rischio malware, in quanto devono rimanere connessi ad internet durante il processo di coniazione. Nella prossima versione di Peercoin, speciali <strong>chiavi di coniazione</strong> permetteranno agli utenti di coniare mantenedo le loro chiavi di spesa completamente offline.',
	'developers.optional_checkpointing' => 'Checkpointing Opzionale',
	'developers.optional_checkpointing_desc' => 'Oggi, la rete utilizza un sistema con checkpoint centralizzato per proteggere contro attacchi. Il bisogno di questo sistema di sicurezza diminuisce con il crescere della rete, questo permette alla prossima versione di avere questi checkpoints opzionali. Le future versioni avranno i checkpoints disattivati in modo predefinito.',
	'developers.peercoin_ecosystem' => 'L\'Ecosistema Peercoin',
	'developers.peer4commit' => 'Ti piacerebbe partecipare allo sviluppo di Peercoin <strong>ed</strong> essere pagato? Ecco come fare! <a href="http://peer4commit.com/">Peer4commit</a> mette a disposizione un hub centrale per lo sviluppo. Qui puoi:',
	'developers.peer4commit.1' => 'Scegli un progetto sul sito, lavoraci su, e ricevi peercoins come remunerazione.',
	'developers.peer4commit.2' => 'Scegli un progetto che ti piacerebbe supportare, e contribuisci allo sviluppo di peercoin.',
	'developers.peer4commit.3' => 'Pensa ad un nuovo progetto, inviacelo, e ricevi donazioni per il suo sviluppo.',
	'developers.what_are_you_waiting_for' => 'Allora, che cosa stai aspettando?',
	'developers.get_started' => 'Comincia subito con Peer4Commit',
	'developers.notable_community_projects' => 'Progetti correnti della comunità',
	'developers.peerunity_desc' => '<b>Peerunity</b> è un portafoglio software che è sviluppato e mantenuto dalla comunità Peercoin. Include molte caratteristiche aggiuntive che mancano al portafoglio ufficiale, come controllo monete e coniazione con un solo click. Le prossime edizioni conterranno un nuovo design, integrazione con Peershares e una tab per la coniazione.',
	'developers.peershares_desc' => '<b>Peershares</b> è un economico libro mastro da essere utilizzato da aziende per raccogliere fondi, tracciare la condivisione della titolarità e la distribuzione dei dividendi in modo automatico. Ogni azienda che utilizza Peershares ha la sua catena a blocchi che è indipendente da tutte le altre ed è messa in sicurezza economicamente e facilmente utilizzando il metodo proof-of-stake di Peercoin.',
	'developers.peerbox_desc' => '<b>Peerbox</b> è un sistema operativo sicuro per coniare e mantenere nodi Peercoin, è attualmente in sviluppo attivo. Esso si concentra su dispositivi economici ed energeticamente efficienti come Raspberry Pi, la quale è compatibile con l\'obiettivo di Peercoin nel provvedere una critptovaluta energeticamente efficiente. Se ASIC è un termine per mining dedicato ed energeticamente efficiente, allora Peerbox è l\'ASIC del Proof-of-Stake.',
	'developers.nubits_desc' => '<b>NuBits</b> è un progetto che deve essere ancora inaugurato, dal creatore di Peershares, Jordan Lee. NuBits sarà la prima implementazion di Peershares. Il suo obiettivo è quello di risolvere il problema della volatilità nelle criptovalute.',
);
$lang['it'] += array(
	//Exchanges
	'exchanges.what_are' => 'Cos\'è un Exchange?',
	'exchanges.what_are_desc' => 'Gli <b>Exchanges</b> ti permettono di fare trading di valute convenzionali, quali il dollaro Americano o gli Euro, per comprare e vendere Peercoins. Permettono anche di facilitare il trading fra peercoins e le altre criptovalute, quali Bitcoin.',
	'exchanges.buy_sell' => 'Piazzare un Ordine',
	'exchanges.buy_sell_desc' => 'Il trading comincia con il piazzamento di ordini di acquisto e vendita. Crea un <b>Buy order</b> per richiedere Peercoins ad un prezzo specifico. Crea un <b>Sell order</b> per vendere i tuoi Peercoins. Quando i diversi ordini si accavallano nel prezzo, il trading è automaticamente completato e i conti delle due parti sono creditate coon le valute che si sono scambiate. Un <b>Market Order</b> permette di fare trading immediatamente al prezzo corrente.',
	'exchanges.fees' => 'Tariffe',
	'exchanges.fees_desc' => 'Ogni volta che si effettua un trasferimento, una piccola percentuale è trattenuta dall\'exchange per facilitare la transazione. Questa è conosciuta come <b>Trading Fee</b>. Degli exchanges trattengono anche una <b>Withdrawal Fee</b> quando si vuole prelevare dall\'exchange.',
	'exchanges.choosing' => 'Scegli un\'exchange',
	'exchanges.disclaimer' => 'Nota: Ricorda di prelevare i tuoi Peercoins dall\'exchange non appena effettui l\'acquisto. Mantenere le proprie monete nel proprio portafoglio è più  sicuro e consente di ottenere l\' 1&#37;  di Peercoin con la coniazione.',
	'exchanges.location' => 'Ubicazione',
	'exchanges.notes' => 'Note',
	'exchanges.visit' => 'Visita',
);

$lang['it'] += array(
	'footer.links' => 'Collegamenti',
	'footer.tools' => 'Strumenti',
	'footer.exchanges' => 'Exchanges',
	'footer.mining' => 'Mining',
);
$lang['it'] += array(
	// FAQ
	'faq.yes' => 'Si',
	'faq.no' => 'No',
	'faq.sources' => 'Referenze',
	'faq.q1' => 'Peercoin è stata lanciata equamente?',
	'faq.q1_ans' => 'Sunny King ha annunciato l\'avvento di Peercoin 9 giorni prima del lancio. Nessun blocco è stato generato da minatori prima del lancio. Un utente del forum ha scritto, "[Sunny King] ha rilasciato un collegamento verso la sorgente nell\'altro thread come promesso (5 minuti prima delle 18:00 UTC). Non c\'è stata nessuna premine. Non appena ho compilato da sorgente e lanciato il programma, c\'erano 5 blocchi generati."',
	'faq.q2' => 'Qual\'è l\'obiettivo di avere checkpoints?',
	'faq.q2_ans' => 'A partire dalla versione 0.2, checkpoints diffusi centralmente non sono più una parte critica del protocollo. Il loro utilizzo è quello di difendere la rete durante il primo periodo di crescita, e per assicurare uno sviluppo senza intoppi. Il checkpointing centrale è gradualmente indebolito ed eventualmente rimosso, per raggiungere un livello di decentralizzazione simile a quello di Bitcoin. I checkpoins esistono solamente per questioni di sicurezza: se succede qualcosa di molto serio, ci sono i checkpoints come backup.',
	'faq.q3' => 'Peercoin è un clone di Bitcoin?',
	'faq.q3_ans' => 'Peercoin è davvero una valuta alternativa unica. Sebbene il suo codice è basato su Bitcoin, Peercoin è la prima valuta ad introdurre Proof of Stake per mettere in sicurezza la sua rete. Proof of Work è usata anche in Peercoin, per promuovere una giusta distribuzione di valuta, ma non è necessaria per mettere in sicurezza la rete.',
	'faq.q4' => 'Peercoin è una di quelle valute gonfia e vendi?',
	'faq.q4_ans' => 'Peercoin porta con se caratteristiche innovative, sviluppatori attivi e un coinvolgimento significativo della comunità. Ad oggi, 1 Agosto 2014, Peercoin ha quasi due anni, e il suo controvalore di mercato va oltre i 20$ milioni di dollari americani.',
	'faq.q5' => 'Avere l\'1&#37; come compenso è giusto per tutti gli utenti?',
	'faq.q5_ans' => 'Quando la disponibilità totale crescerà causa del processo di coniazione, tutti i risparmiatori di Peercoin che parteciperanno alla coniazione, manterranno la loro posizione relativa nella rete. Sebbene grandi possessori genereranno un numero totale maggiore di Peercoins, non potranno, in termini percentuali, sorpassare gli altri coniatori.',
	'faq.q6' => 'Peercoin è inflazionaria?',
	'faq.q6_ans' => 'Il tasso di cambio di valuta PPC è determinato da:',
	'faq.q6_l1' => 'Proof of Work mining (aumenta la disponibilità)',
	'faq.q6_l2' => 'Numero di transazioni (diminuisce la disponibilità di 0.01 PPC per transazione)',
	'faq.q6_l3' => 'Coniazione Proof of Stake (aumenta la disponibilità ad un tasso fino a  1&#37; annuo)',
	'faq.q6_ans2' => 'Grazie alla maggiore partecipazione al mining, il tasso di inflazione di Peercoin è costantemente rimasto sotto il 5&#37; per la prima metà del 2014. Al presente tasso di adozione, questo tasso diminuirà ulteriormente nel tempo e Peercoin sarà meno inflazionaria e molto piu  sostenibile che altre cryptovalute.',
);
$lang['it'] += array(
	// Global
	'homepage_title' => 'Peercoin - Criptovaluta Sicura e Sostenibile',

	'second_ago' => 'secondo fa',
	'seconds_ago' => 'secondi fa',

	'website' => 'Sito Internet',
	'forum' => 'Forum',
);
$lang['it'] += array(
	// Header
	'header.get_started' => 'Comincia subito',
	'header.newcomers' => 'Nuovi Arrivati',
	'header.investors' => 'Investitori',
	'header.merchants' => 'Venditori',
	'header.miners' => 'Minatori',
	'header.developers' => 'Sviluppatori',
	'header.resources' => 'Risorse',
	'header.learn' => 'Impara',
	'header.frequently_asked_questions' => 'Domande frequenti',
	'header.peercoin_whitepaper' => 'Tesi Peercoin',
	'header.exchanges' => 'Exchanges',
	'header.mint_peercoins' => 'Coniare Peercoin',

	'header.wallet' => 'Portafogli',

	'header.community' => 'Comunità',

	'header.languages' => 'Lingue',
);
$lang['it'] += array(
	// Index page
	'index.why_peercoin' => 'Perchè Peercoin',
	'index.download_wallet' => 'Scarica il Portafoglio',
	'index.price' => 'Prezzo',
	'index.market_cap' => 'Capitalizzazione di Mercato',
	'index.total_supply' => 'Disponibilità Totale',
	'index.last_updated' => 'Ultimo Aggiornamento:',
	'index.last_updated_never' => 'mai',
	'index.why_peercoin_q' => 'Perché <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin si propone come una delle criptovalute con maggiore sicurezza al minimo costo, ricompensando gli utenti che a loro volta rafforzano la rete.',
	'index.built_to_last' => 'Costruito <b> per Durare </b>  ',
	'index.built_to_last_desc' => 'La prima moneta Proof-of-Stake al mondo.',
	'index.fair_distribution' => 'Distribuzione <b>Equa</b>',
	'index.fair_distribution_desc' => 'Nessuna pre-vendita o raccolta istantanea.',
	'index.transparent_protocol' => 'Protocollo <b>Transparente</b>',
	'index.transparent_protocol_desc' => 'La rete è completamente open-source.',
	'index.energy_efficient' => 'Energeticamente <b>Efficiente</b>',
	'index.energy_efficient_desc' => 'Conia Peercoins con ogni dispositivo.',
	'index.learn_more' => 'Scopri di più ',
	'index.get_started' => 'Comincia subito',
	'index.newcomers' => 'Nuovi arrivati',
	'index.newcomers_desc' => 'Impara come comprare, vendere, spendere e risparmiare Peercoin.',
	'index.investors' => 'Investitori',
	'index.investors_desc' => 'Coniare genera un rendimento garantito dell\' 1&#37;.',
	'index.merchants' => 'Venditori',
	'index.merchants_desc' => 'É tempo di ridurre le spese delle transazioni.',
	'index.miners' => 'Minatori',
	'index.miners_desc' => 'Utilizza il tuo hardware per il mining in modo intelligente.',
	'index.developers' => 'Sviluppatori',
	'index.developers_desc' => 'Dai uno sguardo alle innovazioni in arrivo.',
	'index.newsletter' => 'Newsletter',
	'index.newsletter_placeholder' => 'Inserisci il tuo indirizzo e-mail...',
	'index.newsletter_submit' => 'Iscriviti!',
);
$lang['it'] += array(
	//Investors
	'investors.established_network' => 'Rete Solida',
	'investors.established_network_desc' => 'Peercoin è stata lanciata nel 2012, questo fa si che sia una delle più longeve e affidabili criptovalute in esistenza.',
	'investors.limited_supply' => 'Quantità Limitata',
	'investors.limited_supply_desc' => 'L\'inflazione annua di Peercoin si è attestata mediamente al di sotto del 5&#37; durante il 2014, e sta continuando a scendere. Vai su  <a href="http://peerchain.net/charts.html">peerchain.net</a> per maggiori dettagli sui dati storici.',
	'investors.efficient_security' => 'Sicurezza Efficiente',
	'investors.efficient_security_desc' => 'Peercoin è la prima valuta che utilizza proof-of-stake, ciò  significa che non è richiesto un imponente capacità di calcolo per mettere in sicurezza la rete. Maggiori dettagli nella <a href="whitepaper">Tesi su Peercoin </a>.',
	'investors.guaranteed_returns' => 'Rendimento Garantito',
	'investors.guaranteed_returns_desc' => 'Dopo che possiedi Peercoins per 30 giorni, è possibile cominciare a guadagnare l\' 1&#37; di rendimento annuo <a href="minting">Clicca qui per saperne di più</a>.',

);
$lang['it'] += array(
	//Merchants
	'merchants.instant' => 'Pagamenti istantanei',
	'merchants.instant_desc' => 'Le transazioni sono elaborate quasi immediatamente attraverso la tecnologia della catena a blocchi di Peercoin. L\'esploratore blocchi verifica istantaneaente un pagamento in entrata.',
	'merchants.no_chargebacks' => 'Evita chargebacks',
	'merchants.no_chargebacks_desc' => 'Una volta che il pagamento è confermato dalla rete, esso è messo in sicurezza attraverso un sistema di crittografia di prima-classe, che rende impossibile all\'acquirente cancellare la transazione.',
	'merchants.no_transaction_fees' => 'Elimina le spese di transazione',
	'merchants.no_transaction_fees_desc' => 'Per effettuare un pagamento, chi invia ha una tariffa di solo 0.01 Peercoin. Come venditore, non paghi assolutamente nulla.',

);
$lang['it'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Compatibilie con Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin utilizza lo stesso algoritmo di mining di Bitcoin, conosciuto come SHA-256. Qualsiasi hardware che funziona sulla rete di Bitcoin può  essere usato per il mining di Peercoins.',
	'mining.fair_distribution' => 'Distribuzione Equa',
	'mining.fair_distribution_desc' => 'Il mining Proof of Work è utilizzato per aumentare la distribuzione di nuove monete, mentre la sicurezza della rete è mantenuta interamente tramite la coniazione attraverso il Proof of Stake. Questo significa che le vulnerabilità del mining di Bitcoin come il Selfish Mining, non impattano la sicurezza di Peercoin.',
	'mining.sustainable_reward' => 'Rendimento Sostenibile',
	'mining.sustainable_reward_desc' => 'Il rendimento per il mining di un blocco, diminuisce gradualmente con l\'aumentare della capacità di calcolo della rete. Con il passare del tempo, il mining ha un impatto sempre minore sulla crescita della valuta disponibile.',
);
$lang['it'] += array(
	'mintguide.title' => 'Segui la guida che corrisponde al tuo client Peercoin e comincia a coniare!',
	'mintguide.qt_step1' => 'Assicurati che il tuo portafoglio sia criptato con una password sicura. Scrivila e conservala in un posto sicuro; se dimenticassi la tua password potresti perdere le tue monete. L\'opzione per criptare il portafoglio si trova nel menu settings del programma portafoglio Peercoin-Qt.',
	'mintguide.qt_step2' => 'Per cominciare a coniare vai su help -> debug window -> console ed inserisci: <br><kbd>walletpassphrase abc 999999 true</kbd><br> dove "abc" è la tua password e "999999" è il tempo in secondi del processo di coniazione. Puoi cambiare il numero dei secondi con qualsiasi a tua scelta, ma è più semplice scegliere un numero molto alto. Se la tua password ha degli spazi mettila fra virgolette.',
	'mintguide.qt_step3' => 'Cancella la tua parola chiave tenendo premuto Ctrl-L.',
	'mintguide.qt_step4' => 'Puoi controllare che stai coniando guardando il lucchetto in basso a destra nel client. Dopo qualche istante dovrebbe aprirsi. Puntando il mouse sopra il lucchetto, dovrebbe apparire "Wallet is encypted and currently unlocked for block minting only".',
	'mintguide.peerunity' => 'Peerunity è un client sviluppato dalla comunita\' Peercoin. Include molte caratteristiche aggiuntive rispoetto alla versione standard del client v0.4 di Peercoin, ha anche un metodo piu semplice per la coniazione. Esso è disponibile per Windows, Linux e OS X. Puoi scaricarlo qui e leggere la sezione nel forum <a href="https://talk.peercoin.net/t/peerunity-v0-1-0-released-for-windows-linux-os-x/2455">qui</a>.',
	'mintguide.peerunity_step1' => 'Assicurati che il tuo portafoglio sia criptato con una password sicura. Scrivila e conservala in un posto sicuro; se dimenticassi la tua password potresti perdere le tue monete. L\'opzione per criptare il portafoglio si trova nel menu settings del programma portafoglio Peerunity.',
	'mintguide.peerunity_step2' => 'Per cominciare a coniare, premi semplicemente il pulsante "Sblocca il Portafoglio Solo per Coniare", inserisci la tua parola chiave e premi OK.',
	'mintguide.peerunity_step3' => 'Puoi controllare che stai coniando guardando il lucchetto in basso a destra nel client. Dopo qualche istante dovrebbe aprirsi. Puntando il mouse sopra il lucchetto, dovrebbe apparire "Wallet is encypted and currently unlocked for block minting only".',

);
$lang['it'] += array(
	'mineguide.title' => 'Segui questi passi per cominciare con il mining di Peercoin!',
	'mineguide.step1' => 'Setup del portafoglio software',
	'mineguide.step1_desc' => 'Se non l\'hai già fatto, scarica il  <a href="wallet">portafoglio Peercoin</a>.',
	'mineguide.step2' => 'Seleziona una pool per il mining',
	'mineguide.step2_poollist' => 'Pools dedicate a Peercoin:',
	'mineguide.step2_multipoollist' => 'Pools multimoneta:',
	'mineguide.step3' => 'Iscriviti al pool',
	'mineguide.step3_desc' => 'Segui le istruzioni sul sito della pool.',
);
$lang['it'] += array(
	// minting
	'minting.mint_anywhere' => 'Conia Dovunque',
	'minting.mint_anywhere_desc' => 'La maggior parte del mining delle criptovalute richiede hardware specifico, mentre Peercoin può essere coniata su ogni computer. Coniare è energeticamente efficiente, perchè si basa sul mantenere Peercoins, piuttosto che dalla capacita\' di calcolo.',
	'minting.secure_the_network' => 'Metti al sicuro la Rete',
	'minting.secure_the_network_desc' => 'Ogni volta che la tua coniazione genera un blocco, le tue monete aiutano a salvaguardare la rete. Per attaccare con successo la rete Peercoin, un utente malintenzionato deve controllare la maggior parte di tutte le monete in fase di coniazione, che a sua volta andrebbe a nuocere anche il proprio investimento.',
	'minting.earn_reward' => 'Guadagna una Ricompensa',
	'minting.earn_reward_desc' => 'Coniare ti permette di guadagnare l\'1&#37; annuo. Le monete possono essere utilizzate per coniare 30 giorni dopo che sono state trasferite, e dopo 90 giorni, la loro probabilità di successo è massimizzata. Se coni spesso, i tuoi guadagni capitalizzeranno!',

);
$lang['it'] += array(
	//Newcomers
	'newcomers.getting_started' => 'Comincia subito con Peercoin',
	'newcomers.downlaod_wallet' => 'Scarica il portafoglio software',
	'newcomers.download_wallet_desc' => 'Vai sulla <a href="wallet">pagina per il download</a>, dove puoi scaricare il programma di cui avrai bisogno per risparmiare e gestire le tue nuove monete.',
	'newcomers.buy_from_exchange' => 'Compra da un exchange',
	'newcomers.buy_from_exchange_desc' => 'Invia denaro ad un <a href="exchanges">exchange Peercoin</a>, dove potrai comprare da altri traders in un mercato aperto.',
	'newcomers.withdraw_coins' => 'Scarica le tue monete',
	'newcomers.withdraw_coins_desc' => 'Invia i tuoi peercoins ad un indirizzo generato dal software portafoglio. Questo ti proteggerà in caso un exchange fallisce mentre ha il tuo denaro.',
	'newcomers.learn_more' => 'Scopri di più',
	'newcomers.learn_more_desc' => 'Adesso che hai le tue monete nel tuo portafoglio, è il momento di imparare come crescere il tuo investimento con la <a href="minting">coniazione diPeercoin</a>.',

);
$lang['it'] += array(
	'pig.title' => 'Segui la seguente procedura per accettare Peercoins sul tuo sito internet:',
	'pig.step1' => 'Utilizza la tab Bulk Wallet su <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a> per pre-generare un grande numero di indirizzi Peercoin. Copia ed incolla la lista comma separated values (CSV)  su un file sicuro sul tuo computer. Effettua il backup del file su un dispositivo sicuro.',
	'pig.step2' => 'Importa gli indirizzi pubblici peercoin sul database table del tuo server web. Non importare le chiavi private, ma tienile offline per proteggerle da hackers.',
	'pig.step3' => 'Metti a disposizione l\'opzione sul tuo carrello della spesa del tuo sito internet in modo che i tuoi clienti possano pagare in Peercoin. Quando questa opzione viene selezionata, mostra uno degli indirizzi dal tuo database al cliente come indirizzo di pagamento e salvalo insieme all\'ordine di acquisto.',
	'pig.step4' => 'Utilizza un esploratore di blocchi per identificare un pagamento in entrata. Tale servizio puo\' essere trovato su  <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'Peercoins inviati sugli indirizzi importati sono messi al sicuro dalle chiavi private. Per spenderli, utilizza il file portafoglio originale generato nel punto 1.',
	'pig.step6' => 'Per qualsiasi problema, puoi inserire un post nel <a href="https://talk.peercoin.net">forum della comunità</a>.',
	
);
$lang['it'] += array(
	'waldownload.download' => 'Scarica',
	'waldownload.source' => 'Codice Sorgente',
	'waldownload.license' => 'Licenza',
	'waldownload.other_platforms' => 'Altre piattaforme',
	'waldownload.signatures' => 'Firme',
	'waldownload.qt_title' => 'Peercoin-QT',
	'waldownload.peerunity_title' => 'Peerunity',	
);
$lang['it'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'Scarica il PDF',
	'whitepaper.software' => 'Le tesi sono disponibili in Portable Document Format (PDF). Per la lettura utilizza  <a href="http://pdfreaders.org/">il programma</a> che preferisci.',

);
$lang['it'] += array(
	// Wallet
	'wallet.title' => 'Portafogli',
	'wallet.desc' => 'Il portafoglio Peercoin è un\'applicazione utilizzata per risparmiare ed effettuare transazioni di Peercoins con altri utenti. Peercoin ha due portafogli per il desktop: Peerunity e Peercoin-QT. Raccomandiamo Peerunity per la maggior parte degli utenti. Per maggiori informazioni su come utilizzare il tuo portafoglio software visita la <a href="newcomer">pagina Nuovi Arrivati</a>.',
	'wallet.peerunity' => 'Peerunity (raccomandato)',
	'wallet.peerunity_desc' => 'Peerunity è sviluppato dalla comunità Percoin. Esso include caratteristiche ulteriori rispetto al portafoglio protocollo core, come coniazione con un click e controllo monete. Le prossime edizioni conterranno un pannello con un nuovo design, integrazione con Peershares, ed una tab dedicata alla Coniazione.',
	'wallet.peercoinqt' => 'Peercoin-QT<br>(protocollo core)',
	'wallet.peercoinqt_desc' => 'Peercoin-QT è il protocollo core di Peercoin, sviluppato e mantenuto dallo sviluppatore di Peercoin, Sunny King. Esso riceve solo aggiornamenti ad alta priorità.',
	'wallet.paper_wallet' => 'Portafoglio Cartaceo',
	'wallet.paper_wallet_desc' => 'Il portafoglio cartaceo rimane completamente offline, stampato su di un foglio di carta per maggiore sicurezza. Utilizza il portafoglio cartaceo se vuoi limitare l\'accesso ai tuoi Peercoins, e se intendi metterli da parte per un lungo periodo di tempo.',
	'wallet.android_wallet' => 'Portafolgio per Android',
	'wallet.android_wallet_desc' => 'Un portafoglio portatile Peercoin che permette di gestire i tuoi Peercoins senza trasportare una completa chiave a blocchi sul tuo cellulare. Esso conserva spazio prezioso sul tuo dispositivo android e ti permette di portare le tue monete con te, ovunque tu sia.',
	'wallet.bkchain_wallet' => 'Bkchain Wallet',
	'wallet.bkchain_wallet_desc' => 'Bkchain is an online, client-side wallet. It allows you to access your peercoins with a web browser using an electrum-like 12 word seed.',
	'wallet.download' => 'Scarica',
	'wallet.visit_site' => 'Visit',
);
