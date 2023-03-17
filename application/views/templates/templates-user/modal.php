<style>
    .btn {
        background-color: midnightblue;
    }

    .btn:hover {
        background-color: midnightblue;
    }
</style>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Member</h5>
                <button type="" class="text-white btn btn-user" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="<?= base_url('member'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row p-2">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="text-white btn btn-user">Log in</button>
                    <a href="#" data-toggle="modal" data-target="#daftarModal" class="text-white btn btn-user">Registrasi</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/login modal -->

<!-- daftar modal -->
<div class="modal fade" tabindex="-1" id="daftarModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Anggota</h5>
                <button type="button" class="text-white btn btn-user" data-dismiss="modal" arialabel="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="<?= base_url('member/daftar'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group p-2">
                        <input type="text" class="form-control form-controluser" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group p-2">
                        <input type="text" class="form-control form-controluser" id="alamat" name="alamat" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group p-2">
                        <input type="text" class="form-control form-controluser" id="email" name="email" placeholder="Alamat Email">
                    </div>
                    <div class="form-group p-2">
                        <input type="password" class="form-control form-controluser" id="password1" name="password1" placeholder="Password">
                    </div>
                    <div class="form-group p-2">
                        <input type="password" class="form-control form-controluser" id="password2" name="password2" placeholder="Ulangi Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="text-white btn btn-user">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/end of Modal Daftar -->