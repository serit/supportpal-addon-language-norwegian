<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Operatørpanel",
    "welcome"                   => "Velkommen til SupportPal",
    "welcome_desc"              => "Du har tatt en smart beslutning. Klikk start for å begynne en rask produktpresentasjon av våre innstillinger og funksjoner.",

    // Dashboard
    "submit_ticket"             => "Opprett sak",
    "submit_ticket_desc"        => "Bruk dette skjemaet for å opprette en supportsak til vårt høyt trente personale.",
    "track_ticket"              => "Spor en sak",
    "track_ticket_desc"         => "Ikke registrert? Bruk din e-postadresse og saksnummer for å spore statusen på din sak.",
    "my_tickets"                => "Mine saker",
    "my_tickets_desc"           => "Spor dine saker. Du kan finne både aktive og tidligere opprettede saker her.",
    "no_modules"                => "Ingen moduler aktivert.",
    "search_results"            => "Søkeresultater",
    "found_results"             => "Fant :resultater for ditt søk",

    // Maintenance
    "maintenance"               => "Vi utfører vedlikehold for øyeblikket",
    "maintenance_desc"          => "Vår helpdesk er midlertidig utilgjengelig da vi utfører vedlikehold. Takk for din tålmodighet, vi er snart tilbake.",
    "maintenance_active"        => "Vedlikeholdsmodus er aktiv.",

    // About
    "license_status"            => "Lisensstatus",
    "license_code"              => "Lisensnøkkel",
    "change_license"            => "Bytt lisens",
    "license_info"              => "Lisensinformasjon",
    "license_owner"             => "Lisenseier",
    "license_created"           => "Lisens opprettet",
    "license_type"              => "Lisenstype",
    "branding"                  => "Branding",
    "license_expires"           => "Lisens utløper",
    "license_valid_ip"          => "Lisensens gyldige IP(er)",
    "support_status"            => "Supportstatus",
    "support_expires"           => "Support utløper",
    "version_info"              => "Versjonsinformasjon",
    "installed_version"         => "Installert versjon",
    "available_version"         => "Tilgjengelig versjon",
    "monthly_product"           => "* Din utløpsdato vil automatisk bli justert på månedlig basis så snart utestående fakturaer er betalt.",

    // API Tokens
    "api_token"                 => "API-token|API-tokener",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerer token",
    "access_level"              => "Tilgangsnivå",
    "read_write"                => "Les & Skriv",
    "read_only"                 => "Kun les",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spamregel|Spamregler",
    "containing_text"           => "Inneholder tekst",
    "filter_new_message"        => "Ny saksmelding (fra bruker)",
    "filter_new_comment"        => "Ny selvhjelpskommentar (fra bruker)",
    "filter_user_login"         => "Brukerinnlogging",
    "filter_operator_login"     => "Operatørinnlogging",
    "filter_api_access"         => "API-tilgang",
    "content"                   => "Innhold",
    "sender"                    => "Avsender",
    "content_sender"            => "Innhold og avsender",

    // Company
    "company"                   => "Firma|Firmaer",

    // Email
    "default_email_addr"        => "Standard e-postadresse",
    "default_email_addr_desc"   => "E-postadressen som brukes i avsenderfeltet for de fleste systemsendte e-poster.",
    "include_operator_name"     => "Inkluder operatørnavn",
    "include_operator_name_desc" => "Inkluder operatørens navn i e-postens 'Fra'-felt for sakssvar. For eksempel: Fra: Joe Bloggs (DittFirma Support)",
    "include_dept_name"         => "Inkluder avdelingsnavn",
    "include_dept_name_desc"    => "Inkluder avdelingsnavn i 'Fra'-feltet på alle saksrelaterte e-poster. Merk at dette typisk vil opprette en ny e-posttråd hvis en gitt sak endrer avdeling.",
    "global_email_header"       => "Global e-posthode",
    "global_email_header_desc"  => "Legg til en overskrift i alle e-poster sendt av systemet. HTML er akseptert.",
    "global_email_footer"       => "Global e-postbunntekst",
    "global_email_footer_desc"  => "Legg til en bunntekst i alle e-poster sendt av systemet. HTML er akseptert.",
    "email_template"            => "E-postmal|E-postmaler",
    "email_log"                 => "E-postlogg",
    "email_queue"               => "E-postkø",
    "email_queue_desc"          => "Nedenfor vises e-postene som er planlagt for snarlig utsendelse av cron.",
    "email_method"              => "E-postmetode",
    "php_mail_function"         => "PHP mail()-funksjon",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP-vert",
    "smtp_port"                 => "SMTP-port",
    "smtp_encryption"           => "SMTP-kryptering",
    "smtp_requires_auth"        => "Krever autorisasjon",
    "smtp_username"             => "SMTP-brukernavn",
    "smtp_password"             => "SMTP-passord",
    "ssl"                       => "SSL",
    "email_content"             => "E-postinnhold",
    "email_content_desc"        => "Legg til et standard emne og e-postinnhold for denne malen, du kan også opprette malen på et annet språk. Hvis en mal ikke er definert for andre språk vil standardmalen bli brukt.",
    "outgoing"                  => "Utgående",
    "incoming"                  => "Innkommende",
    "incoming_spam"             => "Innkommende (Avvist - Spam)",
    "incoming_throttled"        => "Innkommende (Avvist - begrenset)",
    "email_subject"             => "E-postemne",
    "twig_html_warning"         => "Twig er ikke tillatt i HTML-tagger/attributter og vil automatisk bli fjernet når du lagrer.",

    // Modules
    "modules"                   => "Modul|Moduler",
    "modules_desc"              => "Nedenfor er en liste over alle tilgjengelige moduler, klikk på redigeringsikonet for å oppdatere innstillingene for en modul.",
    "module_disable"            => "Deaktiverte moduler vil bli fjernet fra frontend og operatørgrensesnittet.",

    // Scheduled tasks
    "scheduled_task"            => "Planlagt oppgave|Planlagte oppgaver",
    "interval_desc"             => "Definer hvor ofte denne oppgaven kjøres, for eksempel vil 5 minutter bety at denne oppgaven kjøres hvert 5. minutt forutsatt at cron er aktiv og kjører.",
    "cron_settings"             => "Cron-innstillinger",
    "cron_running"              => "Kjører",
    "cron_not_running"          => "Kjører ikke",
    "task_ran"                  => "Planlagt oppgave ble kjørt manuelt.",
    "task_failed"               => "Planlagt oppgave ble ikke kjørt manuelt",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "visit_plugin"              => "Besøk plugin-siden",

    // Messages
    "last_activity"             => "Siste aktivitet",
    "send_to"                   => "Send til",
    "inbox"                     => "Innboks",
    "compose"                   => "Skriv",

    // Utilities
    "utilities"                 => "Verktøy",

    // System Cleanup
    "system_cleanup"            => "Systemopprydding",
    "system_cleanup_desc"       => "Bruk de tilgjengelige alternativene for å fjerne data som ikke er nødvendige eller ønskede.",
    "files"                     => "Filer",
    "files_desc"                => "Følgende elementer er lagret som filer i filsystemet.",
    "logs"                      => "Logger",
    "logs_desc"                 => "Følgende elementer er lagret som poster i databasen.",
    "empty"                     => "Tom",
    "prune"                     => "Fjern",
    "total_records"             => "Elementer totalt",
    "system_cache"              => "Systemcache",
    "system_cache_desc"         => "Brukes til å lagre systemdata som sjeldent endres for å optimere systemhastigheten.",
    "template_cache"            => "Malkache",
    "template_cache_desc"       => "Forhåndskompilerte versjoner av malvisninger er lagret for å optimere lastetider.",
    "attachments_desc"          => "Saksvedlegg er lagret i filsystemet men tar muligens opp plass, du kan fjerne vedlagte filer eldre enn en bestemt dato.",
    "system_activity_log_desc"  => "Lagrer all bruker-, operatør- og systemaktivitet, du kan fjerne poster eldre enn en bestemt dato.",
    "email_log_desc"            => "Lagrer alle innkommende og utgående e-poster, du kan fjerne poster eldre enn en bestemt dato.",
    "operator_login_log_desc"   => "Registrerer hver gang en operatør logger inn, du kan fjerne poster eldre enn en bestemt dato.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Vis captcha",

    // Widgets
    "dashboard"                 => "Dashboard",
    "add_remove_widget"         => "Legg til / fjern widgets",
    "enable_tour"               => "Aktiver produktdemo",

    // Product Tour
    "dashboard_desc"            => "Ditt personlige dashboard. Widgets kan fjernes, minimeres og flyttes rundt!",
    "private_messages"          => "Private meldinger",
    "messages_desc"             => "Private meldinger brukes til 1:1-samtaler med andre operatører.",
    "configure"                 => "Konfigurer din helpdesk",
    "configure_desc"            => "SupportPal inneholder en rekke innstillinger som muliggjør konfigurering etter eget ønske.",
    "default_email"             => "Standard e-postadresse",
    "default_email_desc"        => "Standard e-postadresse for all utgående kommunikasjon til brukere.",
    "dept_settings_desc"        => "Vi vet at avdelinger i din organisasjon arbeider forskjellig. Avdelingsspesifikke innstillinger gjør det mulig å overstyre globale innstillinger.",
    "department_desc"           => "Avdelinger tilsvarer dem du har i din organisasjon. Nyttige for å sørge for at henvendelser ender hos riktig personale.",
    "department_email"          => "Avdelingens e-postadresser",
    "dept_email_desc"           => "Flere e-postadresser kan legges til i en gitt avdeling. E-postinnsamling utføres på de konfigurerte adressene for å trekke e-poster fra dine kunder inn i helpdesken.",
    "dept_tmpl"                 => "Avdelingens e-postmaler",
    "dept_tmpl_desc"            => "Noen ganger kan man ønske å endre eller deaktivere avdelingers e-postmaler. Du kan definere avdelingsspesifikke e-postmaler og aktivere dem her.",
    "schedule_task_desc"        => "Planlagte oppgaver brukes til å automatisere ulike prosesser i SupportPal, inkludert e-postbaserte saker.",
    "schedule_task_2"           => "Planlagte oppgaver krever at et cron-jobb er opprettet for å kunne fungere. Intervallet for hver oppgave utført av cron-jobbet kan justeres via redigeringsskjemaet.",
    "schedule_task_cron"        => "Cron-jobb",
    "schedule_task_3"           => "Opprett et cron-jobb tilsvarende eksempelet som gis nedenfor på din egen server for å oppnå automatisk kjøring av planlagte oppgaver.",
    "ticket_channel_desc"       => "Sakskanaler er metoder for å opprette saker. De kan enkelt utvides til å inkludere dine egne kanaler, for eksempel saker åpnet via Instagram.",
    "user_desc"                 => "Brukere som samhandler med ditt system vises her. Du kan legge til, redigere og slette brukere etter behov.",
    "organisation_desc"         => "Brukere kan tildeles organisasjoner, noe som gir dem tilgang til saker åpnet av andre brukere i deres organisasjon.",
    "operator_desc"             => "Andre ansatte kan legges til som operatører her, og du kan håndtere hvilke avdelinger de er tildelt.",
    "ticket_desc"               => "Saksoversikten inneholder en samling av alle saker relevante for deg.",
    "ticket_toolbar"            => "Verktøylinje",
    "ticket_desc3"              => "Massehandlinger kan utføres på saker gjennom verktøylinjen.",
    "tour_complete"             => "Gjennomgangen er fullført!",
    "tour_complete_desc"        => "Takk for at du bruker SupportPal.<br /><br />Vi foreslår at du ser kom-i-gang-guiden nedenfor.",

    // IP Ban
    "ip_ban_time_desc"          => "Er ban permanent eller midlertidig.",
    "expiry"                    => "Utløp",
    "expired"                   => "Utløpt",
    "expiry_time"               => "Utløpstidspunkt",
    "expiry_time_desc"          => "Tidspunktet da ban vil utløpe, hvis en dato ikke er satt eller er i fortiden, vil et tidspunkt 24 timer fra nå bli satt.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Feilet oppdatering av :item. Minst ett språk må være aktivert.",

    // General Settings
    "locale"                    => "Språk",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Adminmappe",
    "admin_folder_desc"         => "Definer mappenavnet for operatørpanelet. Det anbefales fra et sikkerhetsmessig synspunkt å endre fra standard \"admin\"-mappen.",
    "enable_ssl"                => "Aktiver SSL",
    "maintenance_mode"          => "Vedlikeholdsmodus",
    "maintenance_mode_desc"     => "Deaktiverer den offentlige helpdesk-funksjonaliteten og viser en melding om vedlikeholdsmodus. Rediger resources/templates/frontend/[template]/core/maintenance.twig for å endre meldingen som vises for brukere.",
    "default_user_country"      => "Standard brukerland",
    "default_user_country_desc" => "Landet som vil bli valgt som standard når brukere registrerer seg.",
    "system_timezone"           => "Systemtidssone",
    "system_timezone_desc"      => "Standard tidssone som vil bli brukt gjennom systemet. Operatører kan endre sin tidssone i sine personlige innstillinger.",
    "date_format"               => "Datoformat",
    "date_format_desc"          => "Datoformatet som brukes globalt.",
    "time_format"               => "Tidsformat",
    "time_format_desc"          => "Tidsformatet som brukes globalt.",
    "simpleauth_key"            => "SimpleAuth-nøkkel",
    "simpleauth_key_desc"       => "Nøkkelen som brukes til vår single sign-on-løsning, minimum 16 tegn.",
    "simpleauth_operators"      => "Tillat for operatører",
    "base_url"                  => "System-URL",
    "base_url_desc"             => "Skriv inn den fullstendige webadressen til din installasjon, brukes til generering av URL-ene som sendes til brukere.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debugmodus",
    "pretty_urls"               => "Pene URL-er",
    "pretty_urls_desc"          => "Aktiverer du dette vil det fjerne index.php fra URL-er, aktiver kun hvis du er i stand til å nå operatørpanelet uten index.php i adressen. Deaktiver hvis du ikke ønsker mod_rewrite installert, .htaccess-filer ikke er tillatt eller ikke er konvertert til .htaccess rewrite-regler som fungerer med din alternative webserver.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Aktivering av dette vil anvende sikker tilkobling på hele frontend og operatørområdet, en anbefalt innstilling. Kontroller at HTTPS-funksjonalitet fungerer korrekt på din server før du aktiverer.",
    "unexpected_template_error" => "En uventet feil oppstod ved syntakssjekk av malen. Prøv igjen.",
    "empty_template_preview"    => "Angi en gyldig mal for å bruke forhåndsvisning.",
    "no_department_address"     => "Fant ikke en avdeling i mottakerlisten.",
    "email_loop_detected"       => "Løkke oppdaget - e-post sendt fra en avdelingsadresse.",
    "email_ticket_locked"       => "Saken er låst. Brukeren er bedt om å åpne en ny sak via e-post.",
    "email_no_body"             => "Identifisering av e-postmeldingskroppen mislyktes.",
    "email_runtime_error"       => "En kjøretidsfeil oppstod ved opprettelse av sak/svar.",
    "email_reply_disabled"      => "E-postsvar fra bruker er blitt deaktivert for denne avdelingen.",
    "email_throttled"           => "For mange innkommende e-poster fra bruker. Begrensningen er :max_requests e-poster hvert :decay_time minutt.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Rediger innstillingene som gjelder for hele SupportPal. Hvis du ønsker å redigere innstillinger for en spesifikk seksjon, for eksempel saker - åpne da seksjonen i sidepanelet for å se tilgjengelige innstillinger for modulen. Innstillinger relatert til dine brands kan finnes ved å klikke på Brands i sidepanelet.",
    "brand"                     => "Brand|Brands",
    "brand_desc"                => "Et brand er din kundevendte identitet i SupportPal, og tillater flere kommunikasjonskanaler. Flere brands kan brukes samtidig under et enkelt samlet operatørpanel.",
    "default_brand"             => "Standard brand",
    "default_brand_desc"        => "Velg det brand som vil brukes som standard når gjester besøker din frontend og et matchende brand ikke automatisk kan finnes.",
    "brand_enabled_desc"        => "Velg for å aktivere eller deaktivere dette brand. Deaktiverte brands kan ikke brukes og vil ikke telle som en del av de tillatte brands på din lisens, deaktivering kan brukes for midlertidig å skjule et brand og/eller skjule informasjon. Sletting av et brand vil fjerne all informasjon inkludert brukere og saker relatert til det.",
    "inherit_global_setting"    => "Arv global innstilling",
    "brand_date_format_desc"    => "Datoformatet brukt på dette brandets frontend.",
    "brand_time_format_desc"    => "Tidsformatet brukt på dette brandets frontend.",
    "brand_timezone"            => "Brand-tidssone",
    "brand_timezone_desc"       => "Tidssonen som brukes som standard for dette brand, brukere kan velge sin egen tidssone.",
    "brand_default_lang_desc"   => "Språket som brukes som standard på dette brandets frontend.",
    "brand_lang_toggle_desc"    => "Om språkvalgsmenyen skal vises på dette brandets frontend.",
    "brand_groups_desc"         => "Operatører i de valgte gruppene kan opprette, oppdatere og slette (avhengig av rolletillatelser) saker og annet innhold i dette brand.",
    "select_brand"              => "Velg et brand...",
    "add_another_language"      => "Legg til et språk...",
    "mass_email_brand_desc"     => "Velg hvilket brand e-posten vil bli sendt fra. Det vil bli brukt til å bestemme hvilket avsendernavn og adresse som brukes, til innlasting av riktig e-postmal og i flettefelt. Hvis du sender til en brukergruppe vil kun brukere som tilhører brandet motta en e-post.",
    "brand_limit_exceeded"      => "Din lisens er kun tillatt til bruk av :allowed brand(s) samtidig. Besøk vårt klientområde for å kjøpe ytterligere brands.",
    "additional_brands"         => "Ytterligere brands",
    "purchase_more"             => "Kjøp flere",
    "brand_limit_allowed"       => "Din lisens tillater for øyeblikket :allowed brand samtidig.|Din lisens tillater for øyeblikket :allowed brands samtidig.",
    "brand_limit_purchase"      => "Hvis dette ikke er korrekt, <strong>gjenutsted</strong> din lisens på vårt <a href='http://www.supportpal.com/manage/' target='_blank'>klientområde</a> og besøk <a href=':route'>Lisensinformasjon</a>-siden for å synkronisere din helpdesk med vår lisensserver.<br />For å kjøpe ytterligere brand, besøk venligst <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>oppgrader din lisens</a>.",
    "support_expiry"            => "Din support- og oppdateringsavtale er gyldig til :date.",
    "support_status_desc"       => "Vennligst <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>forny din supportavtale</a> for å motta den seneste support og oppdateringer fra SupportPal.",
    "ip_ban"                    => "IP-ban|IP-baner",
    "ip_whitelist"              => "IP-hviteliste",
    "whitelisted_ip"            => "Hvitelistet IP",
    "license_path"              => "Installasjonssti",
    "php_info"                  => "PHP-informasjon",
    "log"                       => "Logg|Logger",
    "invalid_department_brand"  => "Avdelingen er ikke tildelt et saksbrand.",
    "incoming_rejected"         => "Innkommende (Avvist)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Log File Manager",
    "file_manager_desc"         => "Her kan du laste ned eller slette loggene som lagres av systemet, de kan brukes til feilsøkingsformål. Loggfilene slettes automatisk, det lagres kun logger for de siste 5 dagene.",
    "app_logs"                  => "Applikasjonslogger",
    "app_logs_desc"             => "Alle advarsler og feil fra generell bruk av helpdesken logges her. Du kan bli bedt om å sende inn en eller flere av disse loggene når du ber om support.",
    "email_logs"                => "E-postlogger",
    "email_logs_desc"           => "Detaljer om innkommende e-poster lagres i disse filene når e-poster lastes inn og opprettes som saker.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Svar til",
    "and_number_others"         => "Og :number andre|og :number andre",
    "user_templates"            => "Brukermaler",
    "operator_templates"        => "Operatørmaler",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Kumulativ vedleggsstørrelsesgrense",
    "attachment_size_desc"      => "Den maksimale størrelsen på alle vedlegg som sendes i en enkelt e-post. Tilgjengelige alternativer er K (for Kilobytes) og M (for Megabytes), alt annet antas å være oppgitt i bytes. Eksempel: 5M for 5 Megabytes. Sett til 0 for ikke å tillate sending av vedlegg via e-post og i stedet kreve at mottakere laster ned vedlegg via helpdesken.",
    "attachment_limit_reached"  => "Kumulativ filstørrelsesgrense nådd (:size). Send eventuelt filer via et annet medium.",
    "no_existing_translations"  => "Ingen eksisterende oversettelser.",
    "add_translation"           => "Legg til oversettelse",
    "todo_list"                 => "Gjøremålsliste",
    "version_check"             => "Versjonskontroll",
    "system_overview"           => "Systemoversikt",
    "getting_started"           => "Kom i gang",
    "operator_notes"            => "Operatørnotater",
    "simpleauth_operators_desc" => "Tillat operatører å logge inn og ut med SimpleAuth, vi anbefaler alltid å holde dette deaktivert med mindre du bruker det spesifikt til dette formålet.",
    "upgrade_and_reactivate"    => "Oppgrader og gjenaktiver",
    "upgrade_pending"           => "Oppgradering venter",
    "locale_in_uri"             => "Inkluder lokalitet i URI",
    "locale_in_uri_desc"        => "Deaktiver for å fjerne lokalitet fra URI, for eksempel: http://support.mycompany.com/en/announcements blir til http://support.mycompany.com/announcements. Kan kun deaktiveres når det utelukkende er ett aktivert språk i systemet.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Dette er for øyeblikket definert som et standardspråk. Deaktiverer du språket vil et annet aktivert språk bli definert som standardspråk.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Vennligst aktiver JavaScript for å bruke denne siden.",
    "go_to_dashboard"           => "Gå til dashboard",
    "brand_colour_desc"         => "Velg en farge til ditt brand, den vil bli brukt til fargepaletten på både frontend og i operatørmaler. La stå tomt for å bruke standard fargepaletten.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Favicon-bildet vises i adressefeltet og brukes til å identifisere din hjemmeside. For best resultat, kontroller at ikonet inneholder en rekke størrelser fra 32x32px til 310x310px, er kvadratisk og i ICO/PNG-format.",
    "view_original"             => "Vis original",
    "download_original"         => "Last ned original",
    "consume_all"               => "Angi alternativt en avdelings e-postadresse med \"Consume All\" aktivert.",
    "reprocess_email"           => "Gjenbehandle e-post",
    "reprocess_email_desc"      => "Vi anbefaler at du gjennomgår hva som opprinnelig blokkerte e-posten og foretar nødvendige endringer før du forsøker å gjenbehandle.",
    "email_blocked_desc"        => "E-post feilet utsendelse flere ganger, den må nå sendes manuelt.",
    "captcha_type"              => "Captcha-type",
    "default_captcha"           => "Standard captcha",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Registrer et nytt nettsted på <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, velg riktig reCAPTCHA-type og kontroller at hvert brand-domene er inkludert. Kopier site og secret key ovenfor.",
    "enter_code"                => "Skriv inn kode",
    "export_data"               => "Eksporter data",
    "export_data_desc"          => "Generer en nedlastbar eksport av data tilhørende hver enkelt bruker.",
    "export_data_select"        => "Velg hvilken type data du vil eksportere.",
    "export_data_scheduled"     => "Eksporten genereres nå, dette kan ta litt tid. Vi vil sende deg en e-post når den er tilgjengelig for nedlasting.",
    "database"                  => "Database",
    "database_desc"             => "Følgende er lagret i databasen.",
    "prune_users"               => "Inaktive brukerposter kan automatisk bli fjernet. En bruker anses som inaktiv når de ikke har logget inn eller hatt aktivitet i en gitt tid.",
    "prune_tickets"             => "Inaktive saker kan automatisk bli fjernet. En sak anses som inaktiv når den er løst og ikke har hatt aktivitet i en gitt tid.",
    "prune_organisations"       => "Inaktive organisasjoner kan automatisk bli fjernet. En organisasjon anses som inaktiv når den ikke har brukere knyttet til seg og ikke har hatt aktivitet i en gitt tid.",
    "prune_export"              => "Brukerdataeksporter er lagret i filsystemet men kan ta opp plass, du kan fjerne eksporterte filer generert før en gitt dato.",
    "automatically_prune"       => "Slett automatisk",
    "days_after_saved"          => "Elementer etter",
    "days_after_last_activity"  => "Inaktive elementer etter",
    "record_permanent_delete"   => "Elementer vil bli slettet permanent. Dette vil påvirke rapporter.",
    "record_delete_relations"   => "Elementene vil bli slettet permanent sammen med følgende relaterte data: :relations. Dette vil påvirke rapporter.",
    "manually_prune"            => "Slett manuelt elementer opprettet før",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Hvis du aktiverer denne innstillingen når siden ikke laster korrekt kan du bli utestengt fra SupportPal!",
    "verify_frontend_loads"     => "Verifiser at frontenden laster korrekt nedenfor.",
    "twig_operator_reply_template"   => "Flettefeltet {{ operator.reply_template|raw }} behandles ved kjøretid og forhåndsvisningen kan derfor være unøyaktig.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Tillater kjøring av andre brands på din SupportPal-installasjon.",
    "no_branding"               => "Ingen branding",
    "no_branding_desc"          => "Fjerner SupportPal-branding fra klientsiden av helpdesken.",
    "multi_ip"                  => "Multi-IP-støtte",
    "multi_ip_desc"             => "Tillater å låse SupportPal til mer enn én intern eller ekstern IP.",
    "purchase"                  => "Kjøp",
    "ticket_number_missing"     => "For saksrelaterte e-poster må {{ ticket.number }}-flettefeltene være til stede i e-postemnet og pakket inn i enten <em>[#{{ ticket.number }}]</em> eller <em>(#{{ ticket.number }})</em> for å rute svar til riktig sak. Hvis du vil fjerne saksnummeret, vurder å aktivere <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>e-post underadressering</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Aktiver debugmodus for å vise feil, brukes kun til feilsøking eller hvis instruert av support. Feil og andre nyttige loggmeldinger er ellers lagret i applikasjonsloggen, som kan lastes ned ved å gå til -> Logger -> Log File Manager.",
    "record_trash_relations"    => "Elementer vil bli flyttet til papirkurven og permanent slettet etter :number dager sammen med følgende relaterte data: :relations. Dette vil påvirke rapporter.",
    "uninstall_plugable_warning" => "Avinstallering av :plugable vil slette alle tilknyttede filer og data. Vi anbefaler å deaktivere :plugable i stedet.",
    "web_settings_desc"         => "Webkanalens innstillinger gjelder for frontenden. Som standard kan saker nås av alle som kjenner en unik saks-URL. Du kan deaktivere dette og kreve innlogging før tilgang til saksinformasjon kan oppnås.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Skriv inn en streng (et bestemt ord eller e-postadresse du vil forby), alle strenger er uavhengige av store og små bokstaver.",
    "spam_is_regex_desc"        => "Regler kan benytte regulære uttrykk; hvis du ønsker å bruke dette, aktiver denne innstillingen. Du trenger ikke å bruke avgrensere.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Filene kunne ikke lastes opp på grunn av en serverfeil.",
    "insert_image"              => "Sett inn bilde",
    "quote"                     => "Sitat",
    "code"                      => "Kode",
    "format"                    => "Format",
    "paragraph"                 => "Avsnitt",
    "heading1"                  => "Overskrift 1",
    "heading2"                  => "Overskrift 2",
    "heading3"                  => "Overskrift 3",
    "heading4"                  => "Overskrift 4",
    "heading5"                  => "Overskrift 5",
    "heading6"                  => "Overskrift 6",
    "upload"                    => "Last opp",
    "more_formatting"           => "Mer formatering",
    "clearformat"               => "Fjern formatering",
    "bold"                      => "Fet",
    "underline"                 => "Understrek",
    "italic"                    => "Kursiv",
    "strikethrough"             => "Gjennomstrek",
    "font_color"                => "Skriftfarge",
    "insert_link"               => "Sett inn lenke",
    "edit_link"                 => "Rediger lenke",
    "unlink"                    => "Fjern lenke",
    "orderedlist"               => "Sortert liste",
    "unorderedlist"             => "Usortert liste",
    "outdent"                   => "Reduser innrykk",
    "indent"                    => "Øk innrykk",
    "lists"                     => "Lister",
    "edit_html"                 => "Rediger HTML",
    "sEmptyTable"               => "Ingen data tilgjengelig i tabellen",
    "sInfo"                     => "Viser _START_ til _END_ av _TOTAL_ poster",
    "sInfoEmpty"                => "Viser 0 til 0 av 0 poster",
    "sInfoFiltered"             => "(filtrert fra _MAX_ totale poster)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Vis _MENU_ poster",
    "sLoadingRecords"           => "Laster inn...",
    "sProcessing"               => "Behandler...",
    "sSearchPlaceholder"        => "Søk...",
    "sZeroRecords"              => "Ingen treff funnet",
    "sSortAscending"            => ": aktiver sortering i stigende rekkefølge",
    "sSortDescending"           => ": aktiver sortering i fallende rekkefølge",
    "incoming_auto_reply"       => "Mottatt (auto-svar)",
    "logo_dark_mode"            => "Mørk modus-logo",
    "logo_dark_mode_desc"       => "Hvis ditt logo kun er designet til å fungere på en lys bakgrunn, velg et annet logo for mørk modus. Feltet kan enten være en sti relativ til base-biblioteket (vi anbefaler å lagre ditt logo i resources/assets/-mappen) eller en direkte URL til bildet.",
    "template_mode"             => "Malmodus",
    "template_mode_desc"        => "Velg et lyst eller mørkt tema for grensesnittet. Brukere vil kunne velge sin egen preferanse i sin profil.",
    "light_mode"                => "Lys modus",
    "dark_mode"                 => "Mørk modus",
    "logo"                      => "Logo",
    "logo_desc"                 => "Bytt ditt standard logo for dette brand. Feltet kan enten inneholde en sti relativ til base-biblioteket (vi anbefaler å lagre ditt logo i resources/assets/-mappen) eller en direkte URL til bildet.",
    "website_url"               => "Hjemmeside-URL",
    "website_url_desc"          => "Legg til en lenke tilbake til din primære hjemmeside i supportportalens overskrift.",
    "back_to_website"           => "Tilbake til hjemmeside",
    "template"                  => "Mal",
    "how_can_we_help"           => "Hvordan kan vi hjelpe deg i dag?",
    "ticket_desc2"              => "Saksnettet kan sorteres som du ønsker og filtreres etter behov.",
    "zip_extension_required"    => "Zip PHP-utvidelsen er ikke installert. Installer den og prøv igjen.",
    "zip_file_not_downloaded"   => "Zip-filen kunne ikke lastes ned. Verifiser at du er i stand til å åpne: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Tredjepartsintegrasjon|Tredjepartsintegrasjoner",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth-data",
    "client_id"                 => "Klient-ID",
    "client_secret"             => "Klienthemmelighet",
    "create_credentials"        => "Vennligst opprett dine autorisasjonsdetaljer via <a href=\":route\">Tredjepartsintegrasjon</a>-siden.",
    "oauth_data_missing"        => "Klient-ID og/eller hemmelighet er ikke definert og er påkrevd. Når du har konfigurert det i henhold til instruksjonene nedenfor, lukk popup-vinduet og revalider.",
    "configure_after_brand_created" => "Dette kan konfigureres etter at brandet er opprettet.",
    "get_access_token"          => "Hent access token",
    "reset_access_token"        => "Tilbakestill access token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Brandnavn",
    "brand_name_desc"           => "Ditt brandnavn brukes i all korrespondanse med brukere.",
    "supportpal_announcements"  => "SupportPal-kunngjøringer",
    "add_selectize"             => "Legg til <strong>:item</strong>...",
    "general_settings"          => "Konfigurer generelle innstillinger",
    "configure_brand"           => "Konfigurer brand",
    "configure_department"      => "Konfigurer avdeling",
    "setup_cron"                => "Konfigurer cron-jobb",
    "channel_settings"          => "Oppdater sakskanalinnstillinger",
    "add_user"                  => "Legg til en ny bruker",
    "open_ticket"               => "Åpne en ny sak",
    "reply_ticket"              => "Svar på sak",
    "new_version_available"     => "Ny versjon tilgjengelig",
    "new_version_desc"          => "En ny versjon av SupportPal er utgitt, vi anbefaler at du alltid holder din installasjon oppdatert.<div class='description'>Godkjenner du denne meldingen vil varselet bli skjult inntil en ny oppdatering utgis.</div>",
    "acknowledge"               => "Godkjenn",
    "running_latest_version"    => "Du kjører den nyeste versjonen.",
    "running_prerelease"        => "Du kjører en forhåndsutgivelsesversjon.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Resultater per side",
    "class_name"                => "Klassenavn",
    "possible_permission_issue" => "Du kjører kommandoen som \":cli_user\", mens \":path\" er eid av \":path_user\", dette kan føre til utfordringer med filtillatelser.",
    "system_update"             => "Systemoppdatering",
    "system_update_desc"        => "Oppdater SupportPal til den nyeste tilgjengelige versjonen.",
    "update_available"          => "Oppdatering tilgjengelig",
    "up_to_date"                => "Oppdatert",
    "release_notes"             => "Utgivelsesnotater",
    "about_to_update_to"        => "Du er i ferd med å oppdatere til versjon <strong>:version</strong>. En full sikkerhetskopi av systemet vil bli tatt automatisk før oppdateringen installeres.",
    "waiting_for_update_start"  => "Venter på at oppdateringen begynner... Dette kan ta noen minutter.",
    "binary_paths"              => "Binære stier",
    "binary_paths_desc"         => "PATH-miljøvariabelen brukes til å finne påkrevde binære filer. Hvis en eller flere av dine binære filer ikke kan finnes, kan du spesifisere den fullstendige stien til hver binær fil.",
    "cron_makesure"             => "For hjelp med registrering av cron-jobb, se venligst <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Cron-jobb hjelp</a>.",
    "cron_must_run_for_update"  => "Cron-jobbet må kjøre for å bruke denne funksjonen.",
    "support_expired"           => "Support og oppdatering på din lisens er utløpt.",
    "update_permitted_version"  => "Lisensen tillater kun oppdatering til :version.",
    "update_renew_support"      => "Vennligst oppdater din support- og oppdateringsavtale for å oppgradere til den nyeste versjonen av SupportPal.",
    "renew"                     => "Forny",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Bakgrunnsjobber",
    "background_jobs_not_processing" => "Bakgrunnsjobber behandles ikke for øyeblikket, se <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>feilsøkingstrinn</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Tillegg|Tillegg",
    "addon_already_exists"      => "Et tillegg eksisterer allerede på denne stien: :path",
    "addons_marketplace"        => "Markedsplass",
    "addons_missing_valid_artifact" => "Tillegget har ikke et gyldig arkiv.",
    "checksum_not_matched"      => "Den nedlastede filen feilet sjekksum-verifisering.",
    "invalid_archive_format"    => "Artefakten bør ikke inkludere andre biblioteker enn tillegget.",
    "downloading_version"       => "Laster ned tilleggsversjon :version til :path...",
    "extracting_addon"          => "Pakker ut tilleggets filer...",
    "activating_addon"          => "Aktiverer tillegg...",
    "addon_install_success"     => "Tillegg installert.",
    "addon_install_error"       => "Tillegget ble ikke installert, kontroller applikasjonsloggen for ytterligere detaljer.",
    "addon_latest_version"      => "Tillegget kjører allerede den nyeste versjonen.",
    "addon_update_success"      => "Tillegg oppdatert.",
    "addon_update_error"        => "Tillegget feilet oppdatering, og er tilbakeført til forrige versjon, kontroller applikasjonsloggen for ytterligere detaljer.",
    "addon_basic_info"          => "Angi grunnleggende informasjon om tillegget.",
    "addon_author_name"         => "Forfatter",
    "addon_author_uri"          => "Forfatter-URI (lenke til din hjemmeside)",
    "addon_author_uri_short"    => "Forfatter-URI",
    "addon_vendor_name"         => "Firmanavn (Navnet på ditt firma, kan defineres tilsvarende forfatternavn)",
    "addon_vendor_name_short"   => "Firmanavn",
    "addon_name"                => "Navn på tillegg",
    "addon_description"         => "Beskrivelse av tillegg",
    "addon_creating"            => "Oppretter tillegg...",
    "addon_ready"               => "Tillegget er klart i :directory! Bygg noe fantastisk.",
    "addon_version_not_supported" => "Den tilgjengelige versjonen av tillegget støtter ikke den installerte versjonen av SupportPal.",
    "no_addons_found"           => "Ingen tillegg funnet.",
    "price"                     => "Pris",
    "one_time"                  => "Engangs",
    "monthly"                   => "Månedlig",
    "quarterly"                 => "Kvartalsvis",
    "semiannually"              => "Halvårlig",
    "annually"                  => "Årlig",
    "biennially"                => "Toårig",
    "triennially"               => "Treårig",
    "tag"                       => "Tag|Tags",
    "login_to_install"          => "<a href=':link'>Logg inn</a> for å installere",
    "marketplace_login_error"   => "Innlogging feilet. Gå til <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>logg ut</a> og sørg for at du logger inn med SupportPal-kontoen som har din lisens.",
    "payment_required"          => "Betaling påkrevd",
    "addon_purchase_info"       => "Ved å klikke på knappen ovenfor godkjenner du at din konto vil bli belastet prisen vist med det valgte gjentakende intervallet, og du godkjenner <a href=':link' target='_blank'>brukervilkårene</a>.",
    "addon_cancel_info"         => "Kansellerer du vil tillegget umiddelbart bli deaktivert, og du vil ikke bli belastet ytterligere betaling.",
    "system_health"             => "Systemhelse",
    "system_health_desc"        => "Helsekontroller overvåker at systemet fungerer korrekt og varsler deg hvis det oppstår problemer.",
    "system_health_errors"      => "En eller flere <a href=':link'>systemhelse</a>-kontroller har feilet.",
    "app_log_check"             => "Antall feil i applikasjonslogg",
    "app_log_errors_exist"      => "Applikasjonsloggfilen for i dag inneholder feil, kontroller loggfilene ved å navigere til Verktøy -> Logger -> Log File Manager -> :filename",
    "redis_check"               => "Redis-tilkobling",
    "web_server_check"          => "Webserver",
    "web_server_error"          => "Ikke i stand til å koble til :url",
    "redirection_rules_check"   => "Omdirigeringsregler",
    "redirection_rule_error"    => "Serveromdirigeringsregler må fjerne /index.php fra stien. Hvis ikke kan angripere potensielt få tilgang til dine filer.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "Cron kjører ikke.",
    "cron_check_warning"        => "Følgende oppgaver: (:tasks) har ikke blitt kjørt innenfor det forventede intervallet.",
    "database_check"            => "Databasetilkobling",
    "disk_usage_check"          => "Ledig diskplass",
    "email_queue_check"         => "Utgående e-postkø",
    "email_queue_warning"       => "E-postkøen inneholder :number e-poster som krever oppmerksomhet.",
    "pipe_check"                => "E-post piping",
    "file_not_found"            => "Filen ':path' ble ikke funnet.",
    "file_not_executable"       => "Filen ':path' er ikke kjørbar.",
    "dependency_resolution"     => "Ikke i stand til å kjøre helsekontroll.",
    "debug_mode_warning"        => "Debugmodus bør kun brukes midlertidig.",
    "custom_colour"             => "Egendefinert farge",
    "remove_colour"             => "Fjern farge",
    "background_colour"         => "Bakgrunnsfarge",
    "open_link"                 => "Åpne lenke",
    "open_link_in"              => "Åpne lenke i...",
    "new_window"                => "Nytt vindu",
    "current_window"            => "Gjeldende vindu",
    "edit_image"                => "Rediger bilde...",
    "alternative_description"   => "Alternativ beskrivelse",
    "browse_image"              => "Bla etter et bilde",
    "drop_image"                => "Slipp et bilde her",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Tastatursnarveier",
    "enable_keyboard_shortcuts" => "Aktiver tastatursnarveier",
    "shortcut_global"           => "Globale snarveier",
    "shortcut_toggle"           => "Slå av/på dialogboksen for tastatursnarveier",
    "shortcut_start_search"     => "Start søk",
    "shortcut_goto_new_ticket"  => "Gå til siden for å åpne ny sak",
    "shortcut_ticket_view"      => "Snarveier i saksvisning",
    "shortcut_focus_reply"      => "Fokuser på svarskjemaet",
    "shortcut_focus_notes"      => "Fokuser på notatskjemaet",
    "shortcut_focus_forward"    => "Fokuser på videresendingsskjemaet",
    "shortcut_toggle_user_tab"  => "Slå av/på fanen for brukerdetaljer i sidepanelet",
    "shortcut_take_ticket"      => "Ta sak",
    "shortcut_close_ticket"     => "Lukk sak",
    "shortcut_lock_ticket"      => "Lukk og lås sak",
    "shortcut_unlock_ticket"    => "Lås opp sak",
    "shortcut_trash_ticket"     => "Flytt sak til papirkurv",
    "shortcut_block_user"       => "Blokér bruker og flytt sak til papirkurv",
    "shortcut_watch_ticket"     => "Følg sak",
    "shortcut_unwatch_ticket"   => "Slutt å følge sak",
    "shortcut_merge_ticket"     => "Slå sammen sak",
    "shortcut_unmerge_ticket"   => "Skill sak fra sammenslåing",
    "shortcut_expand_all"       => "Utvid alle meldinger",
    "shortcut_collapse_all"     => "Skjul alle meldinger",
    "shortcut_print_ticket"     => "Skriv ut saksdetaljer og meldinger",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Databasetilkoblingsfeil, kontroller :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Mørk modus-favicon",
    "favicon_dark_mode_desc"    => "Hvis ditt favicon kun er designet til å fungere på en lys bakgrunn, sett et annet favicon for mørk modus. Dette vil kun brukes hvis din nettleser og/eller ditt operativsystem kjører i mørk modus.",
    "template_mode_system_desc" => "Valg av system vil synkronisere malmodus til lys eller mørk modus avhengig av ditt operativsystems temainnstillinger.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / None",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "E-posten feilet sending. Prøver igjen :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "WebSocket-tilkobling",
    "websockets_not_running"    => "Ikke i stand til å koble til WebSocket-server.",
    "search_driver_check"       => "Søkemotor",
    "search_driver_not_working" => "Den konfigurerte søkemotoren fungerer ikke korrekt.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Midlertidig sti",
    "temporary_path_desc"       => "Den midlertidige stien brukes til å lagre filer under oppdateringen. Systemets midlertidige sti brukes som standard. Stien må ha minst 3 GB ledig plass.",
    "background_jobs_desc"      => "Nedenfor er en liste over bakgrunnsjobber som nylig har feilet.",
    "failed_jobs"               => "Feilede jobber",
    "horizon_dashboard"         => "Horizon-dashboard",
    "job"                       => "Jobb|Jobber",
    "job_payload"               => "Jobbinnhold",
    "job_exception"             => "Jobbunntak",
    "failed_at"                 => "Feilet på",
    "queue"                     => "Kø",
    "exception"                 => "Unntak",
    "data"                      => "Data",
    "failed_background_jobs"    => "En eller flere <a target='_blank' href=':link'>bakgrunnsjobber</a> har feilet og krever manuell oppmerksomhet.",

    /*
     * 5.3.0
     */
    "ticket_channel_2"          => "Vi tilbyr et antall standardkanaler. Du kan aktivere og konfigurere Facebook- og Twitter-kanalene for å samle saker generert via sosiale medier.",
    "incoming_duplicate"        => "Innkommende (duplikat)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "E-postmetoden er overstyrt i <a href=':link' target='_blank'>standard brand-innstillingene</a>.",
    "addon_not_found"           => "Tillegg ikke funnet.",
    "deactivating_addon"        => "Deaktiverer tillegg...",
    "addon_already_activated"   => "Tillegg er allerede aktivert.",
    "addon_already_deactivated" => "Tillegg er allerede deaktivert.",
    "addon_cannot_deactivate"   => "Tillegg kan ikke deaktiveres.",
    "addon_activation_failed"   => "Aktivering av tillegg feilet, sjekk applikasjonsloggen for mer informasjon.",
    "addon_deactivation_failed" => "Deaktivering av tillegg feilet, sjekk applikasjonsloggen for mer informasjon.",
    "site_key"                  => "Site Key",
    "secret_key"                => "Secret Key",
    "turnstile_desc"            => "Registrer et nytt Turnstile-widget på <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Kopier site og secret key ovenfor.",
    "hcaptcha_desc"             => "Registrer deg på <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Kopier site og secret key ovenfor.",
    "captcha_type_desc"         => "Velg den captchaen som skal brukes gjennom systemet. Vi anbefaler å bytte til Google reCAPTCHA, som krever ytterligere konfigurering.",

);
