<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produk</title>

	<link rel="stylesheet" href="<?= base_url("assets") ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url("assets") ?>/css/global.css">
	<link rel="stylesheet" href="<?= base_url("assets") ?>/css/dataTables.dataTables.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="py-4">
				<div class="col-12">
					<h1 class="text-center">Produk</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if ($this->session->flashdata('pesan')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Berhasil!</strong> <?= $this->session->flashdata('pesan'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
			<div class="card py-4 px-4 mb-4">
				<div class="col-12">
					<div class="float-end">
						<a href="<?= base_url('produk/tambah') ?>" class="btn btn-primary">+ Tambah Produk</a>
					</div>
				</div>
				<table class="table table-striped" id="table">
					<thead>
						<th width="40%">Nama Produk</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Kategori</th>
						<th class="text-center">Status</th>
						<th></th>
					</thead>
					<tbody>
						<?php foreach ($produk as $row) : ?>
							<tr>
								<td><?= $row->nama_produk ?></td>
								<td class="text-center">Rp. <?= number_format($row->harga, 0, ",", ".") ?></td>
								<td class="text-center"><?= $row->nama_kategori ?></td>
								<td class="text-center"><span class="badge rounded-pill text-bg-<?php if ($row->nama_status === 'bisa dijual') {
																									echo 'success';
																								} else {
																									echo 'danger';
																								} ?>"><?= $row->nama_status ?></span></td>
								<td class="text-center">
									<div class="btn-group btn-group-sm" role="group">
										<a href="<?= base_url("produk/ubah/" . $row->id_produk) ?>" class="btn btn-primary">Ubah</a>
										<button type="button" class="btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#modalHapus" data-id="<?= $row->id_produk ?>" data-name="<?= $row->nama_produk ?>">Hapus</button>
									</div>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus <span id="productName"></span></h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Apakah anda yakin akan menghapus produk ini?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
					<a href="#" id="delete" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url("assets") ?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url("assets") ?>/js/jquery-3.7.1.js"></script>
	<script src="<?= base_url("assets") ?>/js/dataTables.js"></script>
	<!-- <script>
		new DataTable('#table');
	</script> -->
	<script>
		$(document).ready(function() {
			// Inisialisasi DataTable
			var table = $('#table').DataTable();

			// Gunakan event delegation untuk menangani klik tombol hapus
			$(document).on('click', '.btn-delete', function() {
				var id = $(this).data('id');
				var name = $(this).data('name');

				// Menampilkan nama produk di modal
				$('#productName').text(name);

				// Mengubah URL tombol hapus sesuai dengan ID produk
				$('#delete').attr('href', '<?= base_url('produk/hapus/') ?>' + id);
			});
		});
	</script>
</body>

</html>