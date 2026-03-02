<?php

return array(

    "feedback_question"         => "Spørsmål som vises for brukeren.",
    "open_new"                  => "Åpne ny sak",
    "select_department"         => "Velg en avdeling",
    "select_department_desc"    => "Velg vennligst den relevante avdelingen for din henvendelse nedenfor.",
    "no_departments"            => "Ingen avdelinger funnet.",
    "department_user_details"   => "Avdeling og brukerdetaljer",
    "enter_your_details"        => "Skriv inn dine detaljer",
    "enter_ticket_details"      => "Skriv inn detaljer",
    "enter_subject_message"     => "Skriv inn emne og melding",
    "invalid_user"              => "Kontroller vennligst at gyldige brukerdetaljer er skrevet inn for å fortsette.",

    "registered_users"          => "Kun for registrerte brukere",

    "tickets"                   => "Sak(er)",
    "ticket"                    => "Sak|Saker",
    "subject"                   => "Emne",
    "no_subject"                => "Ingen emne",
    "last_action"               => "Siste handling",
    "due_time"                  => "Forfallstid",
    "created_time"              => "Opprettelsestidspunkt",
    "submitted"                 => "Lagt til",
    "ticket_reply"              => "Saksvar",
    "ticket_note"               => "Saksnotat",
    "ticket_type"               => "Sakstype",

    "user_ticket"               => "Brukersak",
    "user_ticket_desc"          => "Åpne en ny sak på vegne av en ny eller eksisterende bruker.",
    "existing_user"             => "Eksisterende bruker",
    "new_user"                  => "Ny bruker",
    "internal"                  => "Intern",
    "internal_ticket_desc"      => "Åpne en sak til intern bruk. Denne saken knyttes til deg og ikke en offentlig bruker.",
    "ticket_opened"             => "Saken din ble åpnet.",
    "enter_user_details"        => "Skriv vennligst inn dine detaljer nedenfor, eller logg inn på kontoen din hvis du har en.",
    "already_have_account"      => "Du har allerede en konto, logg vennligst inn og åpne saken din herfra. Bruk vennligst alternativet for glemt passord hvis du ikke husker påloggingen din.",

    "recent_tickets"            => "Siste saker",
    "last_message_text"         => "Siste meldingstekst",

    "settings"                  => "Saksinnstillinger",

    "priority"                  => "Prioritet|Prioriteter",

    "channel"                   => "Kanal|Kanaler",
    "account"                   => "Konto|Kontoer",

    "assign_operator"           => "Tildel operatør",
    "assigned_operator"         => "Tildelte operatører",
    "assigned_to"               => "Tildelt til",
    "assigned"                  => "Tildelt",

    "department"                => "Avdeling|Avdelinger",
    "change_department_order"   => "Dra radene for å endre rekkefølgen avdelinger vises i for brukere når en ny sak åpnes.",
    "department_applicable"     => "Tilgjengelige avdelinger",
    "department_applicable_desc" => "Definisjon av prioriteter som kan velges av brukere. Gjelder kun frontend, alle prioriteter vil være tilgjengelige for operatører i alle avdelinger.",

    "send_now"                  => "Send nå",

    "tag"                       => "Tagg|Tagger",

    "track_ticket"              => "Spor sak",
    "view_ticket"               => "Vis sak",

    // Recent activity
    "recent_activity"           => "Nylig aktivitet",

    "ticket_number"             => "Saksnummer",
    "ticket_format"             => "Saksnummerformat",

    // Departments
    "department_public_desc"    => "Bestemmer om avdelingen er synlig for brukere på helpdesken.",
    "department_parent_desc"    => "Hvis avdelingen er en underavdeling, velg vennligst en hovedavdeling. Underavdelinger er beregnet for intern eskalering og håndtering. Innstillinger vil derfor fjerne noen av alternativene nedenfor.",
    "department_priority"       => "Avdelingens prioriteter",
    "department_priority_desc"  => "Bestemmer prioritetene som vil være tilgjengelige for brukere når de åpner en sak i denne avdelingen. Minst én må velges. Som standard vil alle prioriteter være tilgjengelige i avdelingen.",
    "department_no_format"      => "Valgfritt, definer kun hvis du ønsker å overstyre saksnummerformatet som brukes som standard.",
    "department_operator"       => "Avdelingens operatører",
    "department_default_assign" => "Tildeles som standard til",
    "dept_default_assign_desc"  => "Bruk denne funksjonaliteten hvis du ønsker at saker som åpnes i denne avdelingen automatisk tildeles én eller flere operatører.",

    // Department emails
    "email_accounts_desc"       => "Konfigurer e-postadresser for denne avdelingen, alle innkommende e-poster til disse e-postadressene vil åpne saker i denne avdelingen. Den første e-postadressen brukes som standard avsenderadresse for utgående e-post.",
    "department_port"           => "Standardverdier er: 110 for POP3, 995 for sikker POP3, 143 for IMAP og 993 for sikker IMAP. La stå tomt for å bruke disse standardverdiene.",
    "department_encryption"     => "Noen e-postleverandører krever sikker SSL- eller TLS-kryptering. Kjenner du ikke leverandørens krav, la denne innstillingen stå som Ingen.",
    "department_delete_mail"    => "Hvis du bruker IMAP, kan du velge å ikke slette e-poster på serveren etter at de er blitt importert som saker.",
    "protocol"                  => "Protokoll",
    "server"                    => "E-postserver",
    "port"                      => "Port",
    "encryption"                => "Kryptering",
    "delete_downloaded"         => "Slett nedlastet e-post",
    "consume_all"               => "Hent alle e-poster",
    "email_download"            => "E-postnedlasting",
    "email_piping"              => "E-postpiping",
    "email_piping_desc"         => "Konfigurer en e-postvideresender som følger, stien til PHP-kjøring kan være annerledes på din server.",
    "remote_email_piping"       => "Ekstern e-postpiping",

    // Department email options
    "email_options"             => "E-postalternativer",
    "email_user_on_email"       => "E-post til brukere ved åpning av saker per e-post",
    "email_user_on_email_desc"  => "Velg om brukere skal varsles per e-post når en e-post de har sendt resulterer i at en ny sak åpnes.",
    "email_operators"           => "Varsle operatører",
    "email_operators_desc"      => "Velg om operatørsvar skal videresendes til andre operatører. Som standard kontrolleres alternativet «varsle operatører» i operatørpanelet, og vil automatisk sende en e-post ved mottak av e-postsvar.",
    // Department email templates
    "new_ticket_opened"         => "Ny sak åpnet",
    "waiting_for_response"      => "Avventer svar",
    "ticket_auto_closed"        => "Sak automatisk lukket",
    "closed_by_operator"        => "Lukket av operatør",

    // Feedback
    "feedback"                  => "Tilbakemelding",
    "feedback_form"             => "Tilbakemeldingsskjema|Tilbakemeldingsskjemaer",
    "feedback_form_desc"        => "Tilbakemeldingsskjemaer behandles i den rekkefølgen de fremkommer. Dra og slipp radene for å organisere og justere prioritetene.",
    "view_feedback"             => "Vis tilbakemelding",
    "ticket_feedback"           => "Saks-tilbakemelding",
    "feedback_fields_error"     => "Det oppstod et problem ved henting av tilbakemeldingsfeltene.",
    "time_after_resolved"       => "Tid før tilbakemeldingsskjema",
    "time_after_resolved_desc"  => "Tiden som skal gå fra en sak er markert som løst, til tilbakemeldingsskjemaet sendes til brukeren.",
    "expires_after"             => "Utløper etter",
    "expires_after_desc"        => "Tiden som går fra sending av et tilbakemeldingsskjema til det utløper og ikke lenger kan besvares. Vi anbefaler 7 dager, men du kan skrive inn 0 i alle feltene for å deaktivere utløp av tilbakemeldingsskjema.",
    "form_conditions"           => "Skjemabetingelser",
    "form_conditions_desc"      => "Bestemmer saksbetingelser som nylig lukkede saker kontrolleres mot for å se om de samsvarer med dette skjemaet. Hvis en lukket sak samsvarer med flere skjemaer, vil det avgjøres av skjemaprioritet. Skjemaprioriteten kan endres ved å gå til listen med skjemaer og endre rekkefølgen.",
    "form_fields"               => "Skjemafelt",
    "rating"                    => "Vurdering",
    "feedback_desc"             => "Takk for at du kontaktet oss, vi håper henvendelsen din er løst til din tilfredshet. Vurder vennligst din opplevelse nedenfor.",
    "good_satisfied"            => "God, jeg er fornøyd",
    "bad_not_satisfied"         => "Dårlig, jeg er misfornøyd",
    "feedback_not_found"        => "Tilbakemeldingen din kunne ikke mottas, åpne vennligst en ny sak hvis du ønsker å dele din tilbakemelding - takk.",
    "feedback_malformed_token"  => "Tilbakemeldingen din kunne ikke mottas på grunn av et ugyldig token. Åpne vennligst en ny sak hvis du ønsker å dele din tilbakemelding - takk.",
    "feedback_expired"          => "Saken din har vært lukket en stund, og det er dessverre ikke lenger mulig å gi tilbakemelding.",
    "feedback_questions"        => "Kan du avse et par minutter? Svar vennligst på følgende spørsmål og hjelp oss med å fortsette å forbedre støtten vi yter.",
    "feedback_for_ticket"       => "Tilbakemelding for sak #:number",
    "feedback_rating_desc"      => "Støtten mottatt på denne saken er blitt vurdert som <strong>:rating</strong> av brukeren.",

    // Custom fields
    "customfield"               => "Egendefinert saksfelt|Egendefinerte saksfelt",
    "customfield_order"         => "Dra radene for å endre rekkefølgen egendefinerte felt vises i for brukere når de åpner en sak via nettet.",

    // Canned responses
    "cannedresponse"            => "Standardsvar|Standardsvar",

    // Filters
    "filter"                    => "Filter|Filtre",
    "filter_condition"          => "Filterbetingelser",
    "filter_condition_desc"     => "Definer betingelser for saker i dette filteret.",

    // Macros
    "macro"                     => "Makro|Makroer",
    "macro_condition"           => "Makrobetingelser",
    "macro_action"              => "Makrohandlinger",
    "macro_action_desc"         => "Definer handlinger som utføres når en makro kjøres. Kontroller vennligst at handlingene er gyldige for avdelingen saken er opprettet i, ellers vil de ikke bli utført.",

    "from"                      => "Fra",
    "to"                        => "Til",
    "cc"                        => "CC",

    "allowed_files"             => "Tillatte filvedleggstyper",

    // Drafts
    "draft_saved"               => "Utkast lagret :time",
    "save_draft"                => "Lagre utkast",
    "discard_draft"             => "Slett utkast",

    // Locked
    "error_ticket_locked"       => "Denne saken er blitt låst og kan ikke oppdateres, åpne vennligst en ny sak hvis du har behov for ytterligere støtte.",

    // Ticket Followups
    "follow_up"                 => "Følg opp",
    "follow_up_status_desc"     => "Sett en ny status for denne saken frem til oppfølgningsdatoen.",
    "exact_date_time"           => "Eksakt dato og tid",
    "time_from_now"             => "Tid fra nå",

    // Schedule
    "schedule"                  => "Tidsplan|Tidsplaner",
    "business_hour"             => "Åpningstider",
    "business_hour_desc"        => "Åpningstider indikerer tidene det er støttepersonell tilgjengelig for å besvare henvendelser. Åpningstider tas i betraktning når svartidspunktet for en sak beregnes.",

    // Holidays
    "holiday"                   => "Ferie|Ferier",
    "holiday_or_on_the"         => "eller, den",
    "holiday_month_year_desc"   => "År er valgfritt hvis ferien er tilbakevendende. Velg kun et år hvis ferien faller på en bestemt dato i et bestemt år.",

    // SLA Plans
    "sla_plan"                  => "SLA-plan|SLA-planer",
    "specific_schedule"         => "Spesifikke tidsplaner",
    "calendar_hours_24"         => "Kalendertimer (24 timer)",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA-betingelser",
    "sla_condition_desc"        => "Definer saksbetingelsene som nye saker kontrolleres mot for å sjekke om de faller innenfor denne planen. Hvis en ny sak samsvarer med flere SLA-planer, vil det avgjøres basert på SLA-planprioritet, som kan defineres ved å gå til listen med SLA-planer og prioritere disse.",
    "escalation_rule"           => "Eskaleringsregler",
    "escalation_rule_desc"      => "Definer handlinger som utføres når en sak tilhørende denne SLA-plan er nær eller overskredet. Kontroller vennligst at reglene er gyldige for avdelingen en sak tilhører, ellers vil de bli ignorert.",
    "condition"                 => "Betingelse",
    "condition_group"           => "Betingelsesgruppe",
    "all_groups"                => "ALLE grupper må være sanne",
    "any_group"                 => "HVILKEN som helst gruppe kan være sann",
    "all_conditions"            => "ALLE betingelser i gruppen må være sanne",
    "any_condition"             => "HVILKEN som helst betingelse i gruppen kan være sann",
    "sla_plan_desc"             => "SLA-planer behandles i den rekkefølgen de fremkommer. Dra og slipp rader for å organisere og justere prioriteten på SLA-planer.",

    // Reply options
    "reply_options"             => "Svaralternativer",
    "send_email_to_users"       => "Send e-post til bruker(e)",
    "send_email_to_operators"   => "Send e-post til operatør(er)",
    "back_to_grid"              => "Gå tilbake til sakoversikt",
    "take"                      => "Overta",
    "take_ownership"            => "Ta eierskap",
    "pause_duetime"             => "Pause forfallstid",
    "add_to_canned_responses"   => "Legg til i standardsvar",
    "visible_to_all_operators"  => "Gjør synlig for alle operatører",
    "set_status"                => "Sett status",
    "add_selfservice_link"      => "Legg til selvbetjeningslenke",
    "search_selfservice"        => "Søk etter en selvbetjeningsartikkel",
    "search_canned"             => "Søk etter et standardsvar",

    "mark_resolved"             => "Merk som løst",

    "ticket_signature"          => "Sakssignatur",

    "default_open_status"       => "Standard åpen status",

    "default_resolve_status"    => "Standard løst status",
    "default_resolve_status_desc" => "Velg statusen som brukes for saker som er blitt løst.",

    "waiting_response_time"      => "Avventer svar på e-post",
    "waiting_response_time_desc" => "Tiden etter at en e-post sendes til brukere på inaktive saker, med spørsmålet om de mener henvendelsen er løst. Sett til 0 for å deaktivere disse e-postene.",

    "close_inactive_tickets"    => "Lukk inaktive saker",
    "close_inactive_tickets_desc" => "Tiden etter at inaktive saker automatisk lukkes. Sett til 0 hvis saker aldri skal lukkes automatisk.",

    "ticket_reply_order"        => "Sakssvarvisning",
    "ticket_reply_order_desc"   => "Velg retningen saksmeldinger vises i, stigende der den siste meldingen vises sist eller synkende der den siste meldingen vises først.",

    "ticket_notes_position"     => "Saksnotatposisjon",
    "ticket_notes_position_desc" => "Velg hvor i en sak saksnotatet vises.",
    "ticket_notes_top_messages" => "Øverst og i meldinger",
    "ticket_notes_top"          => "Kun øverst",
    "ticket_notes_messages"     => "Kun i meldinger",

    "unregistered_only"         => "Kun uregistrerte brukere",

    "allow_unauth_users"        => "Tillat uautoriserte brukere",
    "allow_unauth_users_desc"   => "Tillat brukere som ikke er logget inn å vise og besvare saker. Deaktiverer du dette, vil det også fjerne sporsaks-funksjonalitet og brukere må være registrert og logge inn for å få tilgang til saker.",

    "default_department"        => "Standard avdeling",
    "default_department_desc"   => "Avdelingen som som standard mottar alle innkommende saker via denne kanalen.",

    "show_related_articles"     => "Vis relaterte artikler",
    "show_related_articles_desc" => "Når en bruker skriver inn emne, kan de bli vist relaterte artikler basert på hva de har søkt på. Krever at selvbetjeningsmodulen er aktivert og MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Standard prioritet",
    "default_priority_desc"     => "Prioriteten som settes på alle innkommende saker via denne kanalen.",

    "last_reply"                => "Siste svar",
    "opened_at"                 => "Åpnet",

    "change_department"         => "Bytt avdeling",
    "change_status"             => "Bytt status",
    "no_statuses"               => "Ingen statuser funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_priorities"             => "Ingen prioriteter funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_templates"              => "Ingen tilpassede e-postmaler funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_tags"                   => "Ingen saks-tagger funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_departments_found"      => "Ingen avdelinger funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_operators_found"        => "Ingen operatører funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "change_priority"           => "Bytt prioritet",
    "add_tag"                   => "Legg til tagg",

    "unlock"                    => "Lås opp",
    "merged"                    => "Slått sammen",
    "unmerge"                   => "Del opp",
    "close_and_lock"            => "Lukk og lås",

    "mass_reply"                => "Massesvar",

    "due_today"                 => "Forfaller i dag",
    "overdue"                   => "Forfalt",
    "unassigned"                => "Ikke tildelt",

    "pause_duetime_desc"        => "Sett på pause den gjenværende tiden frem til etter oppfølgningstidspunktet hvis det er en aktiv SLA-plan på denne saken. Forfallstidspunktet vil først starte igjen når et svar eller et notat er blitt lagt til denne saken (inkludert fra oppfølging).",

    "add_cc"                    => "Legg til CC",
    "reply_above_line"          => "Svar vennligst over denne linjen",

    "email_settings"            => "E-postinnstillinger",
    "web_settings"              => "Nettinnstillinger",
    "split_selected_replies"    => "Del opp valgte svar",

    "track_ticket_not_found"    => "Kunne ikke finne sak med saksnummer og den oppgitte e-postadressen.",

    "type_in_tags"              => "Skriv inn tagger",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Liste med filendelser, separert av | tegnet, som er tillatt som vedlegg. For eksempel: txt|png|jpg. For å tillate alle filtyper, skriv inn: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Ingen operatørgruppe funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "no_user_groups"            => "Ingen brukergruppe funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "remote_email_piping_desc"  => "Last ned <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>ekstern e-postpiping-skriptet</a> og følg <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>dokumentasjonen</a> for konfigurering av dette på din egen e-postserver.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Som standard har SupportPal e-postalias-støtte og vil sjekke TIL-adressen på innkommende e-post for å kontrollere hvilken avdeling en sak skal åpnes i. En sak åpnes ikke hvis en matchende avdelings e-postadresse ikke kan finnes. Aktiverer du denne innstillingen vil alle e-poster uten en matchende avdelings e-postadresse bli importert som saker i denne avdelingen.",
    "default_reply_options"     => "Standard svaralternativer",
    "default_reply_options_desc" => "Velg standard svaralternativene som skal være tilgjengelige ved åpning eller besvarelse av en sak. ':reply_option'-alternativet vil være saksavhengig basert på ':department_option'-avdelingsinnstillingen.",
    "associate_response_tag"    => "Knytt standardsvar til en tagg...",
    "canned_response_tags_desc" => "Legg til tagger som kan hjelpe med å finne et standardsvar ved sending av saksvar.",
    "append_ip_address"         => "Legg til IP-adresse",
    "append_ip_address_desc"    => "Legg til IP-adressen til en bruker i meldingene deres når de åpner eller besvarer sak fra frontend.",
    "unassign_operator"         => "Fjern operatør",
    "remove_tag"                => "Fjern tagg",
    "message_clipped"           => "[Melding begrenset]",
    "view_entire_message"       => "Vis hele meldingen",
    "no_custom_fields"          => "Ingen egendefinerte felt funnet. Klikk <a href=':route'>her</a> for å opprette et.",
    "follow_up_active"          => "En <a class='view-followup' style='text-decoration: underline;'>oppfølging</a> er aktiv på denne saken og vil kjøre <strong>:time</strong>.",
    "disable_user_email_replies" => "Deaktiver bruker-e-postsvar",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Standard saksfilter",
    "default_ticket_filter_desc" => "Saksfilteret som brukes som standard ved 'Håndter saker'. Kan settes som 'Ingen', som er standard og vil vise alle uløste saker.",
    "recent_filters"            => "Siste filtre",
    "inactive_tickets"          => "Inaktive saker",
    "default_open_status_desc"  => "Velg standardstatusen som automatisk skal velges når en bruker åpner en ny sak eller svarer på en sak som ennå ikke har et operatørsvar.",
    "default_reply_status"      => "Standard svarstatus",
    "default_reply_status_desc" => "Velg standardstatusen som automatisk defineres når en bruker svarer på en sak, gjelder kun når en operatør har besvart en sak.",
    "ticket_reply_order_default" => "Systemstandard vil bruke verdien som er satt i saks generelle innstillinger.",
    "select_a_parent"           => "Velg en hovedavdeling...",
    "select_a_department"       => "Velg en avdeling...",
    "department_operator_desc"  => "Du kan også tildele individuelle operatører til avdelingen. Disse operatørene vil bli lagt til i tillegg til grupper tildelt ovenfor.",
    "department_group"          => "Avdelingens grupper",
    "department_group_desc"     => "Du kan tildele operatørgrupper til avdelingen, det anbefales hvis listen over operatører er lang og ofte endres.",
    "ticket_other_brands"       => "Saker i andre brands",
    "add_for_department"        => "Legg til i avdeling...",
    "record_order"              => "Dra radene for å endre rekkefølgen.",
    "reply_all"                 => "Svar alle",
    "reply_without_cc"          => "Svar (uten CC)",
    "email_accounts"            => "E-postkontoer",
    "add_another_email"         => "Legg til en ekstra e-postadresse",
    "follow_up_date"            => "Oppfølgingsdato",
    "post_reply"                => "Send svar",
    "post_note"                 => "Legg til notat",
    "ticket_details"            => "Saksdetaljer",
    "organisation_tickets"      => "Organisasjonens saker",
    "manage_tickets"            => "Håndter saker",
    "via_channel"               => "via :channel",
    "department_parent"         => "Avdelingens overordnede",
    "department_brands"         => "Avdelingens brands",
    "email_item"                => "E-post :item",
    "from_name"                 => "Navn på avsender",
    "from_address"              => "Avsenderadresse",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user den :date",
    "prioritise_reply-to"       => "Prioriter svar-til",
    "prioritise_reply-to_desc"  => "Velg for å prioritere Reply-To-headeren over fra-headeren. Hvis aktivert vil sak åpnet via e-post åpnes på vegne av Reply-To-navn og adresse.",
    "note_options"              => "Notatalternativer",
    "escalation_rules_desc"     => "Følgende SLA-plan-eskaleringsregler er planlagt for kjøring etter tidene listet. Disse tidene kan endres eller reglene fjernes hvis en operatør svarer på denne saken.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Ikke en registrert bruker. E-postkanalinnstillingene er definert til kun å importere e-poster fra registrerte brukere.",
    "display_name"              => "E-postvisningsnavn",
    "display_name_desc"         => "Valgfri innstilling, definer kun for å overskrive visningsnavnet som brukes på utgående e-poster fra denne avdelingen.",
    "display_name_options"      => "Følgende Twig-variabler kan brukes:<br />{{ brand.name }} - Brandnavn<br />{{ department.name }} - Avdelingsnavn<br />{{ department.frontend_name }} - Viser hovedavdelingens navn, hvis saken tilhører en underavdeling.<br />{{ operator.formatted_name }} - Operatørnavn<br /><em>Operatørnavnet vil ikke alltid være tilgjengelig, wrap det derfor i en 'not empty'-betingelse, for eksempel: {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Vedlegg avvist",
    "enable_subaddresses"       => "Aktiver sub-adresser",
    "enable_subaddresses_desc"  => "Velg for å aktivere e-postsub-adressering for alle avdelinger. Dette vil opprette en unik sub-adresse for hver sak som settes som Reply-To-adresse på alle utgående e-poster. E-postserveren din må kunne håndtere sub-adressering, ytterligere handlinger kan være nødvendig hvis du bruker e-postpiping for å sikre at e-poster til disse adressene videresendes korrekt. Aktivering av dette vil tillate deg å fjerne saksnummeret fra e-postmalens emne-felt.",
    "email_replies_disabled"    => "E-postsvar deaktivert",
    "disable_user_email_replies_desc" => "Aktiver for å blokkere e-postsvar fra brukere, og samtidig fjerne svarklippelinjen fra utgående saks-e-poster. Som standard vil e-posten stilltiende ignoreres, men du kan definere en e-post som skal sendes til brukeren ved å endre den valgte e-postmalen sendt til alternativet 'E-postsvar deaktivert' nedenfor.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Tildelt til sak",
    "user_ticket_reply"         => "Brukersaksvar",
    "new_internal_ticket"       => "Ny intern sak",
    "department_changed"        => "Avdeling endret",
    "operator_ticket_reply"     => "Operatørsaksvar",
    "new_ticket_note"           => "Nytt saksnotat",
    "email_template_desc"       => "Du kan velge en annen e-postmal enn standardmalen for sending til brukeren eller operatører for hver av handlingene nedenfor. Denne malen vil utelukkende bli standardmalen for denne avdelingen.",
    "create_new_user"           => "Opprett ny bruker",
    "user_reply_internal_ticket" => "Ikke operatør. Kun operatører kan besvare interne saker.",
    "enter_email_address"       => "Skriv inn e-postadresse...",
    "email_user_frontend"       => "E-post til brukere som åpner saker på frontend",
    "email_user_frontend_desc"  => "Bestemmer om brukere skal varsles på e-post når de selv åpner en sak via frontend.",
    "department_template_disabled" => "Den relevante e-postmalen for avdelingen er deaktivert, så denne e-posten kan ikke sendes.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Åpne ny sak på vegne av en eksisterende bruker.",
    "canned_response_tag"       => "Standardsvar-tagg|Standardsvar-tagger",
    "response"                  => "Svar|Svar",
    "response_desc"             => "Standardsvaret kan opprettes på flere språk. Det passende standardsvaret vil automatisk sendes, bestemt av brukerens språkpreferanser.",
    "no_slaplans"               => "Ingen SLA-planer funnet. Klikk <a href=':route'>her</a> for å opprette en.",
    "filter_performance"        => "Ytelseshensyn og anbefalinger",
    "filter_performance_desc"   => "<li>Filtre som samsvarer med flere saker vil være tregere, prøv i de fleste tilfeller å ekskludere løste saker.</li><li>Filtre som bruker 'er ikke'-betingelser vil typisk være tregere enn 'er'-betingelser.</li><li>Filtre som sjekker for nullverdier (f.eks. Sakstagg er ingen) vil være tregere.</li><li>Unngå flere betingelser som involverer å sjekke strenger/ord da de introduserer mer kompleksitet.</li><li>Filtre som bruker 'begynner med' eller 'inneholder'-betingelser vil typisk være tregere enn 'lik med' eller 'slutter med'-betingelser.</li><li>Løste saker er ekskludert fra antallet vist i sidefeltet.</li>",
    "run_macro"                 => "Kjør makro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Aktiver for kun å vise denne avdelingen til brukere som er logget inn og kun akseptere e-post fra brukere som er aktivt registrert i helpdesken. Hvis aktivert vil en avvisnings-e-post sendes til uregistrerte brukere som sender en e-post til denne avdelingen. For å endre eller deaktivere e-posten, se vennligst 'Kun registrerte brukere'-malalternativer nedenfor.",
    "form_fields_desc"          => "Hvis du ønsker å samle inn ytterligere informasjon når en bruker legger til sin tilbakemelding, kan du sette opp egendefinerte felt for visning på skjemaet her. Felttypene vil være låst når skjemaet er blitt brukt av en bruker.",
    "email_and_other_accounts"  => "E-post og andre kanalkontoer",
    "delete_message"            => "Slett melding",
    "linked_tickets"            => "Koblede saker",
    "add_linked_ticket"         => "Legg til koblet sak",
    "create_linked_ticket"      => "Opprett koblet sak",
    "copy_link"                 => "Kopier lenke",
    "forward_message"           => "Videresend denne meldingen",
    "forward_from_here"         => "Videresend sak herfra",
    "forward"                   => "Videresend",
    "forward_options"           => "Videresendingsalternativer",
    "forwarded_to"              => "Videresendt til",
    "new_operator_reply"        => "Nytt operatørsvar",
    "new_user_reply"            => "Nytt brukersvar",
    "add_bcc"                   => "Legg til BCC",
    "at_least_one_recipient"    => "Definer vennligst minimum én mottaker.",
    "forwarded_message"         => "---------- Videresendt melding ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "OBS: Påvirker kun saker som tilhører en status med 'Lukk inaktive saker' aktivert.",
    "close_inactive_status_desc" => "Aktiver for å aktivere eller deaktivere automatisk lukking av inaktive saker og inaktive e-postpåminnelser ('Avventer svar' og 'Sak automatisk lukket'-maler). Hvis aktivert kan tiden som går før påminnelser sendes konfigureres via saks generelle innstillinger.",
    "from_header_missing"       => "Fra: -header mangler i e-post.",
    "move_ticket"               => "Flytt sak",
    "move_ticket_step1"         => "Trinn 1: Velg et nytt brand denne saken skal flyttes til",
    "move_ticket_step2"         => "Trinn 2: Velg en avdeling fra det nye brandet",
    "current_record"            => "Nåværende :record",
    "new_record"                => "Ny :record",
    "department_email"          => "Avdelingens e-post",
    "select_a_department_email" => "Velg en avdelings e-post...",
    "record_public_desc"        => "Aktiver for kun å gjøre :record tilgjengelig for deg selv.",
    "record_group_desc"         => "Hvis du ønsker å gjøre :record synlig for utvalgte operatørgrupper. La stå tomt for å gjøre synlig for alle operatører.",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Velg for å deaktivere makroen og forhindre at den kjøres automatisk eller vises i saksgrensesnittet.",
    "macro_order_drag"          => "Dra radene for å endre sorteringen av makroene.",
    "macro_order_processed"     => ":type makroer behandles i den rekkefølgen de fremkommer.",
    "macro_type"                => "Makrotype",
    "macro_type_desc"           => "Det er tre typer makroer tilgjengelig. Manuelle makroer kan kun kjøres fra saksvisning eller oversikten. Automatiske makroer kjøres på uløste saker hver time, og hook-makroer kjøres på spesifiserte sakshendelser. Automatiske og hook-makroer kan også defineres til kun å kjøre innenfor bestemte tidsplaner. Enhver hook-makrohandling vil ikke utløse andre hook-makroer. Dette gjøres for å unngå løkker.",
    "macro_run_at_most"         => "Kjør maksimalt",
    "macro_run_times"           => "ganger", // As in '5 ganger'
    "macro_run_at_most_desc"    => "Begrens hvor mange ganger en automatisk makro kan kjøres på den samme saken, la stå tomt for å la en makro kjøre et ubegrenset antall ganger.",
    "macro_events_desc"         => "Velg én eller flere hendelser som makroer skal kjøres ved. Betingelsene satt nedenfor vil bli kontrollert før en makro kjøres.",
    "macro_schedules_desc"      => "Makroen vil som standard kjøre 24/7, men du kan velge én eller flere helpdesk-tidsplaner slik at makroen kun er aktiv innenfor disse.",
    "macro_condition_desc"      => "Definer betingelsene som avgjør hvilke saker denne makroen vil være tilgjengelig for. Som standard uten betingelser vil den være gyldig for alle saker. Minst én betingelse må velges for automatiske makroer.",
    "add_remove_headers"        => "Legg til/fjern headere",
    "webhook_merge_fields"      => "Flettefelt kan brukes i URL- og innholdsfelt, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">Les mer</a>.",
    "webhook_ticket_required"   => "En sak må eksistere for at denne funksjonaliteten skal fungere.",
    "not_permitted"             => "Beklager, du har ikke tillatelse til å vise den eller de forespurte saken(e). Hvis du mener dette er en feil, kontakt vennligst din administrator.",
    "watch"                     => "Følg",
    "unwatch"                   => "Slutt å følge",
    "watching"                  => "Følger",
    "internal_ticket"           => "Intern sak|Interne saker",

    /*
     * 2.4.1
     */
    "downloading"               => "Laster ned...",
    "downloading_desc"          => "Hvis nedlastingen ikke starter automatisk innen noen sekunder, <a href=':href'>klikk her</a> for å få tilgang til nedlastings-URL-en direkte.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Tilhørende :name)",
    "block_user"                => "Blokker bruker",
    "merge_tickets"             => "Slå sammen saker",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Oppfølginger",
    "follow_up_multiple_active" => "Flere <a class='view-followup' style='text-decoration: underline;'>oppfølginger</a> er aktive på denne saken og den neste planlagte vil kjøre <strong>:time</strong>.",
    "follow_up_no_actions"      => "Oppfølgingen har ingen handlinger definert, bekreft vennligst om du ønsker å fortsette.",
    "status_after_running"      => "Status etter kjøring",
    "older_messages"            => ":count eldre meldinger",
    "holiday_single_day"        => "Enkelt dato",
    "holiday_date_range"        => "Datoperiode",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Velg saken du vil slå sammen med",
    "im_not_sure"               => "Jeg er ikke sikker",
    "auto_reply_detected"       => "Autosvar oppdaget - ingen varsling vil bli sendt til brukere.",
    "cc_desc"                   => "Du kan CC andre personer på denne saken ved å skrive inn deres e-postadresser her.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> holdt på med et utkast",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Konfigurer manuelt",
    "unresolved"                => "Uløst",
    "resolved"                  => "Løst",
    "manage_oauth_options"      => "For å legge til eller administrere OAuth-alternativer, besøk vennligst <a href=\":route\">Tredjepartsintegrasjoner</a>-siden.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Vi har lagret tilbakemeldingen din.",
    "how_was_the_help"          => "Hvordan opplevde du hjelpen du mottok?",
    "update_feedback"           => "Oppdater tilbakemelding",
    "verify_user"               => "Bekreft vennligst brukerens autentisitet.",
    "web_channel_name"          => "Nett",
    "web_channel_desc"          => "Saker åpnet via frontend-grensesnittet for brukere eller operatører, eller operatørpanelet for operatører.",
    "email_channel_name"        => "E-post",
    "email_channel_desc"        => "Saker åpnet via behandling av innkommende e-post.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Saker og svar sendt via API.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Opprettet på vegne av",
    "reply_canned_be_posted"    => "Det er for øyeblikket ikke mulig å besvare denne saken; kanalen eller kanalkontoen kan være deaktivert.",

    /*
     * 4.1.0
     */
    "ticket_format_desc"        => "Kan inneholde alfanumeriske tegn og spesialtegn <code>-_.+!*,</code><br />Følgende variabler kan også brukes: %S for et sekvensielt nummer | %N for et tilfeldig nummer | %L for en tilfeldig bokstav<br />Bruk {number} for repetisjon <strong>kun</strong> etter %N eller %L, f.eks. %N{4} tilsvarer 4 tilfeldige numre, %L{3} tilsvarer 3 tilfeldige bokstaver<br />Følgende <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a>-parametre prefixet med % Y,y,m,d,j,g,G,h,H,i,s",
    "append_ip_address_api_desc" => "Legg til brukerens IP-adresse på slutten av saksmeldingene deres (krever at user_ip_address-data leveres).",
    "check_spam"                => "Sjekk spamregler",
    "check_spam_api_desc"       => "Blokker meldinger som samsvarer med spamregler.",
    "enable_throttling"         => "Aktiver hastighetsbegrensning",
    "enable_throttling_api_desc" => "Begrens antall meldinger brukere kan legge inn innenfor et tidsrom. Se <a href='https://docs.supportpal.com/current/App+Configuration#Throttling' target='_blank'>Hastighetsbegrensningskonfigurasjon</a> for mer informasjon om hvordan du justerer grensene.",
    "captcha_desc"              => "Når skal captcha vises for brukere som åpner nye saker",

    /*
     * 5.0.0
     */
    "also_viewing"              => "<strong>:name</strong> ser også denne saken.",
    "mark_as_read"              => "Merk som lest",
    "mark_as_unread"            => "Merk som ulest",
    "sla_targets"               => "SLA-mål|SLA-mål",
    "sla_targets_desc"          => "Sett målrettede tider en sak må svares på og løses innen per prioritet. Tiden telles kun i åpningstider basert på den valgte tidsplanen/-ene, desimalverdier kan brukes. La verdien stå tom for ikke å sette et mål for den prioriteten.",
    "first_reply_time"          => "Første svartid",
    "next_reply_time"           => "Neste svartid",
    "resolution_time"           => "Løsningstid",
    "reply_due_in"              => "Svar forfaller :time",
    "resolve_in"                => "Løs :time",
    "paused_ago"                => "Satt på pause :time",
    "reply_due_time"            => "Svars forfallstid",
    "resolution_due_time"       => "Løsningens forfallstid",
    "set_reply_due_time"        => "Sett svars forfallstid",
    "set_resolution_due_time"   => "Sett løsningens forfallstid",

    /*
     * 5.2.0
     */
    "block_user_desc"           => "Brukeren vil ikke kunne åpne flere saker, og saken flyttes til papirkurven.",

    /*
     * 5.3.0
     */
    "reject_duplicate_emails"   => "Avvis duplikate e-poster",
    "reject_duplicate_emails_desc" => "Stopp e-poster fra å bli importert mer enn én gang, oppdaget basert på Message-ID-headeren.",
    "duplicate_email_detected"  => "Duplikat e-post som allerede er importert.",

);
