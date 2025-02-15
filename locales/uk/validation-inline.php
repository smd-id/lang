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
    'accepted'             => 'Поле має бути прийнято.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Не є дійсною URL-адресою.',
    'after'                => 'Має бути дата після :date.',
    'after_or_equal'       => 'Має бути дата після або дата, що дорівнює :date',
    'alpha'                => 'Поле може містити лише літери.',
    'alpha_dash'           => 'Поле може містити лише літери, цифри, тире та підкреслення.',
    'alpha_num'            => 'Поле може містити лише букви та цифри.',
    'array'                => 'Поле має бути масивом.',
    'attached'             => 'Це поле вже прикріплено.',
    'before'               => 'Має бути дата раніше :date.',
    'before_or_equal'      => 'Має бути дата раніше або дорівнює :date.',
    'between'              => [
        'array'   => 'Вміст повинен містити між :min та :max елементів.',
        'file'    => 'Файл повинен бути від :min до :max кілобайт.',
        'numeric' => 'Значення повинно бути між :min та :max.',
        'string'  => 'Рядок повинен бути між :min та :max символами.',
    ],
    'boolean'              => 'Поле має бути істинним або хибним.',
    'confirmed'            => 'Підтвердження не збігається.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Не є допустимою датою.',
    'date_equals'          => 'Повинна бути дата, що дорівнює :date.',
    'date_format'          => 'Не відповідає формату :format.',
    'different'            => 'Значення повинно відрізнятися від :other.',
    'digits'               => 'Повинно бути: :digits цифр.',
    'digits_between'       => 'Повинно бути між :min та :max цифр.',
    'dimensions'           => 'Зображення має недійсні розміри.',
    'distinct'             => 'Поле має повторюване значення.',
    'email'                => 'Має бути дійсною адресою електронної пошти.',
    'ends_with'            => 'Має закінчуватися одним із наступних: :values.',
    'exists'               => 'Вибране значення недійсне.',
    'file'                 => 'Вміст повинен бути файлом.',
    'filled'               => 'Обовязково для заповнення.',
    'gt'                   => [
        'array'   => 'Зміст повинен бути більш ніж :value елементів.',
        'file'    => 'Розмір файлу повинен бути більше :value кілобайт.',
        'numeric' => 'Значення повинно бути більше, ніж :value.',
        'string'  => 'Рядок повинен бути більшим за :value значення.',
    ],
    'gte'                  => [
        'array'   => 'Вміст повинен містити :value елементів або більше.',
        'file'    => 'Розмір файлу повинен бути більшим або рівним :value кілобайт.',
        'numeric' => 'Значення повинно бути більше або рівне :value.',
        'string'  => 'Рядок повинен бути більшим або рівним :value значення.',
    ],
    'image'                => 'Має бути зображення.',
    'in'                   => 'Вибране значення є недійсним.',
    'in_array'             => 'Значення не існує в :other.',
    'integer'              => 'Має бути цілим числом.',
    'ip'                   => 'Має бути дійсним IP-адресою.',
    'ipv4'                 => 'Має бути дійсним IPv4-адресою.',
    'ipv6'                 => 'Має бути дійсним IPv6-адресою.',
    'json'                 => 'Має бути дійсним JSON рядок.',
    'lt'                   => [
        'array'   => 'Вміст повинен містити менше :value елементів.',
        'file'    => 'Розмір файлу повинен бути менше :value кілобайт.',
        'numeric' => 'Значення повинно бути менше :value.',
        'string'  => 'Рядок повинен бути менше, ніж :value символів.',
    ],
    'lte'                  => [
        'array'   => 'Вміст повинен містити :value елементів або більше.',
        'file'    => 'Розмір файлу повинен бути меншим або рівним :value кілобайт.',
        'numeric' => 'Значення повинно бути менше або рівне :value.',
        'string'  => 'Рядок повинен бути більшим або рівним :value значення.',
    ],
    'max'                  => [
        'array'   => 'Вміст повинен містити :value елементів або більше.',
        'file'    => 'Розмір файлу повинен бути меншим або рівним :value кілобайт.',
        'numeric' => 'Значення повинно бути менше або рівне :value.',
        'string'  => 'Рядок повинен бути більшим або рівним :value значення.',
    ],
    'mimes'                => 'Повинен бути файл типу: :values.',
    'mimetypes'            => 'Повинен бути файл типу: :values.',
    'min'                  => [
        'array'   => 'Значення повинно мати не менше :min елементів.',
        'file'    => 'Розмір файлу повинен бути не менше :min кілобайт.',
        'numeric' => 'Значення має бути, щонайменше :min.',
        'string'  => 'У рядку має бути не менше :min символів.',
    ],
    'multiple_of'          => 'Це поле повинно містити декілька :value',
    'not_in'               => 'Вибране значення недійсне.',
    'not_regex'            => 'Формат недійсний.',
    'numeric'              => 'Повинно бути число.',
    'password'             => 'Неправильний пароль.',
    'present'              => 'Поле повинне бути присутнім.',
    'prohibited'           => 'Це поле заборонено.',
    'prohibited_if'        => 'Це поле заборонено, коли :other дорівнює :value.',
    'prohibited_unless'    => 'Це поле заборонено, якщо тільки :other не знаходиться в :values році.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Формат недійсний.',
    'relatable'            => 'Це поле може бути не пов\'язане з даним ресурсом.',
    'required'             => 'Це поле є обовязковим.',
    'required_if'          => 'Це поле обовязкове коли :other є :value.',
    'required_unless'      => 'Це поле обовязковим, якщо :other інше не вказано у :values.',
    'required_with'        => 'Це поле обовязкове коли :values є.',
    'required_with_all'    => 'Це поле обовязкове коли :values присутні.',
    'required_without'     => 'Це поле обовязкове, коли :values значень немає.',
    'required_without_all' => 'Це поле обовязковим, коли немає жодного з :values присутні.',
    'same'                 => 'Значення цього поля має відповідати значенню від :other.',
    'size'                 => [
        'array'   => 'Вміст повинен містити :size елементів.',
        'file'    => 'Розмір файлу повинен бути :size кілобайт.',
        'numeric' => 'Значення повинно бути :size.',
        'string'  => 'У рядку має бути :size символів.',
    ],
    'starts_with'          => 'Повинно починатися з одного з наступних умов: :values.',
    'string'               => 'повинна бути рядком.',
    'timezone'             => 'Має бути дійсною зоною.',
    'unique'               => 'Вже було взято.',
    'uploaded'             => 'Не вдалося завантажити.',
    'url'                  => 'Цей формат недійсний.',
    'uuid'                 => 'Має бути дійсним UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
