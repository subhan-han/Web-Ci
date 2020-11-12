<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<a class="btn btn-Danger btn-sm float-right text-dark " href="<?= site_url('mahasiswa')?>">kembali</a>
	<div class="p-5 mb-7 bg-info text-white"><b>	TAMBAH MAHASISWA</b>
<hr>
		<div class="col-md-4">
<form>
		<div class=" form-group col-md-4">
		<label>NIM</label>
		<input type="text" name="nim" > <br>

		<label>Nama mahasiswa</label>
		<input type="text" name="nama_mahasiswa"><br>
		<label>Alamat</label>
		<input type="text" name="alamat_mahasiswa"><br>

		<input type="submit" name="submit" value="simpan" class="btn btn-info btn-sm float-right">
</form>
</div>
</body>
</html>