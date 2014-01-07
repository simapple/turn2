<?php
class Node extends Turntable{
    protected static $tablename = "node";
    
    function __construct($data = array()){
        $this->tablename = self::$tablename;
        $this->data = $data;
        $this->createmap();
        $this->createsql(); 

    }
    
    function createmap(){
        $this->map = array(
            'nid' => array(
                'type' => 'map',
                'data' =>array(
                    'key' => 'id'
                )
            ),
            'vid' => array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),
            'type' => array(
                'article'
            ),
            'language' => array(
                'zh-hans'
            ),
            'title' => array(
                'type' => 'map',
                'data' =>array(
                    'key' => 'title'
                )
            ),
            'uid' => array(
                '1',
            ),
            'status' => array(
                '1'
            ),
            'created' => array(
                'type' => 'func',
                'data' =>array(
                    'func' => 'createtime',
                )
            ),
            'changed' => array(
                'type' => 'func',
                'data' =>array(
                    'func' => 'changedtime',
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
            'tnid' => array(
                '0'
            ),
            'translate' => array(
                '0'
            )
        );
    }

    static function gettablename(){
        return self::$tablename;
    }

}
