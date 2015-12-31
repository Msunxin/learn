<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->assign('skinpath',$this->skinpath);
    }
    public function index(){       
        $this->display('skin:index');
    }
    public function se(){
        echo 11;
    }
}