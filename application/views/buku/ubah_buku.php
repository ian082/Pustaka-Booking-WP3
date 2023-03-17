<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($buku as $b) { ?>
                <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $b['judul_buku']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="formcontrol form-control-user">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) { ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang" value="<?= $b['pengarang']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan Nama Penerbit" value="<?= $b['penerbit']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="tahun" class="form-control form-control-user">
                            <option value="<?= $b['tahun_terbit']; ?>"><?= $b['judul_buku']; ?></option>
                            <?php
                            for ($i = date('Y'); $i > 1500; $i--) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $b['isbn']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan Nominal Stok" value="<?= $b['stok']; ?>">
                    </div>
                    <div class="custom-file">
                        <?php
                        if (isset($b['image'])) { ?>
                            <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">

                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<? base_url('assets/img/upload/') . $b['image']; ?>" </picture>
                            <?php } ?>
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Pilih Icon Buku</label>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn text-white col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)"></input>
                        <input type="submit" class="form-control form-control-user btn text-white col-lg-3 mt-3" value="Update"></input>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>