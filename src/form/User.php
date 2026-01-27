<?php
namespace xqkeji\app\member\form;
use xqkeji\form\TabForm;
class User extends TabForm
{
	protected $name = 'user';
	protected $el=[
		[
			'$tab',
			'name'=>'user_info',
			'text'=>'基本信息',
			'el'=>[
				'@Username',
				'@Password',
				'@ConfirmPassword',
				[	
					'@Fullname',
					'text'=>'姓名',
				],
				'@SwitchCheck',
				'@Roles',
			],
		],
		[
			'$tab',
			'name'=>'user_auth',
			'text'=>'授权信息',
			'el'=>[
				'@Auth',
				'@Csrf',
			],
		],
		'@SubmitReset',
	];
	public function beforeBind()
	{
		$controller=\xqkeji\App::getController();
		$actionName=$controller->getActionName();
		$data=$this->getData();
		if($actionName=='edit')
		{
			if(empty($data['password']))
			{
				unset($data['password']);
			}
			if(empty($data['confirm_password']))
			{
				unset($data['confirm_password']);
			}
		}
		if(!isset($data['status']))
		{
			$data['status']=0;
		}
		if(!isset($data['roles']))
		{
			$data['roles']=[];
		}
		if(!isset($data['auth']))
		{
			$data['auth']=[];
		}
		$this->setData($data);
	}
}
