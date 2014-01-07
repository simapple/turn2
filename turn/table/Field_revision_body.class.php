<?php
class Field_revision_body extends Turntable{
    protected static $tablename = "field_revision_body";
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
            'delta' => array(
                             '0'
                             ),
            'body_summary' => array(
                                    ''
                                    ),
            'body_format' => array(
                                   "filtered_html"
                                   ),
            'body_value' => array(
                'type' => 'map',
                'data' => array(
                    'key' => 'body'
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