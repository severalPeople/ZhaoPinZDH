<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <script src="/Public/HomeStyle/js/allmobilize.min.js" charset="utf-8" id="allmobilize">
        </script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title><?php echo ($company["name"]); ?>-拉勾网-最专业的互联网招聘平台</title>
        <meta name="description" content="<?php echo ($company["name"]); ?> <?php echo ($company["name"]); ?> <?php echo ($company["city"]); ?> <?php echo ($company["trade"]); ?> <?php echo ($company["stage"]); ?> <?php echo ($company["scale"]); ?> <?php echo ($company["one_desc"]); ?>">
        <meta name="keywords" content="<?php echo ($company["name"]); ?> <?php echo ($company["name"]); ?> <?php echo ($company["city"]); ?> <?php echo ($company["trade"]); ?> <?php echo ($company["stage"]); ?> <?php echo ($company["scale"]); ?> <?php echo ($company["one_desc"]); ?>">
        <!-- <div class="web_root" style="display:none">http://www.lagou.com</div> -->
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
        <script src="/Public/HomeStyle/js/additional-methods.js" type="text/javascript"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/HomeStyle/js/excanvas.js">
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
                <div class="clearfix">
                    <div class="content_l">
                        <div class="c_detail">
                            <div style="background-color:#fff;" class="c_logo">
                                <a title="上传公司LOGO" id="logoShow" >
                                    <img class="logo_success" width="190" height="190" alt="公司logo" src="<?php echo ($company["logo"]); ?>">
                                </a>
                            </div>
                            <div class="c_box companyName">
                                <h2 title="<?php echo ($company["name"]); ?>">
                                    <?php echo ($company["name"]); ?>
                                </h2>
                                <?php if($company['state'] == 1): ?><em class="valid"></em>
                                    <span class="va dn">
                                        拉勾认证企业
                                    </span>
                                <?php else: ?>
                                    <em class="unvalid"></em>
                                    <span class="va dn">
                                        拉勾未认证企业
                                    </span><?php endif; ?>
                                <div class="clear"></div>
                                <h1 title="<?php echo ($company["name"]); ?>" class="fullname">
                                    <?php echo ($company["name"]); ?>
                                </h1>
                                <div class="clear oneword">
                                    <img width="17" height="15" src="/Public/HomeStyle/images/quote_l.png">
                                    &nbsp;
                                    <span>
                                        <?php echo ($company["one_desc"]); ?>
                                    </span>
                                    &nbsp;
                                    <img width="17" height="15" src="/Public/HomeStyle/images/quote_r.png">
                                </div>
                                <h3 class="dn">
                                    已选择标签
                                </h3>
                                <ul style="overflow:auto" id="hasLabels" class="reset clearfix">
                                    <?php if(is_array($tag)): foreach($tag as $key=>$val): ?><li><span><?php echo ($val["name"]); ?></span></li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="c_breakline"></div>
                        <div id="Product">
                            <?php if(is_array($product)): foreach($product as $key=>$proVal): ?><div class="product_wrap hasProduct">
                                <dl class="c_product">
                                    <dt>
                                        <h2>
                                            <em></em>
                                            公司产品
                                        </h2>
                                    </dt>
                                    <dd>
                                        <img width="380" height="220" alt="<?php echo ($proVal["name"]); ?>" src="<?php echo ($proVal["image"]); ?>">
                                        <div class="cp_intro">
                                            <h3>
                                                <a target="_blank" href="<?php echo ($proVal["link"]); ?>" class="proName">
                                                    <?php echo ($proVal["name"]); ?>
                                                </a>
                                            </h3>
                                            <div class="scroll-pane" style="overflow: hidden; padding: 0px; width: 260px;">
                                                <div class="jspContainer" style="width: 260px; height: 140px;">
                                                    <div class="jspPane" style="padding: 0px; top: 0px; width: 260px;">
                                                        <div class="proDesc">
                                                            <?php echo ($proVal["desc"]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                            </div><?php endforeach; endif; ?>
                        </div>
                        <!-- end #Product -->
                        <?php if(empty($company["desc"])): else: ?>
                        <div id="Profile">
                            <div class="profile_wrap">   
                                <dl class="c_section hasdesc">
                                    <dt>
                                        <h2>
                                            <em></em>
                                            公司介绍
                                        </h2>
                                    </dt>
                                    <dd>
                                        <div class="c_intro">
                                            <?php echo ($company["desc"]); ?>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div><?php endif; ?>
                        <!-- end #Profile -->
                        <!--[if IE 7]>
                            <br />
                        <![endif]-->
                        <!--无招聘职位-->
                        <?php if(empty($job)): else: ?>
                        <dl class="c_section">
                            <dt>
                                <h2>
                                    <em></em>
                                    招聘职位
                                </h2>
                                <span class="jobsTotal">
                                    该公司共有
                                    <i>
                                        <?php echo ($jobnum); ?>
                                    </i>
                                    个职位正在招聘
                                </span>
                            </dt>
                            <dd>
                                <ul class="reset c_jobs" id="jobList">
                                    <?php if(is_array($job)): foreach($job as $key=>$jobVal): ?><li>
                                        <a href="<?php echo U('Home/JobShow/index', array('jid'=>$jobVal['id']));?>" target="_blank">
                                            <h3>
                                                <span class="pos" title="<?php echo ($jobVal["name"]); ?>">
                                                    <?php echo ($jobVal["name"]); ?>
                                                </span>
                                                <span>
                                                    [<?php echo ($jobVal["city"]); ?>]
                                                </span>
                                            </h3>
                                            <span>
                                                <?php echo (date("y-m-d H:i:m",$jobVal["create_time"])); ?>
                                            </span>
                                            <div>
                                                <?php echo ($jobVal["nature"]); ?> / <?php echo ($jobVal["salary_high"]); ?>k-<?php echo ($jobVal["salary_low"]); ?>k / <?php echo ($jobVal["work_year"]); ?> / <?php echo ($jobVal["edu"]); ?>
                                            </div>
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </dd>
                        </dl><?php endif; ?>
                    </div>
                    <!-- end .content_l -->
                    <div class="content_r">
                        <div id="Tags">
                            <div id="c_tags_show" class="c_tags solveWrap">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="45">
                                                地点
                                            </td>
                                            <td class="companyCity">
                                                <?php echo ($company["city"]); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                领域
                                            </td>
                                            <!-- 支持多选 -->
                                            <td title="<?php echo ($company["trade"]); ?>" class="companyTrade">
                                                <?php echo ($company["trade"]); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                规模
                                            </td>
                                            <td class="companyScale">
                                                <?php echo ($company["scale"]); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                主页
                                            </td>
                                            <td>
                                                <a rel="nofollow" title="http://www.weimob.com" target="_blank" href="<?php echo ($company["web"]); ?>" class="companyWeb">
                                                   <?php echo ($company["web"]); ?>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end #Tags -->
                        <dl class="c_section c_stages">
                            <dt>
                                <h2>
                                    <em></em>
                                    融资阶段
                                </h2>
                            </dt>
                            <dd>
                                <ul class="reset stageshow">
                                    <li>
                                        目前阶段：
                                        <span class="c5">
                                            <?php echo ($company["stage"]); ?>
                                        </span>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                        <!-- end .c_stages -->
                        <?php if(empty($team)): else: ?>
                        <div id="Member">
                            <!--有创始团队-->
                            <dl class="c_section c_member">
                                <dt>
                                    <h2>
                                        <em></em>
                                        创始团队
                                    </h2>
                                </dt>
                                <dd>
                                    <?php if(is_array($team)): foreach($team as $key=>$teamVal): ?><div class="member_wrap hasTeam">
                                        <div class="member_info">
                                            <div class="m_portrait">
                                                <div></div>
                                                <img width="120" height="120" alt="<?php echo ($teamVal["name"]); ?>" src="<?php echo ($teamVal["image"]); ?>">
                                            </div>
                                            <div class="m_name">
                                                <?php echo ($teamVal["name"]); ?>
                                                <?php if(empty($teamVal["weibo"])): else: ?>
                                                <a target="_blank" class="weibo" href="<?php echo ($teamVal["weibo"]); ?>"></a><?php endif; ?>
                                            </div>
                                            <div class="m_position">
                                                <?php echo ($teamVal["position"]); ?>
                                            </div>
                                            <div class="m_intro">
                                                <?php echo ($teamVal["desc"]); ?>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; ?>
                                    <!-- end .member_wrap -->
                                </dd>
                            </dl>
                        </div><?php endif; ?>
                        <!-- end #Member -->
                    </div>
                </div>
                <script src="/Public/HomeStyle/js/company.min.js" type="text/javascript"></script>
                <div class="clear"></div>
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
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
        <script type="text/javascript">

            /**
             * @param string 上传地址
             * @param string file表单id
             * @param string 要修改的dom节点
             */
            function uploadFile(url, file_id, class_id) {
                var url = url;
                var file_id = file_id;
                var file_obj = $('#'+file_id);
                var class_obj = $('.'+class_id);
                var n = $('#'+file_id).next();
                console.log(file_obj.attr('name'));
                $.ajaxFileUpload({
                    url : url,
                    fileElementId : file_id,
                    secureuri: false,
                    dataType : 'json',
                    data : {fid:file_obj.attr('name'), id:file_obj.attr('id')},
                    type : 'post',
                    success : function(data) {
                        console.log(data);
                        n.val(data.url);
                        data.url = data.url + '?' + parseInt(Math.random()*10000);
                        class_obj.attr('src', data.url);
                    }
                })
            }

            jQuery(function($) {
                if ($('.hasProduct').length <= 0) {
                    $('.no_product').removeClass('dn');
                }

                if ($('.hasTeam').length <= 0) {
                    $('.noTeam').removeClass('dn');
                }

                $.extend({
                    sub : function(obj) {
                        obj = $(obj);
                        $.ajax({
                            url : obj.attr('action'),
                            type : 'post',
                            data : obj.serialize(),
                            success : function(data) {

                                if (data.code == 0) {
                                    $('.fullname').html(data.name);
                                    $('.fullname').attr('title', data.name);
                                    $('.oneword').children('span').html(data.one_desc);
                                    obj.parents('#c_tags_edit').addClass('dn');
                                    obj.parents('#c_tags_edit').prev().removeClass('dn');
                                    obj.parents('#c_tags_edit').prev().find('.companyCity').html(data.city);
                                    obj.parents('#c_tags_edit').prev().find('.companyTrade').html(data.trade);
                                    obj.parents('#c_tags_edit').prev().find('.companyTrade').attr('title', data.trade);
                                    obj.parents('#c_tags_edit').prev().find('.companyScale').html(data.scale);
                                    obj.parents('#c_tags_edit').prev().find('.companyWeb').html(data.web);
                                    obj.parents('#c_tags_edit').prev().find('.companyWeb').attr('title', data.web);
                                    obj.parents('#c_tags_edit').prev().find('.companyWeb').attr('href', data.web);
                                    obj.addClass('dn');
                                    obj.prev().removeClass('dn');
                                    obj.prev().find('.c5').html(data.stage);
                                } else if (data.code == 1) {
                                    obj.parents('dl').addClass('dn');
                                    obj.parents('dl').next().removeClass('dn');
                                    obj.parents('dl').next().find('img').attr('alt', data.name);
                                    obj.parents('dl').next().find('h3').children('a').attr('href', data.link).html(data.name);
                                    data.image = data.image + '?' + parseInt(Math.random()*10000);
                                    obj.parents('dl').next().find('img').attr('src', data.image);
                                    obj.parents('dl').next().find('.proDesc').html(data.desc);
                                } else if (data.code == 2) {
                                    obj.parents('dl').addClass('dn');
                                    obj.parents('dl').next().removeClass('dn');
                                    obj.parents('dl').next().find('.c_intro').html(data.desc);
                                } else if (data.code == -1) {
                                    obj.parents('dl').addClass('dn');
                                    obj.parents('dl').prev().removeClass('dn');
                                } else if (data.code == 3) {
                                    obj.parents('.member_info').addClass('dn');
                                    obj.parents('.member_info').next().removeClass('dn');
                                    obj.parents('.member_info').next().find('img').attr('alt', data.name);
                                    obj.parents('.member_info').next().find('img').attr('src', data.image);
                                    obj.parents('.member_info').next().find('.m_name').html(data.name);
                                    obj.parents('.member_info').next().find('.m_name').children('a').attr('href', data.weibo);
                                    obj.parents('.member_info').next().find('.m_position').html(data.position);
                                    obj.parents('.member_info').next().find('.m_intro').html(data.desc);
                                }
                            }
                        })
                        return false;
                    }
                })

                $('#saveDetail').click(function() {
                    $(this).parent().addClass('dn');
                })

                $('#saveLabels').click(function() {
                    var a=[];
                    $("#hasLabels").children().each(function(){
                        a.push($(this).children("span").text());
                    }),
                    $("#hasLabels li").each(function() {
                        $(this).find("i").remove()
                    }),
                    $("#addLabels").hide(),
                    $("#hasLabels").append('<li class="link">编辑</li>'),
                    $.ajax({
                        type:"POST",
                        data:{labels:a.join()},
                        url: "<?php echo U('Home/CompanyInfo/label');?>",
                        success : function(data) {
                        }
                    })
                })

                $('.product_delete').click(function() {
                    if (confirm('你确定删除此产品?')){
                        $.ajax({
                            url : "<?php echo U('Home/CompanyProduct/delete');?>",
                            data : $(this).parents('form').serialize(),
                            type : 'post',
                            sussecc : function(data) {
                            }
                        })
                        $(this).parents('.product_wrap').empty();
                    } else {
                        $(this).parents('dl').addClass('dn');
                        $(this).parents('dl').next().removeClass('dn');
                    }
                })

                $('#editIntro').click(function() {
                    $(this).parents('dl').addClass('dn');
                    $(this).parents('dl').prev().removeClass('dn');
                })

                $('#addIntro').click(function() {
                    $(this).parents('dl').addClass('dn');
                    $(this).parents('dl').next().removeClass('dn');
                })

                $('#delProfile').click(function() {
                    $(this).parents('dl').addClass('dn');
                    $(this).parents('dl').next().removeClass('dn');
                })

                $('.stage_edit').click(function() {
                    $(this).parents('dt').next().find('.stageshow').addClass('dn');
                    $(this).parents('dt').next().find('form').removeClass('dn');
                })

                $('#cancelStages').click(function() {
                    $(this).parents('form').addClass('dn');
                    $(this).parents('form').prev().removeClass('dn');
                })

                $('.member_delete').click(function() {
                    if (confirm('are you sur')){
                        $.ajax({
                            url : "<?php echo U('Home/CompanyTeam/delete');?>",
                            data : $(this).parents('form').serialize(),
                            type : 'post',
                            sussecc : function(data) {
                            }
                        })
                        $(this).parents('.member_wrap').empty();
                    } else {
                        $(this).parents('.member_info').addClass('dn');
                        $(this).parents('.member_info').next().removeClass('dn');
                    }
                })

            })
        </script>
    </body>

</html>