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
        $dataProvider=new CActiveDataProvider('UserInfoRecord', array('pagination'=>array('pageSize'=>10))); 
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
	public function actionUpdate(){
		$model=new UserInfoForm;	
		if(Yii::app()->request->isAjaxRequest){
			$model->attributes=$_POST;
			if($model->validate() && $model->update()){
				echo '<font color="green">success update user</font>';
			}else{
				echo sprintf('<font color="red">update error</font>', $error);
			}
		}else{
			$userone = UserInfoRecord::model()->find('u_id=?', array($_GET['id']));	
			$this->render('updateUser', array('user'=>$userone));
		}
	}


	//删除用户
	public function actionDelete(){
		$res=UserInfoRecord::model()->deleteAll('u_id=?', array($_GET['id']));
		if($res){
			echo '删除成功';
		}else{
			echo '删除失败';
		}
	}

}
