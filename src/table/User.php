<?php
namespace xqkeji\app\member\table;
use xqkeji\form\Table;
class User extends Table
{
	protected $name = 'list_user';
	protected $foot='@FootOnlyDelete';
	protected $el=[
		'@Id',
		[
			'@Name',
			'name'=>'nickname',
			'text'=>'用户昵称',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		[
			'@Name',
			'name'=>'username',
			'text'=>'手机号码',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@Switch',
		[
			'@Name',
			'text'=>'登录次数',
			'name'=>'login_counts',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@LoginTime',
		[
			'@Name',
			'text'=>'登录IP',
			'name'=>'login_ip',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@EditDelete',
	];
}

