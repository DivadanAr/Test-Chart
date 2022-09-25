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

    <title>Tambahkan Data Barang</title>
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
            <div class="judul-tmbh">
                <p>Tambah Data Barang</p>
            </div>
            <form action="simpan.php" method="post">
                <div class="form-edit">
                    <table>
                        <tr>
                            <th>Kode Barang</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="kode_barang" required="required" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Barang :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="nama_barang" required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Jenis :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="jenis" required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Merek :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="merek"  required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Kondisi Barang :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="kondisi_barang" required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Stok :</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="jumlah_barang" required="required" autocomplete="off"></td>
                        </tr>
                    </table>
                    <div class="btn-simpan-cancel">
                        <a class="" href="databarang.php">cancel</a>
                        <input type="submit" name="simpanbarang" value="simpan">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>