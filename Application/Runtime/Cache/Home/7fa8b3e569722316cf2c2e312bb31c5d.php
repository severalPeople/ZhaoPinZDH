<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>拉勾网-最专业的互联网招聘平台</title>
        <meta property="qc:admins" content="23635710066417756375">
        <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">
        <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招"
        name="keywords">
        <script src="/Public/HomeStyle/js/analytics.js" async=""></script>
        <link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style_002.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css">
        <script src="/Public/HomeStyle/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery_002.js"></script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.ui.datetimepicker.min.js"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.5.6_1022">
            </script>
        <![endif]-->
        <style>
        	.resume_fit {
                width: 106px;
            }
            .resume_link a {
                width:100px;
            }
            .resume_link a:hover {
                color:#777;
            }
            .resume_intro em {
                background: url("/Public/HomeStyle/images/corp/unread.png") no-repeat scroll 5px -17px rgba(0, 0, 0, 0);
            }
        </style>
    </head>
    
    <body>
        <div id="body">
            <div id="header">
    <div class="wrapper">
        <a href="<?php echo U('Home/Index/index');?>" class="logo">
            <img src="/Public/HomeStyle/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
        </a>
        <?php if (!$_COOKIE['state']) :?>
        <!-- 未登录头部 -->
        <ul class="reset" id="navheader">
            <li <?php if(handle == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(handle == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(handle == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
            <li <?php if(handle == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
        </ul>
        <ul class="loginTop">
            <li><a href="<?php echo U('User/login');?>" rel="nofollow">登录</a></li> 
            <li>|</li>
            <li><a href="<?php echo U('User/register');?>" rel="nofollow">注册</a></li>
        </ul>
        <?php endif ;?>

        <?php if ($_COOKIE['state'] == 1) :?>
        <!-- 个人用户头部 -->
         <ul class="reset" id="navheader">
            <li <?php if(handle == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(handle == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(handle == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
        </ul>
        <dl class="collapsible_menu">
            <dt>
                <span><?php echo $_SESSION['user']['username']?>&nbsp;</span>
                <span class="red dn" id="noticeDot-0"></span>
                <i></i>
            </dt>
            <dd><a href="<?php echo U('CollectionJob/index');?>">我收藏的职位</a></dd>
            <dd class="btm"><a href="###">我的订阅</a></dd>
            <dd><a href="<?php echo U('Home/CompanyJob/create');?>">我要招人</a></dd>
            <dd><a href="###">帐号设置</a></dd>
            <dd class="logout"><a rel="nofollow" href="<?php echo U('User/logout');?>">退出</a></dd>
        </dl>
        <?php endif ;?>
        <?php if ($_COOKIE['state'] == 2) :?>
        <!-- 公司用户头部 -->
         <ul class="reset" id="navheader">
            <li <?php if(handle == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(handle == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(handle == 'handle'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/ResumeHandle/unhandle');?>" rel="nofollow">简历管理</a></li>
            <li <?php if(handle == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
        </ul>
        <dl class="collapsible_menu">
            <dt>
                <span><?php echo $_SESSION['user']['username']?>&nbsp;</span>
                <span class="red dn" id="noticeDot-0"></span>
                <i></i>
            </dt>
            <dd><a rel="nofollow" href="<?php echo U('Home/CompanyJob/positions');?>">我发布的职位</a></dd>
            <dd><a href="<?php echo U('Home/ResumeHandle/unhandle');?>">我收到的简历</a></dd>
            <dd class="btm"><a href="<?php echo U('Home/Company/index');?>">我公司的主页</a></dd>
            <dd><a href="<?php echo U('Home/Resume/index');?>">我要找工作</a></dd>
            <dd><a href="<?php echo U('Home/Company/updatePwd');?>">帐号设置</a></dd>
            <dd class="logout"><a rel="nofollow" href="<?php echo U('User/logout');?>">退出</a></dd>
        </dl>
        <?php endif ;?>
    </div>
</div>
            <!-- end #header -->
            <div id="container">
                <div class="sidebar">
                    <a class="btn_create" href="<?php echo U('Home/CompanyJob/create');?>">
                        发布新职位
                    </a>
                    <dl class="company_center_aside">
                        <dt>
                            我收到的简历
                        </dt>
                        <dd <?php if(notpass == 'unhandle'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/unhandle');?>">
                                待处理简历
                            </a>
                        </dd>
                        <dd <?php if(notpass == 'forward'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showAudition');?>">
                                已通知面试简历
                            </a>
                        </dd>
                        <dd <?php if(notpass == 'notpass'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showNotpass');?>">
                                不合适简历
                            </a>
                        </dd>
                    </dl>
                    <dl class="company_center_aside">
                        <dt>
                            我发布的职位
                        </dt>
                        <dd <?php if(notpass == 'positions'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/positions');?>">
                                有效职位
                            </a>
                        </dd>
                        <dd <?php if(notpass == 'invalid'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/invalid');?>">
                                已下线职位
                            </a>
                        </dd>
                    </dl>
                    <div class="subscribe_side mt20">
                        <div class="f14">
                            想收到更多更好的简历？
                        </div>
                        <div class="f18 mb10">
                            就用拉勾招聘加速助手
                        </div>
                        <div>
                            咨询：
                            <a class="f16" href="mailto:jessica@lagou.com">
                                jessica@lagou.com
                            </a>
                        </div>
                        <div class="f18 ti2em">
                            010-57286512
                        </div>
                    </div>
                    <div class="subscribe_side mt20">
                        <div class="f14">
                            加入互联网HR交流群
                        </div>
                        <div class="f18 mb10">
                            跟同行聊聊
                        </div>
                        <div class="f24">
                            338167634
                        </div>
                    </div>
                </div>
                <!-- end .sidebar -->
                <div class="content">
                    <dl class="company_center_content">
                        <dt id="autofiletitle">
                            <h1>
                                <em>
                                </em>
                                不合适简历
                                <span>
                                    （共<?php echo ($num); ?>份）
                                </span>
                            </h1>
                        </dt>
                        <dd>
                            <form id="filterForm" method="get" action="http://hr.lagou.com/interview/haveRefuselist.html">
                            	<?php if(empty($send)): ?><div class="no_resume_tip no_resume_home">你暂时还没有拒绝过任何人哦~</div>
                            	<?php else: ?>
                                <!-- <div class="filter_actions">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                    <span class="mf12">
                                        全选
                                    </span>
                                    <a href="javascript:;" class="mark_nofit" id="resumeDelAll">
                                        删除
                                    </a>
                                    <a href="javascript:;" class="mark_nofit" id="resume_empty">
                                        清空
                                    </a>
                                    <ul class="filter_btn reset">
                                        <li id="filter_btn2">
                                            <span>
                                                筛选简历
                                            </span>
                                            <i>
                                            </i>
                                        </li>
                                    </ul>
                                </div> -->
                                <!-- end .filter_actions -->
                               <!--  <input value="1" id="pageNo" type="hidden">
                                <input value="1" id="totalPageCount" type="hidden">
                                <div class="filter_options">
                                    <dl>
                                        <input name="defaultCondition" value="true" id="defaultCondition" type="hidden">
                                        <dt>
                                            简历状态：
                                        </dt>
                                        <dd>
                                            <a class="current" rel="-1">
                                                不限
                                            </a>
                                            <a rel="1">
                                                未阅读
                                            </a>
                                            <a rel="2">
                                                已阅读
                                            </a>
                                            <a rel="3">
                                                已转发
                                            </a>
                                            <input name="statusFilter" value="-1" type="hidden">
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            工作经验：
                                        </dt>
                                        <dd>
                                            <a class="current" rel="0">
                                                不限
                                            </a>
                                            <a rel="1">
                                                应届毕业生
                                            </a>
                                            <a rel="2">
                                                1年以下
                                            </a>
                                            <a rel="3">
                                                1-3年
                                            </a>
                                            <a rel="4">
                                                3-5年
                                            </a>
                                            <a rel="5">
                                                5-10年
                                            </a>
                                            <a rel="6">
                                                10年以上
                                            </a>
                                            <input name="workExp" value="0" type="hidden">
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            最低学历：
                                        </dt>
                                        <dd>
                                            <a class="current" rel="-1">
                                                不限
                                            </a>
                                            <a rel="1">
                                                大专及以上
                                            </a>
                                            <a rel="2">
                                                本科及以上
                                            </a>
                                            <a rel="3">
                                                硕士及以上
                                            </a>
                                            <a rel="4">
                                                博士及以上
                                            </a>
                                            <input name="eduCode" value="-1" type="hidden">
                                        </dd>
                                    </dl>
                                    <input id="positionId" name="positionId" value="" type="hidden">
                                </div> -->
                                <!-- end .filter_options -->
                                <ul class="resume_lists">
                                	<?php if(is_array($send)): foreach($send as $key=>$sendVal): ?><li data-flag="<?php echo ($sendVal["id"]); ?>">
                                        <span class="resume_header2">
                                            <span class="time">
                                                <?php echo (date("Y-m-d H:i:m", $sendVal["state1_time"])); ?>
                                            </span>
                                            <!-- <label class="checkbox">
                                                <input type="checkbox">
                                                <i>
                                                </i>
                                            </label> -->
                                            <span class="employee">
                                                应聘：
                                                <a class="employee_position" href="#####"
                                                title="<?php echo ($sendVal["job_name"]); ?>" target="_blank">
                                                    <?php echo ($sendVal["job_name"]); ?>
                                                </a>
                                            </span>
                                        </span>
                                        <div class="resume_show">
                                            <a href="<?php echo U('Home/ResumeHandle/show', array('id'=>$sendVal['user_id'], 'sid'=>$sendVal['id']));?>" class="resumeImg"
                                            target="_blank" title="预览附件简历">
                                               <?php if($sendVal['user']['image'] == ''): ?><img src="/Public/HomeStyle/images/icon_file.png" height="69" width="69">
                                               <?php else: ?>
                                               <img src="/Uploads/User/image/<?php echo ($sendVal["user"]["image"]); ?>" height="69" width="69"><?php endif; ?>
                                            </a>
                                            <a href="<?php echo U('Home/ResumeHandle/show', array('id'=>$sendVal['user_id'], 'sid'=>$sendVal['id']));?>" target="_blank"
                                            class="hotspace">
                                                <div class="resume_intro" data-flag="<?php echo ($sendVal["id"]); ?>">
                                                    <?php echo ($sendVal["user"]["name"]); ?> / <?php echo ($sendVal["user"]["sex"]); ?> / <?php echo ($sendVal["user"]["work_year"]); ?> / <?php echo ($sendVal["hope"]["city"]); ?>
                                                    <?php if($sendVal["read"] == 0): ?><em class="read"></em>
                                                    <?php else: ?>
                                                    <em></em><?php endif; ?>
                                                    <?php if(empty($sendVal["work"])): else: ?>
                                                    <br>
                                                    <?php echo ($sendVal["work"]["job"]); ?> · <?php echo ($sendVal["work"]["company"]); ?>
                                                    <br><?php endif; ?>
                                                    <?php if(empty($sendVal["edu"])): else: ?>
                                                    <?php echo ($sendVal["edu"]["school"]); ?> · <?php echo ($sendVal["edu"]["professional"]); ?> · <?php echo ($sendVal["edu"]["education"]); endif; ?>
                                                </div>
                                            </a>
                                            <div class="resume_link nolook_phone">
                                                <?php if($sendVal["state2"] == 0): ?><span>
                                                    未查看联系方式
                                                </span>
                                                <?php else: ?>
                                                <a class="phone" href="javascript:;"><?php echo ($sendVal["user"]["phone"]); ?></a>
                                                <a class="resume_color phone" title="247678652@qq.com" href="javascript:;"><?php echo ($sendVal["user"]["email"]); ?></a><?php endif; ?>
                                            </div>
                                            <div class="resume_fit resume_del2">
                                                <a href="javascript:;" class="resume_del">
                                                    删除
                                                </a>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                                <!-- end .resumeLists -->
                            </form>
                        </dd>
                    </dl>
                    <!-- end .company_center_content -->
                </div>
                <!-- end .content -->
                <!-- 点击清空按钮弹窗 -->
                <div style="display:none">
                    <div id="empty_resume" class="popup">
                        <div>
                            确定要清空“不合适”中的所有简历吗？
                        </div>
                        <form id="emptyResumeForm">
                            <!-- <label><em></em><input type="checkbox"/>不再提示</label> -->
                            <label for="noPrompt" class="notice_noprompt" checked="true">
                                <em>
                                </em>
                                <input id="noPrompt" name="checkbox" class="checkbox valid" type="checkbox">
                                不再提示
                            </label>
                            <a href="javascript:;" id="confirmEmpty">
                                确定
                            </a>
                        </form>
                    </div>
                </div>
                <script type="text/javascript" src="/Public/HomeStyle/js/jquery_003.js"></script>
                <div class="clear"></div>
                <input id="resubmitToken" value="" type="hidden">
                <a style="display: inline;" id="backtop" title="回到顶部" rel="nofollow">
                </a>
            </div>
            <!-- end #container -->
        </div>
        <!-- end #body -->
        <div id="footer">
    <div class="wrapper">
        <a rel="nofollow" target="_blank" href="about.html">
            联系我们
        </a>
        <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">
            互联网公司导航
        </a>
        <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">
            拉勾微博
        </a>
        <a rel="nofollow" href="javascript:void(0)" class="footer_qr">
            拉勾微信
            <i>
            </i>
        </a>
        <div class="copyright">
            &copy;2013-2014 Lagou
            <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action"
            target="_blank">
                京ICP备14023790号-2
            </a>
        </div>
    </div>
</div>
        <script type="text/javascript" src="/Public/HomeStyle/js/core.js"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/tongji.js"></script>
        <!-- -->
        <script type="text/javascript" src="/Public/HomeStyle/js/analytics_002.js"></script>
        <script src="/Public/HomeStyle/js/h.js" type="text/javascript"></script>
        <script type="text/javascript">
	        jQuery(function($) {
	        	$(".resume_del").click(function() {
			        var a = $(this),
			        b = a.parents("li").attr("data-flag"),
			        c = $("#resubmitToken").val();
			        return confirm("确定要删除该简历吗？") ? ($.ajax({
			            type: "POST",
			            url: 'delete',
			            data: {
			                deliverIds: b,
			                resubmitToken: c
			            },
			            dataType: "json"
			        }).done(function(a) {
			            $("#resubmitToken").val(a.resubmitToken),
			            3 == a.state ? top.location.href = top.location.href: alert(a.message)
			        }), void 0) : !1
				})
	        })
        	
        </script>
    </body>
</html>