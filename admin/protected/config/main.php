<?php
$YITIAN_WEB_BASE_DIR = realpath(dirname(__FILE__).'/../../../');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('lib',$YITIAN_WEB_BASE_DIR.'/lib');
$db_config = require_once($YITIAN_WEB_BASE_DIR.'/conf/db_config.php');
$import_config = require_once($YITIAN_WEB_BASE_DIR.'/conf/import_config.php');
$components_config = require_once($YITIAN_WEB_BASE_DIR.'/conf/components_config.php');
//Yii::setPathOfAlias('bootstrap', $YITIAN_WEB_BASE_DIR.'/lib/extensions/yii-bootstrap-2.1.0.r355');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'YITIAN',

	//默认控制器
	'defaultController'=>'site/login',	

    // preloading 'log' component
    'preload'=>array('log'),

    // autoloading model and component classes
    'import'=>$import_config,

    'modules'=>array(
        // uncomment the following to enable the Gii tool
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'gii',
            'ipFilters' => array('*'),
        ),

		'srbac' => array(
			'userclass'=>'UserInfoRecord', //default: User
			'userid'=>'u_id', //default: userid
			'username'=>'username', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>false, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Authority', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>
			'application.views.layouts.main', //default: application.views.layouts.main,
			'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
			'alwaysAllowed'=>array( //default: array()
				'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
				'SiteError', 'SiteContact'),
			'userActions'=>array('Show','View','List'), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10 
			'imagesPath' => 'srbac.images', // default: srbac.images 
			'imagesPack'=>'noia', //default: noia 
			'iconText'=>true, // default : false 
			'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,must be an existing alias 
			'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			'showHeader'=>true, // default: false 
			'showFooter'=>true, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			),
    ),

    // application components
    'components'=>array(
        'user'=>$components_config['user'],
        //'statePersister' => $components_config['statePersister'],
                // uncomment the following to enable URLs in path-format
        'db' => $db_config['admin'],
		'authManager'=>$components_config['authManager'],

        'errorHandler'=>$components_config['errorHandler'],

        'log'=>$components_config['log'],
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
);                                                                             
