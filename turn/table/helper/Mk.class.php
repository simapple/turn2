<?php

class Mk{
    static function getvalue($map,$data,$key){
        $getvalue = new Getvaluefactory($map, $data, $key);
        return $getvalue->getdata();
    }
}
