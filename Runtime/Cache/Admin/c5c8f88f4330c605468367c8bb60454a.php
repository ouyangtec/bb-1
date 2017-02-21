<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Super Admin</title>
            
        <!-- CSS -->
        <link href="/wang/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/animate.min.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/form.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/calendar.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/style.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/icons.css" rel="stylesheet">
        <link href="/wang/Public/Admin/css/generics.css" rel="stylesheet"> 
		<script src="/wang/Public/Admin/js/jquery.min.js"></script> <!-- jQuery Library -->
        <script src="/wang/Public/Admin/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
        <script src="/wang/Public/Admin/js/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->
        <!-- Bootstrap -->
        <script src="/wang/Public/Admin/js/bootstrap.min.js"></script>
        <!-- Charts -->
        <script src="/wang/Public/Admin/js/charts/jquery.flot.js"></script> <!-- Flot Main -->
        <script src="/wang/Public/Admin/js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
        <script src="/wang/Public/Admin/js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
        <script src="/wang/Public/Admin/js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->
        <script src="/wang/Public/Admin/js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
        <script src="/wang/Public/Admin/js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="/wang/Public/Admin/js/charts.js"></script> <!-- All the above chart related functions -->
        <!-- Map -->
        <script src="/wang/Public/Admin/js/maps/jvectormap.min.js"></script> <!-- jVectorMap main library -->
        <script src="/wang/Public/Admin/js/maps/usa.js"></script> <!-- USA Map for jVectorMap -->
        <!--  Form Related -->
        <script src="/wang/Public/Admin/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        <!-- UX -->
        <script src="/wang/Public/Admin/js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        <!-- Other -->
        <script src="/wang/Public/Admin/js/calendar.min.js"></script> <!-- Calendar -->
        <script src="/wang/Public/Admin/js/feeds.min.js"></script> <!-- News Feeds -->
        <!-- All JS functions -->
        <script src="/wang/Public/Admin/js/functions.js"></script>
		<!--个人添加的-->
		<script type="text/javascript" src="/wang/Public/layer/layer.js"></script>
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.html">SUPER ADMIN 1.0</a>
            
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                        <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>

                    

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <img class="profile-pic animated" src="/wang/Public/Admin/img/profile-pic.jpg" alt="">
							
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">My Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="javascript:void(0);" onclick="lockscreen()"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>锁屏休息</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Settings</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="<?php echo U('Login/loginout');?>">退出后台</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0"><?php echo session('admin_username');?></h4>
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                    
                    <!-- Feeds -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                           News Feeds
                        </h2>
                        
                        <div class="s-widget-body">
                            <div id="news-feed"></div>
                        </div>
                    </div>
                    
                    <!-- Projects -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                            Projects on going
                        </h2>
                        
                        <div class="s-widget-body">
                            <div class="side-border">
                                <small>Joomla Website</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%">
                                          <span class="sr-only">60% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Opencart E-Commerce Website</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%">
                                          <span class="sr-only">43% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Social Media API</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-warning" style="width: 81%;" data-original-title="81%">
                                          <span class="sr-only">81% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>VB.Net Software Package</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 10%;" data-original-title="10%">
                                          <span class="sr-only">10% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Chrome Extension</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 95%;" data-original-title="95%">
                                          <span class="sr-only">95% Complete</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                   
					 <li class="dropdown">
                        <a class="sa-side-home" href="#">
                            <span class="menu-item">用户</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="<?php echo U('User/index');?>" >用户管理</a></li>
                            <li><a href="profile-page.html">Profile Page</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>	
					
                    <li>
                        <a class="sa-side-typography" href="typography.html">
                            <span class="menu-item">Typography</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-widget" href="content-widgets.html">
                            <span class="menu-item">Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-table" href="tables.html">
                            <span class="menu-item">Tables</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">Form</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-ui" href="">
                            <span class="menu-item">User Interface</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="labels.html">Labels</a></li>
                            <li><a href="images-icons.html">Images &amp; Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sa-side-chart" href="charts.html">
                            <span class="menu-item">Charts</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-folder" href="file-manager.html">
                            <span class="menu-item">File Manager</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-calendar" href="calendar.html">
                            <span class="menu-item">Calendar</span>
                        </a>
						
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-page" href="">
                            <span class="menu-item">Pages123</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="profile-page.html">Profile Page</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                </ul>

            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
            
                <!-- Messages Drawer -->
               
                <!-- Notification Drawer -->
           
                
                <!-- Breadcrumb -->
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                
                <h4 class="page-title">DASHBOARD</h4>


<script type="text/javascript" src="/wang/Public/layer/laydate/laydate.js"></script>
<div class="block-area" id="multi-column">
	<h3 class="block-title"><a href="<?php echo U('User/index');?>">用户管理</a></h3>
	<form id="form" class="row form-columned" role="form" action="<?php echo U('User/edit');?>" method="post">
		<label for="inputName1" class="col-md-1 control-label" style="text-align:center;">用户名：</label>                        
		<div class="col-md-4">
			<input type="text" class="form-control input-sm m-b-6" name="username" value="<?php echo ($data["username"]); ?>" placeholder="请输入用户名">
		</div>
		<br/><br/><br/>
		<div class="clearfix"></div>
		<label for="inputName1"  class="col-md-1 control-label" style="text-align:center;">密码：</label>  
		<div class="col-md-4">
			<input type="password" name="password" value="" class="form-control input-sm m-b-10" placeholder="请输入密码">
		</div>
		<br/><br/><br/>
		<div class="clearfix"></div>
		<label for="inputName1"  class="col-md-1 control-label" style="text-align:center;">手机号：</label>  
		<div class="col-md-4">
			<input type="text" name="mobles" value="<?php echo ($data["mobles"]); ?>" class="form-control input-sm m-b-10" placeholder="请输入手机号">
		</div>
		<br/><br/><br/>
		<div class="clearfix"></div>
		<label for="inputName1"  class="col-md-1 control-label" style="text-align:center;">邮箱：</label>  
		<div class="col-md-4">
			<input type="email" name="email" value="<?php echo ($data["email"]); ?>" class="form-control input-sm m-b-10" placeholder="请输入邮箱">
		</div>
		<div class="clearfix"></div>
		<div class="col-md-offset-2 col-md-10">
			<button type="submit"  id="submit" class="btn btn-info btn-sm m-t-10" data-form-sbm="1487055892077.3843">确定</button>
			 <a class="btn btn-info btn-sm m-t-10" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>"data-form-sbm="1487055892077.3843">取消</a>
                          
        </div>
	</form>
</div>
<script type="text/javascript">
	//进行表单的提交
	$('#submit').click(function(){
		$('#form').submit();
	});
</script>
        </section>
        </section>
    </body>
</html>