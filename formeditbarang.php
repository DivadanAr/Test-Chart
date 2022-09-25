<?php
    include 'koneksi.php';

    $kode_barang = $_GET['kode_barang'];
    $sql = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";
    $query = mysqLi_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <!-- fotn courier -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">

    <!-- font lobster -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <title>Edit Data Barang</title>
</head>
<body>
<div class="container-sidebar">
        <div class="sidebar-bg">
            <div class="sidebar">
                <div class="web-icon">
                    <div class="logo">
                        <img src="logo.png" alt="">
                    </div>
                    <div class="app-name">
                        <p>INVe<span>Sar</span></p>
                    </div>    
                </div>
                <div class="menubar">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="datasiswa.php">Data Siswa</a></li>
                        <li  class="menu"><a href="databarang.php">Data Barang</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card-content">
        <div class="judul">
            <p>Edit Data Barang</p>
        </div>
            <form action="edit.php" method="post">
            <input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang']?>" required="required">
            <div class="form-edit">
                <table>
                    <tr>
                        <th>Nama Barang :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>" required="required"></td>
                    </tr>
                    <tr>
                        <th>Jenis :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="jenis" value="<?php echo $data['jenis']?>" required="required"></td>
                    </tr>
                    <tr>
                        <th>Merek :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="merek" value="<?php echo $data['merek']?>" required="required"></td>
                    </tr>
                    <tr>
                        <th>Kondisi Barang :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']?>" required="required"></td>
                    </tr>
                    <tr>
                        <th>Jumlah Barang :</th>
                    </tr>
                    <tr>
                    <td><input type="number" name="jumlah_barang" value="<?php echo $data['jumlah_barang']?>" required="required"></td>
                    </tr>
                </table>
            </div>
            <div class="btn-simpan-cancel">
                <a class="" href="databarang.php">cancel</a>
                <input type="submit" name="simpanbarang" value="simpan">
            </div>
            </form>
        </div>
    </div>
</body>
</html>