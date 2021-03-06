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

    'confirmed' => 'O campo :attribute não confere.',
    'digits_between' => 'O :attribute deve ter entre :min e :max digitos.',
    'email' => 'O campo :attribute deve ser um endereço de email válido.',
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'string' => 'O campo :attribute não deve conter mais que :max caracteres.',
    ],
    'min' => [
        'string' => 'O campo :attribute não deve conter menos que :min caracteres.',
    ],
    'no_space' => 'O campo :attribute não deve conter espaço.',
    'required' => 'O campo :attribute é requerido.',
    'required_without' => 'O campo :attribute é requerido quando o campo :values não está preenchido.',
    'string' => 'O :attribute deve se um texto.',
    'unique' => 'O :attribute já esta cadastrado.',


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
        'name' => 'nome',
        'user' => 'usuário',
        'password' => 'senha',
        'phone' => 'telefone',
        'license' => 'placa',
        'brand' => 'marca',
        'model' => 'modelo',
    ],

];
