<?php include("layout/header.php") ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambahkan Produk</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="form-group mb-3 ">
                <label class="form-label">Nama Lengkap</label>
                <div>
                    <input type="text" class="form-control" aria-describedby="" placeholder="" readonly>
                </div>
            </div>
            <div class="form-group mb-3 ">
                <label class="form-label" for="email">Alamat Email</label>
                <div>
                    <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" autocomplete="off">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="form-group mb-3 text-muted">
                <label class="form-label" for="alamat">Alamat rumah</label>
                <input type="file" name="alamat" id="alamat" class="form-control">
                <!-- <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…">jl. bersama dia tapi tidak pernah bersatu rt 01 rw 10 kec bersama kelurahan tidak pasti kabupaten mengsedih</textarea> -->
            </div>
            <div class="form-group mb-3 text-muted">
                <label class="form-label" for="alamat">Alamat rumah</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
                <!-- <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…">jl. bersama dia tapi tidak pernah bersatu rt 01 rw 10 kec bersama kelurahan tidak pasti kabupaten mengsedih</textarea> -->
            </div>
    </div>
    <div class="form-footer">
        <button type="submit" id="submit" class="btn btn-primary w-100" name="updateEmailAlamat">Ubah Email/Alamat Rumah</button>
    </div>
    </form>
</div>