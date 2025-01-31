<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Produk</title>

    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/global.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/dataTables.dataTables.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="py-4">
                <div class="col-12">
                    <h1 class="text-center">Ubah Data Produk</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card py-2 px-4 mb-4">
                <?php foreach ($produk as $row) : ?>
                    <form action="<?= base_url('produk/ubah/') . $row->id_produk ?>" method="post">
                        <input type="hidden" name="id_produk" value="<?= $row->id_produk ?>">
                        <div class="my-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Produk A" value="<?= $row->nama_produk ?>">
                            <?= form_error('nama_produk') ?>
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" inputmode="numeric" min="0" class="form-control" id="hargaProduk" name="harga_produk" placeholder="12345" value="<?= $row->harga ?>">
                            </div>
                            <?= form_error('harga_produk') ?>
                        </div>
                        <div class="mb-3">
                            <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                            <select class="form-select" id="kategoriProduk" name="kategori_produk">
                                <option selected disabled hidden>Pilih kategori</option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k->id_kategori ?>" <?php if ($row->kategori_id == $k->id_kategori) {
                                                                                echo 'selected';
                                                                            } ?>><?= $k->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori_produk') ?>
                        </div>
                        <div class="mb-3">
                            <label for="statusProduk" class="form-label">Status Produk</label>
                            <select class="form-select" id="statusProduk" name="status_produk">
                                <option selected disabled hidden>Pilih status</option>
                                <?php foreach ($status as $s) : ?>
                                    <option value="<?= $s->id_status ?>" <?php if ($row->status_id == $s->id_status) {
                                                                                echo 'selected';
                                                                            } ?>><?= $s->nama_status ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('status_produk') ?>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url("assets") ?>/js/bootstrap.min.js"></script>
</body>

</html>