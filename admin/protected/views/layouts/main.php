<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin Template by www.865171.cn</title>
<meta name="description" content="Administry - Admin Template by www.865171.cn" />
<meta name="keywords" content="Admin,Template" />
<!-- We need to emulate IE7 only when we are to use excanvas -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<![endif]-->
<!-- Favicons --> 
<link rel="shortcut icon" type="image/png" HREF="<?php echo Yii::app()->baseUrl; ?>/images/favicons/favicon.png"/>
<link rel="icon" type="image/png" HREF="<?php echo Yii::app()->baseUrl; ?>/images/favicons/favicon.png"/>
<link rel="apple-touch-icon" HREF="<?php echo Yii::app()->baseUrl; ?>/images/favicons/apple.png" />
<!-- Main Stylesheet --> 
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" type="text/css" />
<!-- Colour Schemes
Default colour scheme is blue. Uncomment prefered stylesheet to use it.
<link rel="stylesheet" href="css/brown.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/gray.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/green.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/pink.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/red.css" type="text/css" media="screen" />
-->
<!-- Your Custom Stylesheet --> 
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/custom.css" type="text/css" />
<!--swfobject - needed only if you require <video> tag support for older browsers -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/swfobject.js"></script>
<!-- jQuery with plugins -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.4.2.min.js"></script>
<!-- Could be loaded remotely from Google CDN : <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.ui.core.min.js"></script>
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.ui.tabs.min.js"></script>
<!-- jQuery tooltips -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.tipTip.min.js"></script>
<!-- Superfish navigation -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.superfish.min.js"></script>
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.supersubs.min.js"></script>
<!-- jQuery form validation -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.validate_pack.js"></script>
<!-- jQuery popup box -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.nyroModal.pack.js"></script>
<!-- jQuery graph plugins -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/jquery.sparkline.min.js"></script>
<!--[if IE]><script type="text/javascript" src="js/flot/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/flot/jquery.flot.selection.min.js"></script>
<!-- Internet Explorer Fixes --> 
<!--[if IE]>
<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
<script src="js/html5.js"></script>
<![endif]-->
<!--Upgrade MSIE5.5-7 to be compatible with MSIE8: http://ie7-js.googlecode.com/svn/version/2.1(beta3)/IE8.js -->
<!--[if lt IE 8]>
<script src="js/IE8.js"></script>
<![endif]-->
<script type="text/javascript">
//$(document).ready(function(){
	
	/* setup navigation, content boxes, etc... */
//	Administry.setup();
	
	/* sparklines */
