<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function __construct() {
        parent::__construct();       
        $this->id = 'sun';
        $this->psw = '111';
    }
    public function index(){    
        $this->assign('skinpath',$this->skinpath);
        $this->display('skin:index');
    }
    public function login(){
        $a = BaseController::int('id');
        $b = BaseController::int('psw');
        if($a == $this->id && $b == $this->psw){
            $res = array('code'=>200,'msg'=>'登录成功','id'=>$a,'time'=>time(),'ip'=>$_SERVER['REMOTE_ADDR']);
            $_SESSION['user'] = array('code'=>200,'msg'=>'登录成功','id'=>$a,'time'=>time(),'ip'=>$_SERVER['remote_addr']);
            echo json_encode($res);
        }else{
            $res = array('code'=>500,'msg'=>'登录失败');
            echo json_encode($res);
        }
        die;
    }
}