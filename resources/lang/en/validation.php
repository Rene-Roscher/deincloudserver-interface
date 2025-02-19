<?php

return [

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

    'accepted' => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige Internet-Adresse.',
    'after' => ':attribute muss ein Datum nach dem :date sein.',
    'after_or_equal' => ':attribute muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha' => ':attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash' => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'alpha_num' => ':attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array' => ':attribute muss ein Array sein.',
    'before' => ':attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => ':attribute muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between' => [
        'numeric' => ':attribute muss zwischen :min & :max liegen.',
        'file' => ':attribute muss zwischen :min & :max Kilobytes groß sein.',
        'string' => ':attribute muss zwischen :min & :max Zeichen lang sein.',
        'array' => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean' => ":attribute muss entweder 'true' oder 'false' sein.",
    'confirmed' => ':attribute stimmt nicht mit der Bestätigung überein.',
    'date' => ':attribute muss ein gültiges Datum sein.',
    'date_format' => ':attribute entspricht nicht dem gültigen Format für :format.',
    'different' => ':attribute und :other müssen sich unterscheiden.',
    'digits' => ':attribute muss :digits Stellen haben.',
    'digits_between' => ':attribute muss zwischen :min und :max Stellen haben.',
    'dimensions' => ':attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute beinhaltet einen bereits vorhandenen Wert.',
    'email' => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'exists' => 'Der gewählte Wert für :attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => ':attribute muss ausgefüllt sein.',
    'gt' => [
        'numeric' => 'Das :attribute muss größer sein als :value.',
        'file' => 'Das :attribute must be greater than :value kilobytes.',
        'string' => 'Das :attribute must be greater than :value characters.',
        'array' => 'Das :attribute muss mehr als :value elemente haben.',
    ],
    'gte' => [
        'numeric' => 'Das :attribute muss größer sein als :value oder gleich sein.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Der gewählte Wert für :attribute ist ungültig.',
    'in_array' => 'Der gewählte Wert für :attribute kommt nicht in :other vor.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'ip' => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => ':attribute muss eine gültige IPv6-Adresse sein.',
    'json' => ':attribute muss ein gültiger JSON-String sein.',
    'lt' => [
        'numeric' => 'Das :attribute muss kleiner sein als :value.',
        'file' => 'Das :attribute muss kleiner sein :value Kilobytes.',
        'string' => 'Das :attribute muss aus weniger als :value zeichen bestehen.',
        'array' => 'Das :attribute muss weniger haben als :value elementen.',
    ],
    'lte' => [
        'numeric' => 'Das :attribute muss kleiner sein als :value.',
        'file' => 'Das :attribute muss kleiner sein :value Kilobytes.',
        'string' => 'Das :attribute muss aus weniger als :value zeichen bestehen.',
        'array' => 'Das :attribute muss weniger haben als :value elementen.',
    ],
    'max' => [
        'numeric' => 'Das :attribute muss kleiner sein als :value.',
        'file' => 'Das :attribute muss kleiner sein :value Kilobytes.',
        'string' => 'Das :attribute muss aus weniger als :value zeichen bestehen.',
        'array' => 'Das :attribute muss weniger haben als :value elementen.',
    ],
    'mimes' => ':attribute muss den Dateityp :values haben.',
    'mimetypes' => ':attribute muss den Dateityp :values haben.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string' => ':attribute muss mindestens :min Zeichen lang sein.',
        'array' => ':attribute muss mindestens :min Elemente haben.',
    ],
    'not_in' => 'Der gewählte Wert für :attribute ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'present' => 'Das Feld :attribute muss vorhanden sein.',
    'regex' => ':attribute Format ist ungültig.',
    'required' => ':attribute muss ausgefüllt sein.',
    'required_if' => ':attribute muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless' => ':attribute muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with' => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all' => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without' => ':attribute muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':attribute muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => ':attribute muss gleich :size sein.',
        'file' => ':attribute muss :size Kilobyte groß sein.',
        'string' => ':attribute muss :size Zeichen lang sein.',
        'array' => ':attribute muss genau :size Elemente haben.',
    ],
    'string' => ':attribute muss ein String sein.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique' => ':attribute ist schon vergeben.',
    'uploaded' => 'Der :attribute konnte nicht hochgeladen werden.',
    'url' => 'Das Format von :attribute ist ungültig.',
    'uuid' => 'Das :attribute muss eine gültige UUID sein.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'username' => 'Benutzername',
        'password' => 'Passwort',
        'email' => 'E-Mail-Adresse',
    ],

];
