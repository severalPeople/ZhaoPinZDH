<?php
return array(

    //Memcache为缓存方式
    'DATA_CACHE_TYPE'=>'Memcache',
    //短信发送配置
    'DAYU_KEY' => '23634363',
    'DAYU_SECRET' => 'd3b749d9a46f4848ff430a44ec38a3a5',
    'CODE_TPL' => 'SMS_46830137',//验证码的模版:尊敬的${name},您的验证码为:${code},请赶快验证！

    // url
    'URL_MODEL'             => 2,
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'onejob',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'oj_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	'SHOW_PAGE_TRACE' 		=>	false,				//开启页面trace
	'DOMAIN'                =>  'http://www.onejob.com',
	'WEB_NAME'				=>	'11就业直达',
    
    'DEFAULT_FILTER'        =>  'htmlspecialchars,trim', // 默认参数过滤方法 用于I函数...
    'MODULE_ALLOW_LIST'    =>    array('Home','onejobmanage'),
    'DEFAULT_MODULE'       =>    'Home',
    'URL_MODULE_MAP'    =>    array('onejobmanage'=>'admin'),//模块映射的模块必须小写!不能写Admin
    'DEFAULT_CHARSET' => 'utf8',

    'PLUGIN_URL' =>'/'.APP_PATH.'Plugin/',
    //定义网站的域名地址(可以方便图片的显示)
    'SITE_URL'  => 'http://www.onejob.com',

    // email配置
    'email_host' => 'smtp.163.com',
    'email_port' => 25,
    'email_username' => 'CSmahongyuan@163.com',
    'email_pwd' => 'XXXXmm1000sq',
    'email_fromname' => '11就业直达',

    // 公司的配置文件
    // 公司的规模
    'company_scale' => array(
        0 => '少于15人',
        1 => '15-50人',
        2 => '50-150人',
        3 => '150-500人',
        4 => '500-2000人',
        5 => '2000人以上',
    ),

    // 公司发展阶段
    'company_stage' => array(
        0 => '天使轮',
        1 => 'A轮',
        2 => 'B轮',
        3 => 'C轮',
        4 => 'D轮及以上',
        5 => '上市公司',
        6 => '不需要融资',
    ),

    // 企业状态
    'company_state' => array(
        -1 => '未验证',
        1 => '已认证',
        2 => '未认证',
        3 => '正在申请认证',
        4 => '认证失败',
    ),

    // 城市系统
    'city' => array(
        'hot'=>array('全国', '北京', '上海', '广州', '深圳', '成都', '杭州', '武汉', '南京'),
        'other'=>array(
            ABCDEF=>array(
                '北京', '长春', '成都', '重庆', '长沙', '常州', '东莞', '大连', '佛山', '福州'
            ),
            GHIJ=>array(
                '贵阳', '广州', '哈尔滨', '合肥', '海口', '杭州', '惠州', '金华', '济南', '嘉兴'
            ),
            KLMN=>array(
                '昆明', '廊坊', '宁波', '南昌', '南京', '南宁', '南通'
            ),
            OPQR=>array(
                '青岛', '泉州'
            ),
            STUV=>array(
                '上海', '石家庄', '绍兴', '沈阳', '深圳', '苏州', '天津', '太原', '台州'
            ),
            WXYZ=>array(
                '武汉', '无锡', '温州', '西安', '厦门', '烟台', '珠海', '中山', '郑州'
            ),
        ),
)
);