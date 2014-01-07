<?php
//ini_set("display_errors","on");
error_reporting(E_ALL);
require_once(dirname(__FILE__)."/turn/main.php");
class Main{
    static function run($start){
        $command = new Command($start);
        $command->run();
    }
}

$start = intval($_POST['start']);
if($_POST['do'] == 'start'){
    Main::run($start);
    $next = $start + 50;
    $result = json_encode(array('next' => $next));
    exit($result);
}

include("template/index.html");