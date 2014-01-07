<?php

class Taxonomy_index extends Turntable{
    protected static $tablename = "taxonomy_index";
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
            'created' => array(
                               'type' => 'func',
                               'data' => array(
                                               'func' => 'createtime'
                                               )
            ),

            'sticky' => array(
                '0',
            ),

            'tid' => array(
                'type' => 'func',
                'data' => array(
                    'func' => 'gettid'
                )

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