<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SISKA-UBG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="data_mahasiswa.html">Data Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_nilai.html">Data Nilai</a>
      </li>
    </ul>
  </div>
	</nav>

	<div class="container">
		<h3 style="text-align: center;"> Form Tambah Mahasiswa</h3>
		<div class="col-sm-6">
      <?php
      include "koneksi.php";
      $sql = $conn->query("SELECT *FROM tbl_mhs WHERE nim_mahasiswa=".$_GET['nim']);
      $s = mysql_fetch_array($sql);
      ?>
      <form action="Proses_Tambah.php" method="POST">
        <div class="row">
          <div class="col-sm-6">
            <label>Nim Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="text" name="nim_mahasiswa" class="form-control" maxlength="10" value="<?">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Nama Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="text" name="nama_mahasiswa" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Semester</label>
          </div>
          <div class="col-sm-6">
            <input type="text" name="semester" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Jurusan</label>
          </div>
          <div class="col-sm-6">
            <select name = "jurusan"type="text" class="form-control" id="">
             <!-- <input type="text" name="jurusan" class="form-control"> -->
             <option>Pilih Jurusan</option>
             <option value="S1 ILKOM" <?php echo $s['jurusan']== 'S1 ILKOM' ?'selected="selected"':''?>>S1 ILKOM</option>
             <option value="S1 DKV" <?php echo $s['jurusan']== 'S1 DKV' ?'selected="selected"':''?>>S1 DKV</option>
             <option value="D3 MI" <?php echo $s['jurusan']== 'D3 MI' ?'selected="selected"':''?>>D3 MI</option>
             <option value="D3 RPL" <?php echo $s['jurusan']== 'D3 RPL' ?'selected="selected"':''?>>D3 RPL</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Alamat</label>
          </div>
          <div class="col-sm-6">
            <textarea name="alamat" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>No. HP</label>
          </div>
          <div class="col-sm-6">
            <input type="number" name="no_hp" class="form-control" maxlength="12">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Email</label>
          </div>
          <div class="col-sm-6">
            <input type="email" name="email" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Jenis Kelamin</label>
          </div>
          <div class="col-sm-6">
            <input type="radio" name="jk" value="Perempuan" <?php echo $s[Jenis_kelamin] == 'Perempuan'?'checked':''?>> Perempuan
            <input type="radio" name="jk" value="Laki-Laki" <?php echo $s[Jenis_kelamin] == 'Laki-Laki'?'checked':''?>> Laki-Laki
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label>Status Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="radio" name="status" value="aktif"> Aktif
            <input type="radio" name="status" value="tidak_aktif"> Tidak Aktif
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
          </div>
        </div>

      </form>
      
    </div>

	</div>
</body>
</html>