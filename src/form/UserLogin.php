<?php
return [
    'form',
    [
        'template'=>'default',
        [
            'import'=>'email',
            'name'=>'username',
        ],
        'Password',
        'Captcha',
        [
            'import'=>'switch',
            'name'=>'remember',
            'text'=>'记住登录',
        ]
    ],
    'foot'=>'LoginFoot'
];