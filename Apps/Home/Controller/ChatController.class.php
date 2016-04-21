<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of ChatController
 *
 * @author Administrator
 */
namespace Home\Controller;
class ChatController extends BaseController{
    //put your code here
    
    public function index(){
        $this->_setupValue('skin:chat');
    }
    
    /**
     * 离开事件
     */
    public function ajax_close(){              
        ignore_user_abort(false); 
        set_time_limit(0);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            file_put_contents('E://www/aa/'.time().'_'.rand(1,9999).'.txt', 'gugn');
            echo 11;die;
        }
    }
    
    /**
     * 进入事件
     */
    public function ajax_come(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            file_put_contents('e://jin.txt', 'gugn1');
            echo 11;die;
        }
    }
}
