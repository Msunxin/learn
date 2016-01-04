<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function __construct() {
        parent::__construct();       
    }
    public function index(){       
        $this->assign('skinpath',$this->skinpath);
        $this->display('skin:index');
    }
    public function login(){
        echo 11;
    }
}