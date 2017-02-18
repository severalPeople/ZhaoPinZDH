<?php
/**
 * 公司信息
 *
 *
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model;


class CompanyController extends Controller {

	public $com_id = 0;
    public $com_type = 0;
    public $company = array();

    public function _initialize() {
        //parent::_initialize();
        if(session('?company'))
        {
            $company = session('company');
            //var_dump($company);die;
            $company = M('users')->where("id = {$company['id']}")->find();
            session('company',$company);  //覆盖session 中的 company
            $this->company = $company;
            $this->com_id = $company['id'];
            $this->com_type = $company['type'];
            $this->assign('company',$company); //存储用户信息
            $this->assign('com_id',$this->com_id);
        }else{
            $nologin = array(
                'index','login','pop_login','doLogin','logout','verify','add_user','finished',
                'verifyHandle','register','logout','doLogin',
                'login','sendMail','add_user','ajaxRet',
            );
            if(!in_array(ACTION_NAME,$nologin)){
                header("location:".U('Home/Company/login'));
                exit;
            }
        }
        //用户中心面包屑导航
//        $navigate_user = navigate_user();
//        $this->assign('navigate_user',$navigate_user);
    }

	
	// 公司主页
	public function index()
	{
		$data['company_id'] = $this->com_id;

		$company = $this->comObj->where('id = '.$this->com_id)->find();
		$company['scale'] = C('company_scale')[$company['scale']];
		$company['stage'] = C('company_stage')[$company['stage']];
		
		$comTagObj = D('CompanyTag');
		$tagObj = D('Tag');
		$res = $comTagObj->where($data)->select();
		$str = '';
		if ($res) {
			foreach($res as $val) {
				$str .= $val['tag_id'].',';
			}
			$str = rtrim($str, ',');
			$where['id'] = array('in', $str);
			$tag = $tagObj->where($where)->select();
			$this->assign('tag', $tag);
		}
		$result1 = $tagObj->where('type > 0')->limit(12)->select();
		$result2 = $tagObj->where('type > 0')->limit('12,10')->select();

		$productObj = D('Product');
		$product = $productObj->where($data)->select();

		$teamObj = D('Team');
		$team = $teamObj->where($data)->select();

		$jobObj = D('Job');
		$job = $jobObj->where(array('company_id'=>$this->com_id))->select();
		$jobnum = $jobObj->where(array('company_id'=>$this->com_id))->count();

		$this->assign('company', $company);
		$this->assign('allTag1', $result1);
		$this->assign('allTag2', $result2);
		$this->assign('product', $product);
		$this->assign('team', $team);
		$this->assign('job', $job);
		$this->assign('jobnum', $jobnum);
		$this->display();
	}


	// 公司账号设置-密码重置
	public function updatePwd()
	{
		$this->display();

	// 	{"requestId":null,"code":0,"success":false,"msg":"当前密码错误，请重新输入",
		// "resubmitToken":null,"content":null}
	// 	{"requestId":null,"code":0,"success":true,"msg":"密码修改成功","resubmitToken":null,
		// "content":null}
	}

	// 密码重置操作
	public function dosettingPwd()
	{
		$data = I();
		$oldPassword = md5(trim($data['oldPassword']));
		$comObj = D('Company');
		$res = $comObj->where(array('id'=>$this->com_id))->find();
		if ($res['password'] != $oldPassword) {
			$msg['requestId'] = null;
			$msg['code'] = 0;
			$msg['success'] = false;
			$msg['msg'] = '当前密码错误,请重新输入';
			$msg['resubmitToken'] = null;
			$msg['content'] = null;

		} else {
			$save['id'] = $this->uid;
			$save['password'] = md5(trim($data['newPassword']));
            $comObj->save($save);
			session('company', null);
			cookie('state', null);
			$msg['requestId'] = null;
			$msg['code'] = 0;
			$msg['success'] = true;
			$msg['msg'] = '密码修改成功';
			$msg['resubmitToken'] = null;
			$msg['content'] = null;
			$msg['url'] = U('Home/Company/login');

		}
			$this->ajaxReturn($msg);
	}

	// 修改接收简历邮箱页面
	public function updateEmail()
	{
		$res = $this->comObj->where(array('id'=>$this->com_id))->find();
		$this->assign('email', $res['email']);
		$this->display();

		// {"content":{"data":{"record":790},"rows":[]},"message":"操作成功","state":1}
	}

	// 修改接收邮箱操作
	public function doSettingEmail()
	{
		$data = I();
		if (empty($data['receiveEmail'])) {
			$msg['content']['rows'] = [];
			$msg['message'] = '操作失败';
			$msg['state'] = 301;
			$this->ajaxReturn($msg);
		}
		$email = $data['receiveEmail'];
		$res = $this->comObj->where(array('id'=>$this->com_id))->find();
		if ($res['email'] == $email) {
			$msg['content']['rows'] = [];
			$msg['message'] = '操作失败';
			$msg['state'] = 302;
			$this->ajaxReturn($msg);
		}

		$save['id'] = $this->uid;
		$save['email'] = $email;
		$this->comObj->save($save);
		$msg['content']['rows'] = [];
		$msg['message'] = '操作成功';
		$msg['state'] = 1;

		$this->ajaxReturn($msg);
	}

    //公司登陆界面
    public function login(){
        if($this->com_id > 0){
            header("Location: ".U('Home/Company/Index'));
        }
        $referurl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : U("Home/Company/index");
        $this->assign('referurl',$referurl);
        $this->display();
    }
    //公司登录验证
    public function doLogin(){

        $username=$_POST['email'];
        $password=md5($_POST['password']);

        $referl_url = I('referurl');

        $msg['code'] = 0;
        $msg['msg'] = '登录失败';

        $companyMod=M('company');
        $result=$companyMod->where("account_name='$username'")->find();
        if($result['password'] == $password){

            $login['login_time']=time();
            $login['login_ip'] = $_SERVER['REMOTE_ADDR'];
            $companyMod->where("account_name='$username'")->save($login);
            $company=array('id'=>$result['id'],'account_name'=>$result['account_name'],'state' => $result['state'],'step' => $result['step']);
            session('company',$company);
            cookie('state', 1);

            $msg['code'] = 1;
            $msg['msg'] = '登录成功';
            $msg['redirect_url'] = deal_referurl($referl_url);
        }else{
            //$this->redirect('Company/login');

        }
        $this->ajaxReturn($msg);
    }
    //公司退出功能
    public function logout(){
        session('company',null);
        cookie('state',null);
        $this->redirect('Home/Index/index');
    }
    //公司注册成功跳转
//    public function wait(){
//        $this->display();
//    }
}