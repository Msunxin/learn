<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function __construct() {
        parent::__construct();       
        $this->m = new \Home\Model\UserModel();
    }
    public function index(){    
        $this->_setupValue('skin:index');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
            $a = BaseController::string('id','sun');
            $b = BaseController::string('psw','111');
            $result = $this->m->check($a, $b);
            if(is_array($result) && !empty($result)){
                $_SESSION['user'] = $result; 
                $res = array('code'=>200,'msg'=>'登录成功');
                echo json_encode($res);   die;
            }else{
                $res = array('code'=>500,'msg'=>'登录失败');
                echo json_encode($res); die;
            }  
        }
        $res = array('code'=>500,'msg'=>'登录方式错误');
        echo json_encode($res); die;
        
    }
    
    /**
     * 注册用户
     */
    public function addUser(){
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $params = $this->_getUser();
            $result = $this->m->insertUser($params);
         }
    }
    
    private function _getUser(){
        return array(
            'user' => BaseController::string('user'),
            'name' => BaseController::string('name'),
            'password' => BaseController::string('password'),
            'is_manger' => BaseController::int('is_manger'),
        );
    }
    public function exitLogin(){
        session_start();
        session_destroy();
        session_unset();
        //unset($this->user);
        $this->showMessage('退出成功', '/');
    }
}