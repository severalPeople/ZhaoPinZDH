<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>基本信息-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script></script>
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
                <div style="" id="stepTip">
                    <a></a>
                    <img width="803" height="59" src="/Public/HomeStyle/images/tiponce.jpg">
                </div>
                <div class="content_mid">
                    <dl class="c_section c_section_mid">
                        <dt>
                            <h2>
                                <em></em>
                                填写公司信息
                            </h2>
                        </dt>
                        <dd>
                            <form id="stepForm" action="<?php echo U('Home/CompanyReg/step4');?>" method="post" onsubmit="return $.sub(this)">
                                <div class="c_text_1">
                                    基本信息为必填项，是求职者加速了解公司的窗口，认真填写吧！
                                </div>
                                <img width="668" height="56" class="c_steps" alt="第一步" src="/Public/HomeStyle/images/step1.png">
                                <h3>
                                    公司全称
                                    <span>
                                        <?php echo ($company["name"]); ?>
                                    </span>
                                </h3>
                                <h3>
                                    公司简称
                                </h3>
                                <!--非必填-->
                                <input type="text" placeholder="请输入公司简称，如:拉勾" value="" name="short_name" id="name" class="valid">
                                <h3>
                                    公司LOGO
                                </h3>
                                <!--非必填改必填-->
                                <div class="c_logo c_logo_pos">
                                    <a title="上传公司LOGO" class="inline cboxElement">
                                        <div class="dn" id="logoShow">
                                            <img width="190" height="190" alt="公司logo" src="">
                                            <span>
                                                更换公司LOGO
                                                <br>
                                                190px*190px 小于5M
                                            </span>
                                        </div>
                                        <input type="file" id="file1" name="file_logo" onchange="uploadFile();"/>
                                        <div id="logoNo">
                                            <span>
                                                上传公司LOGO
                                            </span>
                                            <br>
                                            尺寸：190*190px
                                            <br>
                                            大小：小于5M
                                        </div>
                                    </a>
                                </div>
                                <input type="hidden" id="logo_url" name="logo"/>
                                <h3>
                                    公司网址
                                </h3>
                                <input type="text" placeholder="请输入公司网址" value="" name="web" id="website">
                                <h3>
                                    所在城市
                                </h3>
                                <input type="text" placeholder="请输入工作城市，如：北京" name="city" id="city">
                                <h3>
                                    行业领域
                                </h3>
                                <div>
                                    <input type="text" placeholder="请选择行业领域" value="" name="trade" id="select_industry" style="cursor:pointer">
                                    <div class="dn" id="box_industry" style="display: none;" tabindex="0">
                                        <ul class="reset">
                                            <?php if(is_array($trade)): foreach($trade as $key=>$val): ?><li><?php echo ($val["name"]); ?></li><?php endforeach; endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <h3>
                                    公司规模
                                </h3>
                                <div>
                                    <input type="text" placeholder="请选择公司规模" value="" name="scale" id="select_scale" style="cursor:pointer">
                                    <div class="dn" id="box_scale" style="display: none;" tabindex="1">
                                        <ul class="reset">
                                            <?php foreach (C('company_scale') as $v) : ?>
                                            <li><?php echo ($v); ?></li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                </div>
                                <h3>
                                    发展阶段
                                </h3>
                                <div>
                                    <input type="hidden" id="s_radio_hidden" name="stage" value="">
                                    <ul class="s_radio clearfix s_radio_ex" id="box_stage">
                                        <?php foreach (C('company_stage') as $val): ?>
                                        <li><?php echo ($val); ?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <h3>
                                    一句话介绍
                                </h3>
                                <input type="text" placeholder="一句话概括公司亮点，如公司愿景、领导团队等，限50字" maxlength="50" name="one_desc" id="temptation">
                                <span style="display:none;" class="error" id="beError"></span>
                                <input type="submit" value="保存，下一步" id="stepBtn" class="btn_big fr">
                            </form>
                        </dd>
                    </dl>
                </div>
                <div class="clear"></div>
                <input type="hidden" value="13ae35fedd9e45cdb66fb712318d7369" id="resubmitToken">
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;">
                </a>
            </div>  
            <!-- end #container -->
        </div>
        <!-- end #body -->
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
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
        <!-- -->
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript"></script>
        <script type="text/javascript">

            function uploadFile() {
                 $.ajaxFileUpload({
                    url : '<?php echo U('Home/Public/upload');?>',
                    secureuri: false,
                    fileElementId: 'file1',
                    dataType: 'json',
                    success: function (data)  //服务器成功响应处理函数
                    {
                        if (data.code > 0) {
                            $('#logo_url').val(data.msg);
                            $('#logoShow').removeClass('dn');
                            data.msg = data.msg + '?' + parseInt(Math.random()*1000);
                            $('#logoShow').children('img').attr('src', data.msg);
                        } else {
                            alert(data.msg);
                        }
                
                    },
                })
            }

            jQuery(function($) {

                // 行业领域
                $('#select_industry').click(function() {
                    $('#box_industry').show();
                    $('#box_industry').focus();
                })
                $('#box_industry').find('li').on('click', function(){
                    var title = $(this).html();
                    var val = $(this).attr('data-val');
                    var tmp = $('#select_industry').val();
                   
                    if ($(this).hasClass('current')) {
                        $('#select_industry').val('');
                        $(this).removeClass('current');

                        var nhtml = '';
                        $('#box_industry').find('li.current').each(function(k, v){
                            nhtml = $(v).html()+',';
                        });
                        nhtml = nhtml.substr(0, nhtml.length-1);
                        $('#select_industry').val(nhtml);
                        return false;
                    } else {

                        // 这个是判断最大选择数
                        var tmpArr = tmp.split(',');
                        if (tmpArr.length >=2) {
                            alert('最多不允许超过2个');
                            $('#box_industry').hide();
                            return false;
                        }

                        $(this).addClass('current');
                    }

                    
                    if (tmp != undefined && tmp != '请选择行业领域' && tmp != '') {
                        title = tmp + ',' + title;
                    }

                    $('#select_industry').val(title);
                });

                
                $('#box_industry').blur(function(){
                    $(this).css('display', 'none');
                });


                $('#select_scale').click(function() {
                    $('#box_scale').show();
                    $('#box_scale').focus();
                })

                $('#box_scale').find('li').on('click', function() {
                    var title = $(this).html();
                    var tmp = '';

                    $('#select_scale').val(title);
                    var tmp = $('#select_scale').val();
                    $('#box_scale').hide();
                })
                $('#box_scale').blur(function(){
                    $(this).css('display', 'none');
                });

                $('#box_stage').find('li').click(function() {
                    $(this).addClass('current');
                    $(this).siblings().removeClass('current');
                    var title = $(this).html();
                    $('#s_radio_hidden').val(title);
                    var tmp = $('#s_radio_hidden').val();
                })

                $.extend({
                    sub : function(obj) {
                        var obj = $(obj);
                        $.ajax({
                            url : obj.attr('action'),
                            type : 'post',
                            data : obj.serialize(),
                            success : function(data) {
                                if (data.code > 0) {
                                    window.location.href = data.url;
                                } else {
                                    alert(data.msg);
                                    location.reload();
                                }
                            }
                        });
                        return false;
                    }
                })
            })
        </script>
    </body>

</html>