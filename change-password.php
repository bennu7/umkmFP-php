<?php include("layout/header.php")?>

<div class="page-body">
    <div class="container-xl">
    <!-- <div class="col-sm-6 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="mb-3">
                      <div class="form-label">Card number</div>
                      <input type="text" name="input-mask" class="form-control" data-mask="0000 0000 0000 0000" data-mask-visible="true" autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Card name</div>
                      <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Card name</div>
                      <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Card name</div>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
    </div> -->
    
    <div class="row row-cards">
                        <div class="col-md-4" id="sidebar">
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Pengaturan Kata Sandi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Kata Sandi</label>
                                        <div>
                                            <input type="password" class="form-control" name="password" id="password"
                                                aria-describedby="" placeholder="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Kata Sandi Baru</label>
                                        <div>
                                            <input type="password" class="form-control" name="npassword" id="npassword"
                                                aria-describedby="" placeholder="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Konfirmasi Kata Sandi Baru</label>
                                        <div>
                                            <input type="password" class="form-control" name="cnpassword"
                                                id="cnpassword" aria-describedby="" placeholder="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" id="submit" class="btn btn-primary w-100">Ubah Kata
                                            Sandi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<?php include("layout/footer.php")?>