<?php

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

return [
    'accepted'             => 'Aquest camp ha de ser acceptat.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'No es tracta d\'una URL vàlida.',
    'after'                => 'Aquesta ha de ser una data després de :date.',
    'after_or_equal'       => 'Aquest ha de ser un dia després o igual a :date.',
    'alpha'                => 'Aquest camp només pot contenir lletres.',
    'alpha_dash'           => 'Aquest camp només pot contenir lletres, números, guions i guions baixos.',
    'alpha_num'            => 'Aquest camp només pot contenir lletres i números.',
    'array'                => 'Aquest camp ha de ser una matriu.',
    'attached'             => 'Aquest camp és ja s\'adjunta.',
    'before'               => 'Aquesta ha de ser una data abans :date.',
    'before_or_equal'      => 'Aquesta ha de ser una data anterior o igual a :date junta.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Aquest camp ha de ser true o false.',
    'confirmed'            => 'La confirmació no coincideix.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Aquesta no és una data vàlida.',
    'date_equals'          => 'Aquesta ha de ser una data igual a :date.',
    'date_format'          => 'Aquest no coincideix amb el format :format.',
    'different'            => 'Aquest valor ha de ser diferent de :other.',
    'digits'               => 'Aquest ha de ser :digits dígits.',
    'digits_between'       => 'Aquest ha de ser entre :min i :max dígits.',
    'dimensions'           => 'Aquesta imatge ha invalid dimensions.',
    'distinct'             => 'Aquest camp té un duplicat de valor.',
    'email'                => 'Aquesta ha de ser una adreça de correu vàlida.',
    'ends_with'            => 'Aquest ha d\'acabar amb una de les següents: :values.',
    'exists'               => 'El valor escollit és vàlid.',
    'file'                 => 'El contingut ha de ser un fitxer.',
    'filled'               => 'Aquest camp ha de tenir un valor.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Aquesta ha de ser una imatge.',
    'in'                   => 'El valor escollit és vàlid.',
    'in_array'             => 'Aquest valor no existeix en :other.',
    'integer'              => 'Aquest ha de ser un nombre enter.',
    'ip'                   => 'Aquesta ha de ser una adreça IP vàlida.',
    'ipv4'                 => 'Això ha de ser vàlid a l\'adreça IPv4.',
    'ipv6'                 => 'Aquesta ha de ser una adreça IPv6 vàlida.',
    'json'                 => 'Això ha de ser vàlid JSON cadena.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Aquest ha de ser un fitxer del tipus: :values.',
    'mimetypes'            => 'Aquest ha de ser un fitxer del tipus: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'El valor haurà de ser un múltiple de :value',
    'not_in'               => 'El valor escollit és vàlid.',
    'not_regex'            => 'Aquest format no és vàlida.',
    'numeric'              => 'Aquest ha de ser un nombre.',
    'password'             => 'La contrasenya és incorrecta.',
    'present'              => 'Aquest camp ha de ser present.',
    'prohibited'           => 'Aquest camp està prohibit.',
    'prohibited_if'        => 'Aquest camp és prohibida quan :other és :value.',
    'prohibited_unless'    => 'Aquest camp és prohibida, tret que :other és a :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Aquest format no és vàlida.',
    'relatable'            => 'Aquest camp no pot estar associat amb aquest recurs.',
    'required'             => 'Aquest camp és obligatori.',
    'required_if'          => 'Aquest camp és obligatori quan :other és :value.',
    'required_unless'      => 'Aquest camp és obligatori, llevat que :other és a :values.',
    'required_with'        => 'Aquest camp és obligatori quan :values és present.',
    'required_with_all'    => 'Aquest camp és obligatori quan :values són presents.',
    'required_without'     => 'Aquest camp és obligatori quan el :values no és present.',
    'required_without_all' => 'Aquest camp és obligatori quan cap de :values són presents.',
    'same'                 => 'El valor d\'aquest camp ha de coincidir amb el de :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Aquest ha de començar amb una de les següents: :values.',
    'string'               => 'Aquesta ha de ser una cadena.',
    'timezone'             => 'Aquesta ha de ser una zona vàlida.',
    'unique'               => 'Aquest ja ha estat presa.',
    'uploaded'             => 'Aquest no pujar.',
    'url'                  => 'Aquest format no és vàlida.',
    'uuid'                 => 'Això ha de ser vàlid a l\'UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
