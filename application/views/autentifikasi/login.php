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
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="login card o-hidden my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb4">Halaman Login</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                        <?= form_error(
                                            'email',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error(
                                            'password',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <br>
                                    <center>
                                        <button class="tombol" type="submit"><a>Masuk</a></button>
                                    </center>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="text-white btn btn-user btn-block" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>