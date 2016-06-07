<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $aa="llallll";
        $this->assign("aa",$aa);
        $this->display();
    }
}