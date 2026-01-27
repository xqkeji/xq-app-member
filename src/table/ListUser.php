<?php
namespace xqkeji\app\member\table;
use xqkeji\form\Table;
class ListUser extends Table
{
	protected $name = 'list_user';
	protected $foot='@ListFootOnlyDelete';
	protected $el=[
		'@ListId',
		[
			'@ListName',
			'name'=>'nickname',
			'text'=>'用户昵称',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		[
			'@ListName',
			'name'=>'username',
			'text'=>'手机号码',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@ListSwitch',
		[
			'@ListName',
			'text'=>'登录次数',
			'name'=>'login_counts',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@ListLoginTime',
		[
			'@ListName',
			'text'=>'登录IP',
			'name'=>'login_ip',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		'@ListEditDelete',
	];
}

