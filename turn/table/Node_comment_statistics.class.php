<?php

class Node_comment_statistics extends Turntable{
  protected static $tablename = "node_comment_statistics";
  function __construct($data){
        $this->tablename = self::$tablename;
        $this->data = $data;
        $this->createmap();
        $this->createsql(); 
    }

    static function gettablename(){
        return self::$tablename;
    }

    function createmap(){

 
       $this->map = array(
            'last_comment_timestamp' => array(
                               'type' => 'func',
                               'data' => array(
                                               'func' => 'createtime'
                                               )
            ),

            'cid' => array(
                '0',
            ),

            'last_comment_name' => array(
                                         ''
            ),

            'last_comment_uid' => array(
                                         '1'
            ),
            'comment_count' => array(
                                     '0'
                                     ),

            'nid' => array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),

        );
   }


}