/*	var _values = [0,3,3,2,0,1,5,7,5,5,0,6,4,6,3,6,14,8,2,9,2,6,9,3,6,5,7,1,7,7,0];
	$('#sparkline1').sparkline(_values, {type: 'bar', barColor: '#A8B2AC', zeroColor: '#DBE6DF', barWidth: 2, barSpacing: 0} );
$('#sparkline2').sparkline(_values); */
	
	/* flot graphs */
  /*  var d1 = [];
    for (var i = 0; i < 14; i += 0.5)
        d1.push([i, Math.sin(i)]);

    var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

    var d3 = [];
    for (var i = 0; i < 14; i += 0.5)
        d3.push([i, Math.cos(i)]);

    var d4 = [];
    for (var i = 0; i < 14; i += 0.1)
        d4.push([i, Math.sqrt(i * 10)]);
    
    var d5 = [];
    for (var i = 0; i < 14; i += 0.5)
        d5.push([i, Math.sqrt(i)]);

    var d6 = [];
    for (var i = 0; i < 14; i += 0.5 + Math.random())
        d6.push([i, Math.sqrt(2*i + Math.sin(i) + 5)]);
                        
    $.plot($("#placeholder"), [
        {
            data: d1,
            lines: { show: true, fill: true }
        },
        {
            data: d2,
            bars: { show: true }
        },
        {
            data: d3,
            points: { show: true }
        },
        {
            data: d4,
            lines: { show: true }
        },
        {
            data: d5,
            lines: { show: true },
            points: { show: true }
        },
        {
            data: d6,
            lines: { show: true, steps: true }
        }
    ]); 
	
	var fh_data = [
	{
		label: 'max',
		data: [[1267873200 * 1000, 2],[1267959600 * 1000, 2],[1268046000 * 1000, 2],[1268132400 * 1000, 3],[1268218800 * 1000, 3],[1268305200 * 1000, 3],[1268391600 * 1000, 3],[1268478000 * 1000, 5],[1268564400 * 1000, 7],[1268650800 * 1000, 4],[1268737200 * 1000, 7],[1268823600 * 1000, 7],[1268910000 * 1000, 12],[1268996400 * 1000, 14],[1269082800 * 1000, 16],[1269169200 * 1000, 18],[1269255600 * 1000, 14],[1269342000 * 1000, 15],[1269428400 * 1000, 17],[1269514800 * 1000, 18],[1269601200 * 1000, 20],[1269687600 * 1000, 16],[1269774000 * 1000, 14],[1269856800 * 1000, 17],[1269943200 * 1000, 19],[1270029600 * 1000, 15],[1270116000 * 1000, 16],[1270202400 * 1000, 13],[1270288800 * 1000, 16],[1270375200 * 1000, 19],[1270461600 * 1000, 13],[1270548000 * 1000, 14],[1270634400 * 1000, 15]]
	},
	{
		label: 'min',
		data: [[1267873200 * 1000, -3],[1267959600 * 1000, -3],[1268046000 * 1000, -2],[1268132400 * 1000, -2],[1268218800 * 1000, 0],[1268305200 * 1000, 0],[1268391600 * 1000, -2],[1268478000 * 1000, 0],[1268564400 * 1000, 2],[1268650800 * 1000, 0],[1268737200 * 1000, -1],[1268823600 * 1000, 2],[1268910000 * 1000, 4],[1268996400 * 1000, 6],[1269082800 * 1000, 9],[1269169200 * 1000, 11],[1269255600 * 1000, 9],[1269342000 * 1000, 9],[1269428400 * 1000, 8],[1269514800 * 1000, 10],[1269601200 * 1000, 11],[1269687600 * 1000, 7],[1269774000 * 1000, 6],[1269856800 * 1000, 9],[1269943200 * 1000, 11],[1270029600 * 1000, 7],[1270116000 * 1000, 7],[1270202400 * 1000, 5],[1270288800 * 1000, 6],[1270375200 * 1000, 9],[1270461600 * 1000, 8],[1270548000 * 1000, 5],[1270634400 * 1000, 7]]
	}
	];
	function weekendAreas(plotarea) {
		var areas = [];
		var d = new Date(plotarea.xmin);
		// go to the first Saturday
		d.setDate(d.getDate() - ((d.getDay() + 1) % 7))
		d.setSeconds(0);
		d.setMinutes(0);
		d.setHours(0);
		var i = d.getTime();
		do {
			areas.push({ x1: i, x2: i + 2 * 24 * 60 * 60 * 1000 });
			i += 7 * 24 * 60 * 60 * 1000;
		} while (i < plotarea.xmax);

		return areas;
	}
	function showTooltip(x, y, contents) {
		$('<div id="hovertip">' + contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 15,
			border: '2px solid #666',
			padding: '4px',
			'background-color': '#fff',
			opacity: 0.9,
			color: '#666',
			fontSize: '13px'
		}).appendTo("body").fadeIn('fast');
	}
	
	var options = {
		lines: { show: true, lineWidth: 3 },
		points: { show: true },
		legend: { noColumns: 2, position: "se"*/ /*, container: '#flot-legend'*/ },
