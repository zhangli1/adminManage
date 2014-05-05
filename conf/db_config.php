<?php

//数据库配置文件

return array(
	'admin'=>array(
			'class'=>'system.db.CDbConnection',
			'connectionString' => 'mysql:host=127.0.0.1;dbname=admin',
			'emulatePrepare' => true,
			'username' => 'zhangli',
			'password' => 'zhangli',
			'charset' => 'utf8',
    ),
);
