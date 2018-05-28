<?php

include_once ('./core/base.php');

class index extends  base{

    public function index()
    {
        $key = 123;
        $key1 = 234;
        $this->assign('key',$key);
        $this->assign('key1',$key1);
        $this->display('index.php');
    }
}