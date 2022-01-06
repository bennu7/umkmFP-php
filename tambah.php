<?php include("layout/header.php") ?>

<div class="card">
    <form action="" method="POST">
        <div class="card-body container">
            <div class="card-header mb-4">
                <h3 class="card-title">Tambahkan Produk</h3>
            </div>
            <div class="form-group mb-3 ">
                <label class="form-label">Nama Produk</label>
                <div>
                    <input type="text" class="form-control" aria-describedby="" placeholder="">
                </div>
            </div>
            <div class="form-group mb-3 ">
                <label class="form-label" for="email" placeholder="Masukkan Alamat Email" autocomplete="off">Deskripsi Produk</label>
                <div>
                    <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Deskripsi Produk" autocomplete="off">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="form-group mb-3 text-muted">
                <label class="form-label" for="alamat">Pilih Gambar</label>
                <input type="file" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-group mb-3 text-muted">
                <label class="form-label" for="alamat">Harga</label>
                <input type="number" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-footer">
                <button type="submit" id="submit" class="btn btn-primary w-100" name="updateEmailAlamat">Tambahkan Produk Baru</button>
            </div>
        </div>
    </form>
</div>