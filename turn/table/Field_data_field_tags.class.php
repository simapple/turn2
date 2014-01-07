<?php
class Field_data_field_tags extends Turntable{
    protected static $tablename = "field_data_field_tags";
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
            'entity_type' => array(
                'node',
            ),

            'bundle' => array(
                'article',
            ),

            'deleted' => array(
                '0',
            ),

            'language' => array(
                'und',
            ),

            'field_tags_tid' => array(
                'type' => 'func',
                'data' => array(
                    'func' => 'gettid'
                )

            ),

            'entity_id' => array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),

            'revision_id' => array(
                'type' => 'map',
                'data' => array(
                    'key' => 'id'
                )
            ),

        );

    }
}