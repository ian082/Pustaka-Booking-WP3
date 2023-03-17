<style>
    .card {
        border-left-color: midnightblue;
        border-left-width: 5px;
    }

    .icon {
        color: midnightblue;
    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black textuppercase mb-1">Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-black"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="icon fas fa-users fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black textuppercase mb-1">Stok Buku</div>
                            <div class="h1 mb-0 font-weight-bold text-black">
                                <?php
                                $where = ['stok != 0'];
                                $totalstok = $this->ModelBuku->total(
                                    'stok',
                                    $where
                                );
                                echo $totalstok;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('buku'); ?>"><i class="icon fas fa-book fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 card py-2 bgdanger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black textuppercase mb-1">Dipinjam</div>
                            <div class="h1 mb-0 font-weight-bold text-black">
                                <?php
                                $where = ['dipinjam != 0'];
                                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                                echo $totaldipinjam;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user'); ?>"><i class="icon fas fa-user-tag fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 card py-2 bgsuccess">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black textuppercase mb-1">Dibooking</div>
                            <div class="h1 mb-0 font-weight-bold text-black">
                                <?php
                                $where = ['dibooking !=0'];
                                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                                echo $totaldibooking;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user'); ?>"><i class="icon fas fa-shopping-cart fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row ux-->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- row table-->
    <div class="row">
        <div class="card1 table-responsive table-bordered col-sm-10 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="icon fas fa-users mt-2 "> Data User</span>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['role_id']; ?></td>
                            <td><?= $a['is_active']; ?></td>
                            <td><?= date('Y', $a['tanggal_input']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card1 mt-5 table-responsive table-bordered col-sm-10 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="icon fas fa-book mt-2"> Data Buku</span>
            </div>
            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>ISBN</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($buku as $b) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['judul_buku']; ?></td>
                                <td><?= $b['pengarang']; ?></td>
                                <td><?= $b['penerbit']; ?></td>
                                <td><?= $b['tahun_terbit']; ?></td>
                                <td><?= $b['isbn']; ?></td>
                                <td><?= $b['stok']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->