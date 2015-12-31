<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author Administrator
 */
namespace Home\Controller;
class loginController extends BaseController{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->assign('skinpath',$this->skinpath);
        $this->display('skin:login');
    }
}
