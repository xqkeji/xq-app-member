<?php
namespace xqkeji\app\member\form;
use xqkeji\form\Form;
class UserLogin extends Form
{
    protected $name = 'user_login';
    protected $el=[
        '@Username',
        '@Password',
        '@Captcha',
        [
            '@SwitchCheck',
            'name'=>'remember',
            'text'=>'记住登录',
        ],
        '~FooterButton',
    ];
}
