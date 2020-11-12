<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #000000">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('mahasiwa')?>" class="nav-link active">HOME</a>
			<a href="<?= site_url('mahasiswa/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">subhan</a>
			
		</div>
	</nav>
	<div class="alert alert-info text-center mt-2 shadow">
		Data Mahasiswa
	</div>
<div class="container">
<table class="table table-bordered table-striped table-hover ">
		
		<tr class="text-center">
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1810310001</td>
			<td>subhan</td>
			<td>Mataram</td>
			<td class="text-center">
				
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class="btn btn-success btn-sm">EDIT</a>


			</td>
		</tr>

	</table>
</div>

</body>
</html>