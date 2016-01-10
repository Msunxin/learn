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
    public $user;
    public $skinpath;
    public function __construct(){
        parent::__construct();
        session_start();
        $this->_init();
        $this->skinpath = '/Apps/Home/View/';
    }
    protected function _init(){
        $this->user = $_SESSION['user'];
        $this->assign('skinpath',$this->skinpath);
    }
    
    public STATIC function int($name,$default=null){
        $name = $_REQUEST[$name];
        if(!isset($name)){
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
         if(!isset($name)){
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
         if(!isset($name)){
            return $default;
        }
        if(is_array($name)){
            return $name;
        }else{
            return (array)$name;
        }
     } 
}