/*		yaxis: { min: -25, max: 25 },
		xaxis: { mode: "time", timeformat: "%d %b", monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"] },
		selection: { mode: "x" },
		grid: { color: "#666", coloredAreas: weekendAreas, hoverable: true },
		colors: ["#E92424", "#75C5F0"]			
	};
	
	var plot = $.plot($("#flotPlaceholder"), fh_data, options);
	
	$("#flotPlaceholder").bind("selected", function (event, area) {
		plot = $.plot($("#flotPlaceholder"), fh_data,
			  $.extend(true, {}, options, {
				  xaxis: { min: area.x1, max: area.x2 }
			  }));
		$('#clearSelection').show();
	});
	var previousPoint = null;
	$("#flotPlaceholder").bind("plothover", function (event, pos, item) {
		if (item) {
			if (previousPoint != item.datapoint) {
				previousPoint = item.datapoint;
				
				$("#hovertip").remove();
				var y = item.datapoint[1];
				
				showTooltip(item.pageX, item.pageY, y + '°C');
			}
		}
		else {
			$("#hovertip").remove();
			previousPoint = null;            
		}
	});
	$("#clearSelection").click(function () {
		$.plot($("#flotPlaceholder"), fh_data, options);
		$('#clearSelection').hide();
	});

}); */

</script>
</head>
<body>
	<!-- Header -->
	<header id="top">
		<div class="wrapper">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" alt="Administry" /><!--<span>Administry</span> demo--></div>
			<!-- Top navigation -->
			<div id="topnav">
				<a href="#"><img class="avatar" SRC="<?php echo Yii::app()->baseUrl; ?>/images/user_32.png" alt="" /></a>
				Logged in as <b>Admin</b>
				<span>|</span> <a href="#">Settings</a>
				<span>|</span> <a href="<?php echo Yii::app()->createUrl('site/logout')?>">Logout</a><br />
				<small>You have <a href="#" class="high"><b>1</b> new message!</a></small>
			</div>
			<!-- End of Top navigation -->
			<!-- Main navigation -->
			<nav id="menu">
<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'sf-menu'),
			'items'=>array(
				array('label'=>'home', 'url'=>array('/admin/index'),
					'items'=>array(
						array('label'=>'auth manage', 'url'=>array('/srbac')),
						array('label'=>'user manage', 'url'=>array('/admin/user'),
							'items'=>array(
								array('label'=>'user list', 'url'=>array('/admin/userList')),
								array('label'=>'add user', 'url'=>array('/admin/addUser')),
								array('label'=>'update user', 'url'=>array('/admin/updateUser')),
								array('label'=>'del user', 'url'=>array('/admin/delUser')),
							),
						),
					),
				),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
			
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			<aside><b>English</b> &middot; <a href="#">Spanish</a> &middot; <a href="#">German</a></aside>
			<!-- End of Aside links -->
		</div>
	</header>

	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
		<h1><?php echo $this->getAction()->getId(); ?></h1>
			<!-- Quick search box -->
			<form action="" method="get"><input class="" type="text" id="q" name="q" /></form>
		</div>
	</div>
	<!-- End of Page title -->


	
	<?php echo $content; ?>

	<!-- Page footer -->
	<footer id="bottom">
		<div class="wrapper">
			<nav>
				<a href="#">Dashboard</a> &middot;
				<a href="#">Content</a> &middot;
				<a href="#">Reports</a> &middot;
				<a href="#">Users</a> &middot;
				<a href="#">Media</a> &middot;
				<a href="#">Events</a> &middot;
				<a href="#">Newsletter</a> &middot;
				<a href="#">Settings</a>
			</nav>
			<p>Copyright &copy; 2010 <b><a HREF="http://www.865171.cn" title="www.865171.cn">www.865171.cn</a></b> | Icons by <a HREF="http://www.865171.cn">865171.cn</a></p>
		</div>
	</footer>
	<!-- End of Page footer -->
	<!-- Animated footer -->
	<footer id="animated">
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Content</a></li>
			<li><a href="#">Reports</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Media</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Newsletter</a></li>
			<li><a href="#">Settings</a></li>
		</ul>
	</footer>
	<!-- End of Animated footer -->
	
	<!-- Scroll to top link -->
	<a href="#" id="totop">^ scroll to top</a>

<!-- User interface javascript load -->
<script type="text/javascript" SRC="<?php echo Yii::app()->baseUrl; ?>/js/administry.js"></script>
</body>
</html>
