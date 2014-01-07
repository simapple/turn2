<?php

class Getvaluefactory{
    private $method = array(
        'default','func','map'  
    );
    function __construct($map,$data, $key = null){
        $this->data = $data;
        $this->map = $map;
        $this->key = $map['type'];

    }

    function getdata(){
        if(in_array($this->key,$this->method)){
            return $this->{"g".$this->key}();
        }else{
            return $this->map[0];//default like $map = array(1);    
        }

    }
    function gdefault(){
        return $this->map['data']['dafault'];
    }

    function gfunc(){
        $method = $this->map['data']['func'];
        return Helper::$method($this->data);
    }

    function gmap(){
        return $this->data[$this->map['data']['key']];
    }

    function gnone(){
        return $this->data[0];
    }
}

