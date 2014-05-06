<?php

class UserInfoForm extends CFormModel{

	public $u_id;
	public $username;
	public $password;
	public $password_confirm;
	public $real_name;
	

	public function rules()
	{
		return array(
			array('username, password, real_name', 'required'),
			array('username', 'length', 'max'=>50),
			array('password', 'length', 'max'=>33),
			array('password_confirm', 'compare', 'compareAttribute'=>'password'),
			array('real_name', 'length', 'max'=>45),
			array('u_id, username, password, real_name, password_confirm', 'safe'),
		);
	}


	//保存
	public function save(){
		$model=new UserInfoRecord;
		$model->attributes=$this->getAttributes();
		$model->password=md5($model->attributes['password'].Yii::app()->name);
		if($model->save()>0){
			return true;
		}
		$this->setFirstError($model);
		return false;	
	}	


	public function update(){
		$model=new UserInfoRecord;
		$model->attributes=$this->getAttributes();
		$model->password=md5($this->password.Yii::app()->name);
		$model->u_id = (int)($this->u_id);
		$res=UserInfoRecord::model()->updateAll($model->attributes, 'u_id=:u_id', array(':u_id'=>(int)($this->u_id)));
		if($res){
			return true;
		}
		return false;	
	}


	public function setFirstError($model){
		$error=$model->getErrors();
		foreach($error as $k=>$v){
			$errorContent = $v[0];
		}
		Yii::app()->user->setFlash('error', $errorContent);
	}
}
