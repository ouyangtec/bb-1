<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html lang="en" class="no-js"> 
<head>

	<meta charset="utf-8" />

	<title>网站后台</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/wangq/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/wangq/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="/wangq/Public/Admin/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="/wangq/Public/Admin/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="/wangq/Public/Admin/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="/wangq/Public/Admin/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/wangq/Public/Admin/image/favicon.ico" />
		<!-- BEGIN CORE PLUGINS -->

	<script src="/wangq/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/wangq/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/wangq/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/wangq/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/wangq/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/wangq/Public/Admin/js/jquery.vmap.js" type="text/javascript"></script>   

	<script src="/wangq/Public/Admin/js/jquery.vmap.russia.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.vmap.world.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.vmap.europe.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.vmap.germany.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.vmap.usa.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.vmap.sampledata.js" type="text/javascript"></script>  

	<script src="/wangq/Public/Admin/js/jquery.flot.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.flot.resize.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/date.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="/wangq/Public/Admin/js/jquery.gritter.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/fullcalendar.min.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/jquery.sparkline.min.js" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/wangq/Public/Admin/js/app.js" type="text/javascript"></script>

	<script src="/wangq/Public/Admin/js/index.js" type="text/javascript"></script>        
	<!--进行添加js文件-->
	<script src="/wangq/Public/Admin/js/jquery.flot.pie.js"></script>
	<script src="/wangq/Public/Admin/js/jquery.flot.stack.js"></script>
	<script src="/wangq/Public/Admin/js/jquery.flot.crosshair.js"></script>
	<script src="/wangq/Public/Admin/js/charts.js"></script> 
	<!--进行添加css文件-->
	<link rel="stylesheet" type="text/css" href="/wangq/Public/Admin/css/select2_metro.css" />
	<link rel="stylesheet" href="/wangq/Public/Admin/css/DT_bootstrap.css" />
	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();
		   //执行添加
			Charts.init();

		   Charts.initCharts();

		   Charts.initPieCharts();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="/wangq/Public/Admin/image/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/wangq/Public/Admin/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/wangq/Public/Admin/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/wangq/Public/Admin/image/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/wangq/Public/Admin/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/wangq/Public/Admin/image/avatar1_small.jpg" />

						<span class="username"><?php echo session('admin_username');?></span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

							<li><a href="<?php echo U('Login/loginout');?>"><i class="icon-key"></i>退出</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start active ">

					<a href="<?php echo U('Index/index');?>">

					<i class="icon-home"></i> 

					<span class="title">后台系统</span>

					<span class="selected"></span>

					</a>

				</li>
				
				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">用户</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">
						<li >

							<a href="<?php echo U('User/index');?>">
								用户管理
							</a>

						</li>

						<li >

							<a href="table_basic.html">

							Basic Tables</a>

						</li>

						<li >

							<a href="table_responsive.html">

							Responsive Tables</a>

						</li>

						

						<li >

							<a href="table_editable.html">

							Editable Tables</a>

						</li>

						<li >

							<a href="table_advanced.html">

							Advanced Tables</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">Layouts</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="layout_horizontal_sidebar_menu.html">

							Horzontal & Sidebar Menu</a>

						</li>

						<li >

							<a href="layout_horizontal_menu1.html">

							Horzontal Menu 1</a>

						</li>

						<li >

							<a href="layout_horizontal_menu2.html">

							Horzontal Menu 2</a>

						</li>

						<li >

							<a href="layout_promo.html">

							Promo Page</a>

						</li>

						<li >

							<a href="layout_email.html">

							Email Templates</a>

						</li>

						<li >

							<a href="layout_ajax.html">

							Content Loading via Ajax</a>

						</li>

						<li >

							<a href="layout_sidebar_closed.html">

							Sidebar Closed Page</a>

						</li>

						<li >

							<a href="layout_blank_page.html">

							Blank Page</a>

						</li>

						<li >

							<a href="layout_boxed_page.html">

							Boxed Page</a>

						</li>

						<li >

							<a href="layout_boxed_not_responsive.html">

							Non-Responsive Boxed Layout</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">UI Features</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="ui_general.html">

							General</a>

						</li>

						<li >

							<a href="ui_buttons.html">

							Buttons</a>

						</li>

						<li >

							<a href="ui_modals.html">

							Enhanced Modals</a>

						</li>

						<li >

							<a href="ui_tabs_accordions.html">

							Tabs & Accordions</a>

						</li>

						<li >

							<a href="ui_jqueryui.html">

							jQuery UI Components</a>

						</li>

						<li >

							<a href="ui_sliders.html">

							Sliders</a>

						</li>

						<li >

							<a href="ui_tiles.html">

							Tiles</a>

						</li>

						<li >

							<a href="ui_typography.html">

							Typography</a>

						</li>

						<li >

							<a href="ui_tree.html">

							Tree View</a>

						</li>

						<li >

							<a href="ui_nestable.html">

							Nestable List</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">Form Stuff</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="form_layout.html">

							Form Layouts</a>

						</li>

						<li >

							<a href="form_samples.html">

							Advance Form Samples</a>

						</li>

						<li >

							<a href="form_component.html">

							Form Components</a>

						</li>

						<li >

							<a href="form_wizard.html">

							Form Wizard</a>

						</li>

						<li >

							<a href="form_validation.html">

							Form Validation</a>

						</li>

						<li >

							<a href="form_fileupload.html">

							Multiple File Upload</a>

						</li>

						<li >

							<a href="form_dropzone.html">

							Dropzone File Upload</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-briefcase"></i> 

					<span class="title">Pages</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="page_timeline.html">

							<i class="icon-time"></i>

							Timeline</a>

						</li>

						<li >

							<a href="page_coming_soon.html">

							<i class="icon-cogs"></i>

							Coming Soon</a>

						</li>

						<li >

							<a href="page_blog.html">

							<i class="icon-comments"></i>

							Blog</a>

						</li>

						<li >

							<a href="page_blog_item.html">

							<i class="icon-font"></i>

							Blog Post</a>

						</li>

						<li >

							<a href="page_news.html">

							<i class="icon-coffee"></i>

							News</a>

						</li>

						<li >

							<a href="page_news_item.html">

							<i class="icon-bell"></i>

							News View</a>

						</li>

						<li >

							<a href="page_about.html">

							<i class="icon-group"></i>

							About Us</a>

						</li>

						<li >

							<a href="page_contact.html">

							<i class="icon-envelope-alt"></i>

							Contact Us</a>

						</li>

						<li >

							<a href="page_calendar.html">

							<i class="icon-calendar"></i>

							Calendar</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-gift"></i> 

					<span class="title">Extra</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="extra_profile.html">

							User Profile</a>

						</li>

						<li >

							<a href="extra_lock.html">

							Lock Screen</a>

						</li>

						<li >

							<a href="extra_faq.html">

							FAQ</a>

						</li>

						<li >

							<a href="inbox.html">

							Inbox</a>

						</li>

						<li >

							<a href="extra_search.html">

							Search Results</a>

						</li>

						<li >

							<a href="extra_invoice.html">

							Invoice</a>

						</li>

						<li >

							<a href="extra_pricing_table.html">

							Pricing Tables</a>

						</li>

						<li >

							<a href="extra_image_manager.html">

							Image Manager</a>

						</li>

						<li >

							<a href="extra_404_option1.html">

							404 Page Option 1</a>

						</li>

						<li >

							<a href="extra_404_option2.html">

							404 Page Option 2</a>

						</li>

						<li >

							<a href="extra_404_option3.html">

							404 Page Option 3</a>

						</li>

						<li >

							<a href="extra_500_option1.html">

							500 Page Option 1</a>

						</li>

						<li >

							<a href="extra_500_option2.html">

							500 Page Option 2</a>

						</li>

					</ul>

				</li>

				<li>

					<a class="active" href="javascript:;">

					<i class="icon-sitemap"></i> 

					<span class="title">3 Level Menu</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 2</a></li>

								<li><a href="#">Sample Link 3</a></li>

							</ul>

						</li>

						<li>

							<a href="javascript:;">

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

							</ul>

						</li>

						<li>

							<a href="#">

							Item 3

							</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="javascript:;">

					<i class="icon-folder-open"></i> 

					<span class="title">4 Level Menu</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							<i class="icon-cogs"></i> 

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li>

									<a href="javascript:;">

									<i class="icon-user"></i>

									Sample Link 1

									<span class="arrow"></span>

									</a>

									<ul class="sub-menu">

										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>

									</ul>

								</li>

								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>

								<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>

							</ul>

						</li>

						<li>

							<a href="javascript:;">

							<i class="icon-globe"></i> 

							Item 2

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>

							</ul>

						</li>

						<li>

							<a href="#">

							<i class="icon-folder-open"></i>

							Item 3

							</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-user"></i> 

					<span class="title">Login Options</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="login.html">

							Login Form 1</a>

						</li>

						<li >

							<a href="login_soft.html">

							Login Form 2</a>

						</li>

					</ul>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-file-text"></i> 

					<span class="title">Portlets</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="portlet_general.html">

							General Portlets</a>

						</li>

						<li >

							<a href="portlet_draggable.html">

							Draggable Portlets</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-map-marker"></i> 

					<span class="title">Maps</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="maps_google.html">

							Google Maps</a>

						</li>

						<li >

							<a href="maps_vector.html">

							Vector Maps</a>

						</li>

					</ul>

				</li>

				<li class="last ">

					<a href="charts.html">

					<i class="icon-bar-chart"></i> 

					<span class="title">Visual Charts</span>

					</a>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->    

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							Dashboard <small>statistics and more</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">Dashboard</a></li>

							<li class="pull-right no-text-shadow">

								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

									<i class="icon-calendar"></i>

									<span></span>

									<i class="icon-angle-down"></i>

								</div>

							</li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
		


	<!--进行引入文件-->
	
	<link rel="stylesheet" type="text/css" href="/wangq/Public/Admin/css/select2_metro.css" />

	<link rel="stylesheet" href="/wangq/Public/Admin/css/DT_bootstrap.css" />
	<script type="text/javascript" src="/wangq/Public/Admin/js/select2.min.js"></script>

	<script type="text/javascript" src="/wangq/Public/Admin/js/jquery.dataTables.js"></script>

	<script type="text/javascript" src="/wangq/Public/Admin/js/DT_bootstrap.js"></script>
	<script src="/wangq/Public/Admin/js/table-managed.js"></script>
	<script>

		jQuery(document).ready(function() {       

		   App.init();

		   TableManaged.init();

		});

	</script>
