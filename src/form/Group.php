<?php
namespace xqkeji\app\member\form;
use xqkeji\form\TabForm;
class Group extends TabForm
{
	protected $name = 'group';
	public function beforeBind()
	{
		$controller=\xqkeji\App::getController();
		$actionName=$controller->getActionName();
		$data=$this->getData();
		
		if(!isset($data['status']))
		{
			$data['status']=0;
		}
		if(!isset($data['auth']))
		{
			$data['auth']=[];
		}
		$this->setData($data);
	}
	protected $el=[
		[
			'$tab',
			'name'=>'group_info',
			'text'=>'基本信息',
			'el'=>[
				[	
					'@Name',
					'text'=>'用户组名称',
					'name'=>'groupname',
				],
				[	
					'@Desc',
					'text'=>'用户组描述',
				],
				'@SwitchCheck',
			],
		],
		[
			'$tab',
			'name'=>'group_auth',
			'text'=>'用户组权限',
			'el'=>[
				'@auth',
				'@Csrf',
			],
		],
		'@SubmitReset',
	];
}

