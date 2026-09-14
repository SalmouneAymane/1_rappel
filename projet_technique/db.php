<?php
$host="localhost";
$db="music_db";
$user="root";
$pass="";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[
        pdo::ATTR_PERSISTENT => true,
        pdo::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
}catch(PDOException $e){
    echo "error:". $e->getMessage();
}

?>