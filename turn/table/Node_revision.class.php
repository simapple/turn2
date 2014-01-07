<?php

class Node_revision extends Turntable{
    protected static $tablename = "node_revision";
    function __construct($data){
        $this->tablename = self::$tablename;
        $this->data = $data;
        $this->createmap();
        $this->createsql(); 
    }

    function createmap(){
        $this->map = array(
            'nid' =>array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),

            'vid' =>array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),
            'uid' => array(
                '1',
            ),
            'title' => array(
                'type' => 'map',
                'data' =>array(
                    'key' => 'title'
                )
            ),
            'comment' => array(
                '2'
            ),
            'promote' => array(
                '1'
            ),
            'sticky' => array(
                '0'
            ),
            'status' => array(
                '1'
            ),
            'timestamp' => array(
                'type' => 'func',
                'data' =>array(
                    'func' => 'createtime',
                )
            ),

        );
    }

    static function gettablename(){
        return self::$tablename;
    }


}
