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
    public function register(){
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $params = $this->_getUser();
            $result = $this->m->insertUser($params);
            if($result){
                $this->showMessage('注册成功','../');
            }else{
                $this->showMessage('注册失败','../');
            }
         }
          $this->_setupValue('skin:index.register');
    }
    
    private function _getUser(){
        return array(
            'user' => BaseController::string('user'),
            'name' => BaseController::string('name'),
            'password' => BaseController::string('password'),
            'is_manger' => 0, //BaseController::int('is_manger'),
        );
    }
    
    public function checkuser(){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $user = BaseController::string('user');
            $data = $this->m->checkUser($user);
            if(empty($data)){
                echo json_encode(['code'=>200,'msg'=>'可以注册']);die;
            }else{
                echo json_encode(['code'=>500,'msg'=>'已经被注册']);die;
            }
        }
    }
    public function exitLogin(){
        session_start();
        session_destroy();
        session_unset();
        //unset($this->user);
        $this->showMessage('退出成功', '/');
    }
}