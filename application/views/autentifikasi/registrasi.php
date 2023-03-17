<style>
    .tombol:hover .tombol2 {
        background: linear-gradient(to right, midnightblue, black 180%);
    }
</style>

<div class="container">
    <br>
    <center>
        <div class="tombol">
            <a class="text-white tombol2" href="<?= base_url('home'); ?>">Beranda</a>
        </div>
    </center>
    <div class="login card o-hidden my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar Menjadi Member!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error(
                                        'password1',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                    <?= form_error(
                                        'password2',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ); ?>
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="tombol">
                                    <a>Daftar</a>
                                </button>
                                <center>
                        </form>
                        <hr>
                        <div class="text-center text-dark">
                            Sudah Menjadi Member?<a class="text-white btn btn-user btn-block" href="<?= base_url('autentifikasi'); ?>">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>