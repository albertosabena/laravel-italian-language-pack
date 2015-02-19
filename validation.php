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

	"accepted"             => ":attribute deve essere accettato.",
	"active_url"           => ":attribute non è un indirizzo email valido.",
	"after"                => ":attribute deve essere successivo a :date.",
	"alpha"                => ":attribute può contenere solamente lettere.",
	"alpha_dash"           => ":attribute può contenere solamente lettere, numeri e trattini.",
	"alpha_num"            => ":attribute può contenere solamente lettere e numeri.",
	"array"                => ":attribute deve essere un array.",
	"before"               => ":attribute deve essere una data antecedente a :date.",
	"between"              => [
		"numeric" => ":attribute deve essere compreso tra :min e :max.",
		"file"    => ":attribute deve essere compreso tra :min e :max kilobytes.",
		"string"  => ":attribute deve essere compreso tra :min and :max caratteri.",
		"array"   => ":attribute deve essere compreso tra :min and :max elementi.",
	],
	"boolean"              => "Il campo :attribute deve essere vero o falso.",
	"confirmed"            => "Il campo :attribute non corrisponde.",
	"date"                 => ":attribute non è una data valida.",
	"date_format"          => ":attribute non corrisponde al formato :format.",
	"different"            => ":attribute e :other devono essere diversi.",
	"digits"               => ":attribute deve essere lungo :digits caratteri.",
	"digits_between"       => ":attribute deve essre compreso tra :min e :max caratteri.",
	"email"                => "Il campo :attribute deve essere un indirizzo email valido.",
	"filled"               => "Il campo :attribute è richiesto.",
	"exists"               => "L'elemento :attribute selezionato non è valido.",
	"image"                => ":attribute deve essere un'immagine.",
	"in"                   => "Il campo :attribute selezionato non è valido.",
	"integer"              => ":attribute deve essere un intero.",
	"ip"                   => ":attribute deve essere un indirizzo IP valido.",
	"max"                  => [
		"numeric" => ":attribute non può essere superiore a :max.",
		"file"    => ":attribute non può essere più grande di :max kilobytes.",
		"string"  => ":attribute non può essere più lungo di :max caratteri.",
		"array"   => ":attribute non può contenere più di :max elementi.",
	],
	"mimes"                => ":attribute deve essere un file di tipo: :values.",
	"min"                  => [
		"numeric" => ":attribute deve essere superiore a :min.",
		"file"    => ":attribute deve essere grande almeno :min kilobytes.",
		"string"  => ":attribute deve contenere almeno :min caratteri.",
		"array"   => ":attribute deve contenere almeno :min caratteri.",
	],
	"not_in"               => ":attribute selezionato non è valido.",
	"numeric"              => ":attribute deve essere un numero.",
	"regex"                => "Il formato di :attribute non è valido.",
	"required"             => ":attribute è richiesto.",
	"required_if"          => ":attribute è richiesto quando :other è :value.",
	"required_with"        => ":attribute è richiesto quando :values è presente.",
	"required_with_all"    => ":attribute è richiesto quando :values sono presenti.",
	"required_without"     => ":attribute è richiesto quando :values non è presente.",
	"required_without_all" => ":attribute è richiesto quanto nessuno di :values è presente.",
	"same"                 => ":attribute e :other devono corrispondere.",
	"size"                 => [
		"numeric" => ":attribute deve essere :size.",
		"file"    => ":attribute deve essere :size kilobytes.",
		"string"  => ":attribute deve essere di :size caratteri.",
		"array"   => ":attribute deve contenere :size elementi.",
	],
	"unique"               => ":attribute è già stato utilizzato.",
	"url"                  => "Il formato di :attribute non è valido.",
	"timezone"             => ":attribute deve essere una timezone valida.",

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
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
