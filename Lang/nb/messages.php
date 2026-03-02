<?php

return array(

    "deleted"               => "Slettet!",
    "success"               => "Vellykket",
    "error"                 => "Feil",
    "in_progress"           => "Pågår",

    "save_order"            => "Forsøker å lagre den oppdaterte sorteringen",

    "are_you_sure"          => "Er du sikker?",
    "yes_im_sure"           => "Ja, jeg er sikker",

    "success_created"       => "Opprettet ny :item!",
    "error_created"         => "Feilet i opprettelse av :item.",

    "success_deleted"       => "Slettet :item!",
    "error_deleted"         => "Feilet forsøk på sletting av :item.",

    "success_updated"       => "Oppdatert :item!",
    "error_updated"         => "Feilet forsøk på oppdatering av :item.",

    "error_notfound"        => ":item med ID ble ikke funnet.",
    "error_notfound_name"   => ":item med det gitte navnet ble ikke funnet.",
    "report_notfound"       => "Rapporten med den gitte kategorien og navnet ble ikke funnet.",

    "success_ordering"      => "Sortering oppdatert!",
    "error_ordering"        => "Feilet forsøk på oppdatering av sortering.",

    "error_login"           => "Innloggingsforsøk feilet.",
    "success_logout"        => "Logget ut.",

    "please_correct"        => "Rett vennligst følgende feil og forsøk igjen.",

    "success_settings"      => "Innstillinger oppdatert!",
    "error_settings"        => "Forsøket på oppdatering av innstillinger feilet.",

    "success_action"        => "Handling utført!",
    "error_action"          => "Handlingen ble ikke utført.",

    "error_embed_image"     => "Bildet ble ikke lastet opp.",

    "unauthorised"          => "Uautorisert",
    "not_authorised"        => "Du er ikke autorisert til å utføre denne handlingen.",
    "not_permitted"         => "Du har ikke tillatelse til å se denne siden. Hvis du mener dette er en feil, kontakt din administrator.",

    "page_not_found"        => "Siden ble ikke funnet",
    "cant_find_page"        => "Vi kan ikke finne siden du leter etter.",

    "please_report"         => "Rapporter vennligst til en administrator hvis denne handlingen var uventet.",

    "return_to"             => "Gå tilbake til :page.",

    "session_expired"       => "Din økt er utløpt, logg vennligst inn igjen.",
    "session_refresh"       => "Din økt er utløpt, oppdater vennligst siden og prøv igjen.",

    "general_error"         => "Det oppstod en feil. Forsøk vennligst igjen.",

    "no_results"            => "Ingen resultater.",

    "assign_incomplete"     => "Denne handlingen kunne ikke fullføres. :names kunne ikke tildeles til noen saker.",

    "maintenance_mode"      => "Vedlikeholdsmodus er aktiv. Helpdesken er utilgjengelig for brukere, husk å slå av vedlikeholdsmodus igjen.",

    "invalid_captcha"       => "Captcha-koden som ble skrevet inn var ikke korrekt, forsøk vennligst igjen.",
    "blocked_as_spam"       => "Din forespørsel ble oppdaget som spam. Kontakt vennligst en administrator hvis du mener dette er en feil.",
    "account_exists"        => "En aktiv konto med denne e-postadressen eksisterer allerede. Logg vennligst inn eller bruk funksjonen for gjenoppretting av passord hvis du ikke husker passordet ditt.",
    "error_loading_comments" => "Det oppstod et problem med innlasting av kommentarer.",

    "invalid_auth"          => "Dine innloggingsopplysninger ble ikke validert.",

    "forbidden"             => "Forbudt",

    "not_logged_exception"  => "<strong>Ups! Noe gikk galt.</strong><br />Underrett din administrator hvis feilen fortsetter å oppstå.",

    "too_many_ticket_reqs"  => "Det er opprettet for mange saker for denne adressen. :email. Grensen er :max på :decay minutter.",

    "not_operator"          => "Noe gikk galt. Den valgte operatøren er ikke gyldig, kontroller vennligst at de tilhører en operatørgruppe og at gruppen har en tilknyttet rolle.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Ups! Noe gikk galt.</strong><br />En feil oppstod ved innlasting av tabelldata. Underrett vennligst din administrator hvis feilen fortsetter.",

    "missing_extension"     => "Manglende utvidelse",
    "php_ldap_missing"      => "php-ldap-utvidelsen er påkrevd for bruk av LDAP-autorisasjon. Aktiver den og last inn siden på nytt.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Kun SSL-tilkoblinger er tillatt, du bør oppdatere forespørselen din til å bruke en sikker tilkobling.",
    "queued_emails"         => "Vellykket - e-poster vil begynne å bli satt i kø og sendt om et øyeblikk.",
    "error_loading_message" => "En feil oppstod mens meldingen ble lastet inn. Forsøk vennligst igjen.",
    "please_refresh"        => "Last inn denne siden på nytt.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Tjenesten er ikke tilgjengelig for øyeblikket.</strong><br />Kunne ikke koble til databasen.",
    "category_required"     => "Artikkelen må tilhøre én eller flere kategorier.",
    "warning"               => "Advarsel",
    "note"                  => "Notat",
    "brand_invalid_dept"    => "Handlingen kunne ikke utføres fullstendig. Avdelingen kunne ikke oppdateres på noen saker p.g.a. deres brand.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Forsøk på opplasting av vedlegg feilet \":filename\", Årsak: \":reason\"",
    "upload_max_size"       => "Filen må være mindre enn :size",
    "upload_wrong_type"     => "Filtypen er ikke tillatt",

    /*
     * 2.3.0
     */
    "delete_record"         => "Slett :record?",
    "cannot_be_undone"      => "Denne handlingen kan ikke angres.",
    "warn_delete"           => "Dette vil permanent slette <strong>:name</strong> :record fra systemet.",
    "delete_confirm"        => "Ja takk, slett :record",
    "keep_record"           => "Nei takk, behold :record",
    "delete_relations"      => "Sletting av <strong>:name</strong> :record vil også permanent slette alle følgende relaterte data:",
    "please_check"          => "Du må krysse av alle boksene ovenfor for å bekrefte at du forstår resultatet av denne ugjenkallelige handlingen.",
    "failed_attachments"    => "Feilet i vedlegging av noen filer.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Vellykket - e-posten er blitt sendt.",
    "task_already_running"  => "Planlagt oppgave kjøres automatisk for øyeblikket, forsøk igjen om et øyeblikk.",
    "linked_account"        => "SOME-kontoen er blitt koblet til din konto.",
    "already_linked"        => "SOME-kontoen er allerede koblet til en annen konto. Logg vennligst inn med den andre kontoen og frakoble kontoen derfra.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Ser dette riktig ut?",
    "no_revert"             => "Nei! Gå tilbake",
    "attachment_not_found"  => "Vedlegget ble ikke funnet.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Din konto er blitt lukket. Kontakt oss vennligst hvis du mener dette har skjedd ved en feil.",
    "leave_record"          => "Forlat :record?",
    "leave_record_warn"     => "Dette vil fjerne deg permanent fra :record.",
    "success_trashed"       => ":item er flyttet til papirkurven!",
    "error_trashed"         => "Det lyktes ikke å flytte :item til papirkurven.",
    "blocked_by_rule"       => "Forespørselen ble blokkert av spamregelen ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Din nettleser blokkerer popup-vinduer. Aktiver popup-vinduer og videresendinger for denne hjemmesiden for bruk av forhåndsvisning.",
    "error_editing_message" => "Det oppstod en feil i forsøket på å redigere denne meldingen.",

    /*
     * 4.1.1
     */
    "brand_not_enabled"     => "Denne handlingen kan ikke utføres da brandet ikke er aktivert.",
    "cannot_reply_to_internal" => "En bruker kan ikke svare på en intern sak.",

    /*
     * 4.3.0
     */
    "show_all_results"      => "Vis alle resultater &raquo;",

    /*
     * 5.0.0
     */
    "lock_timeout"          => "Låsetidsbegrensning",
    "lock_timeout_desc"     => "Serveren er for øyeblikket opptatt med å behandle andre forespørsler. Vennligst prøv igjen.",

);
