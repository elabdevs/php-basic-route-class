<?php

namespace Controllers;

class TestController {
    public static function testFunction(){
        echo "Test Controller.";
    }
    public static function testFunctionID($id){
        echo "Test Controller<br> Sended ID : $id";
    }
}