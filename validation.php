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

    'accepted' => ':attribute deve essere accettato.',
    'accepted_if' => ':attribute deve essere accettato quando :other è :value.',
    'active_url' => ':attribute non contiene un indirizzo email valido.',
    'after' => ':attribute deve essere successivo a :date.',
    'after_or_equal' => ':attribute deve essere successivo o uguale a :date.',
    'alpha' => ':attribute può contenere solamente lettere.',
    'alpha_dash' => ':attribute può contenere solamente lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => ':attribute può contenere solamente lettere e numeri.',
    'array' => ':attribute deve essere un array.',
    'ascii' => ':attribute deve contenere solo caratteri alfanumerici e simboli a byte singolo.',
    'before' => ':attribute deve essere una data antecedente a :date.',
    'before_or_equal' => ':attribute deve essere una data antecedente o uguale a :date.',
    'between' => [
        'array' => ':attribute deve essere compreso tra :min and :max elementi.',
        'file' => ':attribute deve essere compreso tra :min e :max kilobytes.',
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'string' => ':attribute deve essere compreso tra :min and :max caratteri.',
    ],
    'boolean' => ':attribute deve essere vero o falso.',
    'confirmed' => ':attribute non corrisponde.',
    'current_password' => 'La password inserita non è corretta.',
    'date' => ':attribute non è una data valida.',
    'date_equals' => ':attribute deve essere uguale a :date.',
    'date_format' => ':attribute non corrisponde al formato :format.',
    'decimal' => ':attribute deve avere :decimal decimali.',
    'declined' => ':attribute deve essere rifiutato.',
    'declined_if' => ':attribute deve essere rifiutato quando :other è :value.',
    'different' => ':attribute e :other devono essere diversi.',
    'digits' => ':attribute deve essere lungo :digits caratteri.',
    'digits_between' => ':attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Le dimensioni immagine di :attribute non sono valide.',
    'distinct' => ':attribute contiene dei valori duplicati.',
    'doesnt_end_with' => ':attribute non deve finire con uno dei seguenti valori: :values.',
    'doesnt_start_with' => ':attribute non deve cominciare con uno dei seguenti valori: :values.',
    'email' => ':attribute deve essere un indirizzo email valido.',
    'ends_with' => ':attribute deve finire con uno dei seguenti valori: :values.',
    'enum' => 'L\'elemento :attribute selezionato non è valido.',
    'exists' => 'L\'elemento :attribute selezionato non è valido.',
    'file' => ':attribute deve essere un file.',
    'filled' => ':attribute deve essere valorizzato.',
    'gt' => [
        'array' => ':attribute deve contenere più di :value elementi.',
        'file' => ':attribute deve essere più grande di :value kilobytes.',
        'numeric' => ':attribute deve essere maggiore di :value.',
        'string' => ':attribute deve contenere più di :value caratteri.',
    ],
    'gte' => [
        'array' => ':attribute deve contenere almeno :value elementi.',
        'file' => ':attribute deve essere maggiore o uguale a :value kilobytes.',
        'numeric' => ':attribute deve essere maggiore o uguale di :value.',
        'string' => ':attribute deve contenere almeno :value caratteri.',
    ],
    'image' => ':attribute deve essere un\'immagine.',
    'in' => ':attribute selezionato non è valido.',
    'in_array' => ':attribute non esiste in :other.',
    'integer' => ':attribute deve essere un intero.',
    'ip' => ':attribute deve essere un indirizzo IP valido.',
    'ipv4' => ':attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => ':attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute deve contenere una stringa JSON valida.',
    'lowercase' => ':attribute deve essere minuscolo.',
    'lt' => [
        'array' => ':attribute deve contenere meno di :value elementi.',
        'file' => ':attribute deve essere più piccolo di :value kilobytes.',
        'numeric' => ':attribute deve essere inferiore a :value.',
        'string' => ':attribute deve contenere meno di :value caratteri.',
    ],
    'lte' => [
        'array' => ':attribute deve contenere non più di :value elementi.',
        'file' => ':attribute deve essere minore o uguale a :value kilobytes.',
        'numeric' => ':attribute deve essere inferiore o uguale a :value.',
        'string' => ':attribute deve contenere non più di :value caratteri.',
    ],
    'mac_address' => ':attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => ':attribute non può contenere più di :max elementi.',
        'file' => ':attribute non può essere più grande di :max kilobytes.',
        'numeric' => ':attribute non può essere superiore a :max.',
        'string' => ':attribute non può essere più lungo di :max caratteri.',
    ],
    'max_digits' => ':attribute non deve contenere più di :max caratteri.',
    'mimes' => ':attribute deve contenere un file di tipo: :values.',
    'mimetypes' => ':attribute deve contenere un file di tipo: :values.',
    'min' => [
        'array' => ':attribute deve avere almeno :min elementi.',
        'file' => ':attribute deve essere almeno :min kilobyte.',
        'numeric' => ':attribute deve essere minimo :min.',
        'string' => ':attribute deve contenere almeno :min caratteri.',
    ],
    'min_digits' => ':attribute deve avere almeno :min caratteri.',
    'missing' => ':attribute deve essere mancante.',
    'missing_if' => ':attribute deve essere mancante se :other è :value.',
    'missing_unless' => ':attribute deve essere mancante a meno che :other non sia :value.',
    'missing_with' => ':attribute deve essere mancante quando :values è presente.',
    'missing_with_all' => ':attribute deve essere mancante quando :values sono presenti.',
    'multiple_of' => ':attribute deve essere un multiplo di :value.',
    'not_in' => ':attribute selezionato non è valido.',
    'not_regex' => 'Il formato di :attribute non è valido.',
    'numeric' => ':attribute deve essere un numero.',
    'password' => [
        'letters' => ':attribute deve contenere almeno una lettera.',
        'mixed' => ':attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => ':attribute deve contenere almeno un numero.',
        'symbols' => ':attribute deve contenere almeno un simbolo.',
        'uncompromised' => ':attribute compare in una fuga di dati. Scegli un altro :attribute.',
    ],
    'present' => ':attribute deve essere presente.',
    'prohibited' => ':attribute è proibito.',
    'prohibited_if' => ':attribute è proibito quando :other è :value.',
    'prohibited_unless' => ':attribute è proibito a meno che :other non sia :values.',
    'prohibits' => ':attribute proibisce a :other di essere presente.',
    'regex' => 'Il formato di :attribute non è valido.',
    'required' => ':attribute è richiesto.',
    'required_array_keys' => ':attribute deve contenere uno dei seguenti valori: :values.',
    'required_if' => ':attribute è richiesto quando :other è :value.',
    'required_if_accepted' => ':attribute è richiesto quando :other è accettato.',
    'required_unless' => ':attribute è richiesto salvo che :other sia in :values.',
    'required_with' => ':attribute è richiesto quando :values è presente.',
    'required_with_all' => ':attribute è richiesto quando sono presenti :values.',
    'required_without' => ':attribute è richiesto quando :values non è presente.',
    'required_without_all' => ':attribute è richiesto quanto nessuno di :values è presente.',
    'same' => ':attribute e :other devono corrispondere.',
    'size' => [
        'array' => ':attribute deve contenere :size elementi.',
        'file' => ':attribute deve essere :size kilobytes.',
        'numeric' => ':attribute deve essere :size.',
        'string' => ':attribute deve essere di :size caratteri.',
    ],
    'starts_with' => ':attribute deve cominciare con uno dei seguenti valori: :values.',
    'string' => ':attribute deve essere una stringa.',
    'timezone' => ':attribute deve essere un fuso orario valido.',
    'unique' => ':attribute è già in uso.',
    'uploaded' => 'L\'upload di :attribute è fallito.',
    'uppercase' => ':attribute deve essere maiuscolo.',
    'url' => ':attribute deve essere un URL valido.',
    'ulid' => ':attribute deve essere un ULID valido.',
    'uuid' => ':attribute deve essere un UUID valido.',

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

    'attributes' => [],

];