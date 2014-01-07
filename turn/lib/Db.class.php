<?php

class Db{
    protected $conn_dbname;
    protected $conn_drupal;
    
    function __construct(){
        $this->_prepaereconn();
    }

    function _prepaereconn(){
        $this->_getlinkofdbname();
        $this->_getlinkofdrupal();
    }

    function _getlinkofdbname(){
        $this->conn_dbname =   @mysql_connect("localhost","root","123456", True) or die("could not connect dbname");
        @mysql_select_db("source", $this->conn_dbname);
        @mysql_set_charset("utf8", $this->conn_dbname);
    }

    function _getlinkofdrupal(){
        $this->conn_drupal =   @mysql_connect("localhost","root","123456",True);
        @mysql_select_db("target", $this->conn_drupal);
        @mysql_set_charset("utf8", $this->conn_drupal);
    }

    function getone($sql, $conn){
        if($link = $this->_getlinkbyeasyname($conn)){
            $result = @mysql_query($sql,$link);
            return @mysql_fetch_assoc($result);
        }else{
            die("error tag for link, no useful link could be found ");
        }
    }
    
    function getmany($sql, $conn){
        if($link = $this->_getlinkbyeasyname($conn)){
            $result = @mysql_query($sql,$link) or die(@mysql_error());
            while($row = @mysql_fetch_assoc($result)){
                $all[] = $row;
            }
            return $all;
        }else{
            die("error tag for link, no useful link could be found ");
        }

    }

    function query($sql){
        @mysql_query($sql) ;//or die($sql.@mysql_error());
    }

    function _getlinkbyeasyname($conn){
        switch ($conn){
        case "dbname":
        case "dn":
            return $this->conn_dbname;
        case "drupal":
        case "new":
        case "dp":
            return $this->conn_drupal;
        default:
            return null;
        }
    }
}

$db = new Db();

