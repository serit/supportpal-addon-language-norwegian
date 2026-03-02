<?php

return array(

    "customfield"               => "Egendefinert felt|Egendefinerte felt",

    // Options
    "boolean"                   => "Ja/Nei",
    "checkbox"                  => "Avkrysningsboks",
    "checklist"                 => "Sjekkliste",
    "date"                      => "Dato",
    "multiple"                  => "Flere valg",
    "options"                   => "Alternativer",
    "radio"                     => "Radioknapper",
    "rating"                    => "Vurdering (1 til 5)",
    "text"                      => "Tekst",
    "textarea"                  => "Tekstområde",

    "public"                    => "Offentlig",
    "public_desc"               => "Vises det egendefinerte feltet offentlig på frontend eller kun for operatører.",
    "encrypted"                 => "Kryptert",
    "purge_desc"                => "Slettes den egendefinerte verdien automatisk når en sak er løst.",
    "locked"                    => "Låst",
    "locked_desc"               => "Kan den egendefinerte verdien ikke endres av brukeren når den først er definert.",
    "department_desc"           => "Velg hvilke avdelinger feltet er tilgjengelig i.",

    /*
     * 2.0.2
     */
    "please_select"             => "Velg...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Den beskrivende teksten som vil bli vist under det egendefinerte feltet, kan alternativt stå tomt.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Velg hvilke brands dette feltet er tilgjengelig i.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Sletter du eksisterende alternativer vil det tømme eventuelle felt som har denne verdien definert.",
    "regex_basic_desc"          => "Du kan spesifisere et regulært uttrykk for å validere verdien av et egendefinert felt.",
    "regex_desc"                => "Det regulære uttrykket er bokstavfølsomt, det er ikke nødvendig å definere avgrensninger på regulære uttrykk. Bruk av skråstrek vil automatisk bli utelukket. Eksempel: ^[a-z0-9_-]{6,18}$ vil kreve at verdien er 6-18 tegn lang og kun inneholder en blanding av alfanumeriske tegn, understrek og bindestreker.",
    "regex_error_message"       => "Melding ved valideringsfeil",
    "regex_error_message_desc"  => "Du kan alternativt spesifisere en egendefinert feilmelding som vil bli vist hvis verdien ikke matcher det regulære uttrykket, ellers vil en generisk melding bli vist. Meldingen vil bli vist nøyaktig slik den er skrevet inn, vi foreslår derfor å inkludere navnet på det egendefinerte feltet for å gjøre feilmeldingen mer tydelig.",
    "custom_field_values"       => "Egendefinerte feltverdier",
    "depends_on"                => "Avhenger av",
    "depends_on_desc"           => "Hvis valgt vil dette feltet kun vises for brukeren når den spesifiserte feltverdien er valgt. Brand og avdelingens synlighet vil bli arvet fra feltet de avhenger av.",
    "select_option"             => "Velg et alternativ...",
    "purge"                     => "Fjern",
    "encrypted_desc"            => "Er det egendefinerte feltet sensitivt og skal det lagres kryptert i databasen. Dette kan ikke endres etter at det egendefinerte feltet er opprettet.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Skal det egendefinerte feltet fylles ut. Gjelder for avkrysningsboks, sjekkliste eller flere valg vil det kreve at brukeren velger minst ett alternativ.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** KRYPTERT **",
);
