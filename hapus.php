<?php
include 'koneksi.php';
    if (isset($_GET['nisn'])){
        header('Location: datasiswa.php');
    
        $nisn = $_GET['nisn'];
        $sql = "DELETE FROM data_siswa WHERE nisn='$nisn'"; 
        $query1 = mysqli_query($connect, $sql);
        
    if($query1){
        header('Location: datasiswa.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }

    if (isset($_GET['kode_barang'])){
        header('Location: databarang.php');
    
        $kode_barang = $_GET['kode_barang'];
        $sql = "DELETE FROM data_barang WHERE kode_barang='$kode_barang'"; 
        $query2 = mysqli_query($connect, $sql);
        
    if($query2){
        header('Location: databarang.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }
?>