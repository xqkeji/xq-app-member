<?php
namespace xqkeji\app\member\form;
use xqkeji\form\Form;
class UserReset extends Form
{
    protected $name = 'user_reset';
    protected $el=[
        '@Username',
        '@Password',
        '@ConfirmPassword',
        '@Captcha',
        '@Emailcode',
        [
            '~FooterButton',
            'attrs'=>[
                'value'=>'重置密码',
            ],
        ]
    ];
}

