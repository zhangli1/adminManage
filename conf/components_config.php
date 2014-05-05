<?php
return array(
	'user'=>array(
		// enable cookie-based authentication
		'allowAutoLogin'=>true,
		'stateKeyPrefix' => 'yitain_id_dev',
		//'loginUrl' =>'./index.php',
	),
	'statePersister' => array(
		'stateFile' => $YITIAN_WEB_BASE_DIR.'/admin/protected/runtime/state.bin',
	),
	'errorHandler'=>array(
		// use 'site/error' action to display errors
		'errorAction'=>'site/error',
	),

	//RBAC
	'authManager'=>array(
	   #'class'=>'srbac.components.SDbAuthManager',
	   'class'=>'CDbAuthManager',
	   'connectionID'=>'db',
	   'itemTable'=>'AuthItem',
	   'assignmentTable'=>'AuthAssignment',
	   'itemChildTable'=>'AuthItemChild',
	),

	
	'log'=>array(
		'class'=>'CLogRouter',
		'routes'=>array(
			array(
				'class'=>'CWebLogRoute',
				'levels'=>'trace,info,error,warning,xdebug',
				'showInFireBug'=>true
        	),
         	array(
				'class' => 'CWebLogRoute',
				'levels' => 'trace', //级别为trace
				'categories' => 'system.db.*' //只显示关于数据库信息,包括数据库连接,数据库执行语句
            ),
			array(
				'class'=>'CFileLogRoute',
				'levels'=>'error, warning',
				'categories' => 'system',
				'logPath' => $YITIAN_WEB_BASE_DIR.'/logs/',
				'logFile' => 'system.log',
			),
			array(
				'class'=>'CFileLogRoute',
				'levels'=>'error',
				'categories' => 'application',
				'logPath' => $YITIAN_WEB_BASE_DIR.'/logs/',
				'logFile' => 'error.log',
			),
			array(
				'class'=>'CFileLogRoute',
				'levels'=>'info',
				'categories' => 'application',
				'logPath' => $YITIAN_WEB_BASE_DIR.'/logs/',
				'logFile' => 'info.log',
			),
			array(
				'class'=>'CFileLogRoute',
				'levels'=>'debug, trace',
				'categories' => 'application.*',
				'logPath' => $YITIAN_WEB_BASE_DIR.'/logs/',
				'logFile' => 'debug.log',
			),
		
		),
	),
	
);
                                                 
