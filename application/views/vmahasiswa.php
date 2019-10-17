<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<center><h1>DATA MAHASISWA</h1></center>
		<a href="<?= site_url('Mahasiswa/tambah_data') ?>" class="btn btn-info">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NRP</th>
					<th>NAMA</th>
					<th>IPK</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dat as $row){ ?>
					<tr>
						<td><?= $row->nrp ?></td>
						<td><?= $row->nama ?></td>
						<td><?= $row->ipk ?></td>
						<td><a href="<?= site_url('Mahasiswa/edit_data/'.$row->nrp) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Mahasiswa/delete_data/'.$row->nrp) ?>"  class="btn btn-danger">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
