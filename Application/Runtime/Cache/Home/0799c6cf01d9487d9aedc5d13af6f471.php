<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <script src="/Public/HomeStyle/js/analytics_002.js" async=""></script>
        <script id="allmobilize" charset="utf-8" src="/Public/HomeStyle/js/allmobilize.js"></script>
        <title>修改密码-拉勾网-最专业的互联网招聘平台</title>
        <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
        <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style_002.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css">
        <script src="/Public/HomeStyle/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery_002.js"></script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/additional-methods.js"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.5.6_1022">
            </script>
        <![endif]-->
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
            <li <?php if(company == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(company == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(company == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
            <li <?php if(company == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
            <li <?php if(company == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(company == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(company == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
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
            <li <?php if(company == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(company == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(company == 'handle'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/ResumeHandle/unhandle');?>" rel="nofollow">简历管理</a></li>
            <li <?php if(company == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
                <div class="user_bindSidebar">
                    <dl class="user_sideBarmenu" id="user_sideBarmenu">
                        <dt>
                            <h3>
                                帐号设置
                            </h3>
                        </dt>
                        <dd>
                            <a href="<?php echo U('Home/Company/updatePwd');?>" class="hover">
                                修改密码
                            </a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('Home/Company/updateEmail');?>">
                                修改接收简历邮箱
                            </a>
                        </dd>
                    </dl>
                </div>
                <input value="1" id="hasSidebar" type="hidden">
                <div class="content user_modifyContent">
                    <dl class="c_section">
                        <dt>
                            <h2>
                                <em>
                                </em>
                                修改密码
                            </h2>
                        </dt>
                        <dd>
                            <form id="updatePswForm">
                                <table class="savePassword">
                                    <tbody>
                                        <tr>
                                            <td>
                                                登录邮箱
                                            </td>
                                            <td class="c7">
                                                247678652@qq.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label">
                                                当前密码
                                            </td>
                                            <td>
                                                <input name="oldpassword" id="oldpassword" maxlength="16" type="password">
                                                <span class="error" style="display:none;" id="updatePwd_beError">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label">
                                                新密码
                                            </td>
                                            <td>
                                                <input name="newpassword" id="newpassword" maxlength="16" type="password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label">
                                                确认密码
                                            </td>
                                            <td>
                                                <input name="comfirmpassword" id="comfirmpassword" maxlength="16" type="password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                <input value="保 存" type="submit">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </dd>
                    </dl>
                </div>
                <div style="display:none;">
                    <!-- 修改密码 -->
                    <div id="updatePassword" class="popup" style="overflow:hidden">
                        <h3>
                            修改密码成功，请重新登录
                        </h3>
                        <h4>
                            <span>
                                5
                            </span>
                            秒后将自动退出
                        </h4>
                        <a href="<?php echo U('Home/User/logout');?>" class="btn">
                            直接退出
                        </a>
                    </div>
                    <!-- 解除招聘服务 -->
                    <div id="unbindService" class="popup" style="overflow:hidden">
                        <h3>
                            与当前公司的招聘服务解除成功！
                        </h3>
                        <h4>
                            <span>
                                5
                            </span>
                            秒后页面将自动跳转至开通招聘服务页
                        </h4>
                        <a href="http://www.lagou.com/corpCenter/bindStep1.html" class="btn">
                            立即跳转
                        </a>
                    </div>
                    <div id="confirm_unbindService" class="popup" style="overflow:hidden">
                        <h3>
                            确认解除与当前公司的招聘服务吗？
                        </h3>
                        <h4>
                            解除后，您通过该公司发布的职位和收到的简历都将不可见，且不可恢复
                        </h4>
                        <div class="confirm_unbindSeerviceBtn">
                            <a href="javascript:;" class="btn" id="confirm_unbind">
                                确认解除
                            </a>
                            <a href="javascript:;" class="cancel" id="">
                                取 消
                            </a>
                        </div>
                    </div>
                </div>
                <script src="/Public/HomeStyle/js/setting.js"></script>
                <div class="clear">
                </div>
                <input id="resubmitToken" value="" type="hidden">
                <a id="backtop" title="回到顶部" rel="nofollow">
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
        <script type="text/javascript" src="/Public/HomeStyle/js/popup.js"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/tongji.js"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/analytics.js"></script>
        <script src="/Public/HomeStyle/js/h.js" type="text/javascript"></script>
    </body>

</html>