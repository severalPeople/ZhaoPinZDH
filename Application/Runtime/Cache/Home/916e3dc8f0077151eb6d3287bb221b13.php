<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10;IE=9;IE=8;IE=7;IE=EDGE">
<!-- <script id="allmobilize" charset="utf-8" src="${rbase}/js/third/allmobilize.min.js"></script> -->
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="alternate" media="handheld" href="#">
<!-- end 云适配 -->
<meta charset="utf-8">

<title>我收藏的职位-招聘服务-拉勾网-最专业的互联网招聘平台</title>
<script type="text/javascript">
var ctx = "http://www.lagou.com";
var rctx = "http://hr.lagou.com";
</script><link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css">
<script type="text/javascript" src="/Public/HomeStyle/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/HomeStyle/js/jquery_002.js"></script>
<script type="text/javascript" src="/Public/HomeStyle/js/core.min.js"></script>
<script type="text/javascript" src="/Public/HomeStyle/js/collections.js"></script>
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
    <div id="container">
                
        <div class="clearfix">
            <div class="content_l">
                <dl class="c_collections">
                    <dt>
                        <h1><em></em>我收藏的职位</h1>
                    </dt>
                    <dd>
                        <form id="collectionsForm">
                            <ul class="reset my_collections">
                                <?php if(is_array($result)): foreach($result as $key=>$vo): ?><li data-id="245610">
                                    <a href="<?php echo U('JobShow/index',array(jid=>$vo['id']));?>" target="_blank" title="师盛">
                                        <img src="<?php echo ($vo["company"]["logo"]); ?>" alt="师盛">
                                    </a>
                                    <div class="co_item">
                                        <h2 title="PHP 程序员">
                                            <a href="<?php echo U('JobShow/index',array(jid=>$vo['id']));?>" target="_blank">
                                                <em><?php echo ($vo["name"]); ?></em> 
                                                <span>（<?php echo ($vo["salary_low"]); ?>k-<?php echo ($vo["salary_high"]); ?>k）</span>
                                            </a>
                                        </h2>
                                        <span class="co_time">发布时间：<?php echo (date('Y年m月d日',$vo["modify_time"])); ?></span>
                                        <div class="co_cate"><?php echo ($vo["company"]["name"]); ?> / <?php echo ($vo["address"]); ?> / <?php echo ($vo["work_year"]); ?> / <?php echo ($vo["edu"]); ?></div>
                                        <span class="co_youhuo c7"><?php echo ($vo["welfare"]); ?></span>
                                        <a href="<?php echo U('JobShow/index',array('jid'=>$vo['id']));?>" target="_blank" class="collection_link <?php echo ($vo["show_2"]); ?>">投个简历</a>
                                        <span class="collection_status <?php echo ($vo["show_1"]); ?>">已投递</span>
                                        <i></i>
                                        <a href="<?php echo U('CollectionJob/jobDel',array('jid'=>$vo['id']));?>" class="collection_link">
                                            取消收藏
                                        </a>
                                        </div>
                                    </li><?php endforeach; endif; ?>
                            </ul>
                        </form>
                    </dd>
                </dl>
            </div>  
            <div class="content_r">
                <div id="myInfo" class="mycenterR">
                    <h2>我的信息</h2>
                    <a target="_blank" href="<?php echo U('CollectionJob/index');?>">我收藏的职位</a><br>
                    <a target="_blank" href="<?php echo U('ResumeSend/allSend');?>">我投递的职位<span class="red dn" id="noticeNoPage">&nbsp;(0)</span></a><br>
                    <a target="_blank" href="#">我订阅的职位</a>                   
                </div><!--end #myInfo-->
                                <div id="myRecommend" class="mycenterR">
                    <h2>可能适合你的职位 <i>匹配度</i></h2>
                    <ul class="reset">
                                                <li>
                            <a href="http://www.lagou.com/jobs/116886.html" target="_blank">
                                <span class="f16">php程序员</span>
                                <span class="c7">合优网络</span>
                                <em>90%</em>
                            </a>
                        </li>
                                                <li>
                            <a href="http://www.lagou.com/jobs/245610.html" target="_blank">
                                <span class="f16">PHP 程序员</span>
                                <span class="c7">师盛</span>
                                <em>90%</em>
                            </a>
                        </li>
                                                <li>
                            <a href="http://www.lagou.com/jobs/249835.html" target="_blank">
                                <span class="f16">PHP程序员</span>
                                <span class="c7">假行僧旅行网</span>
                                <em>90%</em>
                            </a>
                        </li>
                                                <li>
                            <a href="http://www.lagou.com/jobs/261034.html" target="_blank">
                                <span class="f16">PHP程序员</span>
                                <span class="c7">微顺科技</span>
                                <em>90%</em>
                            </a>
                        </li>
                                                <li>
                            <a href="http://www.lagou.com/jobs/281541.html" target="_blank">
                                <span class="f16">PHP程序员</span>
                                <span class="c7">多脉信息技术有限公司</span>
                                <em>89%</em>
                            </a>
                        </li>
                                            </ul>
                                        <a href="http://www.lagou.com/jobs/mList.html" class="more" target="_blank">更多推荐职位&gt;&gt;</a>
                                    </div><!--end #myRecommend-->
                                <div class="greybg qrcode mt20">
                    <img src="%E6%88%91%E6%94%B6%E8%97%8F%E7%9A%84%E8%81%8C%E4%BD%8D-%E6%8B%9B%E8%81%98%E6%9C%8D%E5%8A%A1-%E6%8B%89%E5%8B%BE%E7%BD%91-%E6%9C%80%E4%B8%93%E4%B8%9A%E7%9A%84%E4%BA%92%E8%81%94%E7%BD%91%E6%8B%9B%E8%81%98%E5%B9%B3%E5%8F%B0_files/qr_delivery.png" alt="拉勾微信公众号二维码" height="242" width="242">
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
            </div>
        </div>
            <div class="clear"></div>
            <input id="resubmitToken" value="e35a92d89b38454cbbbd72144b611136" type="hidden">
            <a id="backtop" title="回到顶部" rel="nofollow"></a>
        </div><!-- end #container -->
    </div><!-- end #body -->
    <div id="footer">
        <div class="wrapper">
            <a href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
            <a href="http://www.lagou.com/af/zhaopin.html" target="_blank">互联网公司导航</a>
            <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
            <div class="copyright">©2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
        </div>
    </div>