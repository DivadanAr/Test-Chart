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

    <title>Tambahkan Data Siswa</title>
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
                        <li  class="menu"><a href="datasiswa.php">Data Siswa</a></li>
                        <li><a href="databarang.php">Data Barang</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card-content">
            <div class="judul-tmbh">
                <p>Tambah Data Siswa</p>
            </div>
            <form action="simpan.php" method="post">
                <div class="form-edit">
                    <table>
                        <tr>
                            <th>NISN</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="nisn" required="required" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Siswa :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="nama_siswa"  required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir :</th>
                        </tr>
                        <tr>
                            <td><input type="date" name="tanggal_lahir"  required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Alamat :</th>
                        </tr>
                        <tr>
                            <td><textarea name="alamat" cols="30" rows="1" required="required" autocomplete="off"> </textarea></td>
                        </tr>
                        <tr>
                            <th>No. Telepon :</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="telepon"  required="required" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Kelas :</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="kelas" id="kelas">
                                    <option value="pilih kelas" selected disable hidden>pilih kelas</option>
                                    <option value="X TKJT">X TKJT</option>
                                    <option value="XI TKJT">XI TKJT</option>
                                    <option value="XII TKJT">XII TKJT</option>
                                    <option value="X PPLG">X PPLG</option>
                                    <option value="XI PPLG">XI PPLG</option>
                                    <option value="XII PPLG">XII PPLG</option>
                                    <option value="X BRC">X BRC</option>
                                    <option value="XI BRC">XI BRC</option>
                                    <option value="XII BRC">XII BRC</option>
                                    <option value="X TEI">X TEI</option>
                                    <option value="XI TEI">XI TEI</option>
                                    <option value="XII TEI">XII TEI</option>
                                    <option value="X ANIMASI">X ANIMASI</option>
                                    <option value="XI ANIMASI">XI ANIMASI</option>
                                    <option value="XII ANIMASI">XII ANIMASI</option>
                                </select>    
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin :</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" required="required">
                                <label for="laki_laki">Laki-laki</label>
                                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" required="required">
                                <label for="perempuan">Perempuan</label>
                            </td>
                        </tr>
                    </table>
                    <div class="btn-simpan-cancel">
                        <a class="" href="datasiswa.php">cancel</a>
                        <input type="submit" name="simpansiswa" value="simpan">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>