<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="#">
    
    <head>
        <script id="allmobilize" charset="utf-8" src="/Public/HomeStyle/js/allmobilize.min.js">
        </script>
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="alternate" media="handheld" />
        <!-- end 云适配 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            前端开发全国-职位搜索-拉勾网-最专业的互联网招聘平台
        </title>
        <meta property="qc:admins" content="23635710066417756375" />
        <meta content="前端开发招聘  全国地区招聘 紫色医疗招聘前端开发,月薪:10k-20k,要求:本科及以上学历,3-5年工作经验。职位诱惑：借移动医疗大势享受坐直升飞机的职场发展 公司规模:15-50人移动互联网 ,健康医疗类公司招聘信息汇总  最新最热门互联网行业招聘信息，尽在拉勾网"
        name="description">
        <meta content="前端开发招聘,全国地区前端开发招聘,紫色医疗招聘前端开发,移动互联网 类公司招聘信息汇总,健康医疗类公司招聘信息汇总,拉勾招聘,拉勾网,互联网招聘"
        name="keywords">
        <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
        <!-- <div class="web_root" style="display:none">h</div> -->
        <script type="text/javascript">
            var ctx = "h";
            console.log(1);
        </script>
        <link rel="Shortcut Icon" href="#">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css" />
        <script src="/Public/HomeStyle/js/jquery.1.10.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.lib.min.js">
        </script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/additional-methods.js">
        </script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="style/js/excanvas.js">
            </script>
        <![endif]-->
        <script type="text/javascript">
            var youdao_conv_id = 271546;
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/conv.js">
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
                <div class="sidebar">
                	<div class="greybg <?php echo ($search_c["all"]); ?>" id="selected">
                		<div>已选择</div>
               			<ul class="reset">
                            <li class="<?php echo ($search_c["salary_show"]); ?>"><span><strong>月薪范围</strong>：<?php echo ($search_c["salary"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>1));?>"><span class="select_remove"></span></a></li>
                            <li class="<?php echo ($search_c["work_year_show"]); ?>"><span><strong>工作经验</strong>：<?php echo ($search_c["work_year"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>2));?>"><span class="select_remove"></span></a></li>
                            <li class="<?php echo ($search_c["city_show"]); ?>"><span><strong>工作城市</strong>：<?php echo ($search_c["city"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>3));?>"><span class="select_remove"></span></a></li>
                            <li class="<?php echo ($search_c["edu_show"]); ?>"><span><strong>最低学历</strong>：<?php echo ($search_c["edu"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>4));?>"><span class="select_remove"></span></a></li>
                            <li class="<?php echo ($search_c["nature_show"]); ?>"><span><strong>工作性质</strong>：<?php echo ($search_c["nature"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>5));?>"><span class="select_remove"></span></a></li>
                            <li class="<?php echo ($search_c["name_show"]); ?>"><span><strong>工作性质</strong>：<?php echo ($search_c["name"]); ?></span><a href="<?php echo U('Search/clearCon',array('id'=>6));?>"><span class="select_remove"></span></a></li>
                        </ul>
           			</div>
                    <div id="options" class="greybg">
                        <dl>
                            <dt>
                                月薪范围
                                <em>
                                </em>
                            </dt>
                            <dd>
                                <div>2k以下</div>
                                <div>2k-5k</div>
                                <div>5k-10k</div>
                                <div>10k-15k</div>
                                <div>15k-25k</div>
                                <div>25k-50k</div>
                                <div>50k以上</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                工作经验
                                <em>
                                </em>
                            </dt>
                            <dd>
                                <div>不限</div>
                                <div>应届毕业生</div>
                                <div>1年以下</div>
                                <div>1-3年</div>
                                <div>3-5年</div>
                                <div>5-10年</div>
                                <div>10年以上</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                最低学历
                                <em>
                                </em>
                            </dt>
                            <dd>
                                <div>不限</div>
                                <div>大专</div>
                                <div>本科</div>
                                <div>硕士</div>
                                <div>博士</div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                工作性质
                                <em>
                                </em>
                            </dt>
                            <dd>
                                <div>全职</div>
                                <div>兼职</div>
                                <div>实习</div>
                            </dd>
                        </dl>
                    </div>
                    <!-- QQ群 -->
                    <div class="qq_group">
                        加入
                        <span>
                            前端
                        </span>
                        QQ群
                        <div class="f18">
                            跟同行聊聊
                        </div>
                        <p>
                            160541839
                        </p>
                    </div>
                    <!-- 对外合作广告位 -->
                    <a href="#" target="_blank" class="partnersAd">
                        <img src="/Public/HomeStyle/images/w3cplus.png" width="230" height="80" alt="w3cplus"
                        />
                    </a>
                    <a href="#" target="_blank" class="partnersAd">
                        <img src="/Public/HomeStyle/images/jquery_school.jpg" width="230" height="80" alt="JQ学校"
                        />
                    </a>
                    <a href="#" target="_blank" class="partnersAd">
                        <img src="/Public/HomeStyle/images/linuxcn.png" width="230" height="80" alt="Linux中文社区"
                        />
                    </a>
                    <a href="#"
                    target="_blank" class="partnersAd">
                        <img src="/Public/HomeStyle/images/zhubajie.jpg" width="230" height="80" alt="猪八戒"
                        />
                    </a>
                    <a href="#" target="_blank" class="partnersAd">
                        <img src="/Public/HomeStyle/images/muke.jpg" width="230" height="80" alt="幕课网" />
                    </a>
                    <!-- <a href="http://www.osforce.cn/" target="_blank" class="partnersAd">
                    <img src="style/images/osf-lg.jpg" width="230" height="80" alt="开源力量"  />
                    </a>
                    -->
                </div>
                <div class="content">
                    <div id="search_box">
                        <form name="searchForm" action="<?php echo U('Search/index');?>" method="get" id="searchform">
                            <ul id="searchType">
                                <li data-searchtype="1" class="type_selected">
                                    职位
                                </li>
                            </ul>
                            <div class="searchtype_arrow">
                            </div>
                            <input type="text" id="search_input" name="job" tabindex="1" value="<?php echo ($search_c["name"]); ?>"
                            placeholder="请输入职位名称，如：产品经理" />
                            <input type="hidden" name="address" id="addressInput" value="" />
                            <input type="hidden" name="salary" id="salaryInput" value="" />
                            <input type="hidden" name="workyear" id="workyearInput" value="" />
                            <input type="hidden" name="edu" id="eduInput" value="" />
                            <input type="hidden" name="nature" id="natureInput" value="" />
                            <input type="submit" id="search_button" value="搜索" />
                        </form>
                    </div>
                    <!--<style>
                        .ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border:
                        2px solid #91cebe;} .ui-autocomplete-category{font-size:16px;color:#999;width:50px;position:
                        absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top:
                        1px dashed #e5e5e5;padding:5px 0;} .ui-menu-item{ *width:439px;vertical-align:
                        middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right:
                        1px dashed #ededed;} .ui-menu-item a{display:block;overflow:hidden;}
                    </style>-->
                    <script type="text/javascript" src="/Public/HomeStyle/js/search.min.js">
                    </script>
                    <dl class="hotSearch">
                        <dt>
                            热门搜索：
                        </dt>
                        <dd>
                            <a href="#">Java</a>
                        </dd>
                        <dd>
                            <a href="#">PHP</a>
                        </dd>
                        <dd>
                            <a href="#">Android</a>
                        </dd>
                        <dd>
                            <a href="#">iOS</a>
                        </dd>
                        <dd>
                            <a href="#">前端</a>
                        </dd>
                        <dd>
                            <a href="#">产品经理</a>
                        </dd>
                        <dd>
                            <a href="#">UI</a>
                        </dd>
                        <dd>
                            <a href="#">运营</a>
                        </dd>
                        <dd>
                            <a href="#">BD</a>
                        </dd>
                        <dd>
                            <a href="#">实习</a>
                        </dd>
                    </dl>
                    <div class="breakline">
                    </div>
                    <dl class="workplace" id="workplaceSelect">
                        <dt class="fl">
                            工作地点：
                        </dt>
                        <dd>
                            <a href="javascript:;">全国</a>
                            |
                        </dd>
                        <dd>
                            <a href="<?php echo U('Search/index');?>" >北京</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">上海</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">广州</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">深圳</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">成都</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">杭州</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">武汉</a>
                            |
                        </dd>
                        <dd>
                            <a href="javascript:;">南京</a>
                            |
                        </dd>
                        <dd class="more">
                            <a href="javascript:;">
                                其他
                            </a>
                            <div class="triangle citymore_arrow">
                            </div>
                        </dd>
                        <dd id="box_expectCity" class="searchlist_expectCity dn">
                            <span class="bot">
                            </span>
                            <span class="top">
                            </span>
                            <dl>
                                <dt>
                                    ABCDEF
                                </dt>
                                <dd>
                                    <span>北京</span>
                                    <span>长春</span>
                                    <span>成都</span>
                                    <span>重庆</span>
                                    <span>长沙</span>
                                    <span>常州</span>
                                    <span>东莞</span>
                                    <span>大连</span>
                                    <span>佛山</span>
                                    <span>福州</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    GHIJ
                                </dt>
                                <dd>
                                    <span>贵阳</span>
                                    <span>广州</span>
                                    <span>哈尔滨</span>
                                    <span>合肥</span>
                                    <span>海口</span>
                                    <span>杭州</span>
                                    <span>惠州</span>
                                    <span>金华</span>
                                    <span>济南</span>
                                    <span>嘉兴</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    KLMN
                                </dt>
                                <dd>
                                    <span>昆明</span>
                                    <span>廊坊</span>
                                    <span>宁波</span>
                                    <span>南昌</span>
                                    <span>南京</span>
                                    <span>南宁</span>
                                    <span>南通</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    OPQR
                                </dt>
                                <dd>
                                    <span>青岛</span>
                                    <span>泉州</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    STUV
                                </dt>
                                <dd>
                                    <span>上海</span>
                                    <span>石家庄</span>
                                    <span>绍兴</span>
                                    <span>沈阳</span>
                                    <span>深圳</span>
                                    <span>苏州</span>
                                    <span>天津</span>
                                    <span>太原</span>
                                    <span>台州</span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    WXYZ
                                </dt>
                                <dd>
                                    <span>武汉</span>
                                    <span>无锡</span>
                                    <span>温州</span>
                                    <span>西安</span>
                                    <span>厦门</span>
                                    <span>烟台</span>
                                    <span>珠海</span>
                                    <span>中山</span>
                                    <span>郑州</span>
                                </dd>
                            </dl>
                        </dd>
                    </dl>
                    <div id="tip_didi" class="dn">
                        <span>
                            亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~
                        </span>
                        <a href="javascript:;">
                            我知道了
                        </a>
                    </div>
                    <ul class="hot_pos reset">
                        <?php if(is_array($result)): foreach($result as $key=>$vo): ?><li class="odd clearfix">
	                            <div class="hot_pos_l">
	                                <div class="mb10">
	                                    <a href="<?php echo U('JobShow/index',array('jid'=>$vo['id']));?>" title="前端开发" target="_blank">
	                                        <?php echo ($vo["name"]); ?>
	                                    </a>
	                                    &nbsp;
	                                    <span class="c9">
	                                        [<?php echo ($vo["city"]); ?>]
	                                    </span>
	                                </div>
	                                <span>
	                                    <em class="c7">
	                                        月薪：
	                                    </em>
	                                    <?php echo ($vo["salary_low"]); ?>k-<?php echo ($vo["salary_high"]); ?>k
	                                </span>
	                                <span>
	                                    <em class="c7">
	                                        经验：
	                                    </em>
	                                    <?php echo ($vo["work_year"]); ?>
	                                </span>
	                                <span>
	                                    <em class="c7">
	                                        最低学历：
	                                    </em>
	                                    <?php echo ($vo["edu"]); ?>
	                                </span>
	                                <br />
	                                <span>
	                                    <em class="c7">
	                                        职位诱惑：
	                                    </em>
	                                    <?php echo ($vo["welfare"]); ?>
	                                </span>
	                                <br />
	                                <span>
	                                    <?php echo (date('Y年m月d日',$vo["modify_time"])); ?>发布
	                                </span>
	                            </div>
	                            <div class="hot_pos_r">
	                                <div class="apply">
	                                    <a href="<?php echo U('JobShow/index',array('jid'=>$vo['id']));?>" target="_blank">
	                                        投个简历
	                                    </a>
	                                </div>
	                                <div class="mb10">
	                                    <a href="<?php echo U('Home/Index/showCompany', array('id'=>$vo[company][id]));?>" title="" target="_blank">
	                                        <?php echo ($vo["company"]["name"]); ?>
	                                    </a>
	                                </div>
	                                <span>
	                                    <em class="c7">
	                                        领域：
	                                    </em>
	                                    <?php echo ($vo["company"]["trade"]); ?>
	                                </span>
	                                <br />
	                                <span>
	                                    <em class="c7">
	                                        阶段：
	                                    </em>
	                                    <?php echo C('company_stage')[$vo['company']['stage']];?>
	                                </span>
	                                <span>
	                                    <em class="c7">
	                                        规模：
	                                    </em>
	                                    <?php echo C('company_scale')[$vo['company']['scale']];?>
	                                </span>
	                                <ul class="companyTags reset">
	                                	<?php if(is_array($vo["tag"])): foreach($vo["tag"] as $key=>$v): ?><li><?php echo ($v); ?></li><?php endforeach; endif; ?>
	                                </ul>
	                            </div>
	                        </li><?php endforeach; endif; ?>
                    </ul>
                    <div class="Pagination">
                    	<?php echo ($page); ?>
                    </div>
                </div>
                <div class="clear">
                </div>
                <input type="hidden" id="resubmitToken" value="" />
                <a id="backtop" title="回到顶部" rel="nofollow">
                </a>
            </div>
            <!-- end #container -->
        </div>
        <!-- end #body -->
        <div id="footer">
            <div class="wrapper">
                <a href="h/about.html" target="_blank" rel="nofollow">
                    联系我们
                </a>
                <a href="h/af/zhaopin.html" target="_blank">
                    互联网公司导航
                </a>
                <a href="#" target="_blank" rel="nofollow">
                    拉勾微博
                </a>
                <a class="footer_qr" href="javascript:void(0)" rel="nofollow">
                    拉勾微信
                    <i>
                    </i>
                </a>
                <div class="copyright">
                    &copy;2013-2014 Lagou
                    <a target="_blank" href="#">
                        京ICP备14023790号-2
                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/Public/HomeStyle/js/core.min.js">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/popup.min.js">
        </script>
        <!-- -->
    </body>
    <script>
    	//热门城市的搜索
    	$('#workplaceSelect').children('dd').children('a').click(function (){
    		$('#addressInput').val($(this).html());
    		$('#searchform').submit();
    	});
    	//全部城市的搜索
    	$('#box_expectCity').children('dl').children('dd').children('span').click(function (){
    		$('#addressInput').val($(this).html());
    		$('#searchform').submit();
    	});
    	//热门职位的搜索
    	$('.hotSearch').children('dd').children('a').click(function(){
    		$('#search_input').val($(this).html());
    		$('#searchform').submit();
    	});
    	//薪资栏搜索
    	$('#options').children('dl').children('dd').eq(0).children('div').click(function(){
    		$('#salaryInput').val($(this).html());
    		$('#searchform').submit();
    	});
    	//工作经验搜索
    	$('#options').children('dl').children('dd').eq(1).children('div').click(function(){
    		$('#workyearInput').val($(this).html());
    		$('#searchform').submit();
    	});
    	//学历搜索
    	$('#options').children('dl').children('dd').eq(2).children('div').click(function(){
    		$('#eduInput').val($(this).html());
    		$('#searchform').submit();
    	});
    	//工作性质搜索
    	$('#options').children('dl').children('dd').eq(3).children('div').click(function(){
    		$('#natureInput').val($(this).html());
    		$('#searchform').submit();
    	});
    </script>
</html>