<?php

class AdminController extends SBaseController
{
	#public $layout = '/';

	public function accessRules()
    {
		return array(
				array('allow', 'expression'=>array($this, 'authIdentify')),  	
				array('deny', 'users'=>array('*')),
		);
	}


	public function actionIndex(){
		$this->render('index');	
	}


	//用户列表
	public function actionUserList(){
		$model=new UserInfoForm;
        $dataProvider=new CActiveDataProvider('UserInfoRecord', array('pagination'=>array('pageSize'=>2))); 
		$this->render('list', array('dataProvider'=>$dataProvider));
	}
	
	//添加用户
	public function actionAddUser(){
		if(Yii::app()->request->isAjaxRequest){
			$model=new UserInfoForm;	
			$model->attributes=$_POST;
			if($model->validate() && $model->save()){
				echo '<font color="green">success add user</font>';
			}else{
				$error = Yii::app()->user->getFlash('error');
				echo sprintf('<font color="red">%s</font>', $error);
			}
		}else{
			$this->render('addUser');
		}
	}


	//更新用户资料
	public function actionUpdateUser(){
		if(Yii::app()->request->isAjaxRequest){
			$model=new UserInfoForm;	
			$model->attributes=$_POST;
			if($model->validate() && $model->update()){
				echo '<font color="green">success add user</font>';
			}else{
				$error = Yii::app()->user->getFlash('error');
				echo sprintf('<font color="red">%s</font>', $error);
			}
		}else{
			$this->render('addUser');
		}
	}

}
