<?php
    include 'koneksi.php';
    
    if(isset($_POST['simpansiswa'])){
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $kelas = $_POST['kelas'];

        $sql = "INSERT INTO data_siswa (nisn, nama_siswa, jenis_kelamin, tanggal_lahir, alamat, telepon, kelas) VALUES ('$nisn', '$nama_siswa', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$telepon', '$kelas')";
        $query = mysqLi_query($connect, $sql);

    if($query){
        header('Location: datasiswa.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
    }

    if(isset($_POST['simpanbarang'])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis = $_POST['jenis'];
        $merek = $_POST['merek'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];

        $sql = "INSERT INTO data_barang (kode_barang, nama_barang, jenis, merek, kondisi_barang, jumlah_barang) VALUES ('$kode_barang', '$nama_barang', '$jenis', '$merek', '$kondisi_barang', '$jumlah_barang')";
        $query = mysqLi_query($connect, $sql);

    if($query){
        header('Location: databarang.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
    }

?>