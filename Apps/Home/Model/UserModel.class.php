<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;
class UserModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }
    public function check($user,$pwd) {
        if(!$user || !$pwd){
            $this->code = 500;
            $this->message = 'id不全';
            return;
        };
        $this->sql = "SELECT id,user,name,is_manger FROM `t_user` WHERE `user`= '{$user}'   AND `password` = MD5('{$pwd}')";
        return $this->result = $this->query($this->sql);
    }
    
    public function insertUser($params){
        if(is_array($params)){
            return false;
        }
        $this->sql = "INSERT INTO `t_user` (`user`,`name`,`password`,`is_manger`) VALUES ({$params['user']},{$params['name']},{$params['password']},{$params['is_manger']})";
        return $this->result = $this->execute($this->sql);
    }
}