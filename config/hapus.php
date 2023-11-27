<?php
require_once '../koneksi/koneksi.php';

try{
    $id = $_POST['id'];
    $sql = "DELETE FROM data_pendaftar WHERE id =1";
    $connect = $database_connection->prepare($sql);
    $connect->execute();
    echo "Data delete successfully!";
} catch (PDOException $err){
    die("Error deleting data: " . $err->getMessage());
}

?>