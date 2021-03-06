<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>

<style type="text/css">
html{overflow-y:scroll;vertical-align:baseline;}
body{font-family:Microsoft YaHei,Segoe UI,Tahoma,Arial,Verdana,sans-serif;font-size:12px;color:#fff;height:100%;line-height:1;background:#999}
*{margin:0;padding:0}
ul,li{list-style:none}
h1{font-size:30px;font-weight:700;text-shadow:0 1px 4px rgba(0,0,0,.2)}
.login-box{width:410px;margin:120px auto 0 auto;text-align:center;padding:30px;background:url(/wangq/Public/Admin/images/mask.png);border-radius:10px;}
.login-box .name,.login-box .password,.login-box .code,.login-box .remember{font-size:16px;text-shadow:0 1px 2px rgba(0,0,0,.1)}
.login-box .remember input{box-shadow:none;width:15px;height:15px;margin-top:25px}
.login-box .remember{padding-left:40px}
.login-box .remember label{display:inline-block;height:42px;width:70px;line-height:34px;text-align:left}
.login-box label{display:inline-block;width:100px;text-align:right;vertical-align:middle}
.login-box #code{width:120px}
.login-box .codeImg{float:right;margin-top:26px;}
.login-box img{width:148px;height:42px;border:none}
input[type=text],input[type=password]{width:270px;height:42px;margin-top:25px;padding:0px 15px;border:1px solid rgba(255,255,255,.15);border-radius:6px;color:#fff;letter-spacing:2px;font-size:16px;background:transparent;}
button{cursor:pointer;width:100%;height:44px;padding:0;background:#ef4300;border:1px solid #ff730e;border-radius:6px;font-weight:700;color:#fff;font-size:24px;letter-spacing:15px;text-shadow:0 1px 2px rgba(0,0,0,.1)}
input:focus{outline:none;box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2)}
button:hover{box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2)}
.screenbg{position:fixed;bottom:0;left:0;z-index:-999;overflow:hidden;width:100%;height:100%;min-height:100%;}
.screenbg ul li{display:block;list-style:none;position:fixed;overflow:hidden;top:0;left:0;width:100%;height:100%;z-index:-1000;float:right;}
.screenbg ul a{left:0;top:0;width:100%;height:100%;display:inline-block;margin:0;padding:0;cursor:default;}
.screenbg a img{vertical-align:middle;display:inline;border:none;display:block;list-style:none;position:fixed;overflow:hidden;top:0;left:0;width:100%;height:100%;z-index:-1000;float:right;}
.bottom{margin:8px auto 0 auto;width:100%;position:fixed;text-align:center;bottom:0;left:0;overflow:hidden;padding-bottom:8px;color:#ccc;word-spacing:3px;zoom:1;}
.bottom a{color:#FFF;text-decoration:none;}
.bottom a:hover{text-decoration:underline;}
</style>

<script type="text/javascript" src="/wangq/Public/Admin/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".screenbg ul li").each(function(){
		$(this).css("opacity","0");
	});
	$(".screenbg ul li:first").css("opacity","1");
	var index = 0;
	var t;
	var li = $(".screenbg ul li");	
	var number = li.size();
	function change(index){
		li.css("visibility","visible");
		li.eq(index).siblings().animate({opacity:0},3000);
		li.eq(index).animate({opacity:1},3000);
	}
	function show(){
		index = index + 1;
		if(index<=number-1){
			change(index);
		}else{
			index = 0;
			change(index);
		}
	}
	t = setInterval(show,8000);
	//根据窗口宽度生成图片宽度
	var width = $(window).width();
	$(".screenbg ul img").css("width",width+"px");
});
</script>

</head>

<body>

<div class="login-box" id="login">
	<h1>系统后台登录</h1>
	<form method="post" action="<?php echo U('Login/index');?>">
		<div class="boxs">
			<div class="name">
				<label>管理员账号：</label>
				<input type="text" name="username" id="" tabindex="1" autocomplete="off" placeholder="请输入账号！" />
			</div>
			<div class="password">
				<label>密  码：</label>
				<input type="password" name="password" maxlength="16" id="" tabindex="2" placeholder="请输入密码！"/>
			</div>
			<div class="code">
				<label>验证码：</label>
				<input type="text" name="verify" maxlength="4" id="code" tabindex="3" placeholder="请输入验证码！"/>
				<div class="codeImg">
					<img  class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('Verify/code');?>" />
				</div>
			</div>
		</div>
		<div class="remember" style="margin-left:240px;">
			<label><a class="reloadverify" title="换一张" href="javascript:void(0)" style="color:white;text-decoration:none">换一张？</a></label>
		</div>
		<div class="login">
			<button type="submit" tabindex="5">登录</button>
			 <div class="check-tips" style="margin-top:20px;color:red;font-size:20px;"></div>
		</div>
	</form>
</div>



<div class="screenbg">
	<ul>
		<li><a href="javascript:;"><img src="/wangq/Public/Admin/images/0.jpg"></a></li>
		<li><a href="javascript:;"><img src="/wangq/Public/Admin/images/1.jpg"></a></li>
		<li><a href="javascript:;"><img src="/wangq/Public/Admin/images/2.jpg"></a></li>
	</ul>
</div>
</body>
<script>
	//进行表单的提交信息
	$(document).ajaxStart(function () {
        $("button:submit").addClass("log-in").attr("disabled", true);
    }).ajaxStop(function () {
        $("button:submit").removeClass("log-in").attr("disabled", false);
    });
    $("form").submit(function () {
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data) {
            if (data.status) {
                window.location.href = data.url;
            } else {
                self.find(".check-tips").text(data.info);
                //刷新验证码
                $(".reloadverify").click();
            }
        }
    });
	$(function(){
		//进行初始化用户的输入的框
		$(".boxs").find("input[name=username]").focus();
		//进行验证码的刷新
		var verifyimg = $(".verifyimg").attr("src");
        $(".reloadverify").click(
                function () {
                    if (verifyimg.indexOf('?') > 0) {
                        $(".verifyimg").attr("src",
                                verifyimg + '&random=' + Math.random());
                    } else {
                        $(".verifyimg").attr(
                                "src",
                                verifyimg.replace(/\?.*$/, '') + '?'
                                + Math.random());
                    }
                });
		
	});
</script>
</html>