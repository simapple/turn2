<?php
class Command{
    public $orders = array();
    function __construct($start,$number = 50){
        global $db , $files;
        $this->db = $db;
        $this->soldiers = array(
                                'Node','Node_revision','Field_data_field_tags','Field_data_body','Field_revision_body','Field_revision_field_tags','Taxonomy_index','Node_comment_statistics'

        );
        $sql = "select * from `iizuowen`  order by id asc" ." limit ".$start.",".$number;
        $this->orders = $this->db->getmany($sql, 'dbname');
    }

    function run(){
        foreach($this->orders as $data){
            foreach($this->soldiers as $soldier){
                ${$soldier} = new $soldier($data);
                ${$soldier}->execute();
            }
        }
    }
}