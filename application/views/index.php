<!DOCTYPE html>
<html>

<head>
	<title>Simple DataTables</title>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body>
	<br><br><br><br>
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:  #1E8BC3;">
				<h3 class="panel-title" style="color:  white;">Daftar Customer </h3>
			</div>
			<div class="panel-body">
				<a style="float: right;" href="<?php echo base_url() ?>index.php/CrudCtl/create" type="button" class="btn btn-primary">Tambah</a><br><br>
				<table id="dataTables" class="table table-striped table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>Telp</th>
							<th>Jenis</th>
							<th>Plafon</th>
							<th>Aksi</th>

						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>Telp</th>
							<th>Jenis</th>
							<th>Plafon</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($customer_list as $key => $value) : ?>
							<tr>
								<td><?php echo $value['kode'] ?></td>
								<td><?php echo $value['nama'] ?></td>
								<td><?php echo $value['alamat'] ?></td>
								<td><?php echo $value['kota'] ?></td>
								<td><?php echo $value['telp'] ?></td>
								<td><?php echo $value['jenis'] ?></td>
								<td><?php echo $value['plafon'] ?></td>
								<td>
									<a href="<?php echo base_url() ?>index.php/CrudCtl/update/<?php echo $value['kode'] ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span>
									<a href="<?php echo base_url() ?>index.php/CrudCtl/delete/<?php echo $value['kode'] ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash">								
								</td>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

			</div>
		</div>

		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#dataTables').DataTable({});
			});
		</script>

</body>

</html>