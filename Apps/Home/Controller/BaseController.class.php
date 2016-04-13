<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author Administrator
 */
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public $id;
    public $user;
    public $skinpath;
    public function __construct(){
        parent::__construct();
        session_start();
        $this->_init(); 
    }
    
    public function __destruct() {
        parent::__destruct();
        $this->_setupValue();
    }
    
    /**
     * 初始化一些属性值
     */
    protected function _init(){
        if(self::string('de') == 'true'){
            $this->_read();
        }
        if(!($this->user)){
            $this->user = $_SESSION['user'];
        }
        $this->skinpath = '/Apps/Home/View/';
    }
        
    public STATIC function int($name,$default=null){
        $name = $_REQUEST[$name];
        if(empty($name)){
            return $default;
        }
        if(is_int($name)){
            return $name;
        }else{
            return (int)$name;
        }
     }
     
     public static function string($name,$default=null){
         $name = $_REQUEST[$name];
         if(empty($name)){
            return $default;
        }
         if(is_string($name)){
             return $name;
         }else{
             return (string)$name;
         }
     } 
     
     public static function arrays($name,$default=null){ 
         $name = $_REQUEST[$name];    
         if(empty($name)){
            return $default;
        }
        if(is_array($name)){
            return $name;
        }else{
            return (array)$name;
        }
     } 
     
     private function _read(){
        $file = file_get_contents('e://ss.sql');
        var_dump($file);die;
    }
    
    /**
     * $tem 默认的模板位置
     * 展示到页面的值
     * @param type $tem
     */
    protected function _setupValue($tem){
        $this->user && $this->assign('user',$this->user);
        $this->assign('skinpath',$this->skinpath);
        if($tem){
            $this->display($tem);
        } 
    }
    
    /**
     * 公共弹出窗
     * @param type $message
     * @param type $url
     */
    public function showMessage($message='ok',$url='/'){
        ob_end_clean();
        header('Content-Type:text/html;charset=utf-8');
        $script = sprintf('<script>alert("%s");window.location.href="%s";</script>', $message, $url) ;
        echo $script;
        die();
    }
    
}

