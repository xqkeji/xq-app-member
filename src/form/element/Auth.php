<?php
namespace xqkeji\app\member\form\element;
use xqkeji\form\element\Auth as BaseAuth;
class Auth extends BaseAuth
{
	protected $name = 'auth';
	protected $text = '权限';
	protected $type = 'member';
	protected $attrs = [
		'class' => 'form-control',
	];
	protected $template = '@auth';
}
