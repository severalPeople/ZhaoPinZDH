<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<script id="allmobilize" charset="utf-8" src="/Public/HomeStyle/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册-拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css"/>

<script src="/Public/HomeStyle/js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/Public/HomeStyle/js/jquery.lib.min.js"></script>
<script type="text/javascript" src="/Public/HomeStyle/js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="/Public/HomeStyle/js/conv.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="<?php echo U('Home/Index/index');?>"><img src="/Public/HomeStyle/images/logo_white.png" width="285" height="62" alt="拉勾招聘" /></a>
            <div id="cloud_s"><img src="/Public/HomeStyle/images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="/Public/HomeStyle/images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>
    	<input type="hidden" id="resubmitToken" value="9b207beb1e014a93bc852b7ba450db27" />		
		<div class="login_box">
        	<form id="loginForm" action="<?php echo U('User/add_user');?>" method="post">
        		<ul class="register_radio clearfix">
		            <li>
		            	找工作
		              	<input type="radio" value="0" name="type" /> 
		            </li>
		            <li>
		           	    招人
		              	<input type="radio" value="1" name="type" /> 
		            </li>
		        </ul> 
            	<input type="text" id="email" name="email" tabindex="1" placeholder="请输入常用邮箱地址"  />
                <span class="error" style="display:none;"></span>
                <input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
				<span class="error" ></span>
            	<label class="fl registerJianJu" for="checkbox">
            		<input type="checkbox" id="checkbox" name="checkbox" checked  class="checkbox valid" />我已阅读并同意<a href="h/privacy.html" target="_blank">《拉勾用户协议》</a>
           		</label>
                <input type="submit" id="submitLogin" value="注 &nbsp; &nbsp; 册" />
            </form>
            <div class="login_right">
            	<div>已有拉勾帐号</div>
            	<a  href="<?php echo U('User/login');?>"  class="registor_now">直接登录</a>
                <!-- <div class="login_others">使用以下帐号直接登录:</div>
                <a  href="h/ologin/auth/sina.html"  target="_blank" class="icon_wb" title="使用新浪微博帐号登录"></a>
               	<a  href="h/ologin/auth/qq.html"  class="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a> -->
            </div>
        </div>
        <div class="login_box_btm"></div>
    </div>
    <!--js验证-->
	<script>
			//邮箱判断
			var ep=false;
			//用户种类判断
			var tp=false;
			//用户密码判断
			var pp=false;
			//用户协议判断
			var cp=true;
			//邮箱判断
			$('#email').blur(function (){
				var email=$('#email').val();
				var reg=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
				var res=reg.test(email);
				if(!res){
					$('#email').next().html('您的输入的邮箱格式不正确');
					$('#email').next().css({display:'block',color:'red'});		
				}else{
					$.post('<?php echo U('User/ajaxRet');?>',{'email':$('#email').val()},function(msg){
						if(msg){
							$('#email').next().html('邮箱已经被注册');
							$('#email').next().css({display:'block',color:'red'});								
						}else{
							$('#email').next().html('');
							ep=true;
						}
					});
				}
			});
			//选择用户种类
			$('input[name=type]').click(function(){
				$(this).parent().css({border:'2px solid #93B7BB'});
				$(this).parent().siblings().removeAttr('style');
				tp=true;
			});
			//用户密码
			$('input[name=password]').blur(function (){
					var pass=$('#password').val();
					var reg = /^[\w]{6,12}$/;
					var res = reg.test(pass);
					if(!res || pass==''){
						$('#password').next().html('邮箱密码不正确,6-12位长度');
					}else{
						$('#password').next().html('');
						pp=true;
					}
				}
			);
			//判断阅读协议
			$('input[name=checkbox]').click(function(){
				if($(this).val()=='on'){
					$(this).val('off');
				}else{
					$(this).val('on');
					cp=true;
				}
			});
			//提交表单
			$('input[type=submit]').click(function(){
				if(ep && tp && pp && cp){
					$('#loginForm').submit();
				}else{
					//alert(ep);
					return false;
				}
			});
    </script>
</body>
</html>