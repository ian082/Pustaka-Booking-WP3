<style>
    .card {
        margin-top: 29px;
        margin-left: 30px;
        margin-right: 30px;
        padding-top: 10px;
    }

    @media (max-width: 992px) {

        .btn_file {
            padding-top: 10px;
        }

        .card {
            width: 60%;
            margin-top: 20px;
            margin-left: 20%;
            margin-right: 25%;
        }
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row card">
        <div class="col-lg-9">
            <?= form_open_multipart('member/ubahprofil'); ?>
            <div class="form-group row">
                <label for="email" class="pt-3 col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="mt-2 form-control" id="email" name="email" value="<?= $email; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="pt-3 col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="mt-2 form-control" id="nama" name="nama" value="<?= $user; ?>">
                    <?= form_error('nama', '<small class="text-danger pl3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2 pt-4">Gambar</div>
                <div class="col-sm-10">
                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $image; ?>" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm-9 btn_file">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10 pt-3 pb-3">
                    <button type="submit" class="btn text-white">Ubah</button>
                    <button class="btn text-white" onclick="window.history.go(-1)"> Kembali</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<br>
<br>
<br>
<br>
<br>