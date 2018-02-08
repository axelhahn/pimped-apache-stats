<?php
global $aLangTxt;
$aLangTxt = array(

    'id'=>'deutsch',
    
    'menuHeaderMonitoring'=>'Monitoring',
    'menuHeaderConfig'=>'Konfiguration',
    'menuAdmin'=>'Admin',
    'menuGroup'=>'Gruppe: ',
    'menuLang'=>'Sprache: ',
    'menuSkin'=>'Skin: ',
    'menuReload'=>'Aktualisierungs-Intervall: ',

    // ------------------------------------------------------------
    // basic errors
    // ------------------------------------------------------------
    'error-wrong-group'=>'Die Gruppe [%s] existiert nicht.',
    'error-no-group'=>'Es wurde keine Server-Gruppe gefunden. Bitte legen Sie eine unter Admin - Server an.',
    'error-server-not-in-group'=>'Server [%s] exisitert nicht in der Gruppe [%s].',
    'error-no-server-in-group'=>'Es wurde noch kein Server in der Gruppe [%s] angelegt. Bitte legen Sie einen unter Admin - Server an.',
    
    // ------------------------------------------------------------
    // version check
    // ------------------------------------------------------------
    'versionUptodate'=>'OK (aktuell)',
    'versionError'=>'??',
    'versionUpdateAvailable'=>'Version %s verf&uuml;gbar',
    'versionManualCheck'=>'auf neue Version testen',

    'authAccessDenied'=>'<h1>Zugriff verweigert</h1>Benutzername und Passwort sind erforderlich.',

    // ------------------------------------------------------------
    // for menu of views:
    // label for menu and h2
    // ------------------------------------------------------------
 
        'view_allrequests.php_label'=>'Alle Requests',
        'view_original.php_label'=>'Original Server-status',
        'view_performance-check.php_label'=>'Performance-Daten',
        'view_serverinfos.php_label'=>'Server-Infos',
        'view_help.php_label'=>'Hilfe',
        'view_dump.php_label'=>'Dumps',
        'view_setup.php_label'=>'Setup',
        'view_update.php_label'=>'Update',
        'view_selectserver.php_label'=>'Liste der Gruppen und Server',

    // ------------------------------------------------------------
    // for all tables in the views
    // ------------------------------------------------------------
        // ............................................................
        'lblInitialSetup'=>'Initial-Setup',
        'lblInitialSetupAbort'=>'Tut mir leid - das Initial-Setup wurde bereits ausgef&uuml;hrt.',
        'lblHelplblInitialSetup'=>'
            Willkommen beim Pimped Apache Status.<br>
            Zuerst: Sch&uuml;tze das Werkzeug und setze einen Admin-user.
        ',
        'lblUsername'=>'Username',
        'lblPassword'=>'Passwort',
        'lblRepeatPassword'=>'Passwort wiederholen',
        'lblInitialSetupSaved'=>'OK, Daten wurden gespeichert.',
        'lblInitialSetupSaveFailed'=>'Irgendwas ging schief. Bitte gib einen Benutzernamen ein und 2 x dasselbe Passwort.',

        // ............................................................
        'lblTable_status_workers'=>'Worker Status',
        'lblTableHint_status_workers'=>'Die Tabelle zeigt den Status der Apache Worker Prozesse vom markierten Server bzw. von allen 
            Servern der Gruppe.<br>
            <ul>
                <li>"total" ist die Gesamtzahl der Worker-Prozesse</li>
                <li>"aktiv" Anzahl aller aktiven Prozesse (Der Status M ist ungleich "_" und ungleich ".").</li>
                <li>"idle" ist die Anzahl der Prozesse im Status "_".</li>
            </ul>',

        // ............................................................
        'lblTable_status'=>'Serverstatus',
        'lblTableHint_status'=>'Die Tabelle zeigt die Status Informationen der Webserver',

        // ............................................................
        'lblTile_server_responsetime'=>'Antwortzeit',
        'lblTileHint_server_responsetime'=>'Antwortzeit der Anfrage aller Server',
        'lblTile_server_count'=>'Server',
        'lblTileHint_server_count'=>'Anzahl der abgefragten Webserver',

        // ............................................................
        'lblTile_requests_all'=>'Anz. Requests',
        'lblTileHint_requests_all'=>'Gesamt-Anzahl der Requests (aller angefragten Server)',
        'lblTable_requests_all'=>'Liste aller Requests',
        'lblTableHint_requests_all'=>'Die Liste zeigt alle aktiven und nicht aktiven Requests.<br>Bei Profilen mit mehreren Servern sehen Sie hier die Requests aller Server und k&ouml;nnen so Requests &uuml;ber alle Server hinweg vergleichen.',

        // ............................................................
        'lblTile_requests_running'=>'Aktiv',
        'lblTileHint_requests_running'=>'Aktive Requests',
        'lblTable_requests_running'=>'Aktive Requests',
        'lblTableHint_requests_running'=>'Die Tabelle zeigt die Requests, die derzeit auf den gew&auml;hlten Servern verarbeitet werden.',

        // ............................................................
        'lblTile_requests_mostrequested'=>'H&auml;ufigste Anfrage',
        'lblTileHint_requests_mostrequested'=>'H&auml;ufigste Http-Anfrage',
        'lblTable_requests_mostrequested'=>'H&auml;ufigste Anfragen',
        'lblTableHint_requests_mostrequested'=>'Die Tabelle zeigt die am h&auml;ufigsten abgerufenen Elemente an.<br>
            Anm.:<br>
            <ul>
                <li>Die Tabelle ist nach Spalte "Anzahl" sortiert.</li>
                <li>Die Auflistung enth&auml;lt sowohl aktive als auch bereits beendete Requests.</li>
            </ul>',

        // ............................................................
        'lblTable_requests_hostlist'=>'H&auml;ufigste VHosts',
        'lblTableHint_requests_hostlist'=>'Die Tabelle zeigt die am h&auml;ufigsten abgerufenen virtuellen Hosts an.<br>
            Anm.:<br>
            <ul>
                <li>Die Tabelle ist nach Spalte "Anzahl" sortiert.</li>
                <li>Die Auflistung enth&auml;lt sowohl aktive als auch bereits beendete Requests.</li>
            </ul>',

    
        // ............................................................
        'lblTable_requests_methods' => 'Verteilung der Methoden',
        'lblTableHint_requests_methods' => 'Name und H&auml;ufigkeit der HTTP-Request Methoden',
    
        // ............................................................
        'lblTile_requests_clients' => 'Max. von IP',
        'lblTileHint_requests_clients' => 'Die meisten Anfragen stammen von welcher IP',
        'lblTable_requests_clients' => 'Anzahl Requests pro IP',
        'lblTableHint_requests_clients' => 'Liste der Clients und Anzahl von dessen (aktiven und bereits beendeten) Requests.<br>
			Anm.: eine IP Adresse kann eine Gateway-IP sein, dahinter k&ouml;nnen sich auch mehrere Rechner eines Unternehmens verbergen.',
    
        // ............................................................
        'lblTile_requests_longest'=>'L&auml;ngster Request',
        'lblTileHint_requests_longest'=>'L&auml;ngster Request',
        'lblTable_requests_longest'=>'Top 25 der langsamsten Requests',
        'lblTableHint_requests_longest'=>'Die Tabelle zeigt alle Requests sortiert nach deren Requestdauer.<br>
            Anm.:<br>
            <ul>
                <li>Die Request-Zeit ist im Apache-Status erst dann verf&uuml;gbar, wenn
                    der Request beendet ist.
                    Sie ist nicht f&uuml;r den aktiven Request verf&uuml;gbar (Wert ist dann immer "0").
                </li>
                <li>Die Tabelle ist nach Spalte "Req" sortiert (Wert ist in ms)</li>
            </ul>',
    
        // ............................................................
        'lblTable_explanation'=>'Erl&auml;terungen',
        'lblTableHint_expalanation'=>'Wie die Farben in den Tabellen zustande kommen.',

    // ------------------------------------------------------------
    // description for tables
    // ------------------------------------------------------------

        // table for worker status
        'thWorkerServer' => 'Webserver',
        'thWorkerTotal' => 'total',
        'thWorkerActive' => 'aktiv',
        'thWorkerWait' => 'idle',
        'thWorkerBar' => 'Grafik',
        'thWorkerActions' => 'Aktionen',
        'thCount'=>'Anzahl',
    
        'bartitleFreeWorkers' => 'freie Worker-Prozesse',
        'bartitleBusyWorkers' => 'aktive Worker-Prozesse',
        'bartitleIdleWorkers' => 'idle Worker-Prozesse',
    
        'lblLink2Top' => 'Seitenanfang',
        'lblHintFilter' => 'Filtere nach',
        'lblReload' => 'Jetzt Aktualisieren',
        'lblExportLinks' => 'Tabelle (ungefiltert) exportieren',

    // ------------------------------------------------------------
    // help page
    // ------------------------------------------------------------
        'lblHelpDoc'=>'Dokumentation',
        'lblHintHelpDoc'=>'Hinweise und Links zu Dokumentationen',
        'lblHelpDocContent'=>'
            <br>
            <strong>Tabellen - Sortieren</strong><br>
            <br>
            Man kann die Tabellen sortieren, indem man auf einen Spaltennamen
            klickt. Die Reihenfolge kehrt man um, wenn
            man erneut darauf klickt.<br>
            Eine Mehrfachsortierung ist ebenfalls m&ouml;glich: halte die SHIFT
            Taste gedr&uuml;ckt, wenn ein oder mehrere andere Spaltennamen
            angeklickt werden.<br>
            <br>
            <strong>Tabellen - Filtern</strong><br>
            <br>
            Verwende das Suchfeld, um die gesamte Tabelle nach einer Zeichenfolge
            zu filtern.<br>
            Du kannst per Klick auf die Eintr&auml;ge einiger Spalten nach deren
            Wert filtern.<br>
            Das [X] Symbol neben dem Suchfeld hebt den Filter wieder auf.<br>
            <br>
            <strong>Links</strong><br>
            <br>
            Mehr Informationen bekommt man hier:
            ',

        'lblHelpBookmarklet'=>'<strong>Bookmarklet</strong><br>
            <br>
            Eine Server-Status-Seite per Klick und ohne Konfiguration
            anschauen - das geht, wenn diese im Internet sichtbar ist.<br>
            Ziehe den nachfolgenden Link in deine Bookmarks: ',
    
        'lblHelpColors'=>'Einf&auml;rbung der Requests',
        'lblHintHelpColors'=>'
            Die Request-Zeilen sind eingef&auml;rbt. Die tats&auml;chliche Farbgebung h&auml;ngt von der 
            Unterst&uuml;tzung im jeweiligen Skin ab.<br>
            Generell h&auml;ngt die farbliche Darstellung von mehreren Faktoren 
            ab, wobei sich die Farbeigenschaften der einzelnen Gruppen addieren.<br>
            Nachfolgend sehen Sie die Faktoren und die Farbgebung des aktuellen
            Skins.<br>
            ',
    
        'lblHelpThanks'=>'Danke!',
        'lblHintHelpThanks'=>'Diese fremden Hilfsmittel und Tools werden verwendet.',
        'lblHelpThanksContent'=>'
            <p>
                Mein Dankesch&ouml;n geht an die Entwickler der in diesem Tool
                verwendeten Produkte:
            </p>
            <ul>
                <li>Admin LTE - Control Panel Template: <a href="https://adminlte.io/">https://adminlte.io/</a></li>
                <li>jQuery: <a href="http://jquery.com/">http://jquery.com/</a></li>
                <li>Datatables - sortierbare Tabellen: <a href="https://datatables.net/">https://datatables.net/</a></li>
                <li>array2xml.class - XML Export: <a href="http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes">http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes</a></li>
                <li>Bootstrap - Html-Framework: <a href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
                <li>Font-awesome - Icons: <a href="https://fontawesome.io/">https://fontawesome.io/</a></li>
                <li>jQuery Knob - Skalen: <a href="https://github.com/aterrien/jQuery-Knob">https://github.com/aterrien/jQuery-Knob</a></li>
                <li>Morris JS - Charts: <a href="http://morrisjs.github.io/morris.js/index.html">http://morrisjs.github.io/morris.js/index.html</a></li>
            </ul>
            ',
    
        // column "comment" by column "M"
        'lblStatus' => 'Modus',
        'cmtLegendM' => 'Modus des Requests (Spalte "M")',
        'cmtStatus_' => '_ Request ist beendet. Wartet auf neue Verbindung.',
        'cmtStatusS' => 'S Starte',
        'cmtStatusR' => 'R Lese Request',
        'cmtStatusW' => 'W Sende Antwort',
        'cmtStatusK' => 'K Keepalive (lesen)',
        'cmtStatusD' => 'D DNS Lookup',
        'cmtStatusC' => 'C Schliesse Verbindung',
        'cmtStatusL' => 'L Logging',
        'cmtStatusG' => 'G kontrolliertes Beenden',
        'cmtStatusI' => 'I Idle cleanup',
        'cmtStatus.' => '. Request beendet. Offener Slot ohne aktive Verbindung.',
        // 'cmtRequest'=>'',
    
        'cmtLegendRequest' => 'HTTP Request-Methode',
        'cmtRequestGET' =>'GET',
        'cmtRequestHEAD' =>'HEAD',
        'cmtRequestPOST' =>'POST',
        'cmtRequestPUT' =>'PUT',
        'cmtRequestDELETE' =>'DELETE',
        'cmtRequestTRACE' =>'TRACE',
        'cmtRequestCONNECT' =>'CONNECT',
        'cmtRequestNULL' =>'NULL',
        'cmtRequestOPTIONS' =>'OPTIONS',
        'cmtRequestPROPFIND' =>'PROPFIND',
    
    
        'cmtLegendexectime' => 'Ausf&uuml;hrungszeit eines Requests',
        'cmtexectimewarning' =>'Warnung',
        'cmtexectimecritical' =>'Kritisch',
    
    // ------------------------------------------------------------
    // description for debug
    // ------------------------------------------------------------
    
        'lblDumpsaUserCfg'=>'$aUserCfg - benutzerspezifische Konfiguration',
        'lblHintDumpsaUserCfg'=>'Die Konfiguration ist zusammengef&uuml;hrt aus
            der Default-Konfiguration und der Benutzer-Config.',
    
        'lblDumpsaEnv'=>'$aEnv - Environent des aktuellen Requests',
        'lblHintDumpsaEnv'=>'Es beinhaltet Informationen, die beim Rendern der
            Ausgabe hilfreich sind.<br>
            So gibt es Name und Version des Projekts, aktuelle Werte
            (z.B. gew&auml;hlte Servergruppe, aktuelle Sprache, Skin).<br>
            Unterhalb des Keys "links" sind Arrays, die man f&uuml;r Men&uuml;s verwenden
            kann - sei es als Dropdown oder Tablist.',
    
        'lblDumpsaSrvStatus'=>'$aSrvStatus - Array des server status',
        'lblHintDumpsaSrvStatus'=>'Jeder Server hat ein einen Key "status" und "request".
            Hier sind die aus der HTML-Ausgabe des Apache server-status geparsten
            Daten abgelegt.',
    
        'lblDumpsaLang'=>'$aLang - array mit sprachabhh&auml;ngigen Texten',
        'lblHintDumpsaLang'=>'Die Tabelle vergleicht die Werte der 
            sprachabh&auml;ngigen Texte aller aktivierten Sprachen.',
        'lblDumpsMiss'=>'!!! Dieser Key hat keinen Eintrag !!!',
    
    // ------------------------------------------------------------
    // software update
    // ------------------------------------------------------------
        'lblUpdate'=>'Aktualisierung der Applikation',
        'lblUpdateNewerVerionAvailable'=>'OK, es ist eine neuere Version verf&uuml;gbar.',
        'lblUpdateNoNewerVerionAvailable'=>'Hinweis: Es gibt keine neuere Version. Das Ausf&uuml;hren des Updates ist eigentlich nicht notwendig.',
        'lblUpdateHints'=>'
            Die Aktualisierung erfolgt in 2 Schritten:
            <ol>
                <li>Download der aktuellsten ZIP-Datei<br>%s</li>
                <li>Entpacken der ZIP-Datei</li>
            </ol>
            ',
        'lblUpdateDonwloadDone'=>'OK, die Datei wurde erfolgreich heruntergeladen.<br>Als N&auml;chstes wird sie entpackt.',
        'lblUpdateDonwloadFailed'=>'Fehler: die Datei konnte nicht heruntergeladen werden.',
        'lblUpdateInstalldir'=>'Lokales Installationsverzeichnis: %s',
        'lblUpdateContinue'=>'Weiter &raquo;',
        'lblUpdateUnzipFile'=>'Entpacke Datei: %s<br>Nach: %s',
        'lblUpdateUnzipOK'=>'OK: die aktuelle Version wurde erfolgreich entpackt.<br>Wenn Ihnen die Software gef&auml;llt, dann k&ouml;nnen Sie mich unterst&uuml;tzen, indem Sie (unten im Footer) in die Dokumentation wechseln, diese teilen oder ein klein wenig spenden.<br>&Uuml;bersetzer in weitere Sprachen sind ebenfalls willkommen...',
        'lblUpdateUnzipFailed'=>'Fehler: die Zip-Datei konnte nicht ge&ouml;ffnet werden.',
    
    // ------------------------------------------------------------
    // javascript
    // ------------------------------------------------------------
        'js::statsCurrent'=>'aktuell',
        'js::statsAvg'=>'Schnitt',
        'js::statsMax'=>'Maximum',
        'js::statsMin'=>'Minimum',
        'js::srvFilterPlaceholder'=>'Server finden',
    
    // ------------------------------------------------------------
    // admin
    // ------------------------------------------------------------
        'ActionAdd'=>'Hinzuf&uuml;gen',
        'ActionAddServer'=>'Server hinzuf&uuml;gen',
        'ActionAddServergroup'=>'Server-Gruppe hinzuf&uuml;gen',
        'ActionEdit'=>'Bearbeiten',
        'ActionContinue'=>'Weiter',
        'ActionClose'=>'Schliessen',
        'ActionDelete'=>'L&ouml;schen',
        'ActionDeleteHint'=>'Eintrag l&ouml;schen ... wenn du sicher bist.',
        'ActionDownload'=>'Download',
        'ActionDownloadHint'=>'Bibliothek herunterladen und von local verwenden.',
        'ActionOK'=>'OK',
        'ActionOKHint'=>'&Auml;nderungen speichern',
    
        'AdminMenusettings'=>'Einstellungen',
        'AdminMenuservers'=>'Server',
        'AdminMenulang'=>'Sprachen',
        'AdminMenuvendor'=>'Vendor-Bibliotheken',
        'AdminMenuupdate'=>'Update',
    
        'AdminMenuSettingsCompare'=>'Vergleichen',    
        'AdminHintSettingsCompare'=>'Hier sind alle Default Werte sichtbar und welche von ihnen &uuml;bersteuert werden.<br>',
        'AdminMenuSettings-var'=>'Variablen-Name',
        'AdminMenuSettings-description'=>'Beschreibung',
        'AdminMenuSettings-default'=>'Default',
        'AdminMenuSettings-uservalue'=>'Benutzer-Wert',
        'AdminHintRaw-internal-config_default'=>'Ansicht der Rohdaten aller Default-Einstellungen.<br>',
        'AdminHintRaw-config_user'=>'Benutzer-Einstellungen als Rohdaten bearbeiten.<br>',
    
        'AdminHintServers'=>'Anlegen von Gruppen.<br>'
            . 'In jeder Gruppe kannst du mehrere Apache Server anlegen, die &uuml;berwacht werden sollen. Alle status Seiten aller Server derselben Gruppe werden simultan eingeholt.<br>'
            . 'So kannst du eine loadbalancte Webseite monitoren.<br>'
            . 'Oder erzeuge eine Gruppe mit Servern, um ein Aug auf den Traffic aller Server (Appserver, Caching-Server) eines Projektes zu haben.<br>',
        'AdminServersLblAddGroup'=>'Neue Gruppe von Servern anlegen.',
        'AdminLblGroup-label'=>'Name der Gruppe',
    
        'AdminServersLblAddServer'=>'Hinzuf&uuml;gen eines Apache Httpd Server in dieser Gruppe.',
    
        'AdminLblServers'=>'Apache-Server konfigurieren',
        'AdminLblServers-ConfirmDelete'=>'Bist du sicherm, dass du den Server-Eintrag l&ouml;schen m&ouml;chtest\n%s?',
        'AdminLblServers-label'=>'Servername',
        'AdminLblServers-label-Hint'=>'Servername des Apache webservers.',
        'AdminLblServers-status-url'=>'Url der Serverstatus Seite',
        'AdminLblServers-status-url-Hint'=>'Url der Serverstatus Seite. Wird sie leer gelassen, wird der Default verwendet: <em>http://[servername]/server-status/</em>. Passe es an, wenn https statt http oder ein anderer Port verwendet wird, z.B. <em>http[s]://[servername]:[port]/server-status/</em>',
        'AdminLblServers-userpwd'=>'Benutzername und Password',
        'AdminLblServers-userpwd-Hint'=>'optional; Nur dann ausf&uuml;llen, wenn die Serverstatus-Seite passwort-.gesch&uuml;tzt ist.<br>Syntax: <em>[username]:[password]</em>',
    
        'AdminMessageServer-addgroup-error' => 'FEHLER: Gruppe %s kann nicht hinzugef&uuml;gt werden.',
        'AdminMessageServer-addgroup-ok' => 'OK: Gruppe %s wurde hinzugef&uuml;gt.',
        'AdminMessageServer-deletegroup-error' => 'FEHLER: Gruppe %wurde nicht gel&ouml;scht.',
        'AdminMessageServer-deletegroup-ok' => 'OK: Gruppe %s wurde gel&ouml;scht.',
        'AdminMessageServer-updategroup-error' => 'FEHLER: Gruppe %s kann nicht aktualisiert werden.',
        'AdminMessageServer-updategroup-ok' => 'OK: Gruppe %s wurde hinzugef&uuml;gt.',
        'AdminMessageServer-addserver-error' => 'FEHLER: Server %s kann nicht hinzugef&uuml;gt werden.',
        'AdminMessageServer-addserver-ok' => 'OK: Server %s wurde hinzugef&uuml;gt.',
        'AdminMessageServer-deleteserver-error' => 'FEHLER: Server %s kann nicht gel&ouml;scht werden.',
        'AdminMessageServer-deleteserver-ok' => 'OK: Server %s wurde gel&ouml;scht.',
        'AdminMessageServer-updateserver-error' => 'FEHLER: Server %s konnte nicht aktualisiert werden.',
        'AdminMessageServer-updateserver-ok' => 'OK: Server %s wurde aktualisiert.',
    
        'AdminMessageSettings-update-error-no-json' => 'SKIP: die gesendeten Daten sind kein valides JSON. Die alten Einstellungen bleiben bestehen. Du kannst zur&uuml;ckwechseln, um es erneut zu versuchen.',
        'AdminMessageSettings-update-error' => 'FEHLER: die Benutzereinstellungen wurden nicht gespeichert :-/',
        'AdminMessageSettings-update-ok' => 'OK: Benutzereinstellungen wurden gespeichert.',
        'AdminMessageSettings-wrong-key' => 'WARNUNG: der Wert [%s] ist ung&uuml;tig. Diese Einstellöung ist sinnlos: ',
        
        'AdminHintVendor'=>'Verwendete Bibliotheken und von wo sie geladen werden. Ob sie von einem CDN oder lokal geladen werden, hat funktional keinen Einfluss. Liegen sie lokal, erh&ouml;ht des die Ladegeschwindigkeit und man kann die Webapplikation ohne externe Internet-Anbindung betreiben.',
        'AdminVendorLib'=>'Bibliothek',
        'AdminVendorVersion'=>'Version',
        'AdminVendorLocal'=>'Lokal',
        'AdminVendorRemote'=>'Remote',
        'AdminVendorLibLocalinstallations'=>'<strong>%s</strong> verwendete Bibliotheken gesamt - davon liegen <strong>%s</strong> lokal. Lade alle herunter, um die beste Performance zu haben.',
        'AdminVendorLibAllLocal'=>'Alle <strong>%s</strong> verwendeten Bibliotheken sind lokal.',
    
        'AdminHintUpdates'=>'Update dieser Web-applikation.<br>',

    // ------------------------------------------------------------
    // cfg values
    // ------------------------------------------------------------
        'cfg-auth'=>'Authentifizierung zum Zugriffs-Schutz auf die Apache Serverstatus Daten',
            'AdminLblVar-user'=>'Username',
            'AdminLblVar-password'=>'Passwort',
        'cfg-autoreload'=>'Zeit bis Neuladen der Seite. Das Array enthält die Werte in Sekuinden, die als Dropdown angezeigt werden.',
            'AdminLblVar-autoreload'=>'Zeit in sec',
        'cfg-checkupdate'=>'Intervall zur Pr&uuml;fung eines Updates. Der Wert ist in [s]. Wer Wert 0 schaltet die Pr&uuml;fung aus. Default ist 1 x pro Tag.',
        'cfg-datatableOptions'=>'Javascript Objekt für die Datatable Komponente. Dieses nicht &uuml;berschreiben.',
        'cfg-defaultTemplate'=>'Dieses nicht &uuml;berschreiben.',
        'cfg-defaultView'=>'Default Ansicht ist die Server-info Seite.',
        'cfg-debug'=>'Debug-Informationen einschalten. Default ist false (AUS).',
        'cfg-tmpdir'=>'Temp Verzeichnis. Dieses Verzeichis braucht Schreibrechte. Default ist tmp (= [Appdir]/tmp]).',
        'cfg-execTimeRequest'=>'Array zur Definition der Zeitlimits in [ms] f&uuml;r for langlaufende Requests: ein Wert für Warnungen, einer für kritische.',
        'cfg-hideRows'=>'Array der auszublendenden Spalten. Man kann etwas Platz sparen, indem nicht gewünschte Spalten ausblendet. Warnung: blenden sie keine wichtigen Spalten aus!',
        'cfg-icons'=>'Dieses nicht &uuml;berschreiben.',
        'cfg-lang'=>'Aktive Standard-Sprache.',
        'cfg-selectLang'=>'Kommaseperierte Liste der im Dropdown w&auml;hlbaren Sprachen',
        'cfg-selectSkin'=>'Kommaseperierte Liste der im Dropdown w&auml;hlbaren Skins',
        'cfg-showHint'=>'Hinweisboxen anzeigen (true/ false)',
        'cfg-skin'=>'Aktiviertes Default-Skin.',
        'cfg-tdbars'=>'Tabellenspalten mit Werten, zu denen eine Balkengrafik angezeigt werden soll.',
        'cfg-tdlink'=>'Spezielle Links für Tabellenspalten.',
        'cfg-views'=>'Liste der sichtbaren Men&uuml;-Punkte',
        'cfg-viewsadmin'=>'Liste der sichtbaren Admin-Men&uuml;-Punkte',
        'cfg-wrongitem'=>'!!falscher Key!!',
        'cfg-'=>'',
    
);