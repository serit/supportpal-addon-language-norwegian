<?php

return array(

    // Standard messages
    "item_created"                      => "Opprettet ny :item :rel.",
    "item_updated"                      => "Oppdatert :item :rel.",
    "item_deleted"                      => "Slettet :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Ny IP-ban opprettet av :rel.",
    "ip_ban_updated"                    => "IP-ban oppdatert :rel.",
    "ip_ban_deleted"                    => "IP-ban slettet :rel.",
    "banned_ip_on_login"                => "IP utestengt :rel i 15 minutter.",

    "ip_whitelist_created"              => "IP :rel lagt til hviteliste.",
    "ip_whitelist_updated"              => "IP :rel oppdatert på hviteliste.",
    "ip_whitelist_deleted"              => "IP :rel slettet fra hviteliste.",

    "system_cleanup"                    => "Systemopprydding kjørt på :rel.",

    "api_failed_login"                  => "IP :rel feilet autorisasjon til API.",

    "user_successful_login"             => "Logget inn i helpdesken.",
    "user_failed_login"                 => "Feilet autorisasjon.",
    "user_successful_logout"            => "Logget ut av helpdesken.",

    "user_registered"                   => "Registrerte en konto.",
    "user_confirmed"                    => "Bekreftet sin konto.",
    "user_password_set"                 => "Definerte et passord for sin konto.",
    "user_password_reset"               => "Nullstilte passordet for sin konto.",

    "user_added_to_organisation"        => "Brukeren :rel er lagt til i organisasjonen :new_value.",
    "user_removed_from_organisation"    => "Brukeren :rel er fjernet fra organisasjonen :old_value.",
    "user_profile_updated"              => "Oppdatert kontoprofil",
    "user_left_organisation"            => "Forlot organisasjonen :rel.",
    "user_organisation_emptied"         => "Fjernet alle brukere fra organisasjonen :rel.",
    "user_organisation_updated"         => ":rel's organisasjons tilgangsnivå endret fra :old_value til :new_value.",
    "organisation_membership_updated"   => "Oppdatert brukermedlemskap i organisasjonen :rel.",
    "organisation_profile_updated"      => "Oppdatert profil for organisasjon :rel.",
    "organisation_owner_updated"        => "Flyttet organisasjon :rel eierskap til :new_value.",

    "mass_email_queued"                 => "Satt :new_value e-poster i kø i grupper for utsendelse.",
    "mass_email_sent"                   => "Sendt :new_value e-poster i kø.",

    "email_queue_deleted"               => "Slettet kø-e-post til :rel.",

    "scheduled_task_run"                => "Planlagt oppgave :rel er blitt kjørt manuelt.",

    "selfservice_article_upvoted"       => "Vurderte en artikkel som positiv :rel.",
    "selfservice_article_downvoted"     => "Vurderte en artikkel som negativ :rel.",
    "selfservice_comment_posted"        => "Postet en ny :rel.",
    "selfservice_comment_upvoted"       => "Oppstemte :rel-vurdering fra :old_value til :new_value.",
    "selfservice_comment_downvoted"     => "Nedstemte :rel-vurdering fra :old_value til :new_value.",

    "ticket_opened"                     => "Åpnet en ny sak #:rel.",
    "ticket_opened_on_behalf"           => "Åpnet en ny sak #:rel på vegne av :new_value.",
    "ticket_opened_email"               => "Importerte e-post som ny sak #:rel.",

    "ticket_message_reply"              => "Postet et nytt svar til sak #:rel.",
    "ticket_message_note"               => "Postet et nytt notat til sak #:rel.",
    "ticket_message_deleted"            => "Slettet en melding i sak #:rel.",

    "ticket_user_updated"               => "Oppdaterte brukeren på sak #:rel fra :old_value til :new_value.",
    "ticket_subject_updated"            => "Oppdaterte emnet på sak #:rel.",
    "ticket_department_updated"         => "Oppdaterte avdeling på sak #:rel fra :old_value til :new_value.",
    "ticket_status_updated"             => "Oppdaterte status på sak #:rel fra :old_value til :new_value.",
    "ticket_priority_updated"           => "Oppdaterte prioritet på sak #:rel fra :old_value til :new_value.",
    "ticket_tag_added"                  => "Lagt til tag :new_value på sak #:rel.",
    "ticket_tag_updated"                => "Oppdaterte tag på sak #:rel.",
    "ticket_tag_removed"                => "Fjernet tag :new_value fra sak #:rel.",
    "ticket_slaplan_updated"            => "Oppdaterte SLA-plan på sak #:rel fra :old_value til :new_value.",
    "ticket_duetime_updated"            => "Oppdaterte gjenstående tid på sak #:rel til :new_value.",
    "ticket_customfield_updated"        => "Oppdaterte egendefinerte felt på sak #:rel.",
    "ticket_converted_user"             => "Konverterte intern sak #:rel til brukersak.",
    "ticket_converted_internal"         => "Konverterte brukersak #:rel til intern sak.",

    "ticket_assigned_operator"          => "Tildelte :new_value til sak #:rel.",
    "ticket_unassigned_operator"        => "Fjernet :new_value fra sak #:rel.",
    "ticket_assigned_self"              => "La til seg selv på sak #:rel.",
    "ticket_assigned_updated"           => "Oppdaterte tildelte operatører på sak #:rel.",

    "ticket_locked"                     => "Låste sak #:rel.",
    "ticket_unlocked"                   => "Låste opp sak #:rel.",
    "ticket_locked_reply"               => "Svar kunne ikke legges til låst sak #:rel.",

    "ticket_merged"                     => "Sak(er) :new_value flettet inn i sak #:rel.",
    "ticket_unmerged"                   => "Sak :rel er blitt flettet ut.",

    "ticket_user_blocked"               => "Blokkert e-post :new_value (fra bruker på sak #:rel).",

    "ticket_closed"                     => "Sak #:rel er blitt lukket.",
    "ticket_inactive_closed"            => "Lukket inaktiv sak #:rel fra status :old_value.",
    "ticket_awaiting_response"          => "Sendt e-post om venter på svar til bruker på #:rel.",

    "ticket_split_from"                 => "Meldinger splittet fra gammel sak #:rel til ny sak #:new_value.",
    "ticket_split_to"                   => "Meldinger splittet fra gammel sak #:old_value til ny sak #:rel.",

    "ticket_attachment_saved"           => "Lagt til vedlegg på sak #:rel.",
    "ticket_attachment_deleted"         => "Slettet vedlegg fra sak #:rel.",

    "ticket_throttled"                  => "Avvist ny sak fra :rel p.g.a. throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Lagt til vedlegg ':new_value' på artikkel-ID :rel.",
    "selfservice_attachment_deleted"    => "Slettet vedlegg ':new_value' fra artikkel-ID :rel.",
    "ticket_unassigned_self"            => "Fjernet seg selv fra sak #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Svar kunne ikke legges til fordi sak tilhører et deaktivert brand #:rel.",
    "personal_signatures_updated"       => "Oppdaterte personlig signatur.",
    "check_email_failed"                => "Feil: Feilet nedlasting av e-post fra konto :old_value: ':rel'.",
    "ticket_added_cc"                   => "E-post(er) :new_value lagt til CC-adresseliste for sak #:rel.",
    "ticket_removed_cc"                 => "E-post(er) :old_value fjernet fra CC-adresseliste for sak #:rel.",
    "invalid_department_brand"          => "Feilet å definere avdeling ':new_value' på sak #:rel, avdelingen tilhører ikke et saksbrand.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Sendt en e-post med emne ':extra_rel1' til :rel.",
    "sent_template_email_to"            => "Sendt ':extra_rel1' e-post til :rel.",
    "sent_ticket_email_to_user"         => "Sendt ':extra_rel1' e-post til bruker på sak #:rel.",
    "sent_email_to_operators"           => "Sendt ':extra_rel1' e-post til operatører.",
    "sent_ticket_email_to_operators"    => "Sendt ':extra_rel1' e-post til operatører på sak #:rel.",
    "sent_email_to_operator_group"      => "Sendt ':extra_rel1' e-post til operatørgruppe ':new_value' på sak #:rel.",
    "ticket_macro_applied"              => "Makroen ':new_value' ble kjørt på sak #:rel.",
    "ticket_macro_automatic"            => "Makroen ':new_value' automatisk kjørt på sak #:rel.",
    "email_template_not_found"          => "E-postmal-ID ':new_value' ikke funnet, avbrøt e-postutsendelse.",
    "private_conversation_started"      => "Startet en samtale med :rel.",
    "private_message_sent"              => "Sendt en melding til :rel.",
    "not_imported_replies_disabled"     => "En e-post :extra_rel1 ble mottatt på sak #:rel, men ble ikke importert da e-postsvar for sak er deaktivert.",
    "not_imported_ticket_locked"        => "En e-post :extra_rel1 ble mottatt på sak #:rel, men ble ikke importert da saken er låst.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Saksbruker lagt til brukergruppe :new_value.",
    "ticket_user_removed_from_group"    => "Saksbruker fjernet fra brukergruppe :old_value.",
    "email_on_behalf"                   => "Videresendt :extra_rel2 på vegne av ':extra_rel1' på sak #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Sendt ':extra_rel1' e-post til :new_value, avdelingen aksepterer ikke e-poster fra uregistrerte brukere.",
    "deleted_user"                      => "Slettet :item ':rel' med e-post ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Koblet sak #:rel med sak :extra_rel1.",
    "unlinked_ticket"                   => "Frakoblet sak #:rel fra sak :extra_rel1.",
    "email_queue_attachment_deleted"    => "Slettet vedlegg ':old_value' fra e-postkøen ':rel'.",
    "forward_ticket_email"              => "Videresendt sak #:rel til tredjepart, vis ':extra_rel1' e-post.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Oppdatert :rel av :extra_rel1.",
    "selfservice_comment_status"        => "Endret status for :rel av :extra_rel1 fra :old_value til :new_value.",
    "selfservice_comment_deleted"       => "Slettet kommentar av :extra_rel1.",
    "ticket_message_posted"             => "Postet en ny :extra_rel1 til sak #:rel.",
    "ticket_message_edited"             => "Redigerte en :extra_rel1 på sak #:rel.",
    "email_send_failed"                 => "Feilet e-postutsendelse.",
    "ticket_brand_updated"              => "Oppdaterte brand på sak #:rel fra :old_value til :new_value.",
    "export_scheduled"                  => "En eksport av bruker :rel er blitt planlagt.",
    "deleted_inactive_records"          => "Automatisk sletting av :old_value inaktive :rel.",
    "deleted_old_records"               => "Automatisk sletting av gamle :rel poster.",
    "sent_email_to_user_group"          => "Satt e-post i kø til brukergruppe ':new_value' på sak #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Følger sak #:rel.",
    "ticket_unwatching"                 => "Følger ikke lenger sak #:rel.",
    "ticket_watch_operator"             => "Satt :new_value til å følge sak #:rel.",
    "ticket_unwatch_operator"           => "Fjernet :new_value fra å følge sak #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Bekreftet eierskap av e-postadresse på vegne av bruker :rel.",
    "ticket_department_email_updated"   => "Oppdatert avdelings e-post på sak #:rel fra :old_value til :new_value.",
    "ticket_watching_updated"           => "Oppdaterte tilskuende operatører på sak #:rel.",
    "ticket_deleted"                    => "Permanent slettet sak ':old_value' (#:rel).",
    "ticket_trashed"                    => "Flyttet sak #:rel til papirkurv.",
    "ticket_restored"                   => "Gjenopprettet sak #:rel fra papirkurv.",
    "emptied_ticket_trash"              => "Sakens papirkurv er tømt for ':old_value' poster.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "En ny oppfølging lagt til sak #:rel.",
    "ticket_followup_updated"           => "En oppfølging på sak #:rel er blitt oppdatert.",
    "ticket_followup_deleted"           => "En oppfølging på sak #:rel er blitt slettet.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Nøytralt vurdert artikkel :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "Bruker :old_value slått sammen med bruker :rel.",
    "user_organisation_merged"          => "Brukerorganisasjon :old_value slått sammen med brukerorganisasjon :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Oppdaterte :rel's svarmaler.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Aktiverte :item (tillegg) :rel.",
    "addon_deactivated"                 => "Deaktiverte :item (tillegg) :rel.",
    "addon_installed"                   => "Installerte :item (tillegg) :rel.",
    "addon_uninstalled"                 => "Avinstallerte :item (tillegg) :rel.",
    "addon_cancelled"                   => "Kansellerte :item (tillegg) :rel.",
    "addon_updated"                     => "Oppdaterte :item (tillegg) :rel til versjon :new_value.",
    "ticket_reply_duetime_updated"      => "Oppdaterte svarsfristen på sak #:rel til :new_value.",
    "ticket_resolve_duetime_updated"    => "Oppdaterte løsningsfristen på sak #:rel til :new_value.",
    "ticket_duetime_unset"              => "Deaktivert fullføringstid på sak #:rel.",
    "ticket_reply_duetime_unset"        => "Fjernet svarsfrist på sak #:rel.",
    "ticket_resolve_duetime_unset"      => "Fjernet løsningsfrist på sak #:rel.",
    "ticket_duetime_paused"             => "Satt gjenstående tid på pause for sak #:rel til neste brukersvar.",
    "ticket_duetime_unpaused"           => "Gjenopptok fristene på sak #:rel.",
    "user_email_verified"               => "Bekreftet sin e-postadresse.",
    "marked_email_as_verified"          => "Bekreftet eierskap av e-postadresse på vegne av bruker :rel.",
    "user_invited_to_organisation"      => "Bruker :rel invitert til organisasjon :extra_rel1.",
    "user_accepted_organisation_invite" => "Bruker :rel aksepterte invitasjon til organisasjon :extra_rel1.",
    "user_additional_email_verified"    => "Bekreftet en ekstra e-postadresse (:new_value).",
    "export_generated"                  => "Eksport av :new_value for bruker :rel er blitt generert og lagret på systemet.",
    "export_deleted"                    => "Eksport :old_value av bruker :rel er blitt slettet fra systemet.",
    "user_export_generated"             => "Eksport :new_value av bruker :rel er generert og lagret på systemet.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Oppdaterte sine svarmaler.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Slettet vedlegg ':old_value' fra sak #:rel.",
    "user_added_to_group"               => "Bruker :rel lagt til brukergruppe :new_value.",
    "user_removed_from_group"           => "Bruker :rel fjernet fra brukergruppe :old_value.",
    "operator_added_to_group"           => "Operatør :rel lagt til operatørgruppe :new_value.",
    "operator_removed_from_group"       => "Operatør :rel fjernet fra operatørgruppe :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Slettet bakgrunnsjobb :rel.",
    "background_job_retried"            => "Prøvde bakgrunnsjobb :rel på nytt.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Satt et passord for sin konto.",
    "password_reset_sent"               => "Tilbakestillingslenke for passord sendt til :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Vurderte sak #:rel som :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Lagret :extra_rel1 på sak #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Lagret :extra_rel1 på artikkel :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

);
