<?php
class Load{
    static $files = null;
    static $loadedfiles = null;
    static function setfiles($files){
        self::$files = $files;
    }

    static function run(){
        foreach(self::$files as $k => $v){
            $file = TURN_TABLE_ROOT.ucfirst(strtolower($v.".class.php"));
            if(file_exists($file)){
                require($file);
                self::$loadedfiles[] = $file;
            }
        }
    }
}

