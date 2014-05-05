<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	const ERROR_USERNAME_OR_PASSWORD_INVALID=89;
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record = UserInfoRecord::model()->find($this->authenticationLogin());		
		if(!$record){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}else{
			
			$this->_id=$record->u_id;
			$this->setState('username', $record->username);
			$this->setState('real_name', $record->real_name);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId(){
		return $this->_id;
	}	
	

	/*
	 * 验证登录 
	 */ 
	public function authenticationLogin(){
		$criteria=new CDbCriteria; 
		$criteria->select=array('u_id', 'username', 'real_name');  
		$criteria->condition='username=:username AND password=:password'; 
		$criteria->params=array(':username'=>$this->username, ':password'=>md5($this->password.Yii::app()->name));
		return $criteria;
	}

}
