<?php

abstract class Turntable{
    abstract protected function createmap();//must do map
//    abstract protected function execute();
    //   abstract protected function createsql();
    abstract protected static function gettablename();

    function createsql(){
        $this->sql = "insert into `".$this->tablename."` ";
        foreach($this->map as $k => $v){
            $keys[] = "`".$k."`";
            $values[] = "'".@mysql_escape_string(Mk::getvalue($v, $this->data))."'";
        }
        $keypart = "(".implode(",", $keys).")";
        $valuepart = "(".implode(",", $values).")";
        $this->sql .= $keypart."values".$valuepart;
    }

    function execute(){
        global $db;
        $db->query($this->sql);
    }


}
