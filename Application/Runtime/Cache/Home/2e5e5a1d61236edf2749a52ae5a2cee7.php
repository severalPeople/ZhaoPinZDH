<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>发布新职位-招聘服务-拉勾网-最专业的互联网招聘平台 </title>
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="/favicon.ico" rel="Shortcut Icon">
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
        <link rel="stylesheet" href="/Public/HomeStyle/css/ui.css">
        <link rel="stylesheet" href="/Public/HomeStyle/css/window.css">

        <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/ueditor.config.js"></script>
        <script type="text/javascript">
            UEDITOR_CONFIG.toolbars = [[
                'fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'simpleupload', '', 'emotion', 'scrawl', '', '', 'attachment', 'map', '', 'insertframe', 'insertcode', '', 'pagebreak', '', '', '|',
                'horizontal', 'date', 'time', 'spechars', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                '', 'searchreplace', 'drafts', ''
            ]]
        </script>
        <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/ueditor.all.min.js"> </script>
        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
        <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/lang/zh-cn/zh-cn.js"></script>
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
            <li <?php if(job == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(job == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(job == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
            <li <?php if(job == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
            <li <?php if(job == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(job == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(job == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
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
            <li <?php if(job == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(job == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(job == 'handle'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/ResumeHandle/unhandle');?>" rel="nofollow">简历管理</a></li>
            <li <?php if(job == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
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
                <div class="sidebar">
                    <a class="btn_create" href="<?php echo U('Home/CompanyJob/create');?>">
                        发布新职位
                    </a>
                    <dl class="company_center_aside">
                        <dt>
                            我收到的简历
                        </dt>
                        <dd <?php if(unhandle == 'unhandle'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/unhandle');?>">
                                待处理简历
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'forward'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showAudition');?>">
                                已通知面试简历
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'notpass'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showNotpass');?>">
                                不合适简历
                            </a>
                        </dd>
                    </dl>
                    <dl class="company_center_aside">
                        <dt>
                            我发布的职位
                        </dt>
                        <dd <?php if(unhandle == 'positions'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/positions');?>">
                                有效职位
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'invalid'): ?>class="current"<?php endif; ?>>
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
                <div class="content">
                    <dl class="company_center_content">
                        <dt>
                            <h1>
                                <em></em>
                                发布新职位
                            </h1>
                        </dt>
                        <dd>
                            <form action="<?php echo U('Home/CompanyJob/doCreate');?>" method="post"
                            id="jobForm" name="jobForm" onsubmit="return $.sub(this);">
                                <input type="hidden" name="id" value="<?php echo ($job["id"]); ?>">
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">职位类别</td>
                                            <td>
                                                <input type="hidden" id="positionType" value="<?php echo ($type["name"]); ?>" name="positionType">
                                                <input type="button" placeholder="请选择职位类别" id="select_category" class="selectr selectr_380" value="<?php echo ($type["name"]); ?>">
                                                <div class="dn" id="box_job" style="display:none">
                                                    <?php foreach ($category as $key => $value): ?>
                                                    <dl>
                                                        <dt><?php echo ($value["name"]); ?></dt>
                                                        <dd>
                                                            <ul class="reset job_main">
                                                                <?php foreach ($value['child'] as $kk => $vv): ?>
                                                                <li>
                                                                    <span><?php echo ($vv["name"]); ?></span>
                                                                    <ul class="reset job_sub dn">
                                                                        <?php foreach ($vv['child'] as $k => $v): ?>
                                                                            <li><?php echo ($v["name"]); ?></li>
                                                                        <?php endforeach ?>
                                                                    </ul>
                                                                </li>
                                                                <?php endforeach ?>
                                                                
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                    <?php endforeach ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>
                                                职位名称
                                            </td>
                                            <td>
                                                <input type="text" placeholder="请输入职位名称，如：产品经理" value="<?php echo ($job["name"]); ?>" name="name" id="positionName">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                所属部门
                                            </td>
                                            <td>
                                                <input type="text" placeholder="请输入所属部门" value="<?php echo ($job["branch"]); ?>" name="branch" id="department">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">
                                                工作性质
                                            </td>
                                            <td>
                                                <ul class="profile_radio clearfix reset">
                                                    <li <?php if($job['nature'] == '全职'): ?>class="current"<?php endif; ?>>
                                                        全职
                                                        <em></em>
                                                        <input type="radio" name="nature" value="全职">
                                                    </li>
                                                    <li <?php if($job['nature'] == '兼职'): ?>class="current"<?php endif; ?>>
                                                        兼职
                                                        <em></em>
                                                        <input type="radio" name="nature" value="兼职">
                                                    </li>
                                                    <li <?php if($job['nature'] == '实习'): ?>class="current"<?php endif; ?>>
                                                        实习
                                                        <em></em>
                                                        <input type="radio" name="nature" value="实习">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>月薪范围</td>
                                            <td>
                                                <div class="salary_range">
                                                    <div>
                                                        <input type="text" placeholder="最低月薪" value="<?php echo ($job["salary_low"]); ?>" id="salaryMin" name="salary_low">
                                                        <span> k </span>
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="最高月薪" value="<?php echo ($job["salary_high"]); ?>" id="salaryMax" name="salary_high">
                                                        <span> k </span>
                                                    </div>
                                                    <span>只能输入整数，如：9</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>工作城市</td>
                                            <td>
                                                <input type="text" placeholder="请输入工作城市，如：北京" value="<?php echo ($job["city"]); ?>" name="city"
                                                id="workAddress">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">工作经验</td>
                                            <td>
                                                <input type="hidden" id="experience" value="<?php echo ($job["work_year"]); ?>" name="work_year">
                                                <input type="button" placeholder="请选择工作经验" id="select_experience" class="selectr selectr_380" value="<?php echo ($job["work_year"]); ?>">
                                                <div class="boxUpDown boxUpDown_380 dn" id="box_experience" style="display:none">
                                                    <ul>
                                                        <li>不限</li>
                                                        <li>应届毕业生</li>
                                                        <li>1年以下</li>
                                                        <li>1-3年</li>
                                                        <li>3-5年</li>
                                                        <li>5-10年</li>
                                                        <li>10年以上</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>学历要求</td>
                                            <td>
                                                <input type="hidden" id="education" value="<?php echo ($job["edu"]); ?>" name="edu">
                                                <input type="button" placeholder="请选择学历要求" id="select_education" class="selectr selectr_380" value="<?php echo ($job["edu"]); ?>">
                                                <div class="boxUpDown boxUpDown_380 dn" id="box_education" style="display:none">
                                                    <ul>
                                                        <li>不限</li>
                                                        <li>大专</li>
                                                        <li>本科</li>
                                                        <li>硕士</li>
                                                        <li>博士</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">
                                                职位诱惑
                                            </td>
                                            <td>
                                                <input type="text" placeholder="20字描述该职位的吸引力，如：福利待遇、发展前景等" value="<?php echo ($job["welfare"]); ?>" name="welfare" class="input_520" id="positionAdvantage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>职位描述</td>
                                            <td>
                                                <span class="c9 f14">
                                                    (建议分条描述工作职责等。请勿输入公司邮箱、联系电话等外链，否则将自动删除)
                                                </span>
                                                <textarea name="desc" id="positionDetail" class="tinymce" style="width:700px;height:500px;"><?php echo ($job["desc"]); ?></textarea>
                                                <span role="application" aria-labelledby="positionDetail_voice" id="positionDetail_parent" class="mceEditor defaultSkin">
                                                    <span class="mceVoiceLabel" style="display:none" id="positionDetail_voice">
                                                        富文本域
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <script type="text/javascript">
                                            var ue = UE.getEditor('positionDetail');
                                        </script>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>工作地址</td>
                                            <td>
                                                <input type="text" placeholder="请输入详细的工作地址" value="<?php echo ($job["address"]); ?>" name="address" class="input_520" id="positionAddress">
                                                <!-- <div class="work_place f14">
                                                    我们将在职位详情页以地图方式精准呈现给用户
                                                    <a id="mapPreview" href="javascript:;">
                                                        预览地图
                                                    </a>
                                                </div> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td colspan="2">
                                                接收简历邮箱：
                                                <span id="receiveEmailVal">
                                                    <?php echo ($company["email"]); ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25"></td>
                                            <td colspan="2">
                                                <!-- <input type="button" value="预览" id="jobPreview" class="btn_32"> -->
                                                <!-- <a id="jobPreview" href="javascript:;" class="btn_32" target="_blank">预览</a> -->
                                                <input type="submit" value="发布" id="formSubmit" class="btn_32">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </dd>
                    </dl>
                </div>
                <script src="/Public/HomeStyle/js/jobs.min.js" type="text/javascript"></script>
                <div class="clear"></div>
                <a rel="nofollow" title="回到顶部" id="backtop" style="display:none"></a>
            </div>
        </div>
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
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
        <script src="/Public/HomeStyle/js/popup.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $.extend({
                    sub : function(obj) {
                        var obj = $(obj);
                        $.ajax({
                            url : obj.attr('action'),
                            type : 'post',
                            data : obj.serialize(),
                            datatype : 'json',
                            success : function(data) {
                                if (data.code > 0) {
                                    window.location.href = data.url;
                                } else {
                                    alert(data.msg);
                                }
                            }
                        })
                        return false;
                    }
                })

                $('#jobPreview').click(function() {
                    $.ajax({
                        url : "<?php echo U('Home/CompanyJob/preview');?>",
                        data : $(this).parents('form').serialize(),
                        type : 'post',
                        success : function(data) {
                            window.location.href = data.url;
                        }
                    })
                })
            })
        </script>
    </body>

</html>