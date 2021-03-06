<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
    
    <head>
        <script type="text/javascript" async="" src="/Public/HomeStyle/js/conversion.js">
        </script>
        <script src="/Public/HomeStyle/js/allmobilize.min.js" charset="utf-8"
        id="allmobilize">
        </script>
        <style type="text/css">
        </style>
        <meta content="no-siteapp" http-equiv="Cache-Control" />
        <link media="handheld" rel="alternate" />
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            我的投递记录-招聘服务-拉勾网-最专业的互联网招聘平台
        </title>
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon"
        />
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet"
        />
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css"
        rel="stylesheet" />
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet"
        />
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js">
        </script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js">
        </script>
        <script src="/Public/HomeStyle/js/additional-methods.js" type="text/javascript">
        </script>
        <script src="/Public/HomeStyle/js/conv.js" type="text/javascript">
        </script>
        <script src="/Public/HomeStyle/js/ajaxCross.json" charset="UTF-8">
        </script>
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
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
            <li <?php if(index == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
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
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'handle'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/ResumeHandle/unhandle');?>" rel="nofollow">简历管理</a></li>
            <li <?php if(index == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
                <div class="clearfix">
                    <div class="content_l">
                        <dl class="c_delivery">
                            <dt>
                                <h1>
                                    <em>
                                    </em>
                                    已投递简历状态
                                </h1>
                                <a class="d_refresh" href="javascript:;">
                                    刷新
                                </a>
                            </dt>
                            <dd>
                                <div class="delivery_tabs">
                                    <ul class="reset">
                                        <li class="<?php echo ($topshow['all_show']); ?>">
                                            <a href="<?php echo U('ResumeSend/allSend');?>">
                                                全部
                                            </a>
                                        </li>
                                        <li class="<?php echo ($topshow['look_show']); ?>">
                                            <a href="<?php echo U('ResumeSend/lookSuccess');?>">
                                                被查看
                                            </a>
                                        </li>
                                        <li class="<?php echo ($topshow['resend_success']); ?>">
                                            <a href="<?php echo U('ResumeSend/resendSuccess');?>">
                                                被转发
                                            </a>
                                        </li>
                                        <li class="<?php echo ($topshow['noticeAudition']); ?>">
                                            <a href="<?php echo U('ResumeSend/noticeAudition');?>">
                                                通知面试
                                            </a>
                                        </li>
                                        <li class="<?php echo ($topshow['notby']); ?>">
                                            <a href="<?php echo U('ResumeSend/notBy');?>">
                                                不合适
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <form id="deliveryForm">
                                    <ul class="reset my_delivery">
                                        <?php if(is_array($result)): foreach($result as $key=>$vo): ?><li>
                                            <div class="d_item">
                                                <h2 title="<?php echo ($vo["job"]["name"]); ?>">
                                                    <a target="_blank" href="#">
                                                        <em>
                                                            <?php echo ($vo["job"]["name"]); ?>
                                                        </em>
                                                        <span>
                                                            （<?php echo ($vo["job"]["salary_low"]); ?>k-<?php echo ($vo["job"]["salary_high"]); ?>k）
                                                        </span>
                                                        <!-- -->
                                                    </a>
                                                </h2>
                                                <div class="clear">
                                                </div>
                                                <a title="公司名称" class="d_jobname" target="_blank" href="">
                                                    <?php echo ($vo["company"]["name"]); ?>
                                                    <span>
                                                        [<?php echo ($vo["company"]["city"]); ?>]
                                                    </span>
                                                </a>
                                                <span class="d_time">
                                                    <?php echo (date('Y年m月d日',$vo["modify_time"])); ?>
                                                </span>
                                                <div class="clear">
                                                </div>
                                                <div class="d_resume">
                                                    使用简历：
                                                    <span>
                                                        在线简历
                                                    </span>
                                                </div>
                                                <a class="btn_showprogress" href="javascript:;">
                                                    详细
                                                    <i>
                                                    </i>
                                                </a>
                                            </div>
                                            <div class="progress_status  dn">
                                                <ul class="status_steps">
                                                    <li class="status_<?php echo ($vo["state_1"]); ?> status_1">
                                                        1
                                                    </li>
                                                    <li class="status_line status_line_<?php echo ($vo["state_2"]); ?>">
                                                        <span>
                                                        </span>
                                                    </li>
                                                    <li class="status_<?php echo ($vo["state_2"]); ?>">
                                                        <span>
                                                            2
                                                        </span>
                                                    </li>
                                                    <li class="status_line status_line_<?php echo ($vo["state_3"]); ?>">
                                                        <span>
                                                        </span>
                                                    </li>
                                                    <li class="status_<?php echo ($vo["state_3"]); ?>">
                                                        <span>
                                                            3
                                                        </span>
                                                    </li>
                                                    <li class="status_line status_line_<?php echo ($vo["state_4"]); ?>">
                                                        <span>
                                                        </span>
                                                    </li>
                                                    <li class="status_<?php echo ($vo["state_4"]); ?>">
                                                        <span>
                                                            4
                                                        </span>
                                                    </li>
                                                </ul>
                                                <ul class="status_text">
                                                    <li>
                                                        投递成功
                                                    </li>
                                                    <li class="status_text_2">
                                                        简历被查看
                                                    </li>
                                                    <li class="status_text_3">
                                                        <?php echo ($vo["state_3_value"]); ?>
                                                    </li>
                                                    <li style="margin-left: 75px;*margin-left: 60px;" class="status_text_4">
                                                        <?php echo ($vo["state_4_value"]); ?>
                                                    </li>
                                                </ul>
                                                <ul class="status_list">
                                                    <li class="<?php echo ($vo["state_1_show"]); ?> <?php echo ($vo["state_1_dn"]); ?>">
                                                        <div class="list_time">
                                                            <em>
                                                            </em>
                                                            <?php echo (date('Y年m月d日',$vo["state_1_time"])); ?>
                                                        </div>
                                                        <div class="list_body">
                                                            简历投递成功
                                                        </div>
                                                    </li>
                                                    <li class="<?php echo ($vo["state_2_show"]); ?> <?php echo ($vo["state_2_dn"]); ?>">
                                                        <div class="list_time">
                                                            <em>
                                                            </em>
                                                            <?php echo (date('Y年m月d日',$vo["state_2_time"])); ?>
                                                        </div>
                                                        <div class="list_body">
                                                            HR查看了你的简历
                                                        </div>
                                                    </li>
                                                    <li class="<?php echo ($vo["state_3_show"]); ?> <?php echo ($vo["state_3_dn"]); ?>">
                                                        <div class="list_time">
                                                            <em>
                                                            </em>
                                                            <?php echo (date('Y年m月d日',$vo["state_3_time"])); ?>
                                                        </div>
                                                        <div class="list_body">
                                                            通过初步筛选
                                                        </div>
                                                    </li>
                                                    <li class="<?php echo ($vo["state_4_show"]); ?> <?php echo ($vo["state_4_dn"]); ?>">
                                                        <div class="list_time">
                                                            <em>
                                                            </em>
                                                            <?php echo (date('Y年m月d日',$vo["state_4_time"])); ?>
                                                        </div>
                                                        <div class="list_body">
                                                            <?php echo ($vo["state_4_value"]); ?>
                                                            <div><?php echo ($vo["state_4_say"]); ?></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <a class="btn_closeprogress" href="javascript:;">
                                                </a>
                                            </div>
                                        </li><?php endforeach; endif; ?>
                                    </ul>
                                    <input type="hidden" value="-1" name="tag" />
                                    <input type="hidden" value="" name="r" />
                                </form>
                            </dd>
                        </dl>
                    </div>
                    <div class="content_r">
                        <div class="mycenterR" id="myInfo">
                            <h2>我的信息</h2>
                            <a target="_blank" href="<?php echo U('CollectionJob/index');?>">我收藏的职位</a><br>
                            <a target="_blank" href="<?php echo U('ResumeSend/allSend');?>">我投递的职位<span class="red dn" id="noticeNoPage">&nbsp;(0)</span></a><br>
                            <a target="_blank" href="#">我订阅的职位</a>
                        </div>
                        <!--end #myInfo-->
                        <div class="mycenterR" id="myRecommend">
                            <h2>
                                可能适合你的职位
                                <i>
                                    匹配度
                                </i>
                            </h2>
                            <ul class="reset">
                                <li>
                                    <a target="_blank" href="http://www.lagou.com/jobs/22194.html">
                                        <span class="f16">
                                            产品经理
                                        </span>
                                        <span class="c7">
                                            广州百田
                                        </span>
                                        <em>
                                            92%
                                        </em>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.lagou.com/jobs/148004.html">
                                        <span class="f16">
                                            产品经理
                                        </span>
                                        <span class="c7">
                                            短讯神州
                                        </span>
                                        <em>
                                            92%
                                        </em>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.lagou.com/jobs/46793.html">
                                        <span class="f16">
                                            产品经理
                                        </span>
                                        <span class="c7">
                                            爱拍
                                        </span>
                                        <em>
                                            89%
                                        </em>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.lagou.com/jobs/99307.html">
                                        <span class="f16">
                                            产品经理
                                        </span>
                                        <span class="c7">
                                            一彩票
                                        </span>
                                        <em>
                                            88%
                                        </em>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.lagou.com/jobs/147510.html">
                                        <span class="f16">
                                            产品经理
                                        </span>
                                        <span class="c7">
                                            林安集团
                                        </span>
                                        <em>
                                            88%
                                        </em>
                                    </a>
                                </li>
                            </ul>
                            <a target="_blank" class="more" href="mList.html">
                                更多推荐职位&gt;&gt;
                            </a>
                        </div>
                        <!--end #myRecommend-->
                        <div class="greybg qrcode mt20">
                            <img width="242" height="242" alt="拉勾微信公众号二维码" src="/Public/HomeStyle/images/qr_delivery.png"
                            />
                            <span class="c7">
                                扫描拉勾二维码，微信轻松搜工作
                            </span>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="userid" name="userid" value="314873" />
                <div class="dn" id="recordPopBox">
                    <dl>
                        <dt>
                            评价面试体验
                            <a class="boxclose" href="javascript:;">
                            </a>
                        </dt>
                        <dd>
                            <form id="recordForm">
                                <input type="hidden" value="" id="recordId" />
                                <ul id="interviewResult" class="record_radio clearfix">
                                    <li class="mr35">
                                        已收到offer
                                        <input type="radio" name="type" value="1" />
                                    </li>
                                    <li>
                                        未收到offer
                                        <input type="radio" name="type" value="2" />
                                    </li>
                                </ul>
                                <div class="dividebtm">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td width="80" valign="top" align="right">
                                                    面试评分：
                                                </td>
                                                <td>
                                                    <ul id="recordStarSelect">
                                                        <li>
                                                        </li>
                                                        <li>
                                                        </li>
                                                        <li>
                                                        </li>
                                                        <li>
                                                        </li>
                                                        <li>
                                                        </li>
                                                    </ul>
                                                    <input type="hidden" id="recordStar" value="" name="recordStar" />
                                                    <div class="clear">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" align="right" class="dividebtman">
                                                    面试短评：
                                                </td>
                                                <td>
                                                    <input type="hidden" class="error" id="select_record_hidden" value=""
                                                    name="record" />
                                                    <input type="text" autocomplete="off" placeholder="15字以内对面试的简单描述哦" id="select_record"
                                                    class="selectr_340" maxlength="15" />
                                                    <div class="boxUpDownan boxUpDown_340 dn" id="box_record" style="display: none;">
                                                        <ul>
                                                            <p>
                                                                热门短评：
                                                            </p>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" align="right" class="dividebtman">
                                                    面试经历：
                                                </td>
                                                <td>
                                                    <textarea id="interviewDesc" placeholder="记录下自己的面试经历" style="width: 320px;">
                                                    </textarea>
                                                    <div class="word_count">
                                                        你还可以输入
                                                        <span>
                                                            500
                                                        </span>
                                                        字
                                                    </div>
                                                    <div id="showName" class="f14 c7">
                                                        <label class="checkbox">
                                                            <input type="checkbox" />
                                                            <i>
                                                            </i>
                                                        </label>
                                                        匿名提交
                                                    </div>
                                                    <input type="hidden" value="" id="isShowName" />
                                                    <input type="hidden" value="" id="senduid" />
                                                    <input type="hidden" value="" id="poid" />
                                                    <input type="hidden" value="" id="deid" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" colspan="2">
                                                    <input type="submit" value="确认提交" class="submitRecord btn_small" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </dd>
                    </dl>
                </div>
                <!-- end #recordPopBox -->
                <script src="/Public/HomeStyle/js/delivery.js">
                </script>
                <script>
                    $(function() {
                        //location.reload(true);
                        $('.Pagination').pager({
                            currPage: 1,
                            pageNOName: "pageNo",
                            form: "deliveryForm",
                            pageCount: 1,
                            pageSize: 5
                        });
                    });
                </script>
                <div class="clear">
                </div>
                <input type="hidden" value="" id="resubmitToken" />
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;">
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
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript">
        </script>
        <script src="/Public/HomeStyle/js/popup.min.js" type="text/javascript">
        </script>
        <!-- -->
        <script type="text/javascript">
            $(function() {
                $('#noticeDot-1').hide();
                $('#noticeTip a.closeNT').click(function() {
                    $(this).parent().hide();
                });
            });
            var index = Math.floor(Math.random() * 2);
            var ipArray = new Array('42.62.79.226', '42.62.79.227');
            var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
            var CallCenter = {
                init: function(url) {
                    var _websocket = new WebSocket(url);
                    _websocket.onopen = function(evt) {
                        console.log("Connected to WebSocket server.");
                    };
                    _websocket.onclose = function(evt) {
                        console.log("Disconnected");
                    };
                    _websocket.onmessage = function(evt) {
                        //alert(evt.data);
                        var notice = jQuery.parseJSON(evt.data);
                        if (notice.status[0] == 0) {
                            $('#noticeDot-0').hide();
                            $('#noticeTip').hide();
                            $('#noticeNo').text('').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                            $('#noticeNoPage').text('').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                        } else {
                            $('#noticeDot-0').show();
                            $('#noticeTip strong').text(notice.status[0]);
                            $('#noticeTip').show();
                            $('#noticeNo').text('(' + notice.status[0] + ')').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                            $('#noticeNoPage').text(' (' + notice.status[0] + ')').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                        }
                        $('#noticeDot-1').hide();
                    };
                    _websocket.onerror = function(evt) {
                        console.log('Error occured: ' + evt);
                    };
                }
            };
            CallCenter.init(url);
        </script>
        <div id="cboxOverlay" style="display: none;">
        </div>
        <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
            <div id="cboxWrapper">
                <div>
                    <div id="cboxTopLeft" style="float: left;">
                    </div>
                    <div id="cboxTopCenter" style="float: left;">
                    </div>
                    <div id="cboxTopRight" style="float: left;">
                    </div>
                </div>
                <div style="clear: left;">
                    <div id="cboxMiddleLeft" style="float: left;">
                    </div>
                    <div id="cboxContent" style="float: left;">
                        <div id="cboxTitle" style="float: left;">
                        </div>
                        <div id="cboxCurrent" style="float: left;">
                        </div>
                        <button type="button" id="cboxPrevious">
                        </button>
                        <button type="button" id="cboxNext">
                        </button>
                        <button id="cboxSlideshow">
                        </button>
                        <div id="cboxLoadingOverlay" style="float: left;">
                        </div>
                        <div id="cboxLoadingGraphic" style="float: left;">
                        </div>
                    </div>
                    <div id="cboxMiddleRight" style="float: left;">
                    </div>
                </div>
                <div style="clear: left;">
                    <div id="cboxBottomLeft" style="float: left;">
                    </div>
                    <div id="cboxBottomCenter" style="float: left;">
                    </div>
                    <div id="cboxBottomRight" style="float: left;">
                    </div>
                </div>
            </div>
            <div style="position: absolute; width: 9999px; visibility: hidden; display: none;">
            </div>
        </div>
    </body>

</html>