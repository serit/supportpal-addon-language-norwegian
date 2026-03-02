<?php

return array(

    "user"                          => "Bruker|Brukere",
    "user_details"                  => "Brukerdetaljer",
    "add_user"                      => "Legg til bruker",
    "account_active"                => "Konto aktiv",
    "account_active_desc"           => "Skift for å aktivere og deaktivere tilgang til autoriserte seksjoner.",

    "op_settings_dept_desc"         => "Velg hvilke avdelinger operatørene kan se og besvare saker i.",

    "organisation"                  => "Organisasjon|Organisasjoner",
    "members"                       => "Medlem|Medlemmer",
    "owner"                         => "Eier",
    "manager"                       => "Manager",
    "access_level"                  => "Tilgangsnivå",
    "access_level_desc"             => "Definer tilgangsnivå for brukeren i organisasjonen, basert på følgende:<br /><strong>Manager</strong> - Kan se saker åpnet av alle brukere i organisasjonen og håndtere brukere i organisasjonen<br /><strong>Bruker</strong> - Kan kun se saker åpnet av seg selv",
    "manage_organisation"           => "Håndter organisasjon",
    "leave_organisation"            => "Forlat organisasjon",
    "user_membership"               => "Brukermedlemskap",
    "transfer_ownership"            => "Overfør eierskap",
    "transfer_ownership_desc"       => "Som den nåværende eieren av organisasjonen kan du ikke fjernes som manager, og kun du kan slette organisasjonen. Du kan overføre eierskap av organisasjonen til en annen, vær oppmerksom på at handlingen ikke kan angres.",
    "transfer_ownership_operator"   => "Kun du som eier av organisasjonen kan slette den, og du kan ikke fjernes fra den. Bruk dette alternativet for å endre eieren av organisasjonen til en annen bruker.",
    "start_typing_name"             => "Begynn å skrive et navn...",
    "organisation_desc"             => "Hver organisasjon kan ha <strong>managere</strong>, som kan håndtere brukere og lese og besvare andres saker, og <strong>brukere</strong>, som kan åpne saker, men ikke lese eller besvare andres saker.",
    "organisation_operator_desc"    => "Legg til eksisterende brukere ved å klikke på \"Legg til bruker\" og søk etter navnet deres, vær oppmerksom på at tillegg av en bruker vil fjerne tilkoblinger de har til andre organisasjoner.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Kan håndtere andre brukere og se og besvare andre brukeres saker.<br /><strong>Brukere</strong> - Kan kun åpne saker på vegne av organisasjonen og besvare egne saker.",
    "send_password_reset"           => "Send lenke for tilbakestilling av passord",

    "profile"                       => "Profil",

    "login"                         => "Innlogging",
    "remember_me"                   => "Husk meg",
    "logout"                        => "Logg ut",
    "return_to_login"               => "Gå tilbake til innlogging",

    "user_register_disabled"        => "Beklager, offentlig brukerregistrering er for øyeblikket ikke mulig.",
    "success_register"              => "Konto registrert!",
    "register_now"                  => "Registrer nå",
    "register"                      => "Registrer",
    "register_account"              => "Registrer konto",
    "signed_up"                     => "Registrert",
    "last_active"                   => "Sist aktiv",

    "forgot_password"               => "Glemt passord?",
    "reset_password"                => "Tilbakestill passord",
    "set_password"                  => "Sett et passord",
    "please_set_password"           => "Sett vennligst ditt nye passord nedenfor.",
    "missing_email_or_reset"        => "Manglende e-postadresse eller tilbakestillingstoken.",

    "firstname"                     => "Fornavn",
    "lastname"                      => "Etternavn",
    "formatted_name"                => "Vist navn",
    "country"                       => "Land",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Bekreft passord",

    "group"                         => "Brukergruppe|Brukergrupper",
    "group_members"                 => "Gruppemedlemmer",
    "operator_group"                => "Operatørgruppe|Operatørgrupper",
    "add_group"                     => "Legg til i gruppe",

    "customfield"                   => "Brukerens egendefinerte felt|Brukerens egendefinerte felt",
    "customfield_order"             => "Dra radene for å endre rekkefølgen egendefinerte felt vises for brukere.",

    "role"                          => "Rolle|Roller",

    "operator_login_log"            => "Operatørinnloggingslogg",
    "system_activity_log"           => "Systemaktivitetslogg",
    "activity_log"                  => "Aktivitetslogg",

    "mass_email"                    => "Send masse-e-post",
    "send_email"                    => "Send e-post",
    "choose_template"               => "Velg mal...",

    "ldap_account"                  => "LDAP-konto|LDAP-kontoer",
    "ldap_operator_desc"            => "Søk etter en operatør, eller opprett en ny.",
    "ldap_server"                   => "LDAP-server",
    "ldap_server_desc"              => "Serverens vertsnavn. Alternativt kan du angi en full LDAP-URI. For eksempel vil: ldaps://ldap.server:1234/ koble til via SSL til port 1234.",
    "ldap_username"                 => "LDAP-brukernavn",
    "ldap_username_desc"            => "Brukernavnet som operatører skal bruke for å logge inn på helpdesken (deres LDAP-brukernavn.)",
    "ldap_rdn"                      => "LDAP RDN eller DN",
    "ldap_rdn_desc"                 => "Det særegne navnet for LDAP-brukernavnet, for eksempel: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP-detaljer",

    "operator_details"              => "Operatørdetaljer",

    "email_notifications"           => "E-postvarsler",
    "email_notifications_desc"      => "E-postvarslene som vil bli mottatt fra systemet.",

    "enable_ldap"                   => "Aktiver LDAP-innlogging",
    "enable_ldap_desc"              => "Hvis du bruker LDAP kan du aktivere det for operatørinnlogging. Etter aktivering, gå til LDAP-kontoinnstillinger for å konfigurere.",
    "user_reg_enabled"              => "Brukerregistrering aktivert",
    "user_reg_enabled_desc"         => "Tillat nye brukere å registrere en konto på frontend.",
    "user_reg_captcha"              => "Captcha for brukerregistrering",
    "user_reg_captcha_desc"         => "Bestemmer om captcha skal vises for nye brukere ved registrering.",
    "user_name_format"              => "Navneformat",
    "first_last"                    => "Fornavn Etternavn",
    "last_first"                    => "Etternavn Fornavn",
    "first_l"                       => "Fornavn E.",
    "f_last"                        => "E. Etternavn",
    "password_length"               => "Passordlengde",
    "password_length_desc"          => "Minimumslengden i tegn som kreves for passord ved registrering eller oppdatering av kontoer.",
    "password_strength"             => "Passordstyrke",
    "password_strength_desc"        => "Velg hvilke tegn som er påkrevd ved registrering av et passord.",
    "password_str_must_contain"     => "Må inneholde:",
    "password_str_letters"          => "Minst ett alfabetisk tegn.",
    "password_str_digits"           => "Minst ett tall.",
    "password_str_case"             => "Både store og små tegn.",
    "password_str_symbols"          => "Minst ett symbol.",

    "load_template"                 => "Last inn mal",
    "load_template_desc"            => "Velger du en mal erstatter du det nåværende e-postemnet og den nåværende e-postmeldingen.",
    "clear_template"                => "Tøm mal",

    "personal_settings"             => "Personlige innstillinger",
    "personal_settings_desc"        => "Oppdater din egen profil og rediger innstillinger som relaterer seg til din operatørkonto.",
    "two_fa"                        => "To-faktor autentisering",
    "notifications"                 => "Varsler",
    "two_fa_success_disabled"       => "To-faktor autentisering er blitt deaktivert.",
    "two_fa_success_enabled"        => "To-faktor autentisering er blitt aktivert.",
    "two_fa_incorrect"              => "Koden var ikke korrekt, kontroller vennligst at koden du har skrevet inn er korrekt og at serverens tid er synkronisert.",
    "two_fa_enabled"                => "2FA aktivert",
    "two_fa_disable"                => "Bekreft vennligst nedenfor for å deaktivere 2FA.",
    "two_fa_enable"                 => "Aktiver vennligst kontoen din på telefonen din med informasjonen nedenfor og bekreft den for å aktivere 2FA.",
    "verify_code"                   => "Bekreft kode",
    "verify_and_disable"            => "Bekreft og deaktiver",
    "verify_and_enable"             => "Bekreft og aktiver",
    "verify_code_desc"              => "Skriv inn en gyldig kode for din 2FA-konto for å deaktivere 2FA-autentisering.",
    "qr_code"                       => "QR-kode",
    "two_fa_code"                   => "2FA-kode",
    "two_fa_secret"                 => "2FA-hemmelighet",
    "two_fa_secret_desc"            => "Lagre vennligst denne på et sikkert sted da du vil trenge den hvis du trenger å gjenopprette din authenticator-konto på telefonen.",
    "display_notifications"         => "Vis varsler",
    "desktop_notifications"         => "Skrivebordsvarslinger",
    "browser_notifications"         => "Nettleservarslinger",

    "search_for_user"               => "Søk etter bruker...",
    "select_operator"               => "Velg en operatør...",
    "select_group"                  => "Velg en gruppe...",

    "your_ip_has_been_banned"       => "IP-adressen din er blitt utestengt.",
    "password_reset_success"        => "Passord tilbakestilt!",

    "simpleauth_token_expired"      => "Tilgangstoken ditt er utløpt.",
    "simpleauth_token_invalid"      => "Det oppgitte tilgangstokenet er ikke gyldig.",
    "simpleauth_invalid_guard"      => "Kan ikke logge inn da en gyldig bruker ikke ble oppgitt.",
    "simpleauth_not_allowed"        => "Operatører kan ikke logge inn med SimpleAuth for øyeblikket.",

    /*
     * 2.0.2
     */

    "email_history"                 => "E-posthistorikk",
    "view_email"                    => "Vis e-post",

    "ban_after_count"               => "Utestengt IP etter mislykkede innlogginger",
    "ban_after_count_user"          => "Antallet mislykkede innlogginger hvoretter en brukers IP utestenges, og de ikke lenger vil være i stand til å logge inn på frontend i det konfigurerte tidsrommet. 0 vil deaktivere IP-utestengelser fullstendig.",
    "ban_after_count_operator"      => "Antallet mislykkede innlogginger hvoretter en brukers IP utestenges, og de ikke lenger vil være i stand til å logge inn på operatørpanelet eller API i det konfigurerte tidsrommet. 0 vil deaktivere IP-utestengelser fullstendig.",
    "ban_length"                    => "Varighet av IP-utestengelse",
    "ban_length_desc"               => "Varighet av IP-utestengelse når det konfigurerte antallet mislykkede innloggingsforsøk på én enkelt dag nås.",
    "n_failed_logins"               => ":count mislykkede innlogginger innenfor 24 timer",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Tar en pause...",
    "operator_session_expired"      => "Du har vært inaktiv eller er logget inn på en annen enhet, så jeg tok en pause. Vekk meg ved å logge inn igjen.",
    "log_back_in"                   => "Logg inn igjen",
    "all_users"                     => "Alle brukere",
    "all_operators"                 => "Alle operatører",
    "email_per_batch"               => "E-poster per batch",
    "email_per_batch_desc"          => "Antallet e-poster som sendes samtidig.",
    "batch_interval"                => "Batch-intervall",
    "batch_interval_desc"           => "Pausen mellom e-postbatcher i minutter. 1 minutt er minimum.",
    "select_user_groups"            => "Velg bruker-/operatørgrupper eller skriv inn e-postadresser...",
    "mass_email_sending_time"       => "Det vil ta omtrent :time å sende alle e-postene.",
    "organisations_enabled"         => "Organisasjoner aktivert",
    "organisations_enabled_desc"    => "Som standard kan brukere legge til en organisasjon i profilen sin og andre brukere i den organisasjonen. Hvis du kun betjener forbrukere kan du deaktivere organisasjonsalternativet og skjule det fra grensesnittet.",
    "manager_notifications"         => "Organisasjonens managervarsler",
    "manager_notifications_desc"    => "Bestemmer om managere i organisasjoner skal motta e-postoppdateringer på saker åpnet av andre brukere i organisasjonen som standard. Hver manager vil ha sitt eget personlige alternativ for å definere dette i profilen sin og kan overstyre denne innstillingen.",
    "manager_email_notifications_desc" => "Skal de motta e-postvarsler om oppdateringer på saker åpnet av andre brukere i organisasjonen.",
    "organisation_notifications_desc" => "Ønsker du å motta e-postvarsler om oppdateringer av saker åpnet av andre brukere i din organisasjon.",
    "select_operator_group_desc"    => "Velg vennligst minst én operatørgruppe for denne operatøren.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisasjonens egendefinerte felt|Organisasjonens egendefinerte felt",
    "recent_users"                  => "Siste brukere",
    "recent_organisations"          => "Siste organisasjoner",
    "group_brand_desc"              => "Velg hvilke brands operatørene i denne gruppen har tillatelse til å få tilgang til.",
    "select_operators"              => "Velg operatør(er)...",
    "select_groups"                 => "Velg gruppe(r)...",
    "group_department_desc"         => "Tildel alle medlemmer av denne gruppen til avdelinger, operatører kan også tildeles individuelt i innstillinger for avdelinger.",
    "op_settings_group_dept"        => "Tildelt via operatørgrupper:",
    "op_settings_group_dept_desc"   => "Disse avdelingene er arvet automatisk fra operatørgruppene valgt ovenfor. For å tildele via en operatørgruppe, rediger operatørgruppen eller avdelingens innstillinger.",
    "op_settings_individual_dept"   => "Tildeles individuelt:",
    "op_settings_individual_dept_desc" => "Disse avdelingene er et tillegg til avdelingene operatøren er tildelt via gruppene ovenfor.",
    "also_registered_other_brand"   => "Brukerne er også registrert i brandet :brands.|Denne brukeren er også registrert i følgende brands :brands.",
    "view_organisation"             => "Vis organisasjon",
    "new_owner"                     => "Ny eier",
    "operator_role"                 => "Operatørrolle|Operatørroller",
    "manage_users"                  => "Håndter brukere",
    "manage_organisations"          => "Håndter organisasjoner",
    "manage_operators"              => "Håndter operatører",
    "user_profile"                  => "Brukerprofil",
    "organisation_access_level"     => "Organisasjonens tilgangsnivå",
    "organisation_notifications"    => "Organisasjonsvarsler",
    "organisation_users"            => "Organisasjonens brukere",
    "organisation_users_ticket"     => "Ovenfor er en liste med din organisasjons managere som vil motta e-postoppdateringer om denne saken.",

    /*
     * 2.1.1
     */
    "change_password"               => "Endre passord",
    "current_password"              => "Nåværende passord",
    "new_password"                  => "Nytt passord",
    "personal_confirm_password"     => "Bekreft vennligst ditt nåværende passord for å sette et nytt passord.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Søk etter bruker/operatør...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Formatet som brukes til visning av brukernavn i hele systemet.",
    "operator_name_format_desc"     => "Formatet som brukes for visning av operatørnavn i hele systemet.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Fjern fra :record?",
    "remove_from_warn"              => "Dette vil permanent fjerne <strong>:name</strong>-brukeren fra denne :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Sosial innlogging",
    "login_via"                     => "Logg inn via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Logg vennligst inn for å utføre tilknytning av din SoMe-konto.",
    "social_linking_register"       => "Fyll vennligst inn detaljene nedenfor for å fullføre registreringen av kontoen din. Din SoMe-konto vil automatisk bli koblet.",
    "already_registered"            => "Allerede registrert?",
    "linked_accounts"               => "Tilknyttede kontoer",
    "unlink_account"                => "Fjern tilknytning til :record-konto",
    "unlink_account_warning"        => "Fjerner du tilknytning til SoMe-konto vil det bety at den ikke lenger kan brukes til å logge direkte inn på kontoen din.",
    "failed_login"                  => "Mislykket innlogging|Mislykkede innlogginger",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "påkrevet \":permission\" tillatelse",
    "deleted_user"                  => "Slettet bruker",
    "access_level_not_owner"        => "Det er ikke mulig å endre tilgangsnivået for organisasjonseiere. Overfør eierskap av organisasjonen til en annen bruker ved å åpne organisasjonen og klikke på 'brukere'-fanen.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Velg en eksisterende eller skriv inn en ny organisasjon...",

    /*
     * 2.5.0
     */
    "success_register_desc"         => "Takk for kontoregistreringen din. Sjekk vennligst e-posten din for å fullføre kontooppsettet.",
    "use_gravatar"                  => "Bruk Gravatar",
    "use_gravatar_desc"             => "Gravatar er en tjeneste som tilbyr en globalt gjenkjent avatar til sine registrerte brukere. Helpdesken vil automatisk sende en forespørsel til secure.gravatar.com med en MD5-hash av hver brukers e-postadresse for å hjelpe med visning av avatarer. MD5-hashen kan også være offentlig synlig i frontend-HTML. Vi anbefaler å oppdatere personvernspolicyen din hvis du aktiverer denne funksjonaliteten.",

    /*
     * 2.6.0
     */
    "continue_to_login"             => "Fortsett vennligst til <a href=':route'>innlogging</a>.",
    "reset_request_desc"            => "Hvis en matchende konto ble funnet vil en e-post sendes til deg innen kort tid for å tillate deg å tilbakestille passordet ditt.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Kontoen er koblet til en LDAP-tjeneste. Logg vennligst inn med ditt LDAP-brukernavn og passord.",
    "operator_message"              => "Operatørmeldinger",
    "force_two_fa"                  => "Krev 2FA",
    "force_two_fa_desc"             => "Krev to-faktor autentisering (2FA) på alle kontoer. Kontoer uten 2FA aktivert vil bli tatt gjennom oppsettprosessen for 2FA neste gang de logger inn.",
    "two_fa_required"               => "To-faktor autentisering (2FA) er påkrevd. Se vennligst veiledningen nedenfor for å fortsette.",
    "two_fa_user_enable"            => "Brukeren kan aktivere 2FA på kontoen sin i innstillingene.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Tillat brukere å registrere og logge inn med sin SoMe-konto.",
    "manage_social_login_options"   => "For å legge til eller håndtere SoMe-innloggingsalternativer, se vennligst <a href=\":route\">Tredjepartsintegrasjoner</a>-siden.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Last ned og installer en av de følgende applikasjonene og skann QR-koden eller skriv inn den hemmelige nøkkelen. Dette vil legge til din 2FA-konto på enheten din, og du vil deretter kunne se kontoen og den vil generere en 6-sifret kode som du må skrive inn for å bekrefte og fullføre oppsettet. Husk å klikke bekreft før koden utløper. Servertiden din må være synkronisert med en NTP-server for at denne funksjonaliteten skal fungere som forventet.",
    "two_fa_successfully_enabled"   => "To-faktor autentisering (2FA) er blitt aktivert.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Telefonnummer|Telefonnumre",

    /*
     * 3.6.0
     */
    "security_settings"             => "Sikkerhetsinnstillinger",
    "security_settings_desc"        => "Oppdater passordet ditt, aktiver 2FA og administrer andre sikkerhetsrelaterte innstillinger for kontoen din.",
    "active_sessions"               => "Aktive økter",
    "active_sessions_desc"          => "Dette er en liste over enheter som har logget inn på kontoen din, du kan fjerne tilgangen for økter du ikke kjenner igjen.",
    "current_session"               => "Nåværende økt",
    "logged_in"                     => "Logget inn",
    "revoke_session_desc"           => "Fjerning av en økt vil logge enheten ut av operatørpanelet. Det vil også fjerne alle Husk meg-tokens for andre enheter.",

    /*
     * 4.0.0
     */
    "verify_phone_number"           => "Bekreft telefonnummer",
    "verify_phone_method"           => "Velg hvilken metode du ønsker å bekrefte telefonnummeret ditt med.",
    "verify_phone_code_sent"        => "En bekreftelseskode er blitt sendt til telefonnummeret ditt, skriv vennligst inn koden nedenfor.",
    "verify_phone_code_send_error"  => "En feil oppstod ved sending av bekreftelseskoden. Prøv vennligst igjen senere.",
    "verify_phone_code_error"       => "Koden kunne ikke bekreftes.",
    "logged_in_as"                  => "Logget inn som :name",

    /*
     * 4.1.0
     */
    "merge_users"                   => "Slå sammen brukere",
    "merge_user_into"               => "Velg bruker å slå sammen med",
    "merge_organisations"           => "Slå sammen organisasjoner",
    "merge_organisation_into"       => "Velg organisasjon å slå sammen med",
    "search_for_organisation"       => "Søk etter organisasjon...",

    /*
     * 4.2.0
     */
    "reply_template"                => "Svarmal|Svarmaler",
    "reply_template_desc"           => "Sett en personlig svarmal som forhåndsutfyller tekstfeltet ved start av skriving av et svar, med mulighet til å tilpasse basert på brandet/avdelingen til saken. Standard-svarmalen brukes når en svarmal for en spesifikk avdeling og/eller brand ikke kan finnes.",
    "operator_reply_template"       => "Operatørsvarmal|Operatørsvarmaler",
    "ticket_reply_template_desc"    => "Sett operatørens standard sakssvarmal.",
    "operator_reply_template_desc"  => "Ytterligere svarmaler for spesifikke avdelinger og/eller brands kan settes i <a href=':route' target='_blank'>Operatørsvarmaler</a>-seksjonen.",

    /*
     * 5.0.0
     */
    "verified"                      => "Bekreftet",
    "unverified"                    => "Ubekreftet",
    "unverified_email_desc"         => "Brukeren har ikke bekreftet eierskap til denne e-postadressen.",
    "unverified_account"            => "Sjekk vennligst e-posten din for å bekrefte eierskap til denne e-postadressen.",
    "changing_email_desc"           => "Utskifting av e-postadressen vil kreve at brukere bekrefter eierskap til e-postadressen sin neste gang de logger inn.",
    "unregistered_user_desc"        => "Denne kontoen ble opprettet automatisk uten et passord. Du kan sende en bekreftelse-e-post for å la brukeren konfigurere kontoen sin, eller sette et passord for dem nedenfor.",
    "send_verification_email"       => "Send bekreftelse-e-post",
    "mark_as_verified"              => "Merk som bekreftet",
    "password_reset_already"        => "Du har allerede bekreftet eierskap til denne e-postadressen, du kan fortsette til innlogging.",
    "verification_email_resent"     => "En ny bekreftelse-e-post er sendt og bør ankomme om noen minutter.",
    "verified_set_password_desc"    => "Takk for at du bekreftet eierskap til e-posten din, skriv vennligst inn et passord nedenfor for å fullføre kontooppsettet ditt.",
    "thank_you_for_verifying_email" => "Takk for at du bekreftet eierskap til e-postadressen din.",
    "organisation_domain_desc"      => "Skriv inn hvert domene eid av organisasjonen. Brukere som registrerer med en e-postadresse som tilhører ett av disse domenene vil automatisk bli lagt til i organisasjonen. Vi anbefaler å bekrefte at brukeren faktisk er en del av organisasjonen hvis de ikke har bekreftet eierskap til e-postadressen sin.",
    "resend_verification_email"     => "Send bekreftelse-e-post på nytt",
    "updating_email_address"        => "Klikk vennligst på lenken sendt til :email for å fullføre bekreftelsen av e-posteierskap.",
    "email_verification"            => "E-postbekreftelse",
    "email_verification_already_in_use" => "E-postadressen er allerede i bruk av en annen konto.",
    "verification_link_expired"     => "Bekreftelseslenken kan ha utløpt. Hvis lenken din ikke fungerer av en eller annen grunn, ber du om en ny.",
    "user_invited_to_organisation"  => "Brukeren er blitt invitert til organisasjonen via e-post, de må klikke på lenken og sette opp et passord for å fullføre kontooppsettet.",
    "invite_user"                   => "Inviter bruker",
    "organisation_invite_user"      => "Inviter bruker til organisasjon",
    "user_already_in_organisation"  => "Brukeren er allerede en del av en organisasjon.",
    "invitations"                   => "Invitasjon|Invitasjoner",
    "invite_exists"                 => "Brukeren er allerede invitert.",
    "success_join"                  => "Du er nå et medlem av organisasjonen :name.",
    "error_join"                    => "Invitasjonskoden ble ikke funnet, eller har utløpt.",
    "verify_to_view_tickets"        => "Bekreft vennligst alle tilleggsadresser for e-post eller fjern ubekreftede e-postadresser under kontoprofilen din.",

    /*
     * 5.2.3
     */
    "display_notifications_desc"    => "Systemet vil varsle deg når nye saker eller svar opprettes. Eller når andre operatører logger inn. Du kan velge mellom skrivebordsvarslinger, nettleservarslinger eller ingen varslinger.",

    /*
     * 5.3.0
     */
    "email_verified"                => "E-post bekreftet",
    "registered_desc"               => "Om brukeren har satt et passord og er i stand til å logge inn på frontend.",
    "new_operator_account_desc"     => "Du kan sende en bekreftelse-e-post for å la operatøren sette opp sin egen konto, eller bruk bryteren for å sette et passord for dem nedenfor.",
    "operator_set_password_desc"    => "Skriv vennligst inn et passord nedenfor for å fullføre oppsettet av operatørkontoen din.",
    "password_set_success"          => "Passord satt!",

);
