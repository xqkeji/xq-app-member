<?php
namespace xqkeji\app\member\form;
use xqkeji\form\Form;
class UserReg extends Form
{
    protected $name = 'user_reg';
    protected $el=[
        '@Username',
        '@Password',
        '@ConfirmPassword',
        '@Captcha',
        '@Emailcode',
        [
            '~LoginButton',
            'attrs'=>[
                'value'=>'注册',
            ],
        ]
    ];
}
