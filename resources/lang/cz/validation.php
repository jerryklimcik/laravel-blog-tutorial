<?php
return [
    'required' => 'Pole :attribute je povinné',


    'custom' => [
        'email' => [
            'required' => 'Emailová adresa musí být vyplněna',
            'email'    => 'Musí být uveden správný formát emailu',
        ],
    ],

    'attributes' => [
        'name'    => 'jméno',
        'message' => 'zpráva',
    ],
];