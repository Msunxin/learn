<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObserverController
 *
 * @author s
 */
namespace Home\Controller;
class ObserverController extends BaseController {
    //put your code here
    public function index(){
        $this->_setupValue('skin:observer');
    }
}
