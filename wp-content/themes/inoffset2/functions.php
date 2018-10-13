<?php
DEFINE('PATH_TO_IMG', get_template_directory_uri().'/images');

function connect_db(){
    require_once 'EasyMySQLi.inc.php'; 
    $db = new EasyMySQLi('localhost', 'root', 'mysqlHaoilaHa', 'wp_inoffsethcm'); 
    $db->set_charset("utf8");
    return $db;
}

$db = connect_db();
//var_dump($db);

function detect_click_tac($ip){
    $db = connect_db();    
    $yesterday          = strtotime('-7 day', time());
    $result = $db->queryAllRows('SELECT url FROM k_visit WHERE IP=? AND time > ? AND google_ad=1', $ip, $yesterday);     
    $tmp = array();
    foreach($result as $item){
        $tmp[]=$item['url'];
    }    
    $result = array_count_values($tmp);
    if(count($result)>3){
        $db->queryNoResult('UPDATE k_visit SET click_tac=1 WHERE IP=?', $ip);
    }   
}
