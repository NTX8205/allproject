<?php
namespace Model;
use Database\MyDatabase;
//use ;

$ss = new Test();
$ss->test();
class Test{
    public function test(){
        echo "test";
        $db = new MyDatabase();
        $ss = new Model\User();
        $ss->createUser();
    }
}

