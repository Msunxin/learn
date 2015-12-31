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
        $this->_init();
        $this->skinpath = '/Apps/Home/View/';
    }
    protected function _init(){
        $this->assign('skinpath',$this->skinpath);
    }
}

