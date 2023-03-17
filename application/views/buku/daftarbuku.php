<?= $this->session->flashdata('pesan'); ?>

<br>
<center>
    <div data-aos="fade-up" data-aos-duration="2500" id="buku" class="buku" style="padding: 25px;">
        <div class="x_panel">
            <div class="x_content">
                <!-- Tampilkan semua produk -->
                <div class="row">
                    <!-- looping products -->
                    <?php foreach ($buku as $buku) { ?>
                        <div class="col-md-3">
                            <br>
                            <br>
                            <div class="thumbnail" style="height: 370px;">
                                <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; maxheight: 100%; height: 200px; width: 180px">
                                <div class="caption">
                                    <br>
                                    <h5 style="min-height:30px;"><?= $buku->pengarang ?></h5>
                                    <h5><?= $buku->penerbit ?></h5>
                                    <h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
                                    <p class="tombol">
                                        <a class="" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
                                    </p>
                                </div>
                            </div>
                        </div> <?php } ?>
                    <!-- end looping -->
                </div>
            </div>
        </div>
    </div>
</center>