<div class="portlet box grey">

							<div class="portlet-title">

								<div class="caption"><i class="icon-user"></i>Table</div>

								<div class="actions">

									<a href="#" class="btn blue"><i class="icon-pencil"></i> Add</a>

									<div class="btn-group">

										<a class="btn green" href="#" data-toggle="dropdown">

										<i class="icon-cogs"></i> Tools

										<i class="icon-angle-down"></i>

										</a>

										<ul class="dropdown-menu pull-right">

											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>

											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>

											<li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>

											<li class="divider"></li>

											<li><a href="#"><i class="i"></i> Make admin</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="portlet-body">

								<div id="sample_2_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="sample_2_length" class="dataTables_length"><label><div class="select2-container m-wrap small select2-dropdown-open select2-container-active" id="s2id_autogen1"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span>5</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2" disabled="disabled"></div><select size="1" name="sample_2_length" aria-controls="sample_2" class="m-wrap small select2-offscreen" tabindex="-1"><option value="5" selected="selected">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> per page</label></div></div><div class="span6"><div class="dataTables_filter" id="sample_2_filter"><label>Search: <input type="text" aria-controls="sample_2" class="m-wrap small"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable" id="sample_2" aria-describedby="sample_2_info">

									<thead>

										<tr role="row"><th style="width:24px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""><div class="checker"><span class="checked"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"></span></div></th>
										<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 10px;">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 104px;">用户名</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 197px;">邮箱</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 110px;">状态</th>
										<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 110px;">操作</th>
										</tr>
									</thead>
								<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX odd">
						
											<td class=" sorting_1"><div class="checker"><span class="checked"><input type="checkbox" class="checkboxes" value="1" checked="checked"></span></div></td>
											<td class=" "><?php echo ($vo["id"]); ?></td>
											<td class=" "><?php echo ($vo["username"]); ?></td>

											<td class="hidden-480 "><a href="mailto:shuxer@gmail.com"><?php echo ($vo["email"]); ?></a></td>

											<td class=" ">
												<?php if(($vo["status"]) == "0"): ?><span class="label label-warning">冻结</span><?php endif; ?>
												<?php if(($vo["status"]) == "1"): ?><span class="label label-success">正常</span><?php endif; ?>
											</td>
												<td class=" ">
												<a href="#"><span class="label label-success">编辑</span></a>
												<a class="delete" href="javascript:;">Delete</a>
											</td>
										</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_2_info">Showing 1 to 5 of 12 entries</div></div>
					
					<div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← <span class="hidden-480">Prev</span></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li></ul></div></div>
				
					</div></div>

							</div>

						</div>

	
	</div>

				</div>

			</div>

			<!-- END PAGE CONTAINER-->    

		</div>

		<!-- END PAGE -->


	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->



</body>

<!-- END BODY -->

</html>