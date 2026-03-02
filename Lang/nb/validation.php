<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"                  => ":attribute må aksepteres.",
    "active_url"                => ":attribute er ikke en gyldig URL.",
    "after"                     => ":attribute må være en dato etter :date.",
    "alpha"                     => ":attribute kan kun inneholde bokstaver.",
    "alpha_dash"                => ":attribute kan kun inneholde bokstaver, tall, bindestreker og understreker.",
    "alpha_num"                 => ":attribute kan kun inneholde bokstaver og tall.",
    "array"                     => ":attribute må være et array.",
    "before"                    => ":attribute må være en dato før :date.",
    "between"                   => array(
        "numeric" => ":attribute må være mellom :min og :max.",
        "file"    => ":attribute må være mellom :min og :max kilobytes.",
        "string"  => ":attribute må være mellom :min og :max tegn.",
        "array"   => ":attribute må ha mellom :min og :max elementer.",
    ),
    "boolean"                   => ":attribute-feltet må være sant eller usant.",
    "confirmed"                 => ":attribute-bekreftelsen stemmer ikke.",
    "date"                      => ":attribute er ikke en gyldig dato.",
    "date_format"               => ":attribute samsvarer ikke med formatet :format.",
    "different"                 => ":attribute og :other må være forskjellige.",
    "digits"                    => ":attribute må være :digits siffer.",
    "digits_between"            => ":attribute må være mellom :min og :max siffer.",
    "email"                     => ":attribute må være en gyldig e-postadresse.",
    "exists"                    => "den valgte :attribute er ikke gyldig.",
    "image"                     => ":attribute må være et bilde.",
    "in"                        => "den valgte :attribute er ikke gyldig.",
    "integer"                   => ":attribute må være et heltall.",
    "ip"                        => ":attribute må være en gyldig IP-adresse.",
    "max"                       => array(
        "numeric" => ":attribute kan ikke være større enn :max.",
        "file"    => ":attribute kan ikke være større enn :max kilobytes.",
        "string"  => ":attribute kan ikke være større enn :max tegn.",
        "array"   => ":attribute kan ikke ha mer enn :max.",
    ),
    "mimes"                     => ":attribute må være en fil av typen: :values.",
    "min"                       => array(
        "numeric" => ":attribute må være minst :min.",
        "file"    => ":attribute må være minst :min kilobytes.",
        "string"  => ":attribute må være minst :min tegn.",
        "array"   => ":attribute må ha minst :min elementer.",
    ),
    "not_in"                    => "Den valgte :attribute er ikke gyldig.",
    "numeric"                   => ":attribute må være et tall.",
    "regex"                     => ":attribute-formatet er ikke gyldig.",
    "required"                  => ":attribute-feltet er påkrevd.",
    "required_if"               => ":attribute-feltet er påkrevd når :other er :value.",
    "required_with"             => ":attribute-feltet er påkrevd når :values er til stede.",
    "required_with_all"         => ":attribute-feltet er påkrevd når :values er til stede.",
    "required_without"          => ":attribute-feltet er påkrevd når :values ikke er til stede.",
    "required_without_all"      => ":attribute-feltet er påkrevd når ingen av :values er til stede.",
    "same"                      => ":attribute og :other må stemme overens.",
    "size"                      => array(
        "numeric" => ":attribute må være :size.",
        "file"    => ":attribute må være :size kilobytes.",
        "string"  => ":attribute må være :size tegn.",
        "array"   => ":attribute må inneholde :size.",
    ),
    "unique"                    => ":attribute er allerede i bruk.",
    "url"                       => ":attribute-formatet er ikke gyldig.",
    "template_exists"           => "Den valgte :attribute er ikke gyldig.",
    "is_valid_captcha"          => "Captcha-koden som ble skrevet inn var ikke korrekt, forsøk vennligst igjen.",
    "user_password_strength"    => ":attribute må inneholde: :user_password_strength.",
    "operator_password_strength" => ":attribute må inneholde: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Logoen må peke på en gyldig bildefil (direkte URL eller relativ filsti til basisbiblioteket).",

    /*
     * 2.2.0
     */
    "required_with_translation" => ":translation-oversettelsen for :attribute-feltet er påkrevd når :values er til stede.",
    "max_translation"           => ":translation-oversettelsen for :attribute-feltet kan ikke være større enn :max tegn.",
    "unique_translation"        => ":translation-oversettelsen for :attribute-feltet er allerede i bruk.",

    /*
     * 2.3.0
     */
    "required_translation"      => ":translation-oversettelsen for :attribute-feltet er påkrevd.",
    "customfield_not_cyclic"    => "Feltet kan ikke avhenge av et av dets underfelter.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Slug-feltet kan kun inneholde alfanumeriske tegn, prosentkod vennligst spesialtegn.",
    "article_slug_unique"       => "Slug er allerede i bruk.",
    "captcha_required"          => "Captcha er påkrevd.",
    "ticket_number_format"      => "Saksnummerformatet er ikke gyldig.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => ":attribute må være en dato etter eller lik :date.",
    "before_or_equal"           => ":attribute må være en dato før eller lik :date.",
    "dimensions"                => ":attribute har ugyldige bildedimensjoner.",
    "distinct"                  => ":attribute-feltet har en duplikat verdi.",
    "file"                      => ":attribute må være en fil.",
    "filled"                    => ":attribute-feltet må ha en verdi.",
    "gt"                        => array(
        "numeric" => ":attribute må være større enn :value.",
        "file"    => ":attribute må være større enn :value kilobytes.",
        "string"  => ":attribute må være større enn :value tegn.",
        "array"   => ":attribute må ha mer enn :value.",
    ),
    "gte"                       => array(
        "numeric" => ":attribute må være større enn eller lik :value.",
        "file"    => ":attribute må være større enn eller lik :value kilobytes.",
        "string"  => ":attribute må være større enn eller lik :value tegn.",
        "array"   => ":attribute må ha :value eller flere.",
    ),
    "in_array"                  => ":attribute-feltet eksisterer ikke i :other.",
    "ipv4"                      => ":attribute må være en gyldig IPv4-adresse.",
    "ipv6"                      => ":attribute må være en gyldig IPv6-adresse.",
    "json"                      => ":attribute må være en gyldig JSON-streng.",
    "lt"                        => array(
        "numeric" => ":attribute må være mindre enn :value.",
        "file"    => ":attribute må være mindre enn :value kilobytes.",
        "string"  => ":attribute må være mindre enn :value tegn.",
        "array"   => ":attribute må ha mindre enn :value.",
    ),
    "lte"                       => array(
        "numeric" => ":attribute må være mindre enn eller lik :value.",
        "file"    => ":attribute må være mindre enn eller lik :value kilobytes.",
        "string"  => ":attribute må være mindre enn eller lik :value tegn.",
        "array"   => ":attribute kan ikke ha mer enn :value.",
    ),
    "mimetypes"                 => ":attribute må være en fil av typen: :values.",
    "not_regex"                 => ":attribute-formatet er ikke gyldig.",
    "present"                   => ":attribute-feltet må være til stede.",
    "required_unless"           => ":attribute-feltet er påkrevd med mindre :other er i :values.",
    "string"                    => ":attribute må være en streng.",
    "timezone"                  => ":attribute må være en gyldig tidssone.",
    "uploaded"                  => ":attribute ble ikke lastet opp.",

    /*
     * 2.5.0
     */
    "domain"                    => "Ett eller flere domenenavn er ikke gyldige.",

    /*
     * 2.5.1
     */
    "valid_twig"                => ":attribute er ikke gyldig. Bruk vennligst 'Forhåndsvisning'-knappen for å se detaljer.",

    /*
     * 3.0.0
     */
    "embed_image"               => ":attribute må være en fil av typen: jpeg, png eller gif.",
    "starts_with"               => ":attribute må starte med en av følgende: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "Det oppgitte telefonnummeret er ikke gyldig.",

    /*
     * 4.3.0
     */
    "is_invalid"                => ":attribute er ikke gyldig.",

    /*
     * 5.0.0
     */
    "current_password"           => "Passordet er feil.",
    "department_email_per_brand" => "En e-postkonto må eksistere for hvert brand tildelt denne avdelingen.",
    "department_has_a_priority"  => "Avdeling(er) :departments er offentlig og må tildeles minst én prioritet.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => array(
        "roles.*" => array(
            "exists" => "Den valgte rollen er ikke gyldig.",
        ),
        "category.*.type" => array(
            "required" => "Én eller flere selvbetjeningstyper må velges.",
        ),
        "category.*.categories" => array(
            "required" => "Én eller flere kategorier er påkrevd når en selvbetjeningstype er valgt.",
            "exists"   => "Én eller flere valgte kategorier er ikke gyldige.",
        ),
        "brand.*" => array(
            "exists" => "Det valgte brandet er ikke gyldig.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
