<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Billcode & BillcodeDetails
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using billcode.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */

    'billcode' => [
        'config_key'    => '12345:123456:edc788a4316ce7e2ac0ede037aa623d7',
        'api_url'       => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Ideal & IdealBank
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using ideal.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */

    'ideal' => [
        'config_key'    => '12345:123456:edc788a4316ce7e2ac0ede037aa623d7',
        'password'      => '',
        'hash_function' => 'sha1',
    ],

    /*
    |--------------------------------------------------------------------------
    | Paycode & PaycodeDetails
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using paycode.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */
    'paycode' => [
        'config_key'    => '12345:123456:edc788a4316ce7e2ac0ede037aa623d7',
        'api_url'       => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sofortüberweisung
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using sofortüberweisung.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */
    'sofortueberweisung' => [
        'config_key'    => '168068:483739:b6a6d45d360835ed4dc8b02ecc3d175c',
    ],

    /*
    |--------------------------------------------------------------------------
    | Refund
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using refund.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */
    'refund' => [
        'config_key'    => '12345:123456:edc788a4316ce7e2ac0ede037aa623d7',
        'api_url'       => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | TransactionData
    |--------------------------------------------------------------------------
    |
    | Here you may provide the configuration key for the SOFORT API when using transactiondata.
    |
    | Note: The 'config_key' provided with this installation is not valid and is just
    | for demonstration purposes. Please enter your personal code.
    |
    */
    'transactiondata' => [
        'config_key'    => '12345:123456:edc788a4316ce7e2ac0ede037aa623d7',
        'api_url'       => '',
    ],

];