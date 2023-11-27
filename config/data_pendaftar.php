<?php
require_once '../koneksi/koneksi.php';

try{
    $sql = 'SELECT * FROM data_pendaftar';
    $connect = $database_connection->prepare($sql);
    $connect->execute();

    $data = array();
    while($row = $connect->fetch(PDO::FETCH_ASSOC)){
        array_push($data,$row);
    }
    echo json_encode($data);
} catch (PDOException $err){
    die("Tidak dapat memuat database $database_name: " . $err->getMessage());
}