<?php
class Helper{
    static function getvid($data){
        $map = array(
            "高考作文" => "1",
            "二年级作文" => "2",
            "七年级作文" => "3",
            "中考作文" => "4",
            "高二作文" => "5",
            "散文" => "6",
            "九年级作文" => "7",
            "高一作文" => "8",
            "高三作文" => "9",
            "初中作文" => "10",
            "四年级作文" => "11",
            "小学生作文" => "12",
            "高中生作文" => "13",
        );    
        return $map[trim($data['tag'])];
    } 

    static function gettid($data){
        $map = array(
            "高考作文" => "1",
            "二年级作文" => "2",
            "七年级作文" => "3",
            "中考作文" => "4",
            "高二作文" => "5",
            "散文" => "6",
            "九年级作文" => "7",
            "高一作文" => "8",
            "高三作文" => "9",
            "初中作文" => "10",
            "四年级作文" => "11",
            "小学生作文" => "12",
            "高中生作文" => "13",
        );    
        return $map[trim($data['tag'])];
    } 

  
  static function createtime(){

    return time();
  }
  static function changedtime(){
    return time();
  }
}
