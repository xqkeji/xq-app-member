<?php
namespace xqkeji\app\member\table;
use xqkeji\form\Table;
class ListGroup extends Table
{
	protected $name = 'list_group';
	protected $foot='ListFoot';
	protected $el=[
		'@ListId',
		[
			'@ListName',
			'name'=>'groupname',
			'text'=>'用户组名称',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		[
			'@ListDesc',
			'name'=>'desc',
			'text'=>'描述',
			'attrs'=>[
				'style'=>'min-width:200px;',
			],
		],
		'@ListSwitch',
		'@ListCreateTime',
		'@ListUpdateTime',
		'@ListEditDelete',
	];
}
