<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>拉勾网-最专业的互联网招聘平台</title>
        <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">
        <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招"
        name="keywords">
        <script src="/Public/HomeStyle/js/analytics.js" async=""></script>
        <link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style_002.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.css">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css">
        <script src="/Public/HomeStyle/js/jquery.js"
        type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery_002.js">
        </script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js"
        type="text/javascript">
        </script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.5.6_1022">
            </script>
        <![endif]-->
        <script type="text/javascript">
            var youdao_conv_id = 271546;
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/conv.js">
        </script>
        <style>
            .search input[type="text"] {
                border: medium none;
                font: 14px/18px "Microsoft Yahei",Arial;
                height: 18px;
                outline: medium none;
                vertical-align: top;
            }
            .search input {
                border: medium none;
                margin: 0;
                outline: 0 none;
                padding: 0;
                width: 198px;
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
                        <dd <?php if(forward == 'unhandle'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/unhandle');?>">
                                待处理简历
                            </a>
                        </dd>
                        <dd <?php if(forward == 'forward'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showAudition');?>">
                                已通知面试简历
                            </a>
                        </dd>
                        <dd <?php if(forward == 'notpass'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showNotpass');?>">
                                不合适简历
                            </a>
                        </dd>
                    </dl>
                    <dl class="company_center_aside">
                        <dt>
                            我发布的职位
                        </dt>
                        <dd <?php if(forward == 'positions'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/positions');?>">
                                有效职位
                            </a>
                        </dd>
                        <dd <?php if(forward == 'invalid'): ?>class="current"<?php endif; ?>>
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
                <div class="content arrange_view">
                    <dl class="company_center_content ">
                        <dt id="autofiletitle">
                        <h1>
                            <em></em>
                            已安排面试
                        </h1>
                        </dt>
                        <dd>
                            <div class="result_wrap">
                                <?php foreach ($data as $key => $value): ?>
                                <div class="result_main <?php if ($key == date('Y-m-d', time())): ?>active<?php endif ?>">
                                    <div class="result_date">
                                        <p>
                                            <?php echo ($key); ?>/周三
                                        </p>
                                    </div>
                                    <?php  $i = 1; $total = count($value); ?>
                                    <?php foreach ($value as $k => $v): ?>
                                    <div class="result_time clearfixs">
                                        <div style="border-color: rgb(225, 225, 225);" class="time_l fl">
                                            <span class="time_dot">
                                                <label>
                                                    <?php echo (date("Y-m-d", $v['audition_time'])); ?>
                                                </label>
                                                <?php echo (date("H:i", $v['audition_time'])); ?>
                                                <em></em>
                                                <i class=" "></i>
                                            </span>
                                        </div>
                                        <div class="time_r fr">
                                            <ul>
                                                <li class="clearfixs">
                                                    <div class="portrait fl">
                                                        <?php if (empty($v['image'])): ?>
                                                            <img src="/Public/HomeStyle/images/default_headpic.png">
                                                        <?php else: ?>
                                                            <img src="/Uploads/User/image/<?php echo ($v['image']); ?>">
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="con_l fl">
                                                        <p class="person_p">
                                                            <span class="person searchFlagN" title="<?php echo ($v["name"]); ?>">
                                                                <?php echo ($v["rname"]); ?>
                                                            </span>
                                                            <span class="mobile">
                                                                <?php echo ($v["phone"]); ?>
                                                            </span>
                                                        </p>
                                                        <p class="info">
                                                            <span class="post">
                                                                <strong>
                                                                    应聘：
                                                                </strong>
                                                                <em class="searchFlagP" title="<?php echo ($v["jname"]); ?>">
                                                                    <?php echo ($v["jname"]); ?>
                                                                </em>
                                                            </span>
                                                            <span class="publisher" title="小苍苍">
                                                                <strong>
                                                                    发布人：
                                                                </strong>
                                                                <?php echo ($v["audition_linkman"]); ?>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="con_r fr">
                                                        <a target="_blank" href="<?php echo U('Home/ResumeHandle/show', array('id'=>$v['user_id'], 'sid'=>$v['id']));?>" class="preview">
                                                            <span>
                                                                预览简历
                                                            </span>
                                                        </a>
                                                        <!-- <a target="_blank" href="http://www.lagou.com/corpResume/downloadResume?deliverId=3261640"
                                                        class="download" data-key="f8c9cb931414c41a2f5c461f170d980a" data-type="0">
                                                            <span>
                                                                下载简历
                                                            </span>
                                                        </a> -->
                                                    </div>
                                                </li>
                                            </ul>

                                            <?php if ($i == $total && $key == date('Y-m-d', time())): ?>
                                                <div class="now"><div></div></div>
                                            <?php endif ?>
                                            
                                        </div>
                                    </div>
                                    <?php ++$i;?>
                                    <?php endforeach ?>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </dd>
                    </dl>
                    <!-- end .company_center_content -->
                </div>
                <!-- end .content -->
                <script type="text/javascript" src="/Public/HomeStyle/js/jquery_003.js">
                </script>
                <div class="clear">
                </div>
                <input id="resubmitToken" value="" type="hidden">
                <a style="display: none;" id="backtop" title="回到顶部" rel="nofollow">
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
        <script type="text/javascript" src="/Public/HomeStyle/js/core.js">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/tongji.js">
        </script>
        <!-- -->
        <script type="text/javascript" src="/Public/HomeStyle/js/analytics_002.js">
        </script>
        <script src="/Public/HomeStyle/js/h.js"
        type="text/javascript">
        </script>
        <script type="text/javascript">
            $(function() {
                //判断初始化页面时 是否隐藏提示框以及红点的显示
                if ($(".notice_tip").length == 0) {
                    $("#noticeTip").hide();
                    $(".collapsible_menu dt .red").addClass("dn");
                }

                //$('#noticeDot-1').hide();
                $('#noticeTip a.closeNT').click(function() {
                    $(this).parent().hide();
                    //与后台交互，消息标识为已读
                    L.ajax({
                        type: 'POST',
                        url: ctx + "/notice/clearAll.json",
                        dataType: 'json'
                    });
                    $(".collapsible_menu dt .red").addClass("dn");
                });
                //B端消息绑定单击事件
                $(".notice_tip").bind("click",
                function() {
                    $(this).remove();
                    //获取当前点击的消息类型
                    var type = $(this).data("type");
                    //告诉后台哪种类型的消息一经被查看
                    L.ajax({
                        type: 'POST',
                        url: ctx + "/notice/clear.json",
                        data: {
                            nt: type
                        },
                        dataType: 'json'
                    });
                    if ($(".notice_tip").length == 0) {
                        $("#noticeTip").hide();
                        $(".collapsible_menu dt .red").addClass("dn");
                    }
                });
            });
        </script>
    </body>

</html>