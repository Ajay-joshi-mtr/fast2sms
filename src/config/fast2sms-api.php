<?php

return [

    'country_code' => '91', //Country code to be added
    'default' => env('SMS_API_DEFAULT_GATEWAY', 'fast2sms'), //Choose default gateway
    
//    Basic Gateway Sample Configuration
    'fast2sms' => [
        'method' => 'GET', //Choose Request Method (GET/POST) Default:GET
        'url' => 'BaseUrl', //Base URL
        'params' => [
            'send_to_param_name' => '', //Send to Parameter Name
            'msg_param_name' => '', //Message Parameter Name
            'others' => [
                'param1' => '',
                'param2' => '',
                'param3' => '',
                //More params can be added
            ],
        ],
        'headers' => [
            'header1' => '',
            'header2' => '',
            //More headers can be added
        ],
        'add_code' => true, //Include Country Code (true/false)
    ],   

];