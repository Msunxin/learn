<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Model;
use Think\Model;
class BaseModel extends Model{
    public $code;
    public $message;
    public $sql;
    public $result;
    
    public function __construct() {
        parent::__construct();
        $this->_init();
    }

    public function __destruct(){
        $this->_dUser();
        $this->_dsql();
    }
    
    private function _init(){
        $this->sql = '';
        $this->result = '';
    }
    private function _dUser(){
        $result = array();
        $this->code && $result['code'] = $this->code ? $this->code : '';
        $this->message && $result['message'] = $this->message ? $this->message : '';
        $this->result && $result['result'] = $this->result ? $this->result : '';
    }
    
    private function _dsql(){
        $this->sql && $re['sql'] = $this->sql;
        $this->result && $re['result'] = $this->result;
        if($this->sql || $this->result) $this->_write(serialize($re));
    }
    public static function _write($result){
        if(file_exists('e://ss.sql')){
            unlink('e://ss.sql');
        }
        file_put_contents('e://ss.sql', $result);
    }
}
