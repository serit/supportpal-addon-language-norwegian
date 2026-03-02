<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systemkrav feilet",

    // Index
    "supportpal_installer"      => "SupportPal installasjonsverktøy",
    "select_language"           => "Velg språk",
    "install_type"              => "Installasjonstype",
    "install"                   => "Ren installasjon",
    "upgrade"                   => "Oppgrader eksisterende installasjon",
    "support"                   => "Lisensnøkkelen for denne installasjonen har ikke et gyldig support- &amp; oppgraderingsabonnement, og er derfor ikke tilgjengelig for installasjon av denne versjonen av SupportPal. Vennligst <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>forny</a> din support- &amp; oppdateringsavtale.",

    // Upgrade
    "successfully_updated"      => "Gratulerer, SupportPal er oppgradert.",

    // Install
    // Step 1
    "step_1"                    => "Trinn 1 av 7: Godta EULA",
    "step_1_desc"               => "Les vennligst vår programvarelisensavtale nedenfor. Ved å fortsette godkjenner du lisensvilkårene.",
    "i_accept_and_continue"     => "Jeg godtar og vil fortsette",

    // Step 2
    "step_2"                    => "Trinn 2 av 7: Systemkrav",
    "not_available"             => "Ikke tilgjengelig",
    "php_version"               => "PHP-versjon",
    "php_version_not_found"     => "Ikke tilgjengelig, fant PHP-versjon: :version",
    "php_extensions"            => "PHP-utvidelser",
    "file_writeable"            => "Filtillatelser",
    "file_writeable_desc"       => "Alle filer nedenfor bør være skrivbare for webserveren. Vi anbefaler å bruke 755 filtillatelser, men noen systemer kan kreve 777 hvis filene ikke er eid av webserver-brukeren. Biblioteker bør være rekursivt skrivbare.",

    // Step 3
    "step_3"                    => "Trinn 3 av 7: Database",
    "step_3_desc"               => "Skriv inn detaljene for databasen du har konfigurert for SupportPal.",
    "hostname"                  => "Vertsnavn",
    "port"                      => "Port",
    "port_desc"                 => "(Endres kun hvis port 3306 ikke brukes)",
    "database"                  => "Database",
    "database_not_empty"        => "Databasen må ikke inneholde tabeller.",

    // Step 4
    "step_4"                    => "Trinn 4 av 7: Opprett tabeller",
    "step_4_desc"               => "Migrasjonen vil bli utført i bakgrunnen, og en full logg vil bli skrevet ut nedenfor. Dette kan ta flere minutter, når utført klikk vennligst på fortsett.",

    // Step 5
    "step_5"                    => "Trinn 5 av 7: Operatørkonto",
    "step_5_desc"               => "SupportPal krever en gyldig lisens for å fungere, skriv inn en nedenfor.",
    "license_desc"              => "Din SupportPal-lisensnøkkel er 23 tegn lang og begynner med SP-",
    "operator_desc"             => "Opprett vennligst en administratorkonto for operatørpanelet ved å skrive inn dine opplysninger nedenfor.",
    "validating_license"        => "Validerer lisens...",

    // Step 6
    "step_6"                    => "Trinn 6 av 7: Hurtigoppsett",
    "step_6_desc"               => "Skriv inn dine firma- og hjemmesidedetaljer nedenfor.",
    "locale_desc"               => "Definer lokalitetsinnstillinger for ditt system.",
    "operator_success"          => "Din administratorkonto er blitt opprettet.",

    // Step 7
    "step_7"                    => "Trinn 7 av 7: Installert!",
    "successfully_installed"    => "Gratulerer, SupportPal er installert.",
    "operator_panel"            => "Operatørpanel",
    "help_desc"                 => "Trenger du hjelp til konfigurering eller bruk av SupportPal, har vi to primære informasjonskilder tilgjengelig:",
    "submit_a_ticket"           => "Opprett en sak",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Du oppfyller :required av :total påkrevde krav.",
    "optional_requirements"     => "Du oppfyller :optional av :total valgfrie krav.",
    "both_requirements"         => "Du oppfyller :required av :total_required påkrevde krav og :optional av :total_optional valgfrie krav.",
    "php_version_is"            => "Din PHP-versjon er :version.",
    "enabled"                   => "Aktivert",
    "disabled"                  => "Deaktivert",
    "php_settings"              => "PHP-innstillinger",
    "ipv6_support"              => "IPv6-støtte",
    "memory_limit"              => ">= 128 MB minne",
    "memory_limit_error"        => "Din minnegrense er ':limit'.",
    "permission_denied"         => "Tillatelse nektet",
    "writable"                  => "Skrivbar",
    "help_php_version"          => "For hjelp med installasjon av en ny PHP-versjon, kontakt vennligst din hostingleverandør eller serveradministrator.",
    "help_php_extensions"       => "PHP-utvidelser varierer avhengig av din server, din vert og andre systemvariabler. For hjelp med installasjon av manglende avhengigheter, kontakt vennligst din hostingleverandør eller serveradministrator.",
    "help_php_settings"         => "For ytterligere hjelp, les vennligst <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Hjelp til PHP-innstillinger</a>.",
    "disabled_functions"        => "Deaktiverte funksjoner",
    "help_mysql_version"        => "For hjelp med installasjon av en ny MySQL-versjon, kontakt vennligst din hostingleverandør eller serveradministrator.",
    "mysql_version"             => "MySQL-versjon",
    "mysql_version_not_found"   => "Ikke tilgjengelig, fant MySQL-versjon: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Hvis din server har IPv6-nettverksstøtte, installer vennligst php-sockets-utvidelsen.",
    "email_address_desc"        => "Skriv inn din virksomhets primære e-postadresse, denne vil bli brukt som standard e-postadresse for utsendelse og e-postadressen for din første avdeling. Du kan legge til flere e-postadresser senere.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders versjon :required eller høyere er påkrevd. Fant: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG-støtte",
    "allow_url_fopen"           => "'allow_url_fopen' aktivert",
    "allow_url_fopen_failure"   => "Aktiver 'allow_url_fopen' i din php.ini-fil for å bruke Gravatar og andre funksjoner.",
    "allowed_methods"           => "HTTP tillatte metoder",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Serverversjon >= :min",
    "mysql_server_version_desc" => "MySQL :min eller høyere er påkrevd for å kjøre SupportPal. Fant: ':version'.",

    "upgrade_step"              => "Trinn :num av :total: ",
    "accept_eula"               => "Godta EULA",
    "system_requirements"       => "Systemkrav",
    "update_database"           => "Oppdater database",
    "upgrade_complete"          => "Oppgradering utført",

    "upgrade_support"           => "Skulle du støte på problemer eller trenge hjelp med de nye funksjonene i SupportPal, se vennligst vår dokumentasjon eller åpne en sak hos oss.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Klikk vennligst på knappen nedenfor for å starte.",
    "locked"                    => "Installasjon/Oppgradering pågår",

    "error_and_empty_database"  => "Det oppstod en feil. Det kan være nødvendig å tømme databasen før du starter igjen.",
    "login_with_details"        => "Du kan logge inn med detaljene spesifisert tidligere.",
    "command_not_available"     => "Kommando ikke tilgjengelig. Hvis du tror dette er vist ved en feil, kjør vennligst 'php artisan cache:clear' og kjør deretter denne kommandoen igjen.",
    "read_upgrade_guide"        => "Vår oppgraderingsguide inneholder nyttig informasjon om store endringer og beste fremgangsmåter for oppgradering:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[Advarsel] Kontroller vennligst at du har tatt en sikkerhetskopi av din SupportPal-database og programinstallasjonsfiler før du fortsetter.\nKontroller vennligst at du har tatt en sikkerhetskopi, bekreftet at den ikke er korrupt og at du er klar til å fortsette.",
    "error_and_revert_database" => "Det oppstod en feil. Gjenopprett vennligst din database fra sikkerhetskopi før du starter igjen.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Databasekonfigurasjonsfilen eksisterer allerede. Hvis du er sikker på at applikasjonen ikke allerede er installert, slett vennligst /config/:environment/database.php og start igjen.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Takk for at du valgte SupportPal. Verifiser vennligst at installasjonstypen nedenfor er korrekt og klikk deretter på fortsett.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrerer",
    "migrated"                  => "Migrert",
    "database_setup_complete"   => "Databasekonfigurasjon utført.",
    "created_repository"        => "Opprettet ':name' repository.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Kommando utilgjengelig. Kjør vennligst app:update for å laste ned og oppgradere til den nyeste tilgjengelige versjonen: %s.",
    "suggest_run_upgrade"       => "En oppgradering pågår allerede. Kjør vennligst app:upgrade i stedet.",
    "failed_to_download"        => "Filen ble ikke lastet ned: :message",
    "backup_failed_abort"       => "Sikkerhetskopi feilet. Avbryter oppdatering.",
    "command_failed"            => "Kommandoen :command feilet med output: :message.",
    "already_latest_version"    => "Du har allerede den nyeste versjonen installert (:version).",
    "update_not_supported"      => "Automatisk oppdatering til nyeste versjon (:version) er ikke støttet.",
    "current_and_new_version"   => "Du kjører versjon :current_version. Nyeste tilgjengelige versjon er :new_version.",
    "update_to_version"         => "Du kjører versjon :current_version. Vil du oppgradere til :new_version?",
    "downloading_version"       => "Laster ned versjon :version til :path...",
    "checksum_not_matched"      => "Den nedlastede filen feilet sjekksum-verifisering.",

    "check_readiness"           => "Kontrollerer om applikasjonen er i stand til å oppgradere...",
    "read_only"                 => "Filsystemet på \":path\" er kun lesbart. Oppdateringer kan ikke utføres på et utelukkende lesbart filsystem.",
    "file_ownership"            => "Filen \":path\" er eid av \":owner\" men PHP kjører som \":actual\". Filens eier og PHP-brukeren må være den samme under en oppdatering for alle applikasjonsfiler.",
    "minimum_disk_space"        => "Biblioteket \":path\" har utilstrekkelig plass. Det må minimum være :space megabytes ledig.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker-oppsett oppdaget. For oppgradering, følg https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Få feilsøkingstips",

    /*
     * 4.2.0
     */
    "app_manager_version_not_supported" => "App Manager (:version) støttes ikke.",
    "running_upgrade"           => "Kjører appoppgradering",
    "upgrade_complete_success"  => "Appoppgradering fullført.",
    "app_manager_requires_update" => "Må oppdatere app-manager før helpdesk-oppdatering kjøres. :command",

    /*
     * 5.0.0
     */
    "mysql_client_version"      => "Klientversjon >= :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "MySQL-klientversjon :min eller høyere (:mysqlnd_min for MySQLnd) er påkrevd for å kjøre SupportPal. Fant: ':version'.",
    "post_install"              => "For at systemet skal fungere korrekt må et cron-jobb konfigureres. Les vennligst vår <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>post-installasjons prosedyre</a> for detaljer om dette og andre anbefalte handlinger som kan forbedre funksjonalitet og sikkerhet.",
    "help_allowed_methods"      => "Din webserver må tillate alle HTTP-metodene nedenfor. Se vennligst vår <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>Ny installasjon</a> dokumentasjon for mer informasjon.",

    /*
     * 5.3.0
     */
    "check_file_permissions"    => "Kontrollerer filtillatelser...",

);
