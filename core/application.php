<?php

class application {

    public function __construct()
    {


    }

    final public function run()
    {
        $URI = $_SERVER['QUERY_STRING'];
        parse_str($URI);

        if($URI == ''){
            include_once ('./controller/index.php');

            $index = new index();

        }else{

            include_once ("./controller/$c.php");

            $con = new $c();
            $con->$a();
        }
    }
}