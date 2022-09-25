<?php
    include 'koneksi.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- fotn courier -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">

    <!-- font lobster -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Data Barang</title>
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
                        <li class="menu"><a href="databarang.php">Data Barang</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card-content">
            <div class="isi-content">
                <div class="judul">
                    <p>Data Barang</p>
                </div>
                <div class="button">
                    <div><p><a href="barang.php" class="btn-tmbh">Tambah Data Barang</a></p></div>
                    <form action="" methode="GET" class="search">
                        <input type="text" name="searchbarang" placeholder="search" autocomplete="off" required="required"/>
                        <button type="submit"><i name="search" class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="table-content">
                <table class="table-data">
                    <tr>
                        <th class="kode">kode</th>
                        <th>Nama barang</th>
                        <th>Jenis</th>
                        <th>merek</th>
                        <th>kondisi</th>
                        <th width='150px'>Jumlah Barang</th>
                        <th>Edit</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM data_barang";
                        $query = mysqLi_query ($connect,$sql);
                        if(isset($_GET['searchbarang'])){
                            $search = $_GET['searchbarang'];
                            $sql = "SELECT * FROM data_barang WHERE kode_barang='$search' or nama_barang like'%$search%' or jenis='$search' or merek='$search' or kondisi_barang='$search' or jumlah_barang='$search'";
                        }
                        $query = mysqLi_query ($connect,$sql);
                        while($data = mysqLi_fetch_array($query)){
                            echo "
                            <tr>
                                <td class='kode'>$data[kode_barang]</td>
                                <td>$data[nama_barang]</td>
                                <td>$data[jenis]</td>
                                <td>$data[merek]</td>
                                <td>$data[kondisi_barang]</td>
                                <td>$data[jumlah_barang]</td>
                                <td class='action'>
                                    <a href='formeditbarang.php?kode_barang=".$data['kode_barang']."'><img src='edit.png'></a>
                                    <a href='hapus.php?kode_barang=".$data['kode_barang']."' ><img src='hapus.png'></a>
                                </td>
                            </tr>
                            ";
                            }
                            if(mysqli_num_rows($query) < 1){
                                die("
                                    <tr>
                                        <td colspan='8' style='text-align: center;'>Data Tidak Ditemukan</td>
                                    </tr>
                                    ");
                            }
                        ?>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>