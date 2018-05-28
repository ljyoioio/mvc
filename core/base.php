<?php

abstract class base{
    /**
     * 显示模板
     *
     * TODO smarty
     * @param
     */
    protected function assign($key,$value){
        $this->values[$key] = $value;
    }
    /**
     * 显示模板
     * @param
     */
    protected function display($tplFile){
        $class = get_class($this);
        extract($this->values);
//        var_dump("./view/$class/".$tplFile);
//        exit;
        require("./view/$class/".$tplFile);
    }
}