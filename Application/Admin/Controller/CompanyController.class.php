<?php
/**
 * 公司列表
 *
 * @author 	wangz
 * @date 	2014-10-29
 * @version 1.0
 */
namespace Admin\Controller;

class CompanyController extends BaseController {

	protected $companyObj = null;

	public function __construct()
	{
		parent::__construct();
		$this->companyObj = M('Company');
	}

	/**
	 * 公司列表
	 */
	public function index()
	{
		$map = I();
		$where = array_filter($map);
		if (isset($where['name']))
			$where['name'] = array('LIKE', $where['name'].'%');

		$total = $this->companyObj->where($where)->count();
		$Page = new \Think\Page($total, 50);
		$data = $this->companyObj->where($where)->limit($Page->firstRow, $Page->listRows)->select();
		
		$this->assign('map', $map);
		$this->assign('data', $data);
		$this->assign('page', $Page->show());
		$this->display();
	}

	/**
	 * 公司申请列表
	 */
	public function apply()
	{
		$where['state'] = 3;
		$total = $this->companyObj->where($where)->count();
		$Page = new \Think\Page($total, 100);
		$data = $this->companyObj->where($where)->limit($Page->firstRow, $Page->listRows)->select();

		$this->assign('data', $data);
		$this->assign('page', $Page->show());
		$this->display();
	}

	/**
	 * 审核通过
	 */
	public function check()
	{
		$id = I('get.id');
		$data['id'] = $id;
		$data['state'] = 1;
		$rs = $this->companyObj->save($data);

		$msg['code'] = 1;
		$msg['msg'] = '审核成功';
		$this->ajaxReturn($msg);
	}

    /**
     * 审核不通过
     */
    public function uncheck()
    {
        $id = I('get.id');
        $this->assign('id', $id);
        $this->display();
    }

	/**
	 * 禁用公司
	 */
	public function deny()
	{
		$id = I('get.id');
		$data['id'] = $id;
		$data['status'] = 0;
		$rs = $this->companyObj->save($data);

		$msg['code'] = 1;
		$msg['msg'] = '禁用成功';
		$this->ajaxReturn($msg);
	}

	/**
	 * 启用公司
	 */
	public function allow()
	{
		$id = I('get.id');
		$data['id'] = $id;
		$data['status'] = 1;
		$rs = $this->companyObj->save($data);

		$msg['code'] = 1;
		$msg['msg'] = '启用成功';
		$this->ajaxReturn($msg);
	}

    /**
     * 修改公司可发布招聘数
     */
    public function new_job_num_edit()
    {
        $id = I('get.id');
        //var_dump($id);die;
        if(!$id) {
            die;
        }
        $where = array(
            'id' => $id,
        );
        $info = $this->companyObj->where($where)->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function new_job_num_doEdit()
    {
        if (IS_POST) {
            $data['id'] = I('id');
            $data['new_job_num'] = I('num');

            $msg['code'] = 0;
            $msg['msg'] = '修改失败';
            if (is_numeric($data['id']) && is_numeric($data['new_job_num'])) {
                $where = array(
                    'id' => $data['id'],
                );
                $save = array(
                    'new_job_num' => $data['new_job_num']
                );
                $rs = $this->companyObj->where($where)->save($save);

                if($rs) {
                    $msg['code'] = 1;
                    $msg['msg'] = '修改成功';
                }
            }


            return $this->ajaxReturn($msg);
        }

    }


}