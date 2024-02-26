<?php
return [
    'form',
    [
        'template'=>'default',
        [
            'import'=>'email',
            'name'=>'username',
            'validators'=>[
                ['required'],
                ['email'],
                ['unique'],
            ],
        ],
        'Password',
        'ConfirmPassword',
        'Captcha',
        'Emailcode',
    ],
    'foot'=>'RegFoot'
];