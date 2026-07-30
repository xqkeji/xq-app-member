<?php
namespace xqkeji\app\member\table;
use xqkeji\form\Table;
class Group extends Table
{
	protected $name = 'list_group';
	protected $foot='ListFoot';
	protected $el=[
		'@Id',
		[
			'@Name',
			'name'=>'groupname',
			'text'=>'用户组名称',
			'attrs'=>[
				'style'=>'min-width:120px;',
			],
		],
		[
			'@Desc',
			'name'=>'desc',
			'text'=>'描述',
			'attrs'=>[
				'style'=>'min-width:200px;',
			],
		],
		'@Switch',
		'@CreateTime',
		'@UpdateTime',
		'@EditDelete',
	];
}
