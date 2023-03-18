<style>
    .card {
        margin-left: 30%;
        margin-right: 25%;
        margin-top: 7.2%;
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 992px) {
        .card {
            width: 60%;
            margin-top: 20px;
            margin-left: 20%;
            margin-right: 25%;
        }
    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500">
    <div class="row">
        <div class="col-lg-6 justify-content-x">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $image; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user; ?></h5>
                    <p class="card-text"><?= $email; ?></p>
                    <p class="card-text"><small class="text-muted">Jadi member sejak: <br><b><?= date('d F Y', $tanggal_input); ?></b></small></p>
                </div>
                <div class="btn m-3 my-3">
                    <a href="<?= base_url('member/ubahprofil'); ?>" class="ml-3 text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->