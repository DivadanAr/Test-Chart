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

        $sql = "UPDATE data_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telepon='$telepon', kelas='$kelas' WHERE nisn='$nisn'";
        $query = mysqLi_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }

    if(isset($_POST['simpanbarang'])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis = $_POST['jenis'];
        $merek = $_POST['merek'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];

        $sql = "UPDATE data_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis='$jenis', merek='$merek', kondisi_barang='$kondisi_barang', jumlah_barang='$jumlah_barang' WHERE kode_barang='$kode_barang'";
        $query = mysqLi_query($connect, $sql);

        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>