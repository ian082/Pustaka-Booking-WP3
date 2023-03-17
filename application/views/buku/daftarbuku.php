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


<br>
<br>
<br>
<br>
<section data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1500" id="kontak">
    <center>
        <img class="pp" src="assets/img/profile/default.jpg" class="img-fluid" alt="" width="200" height="200">
        <br>
        <br>
        <div class="social">
            <a class="social1" href="https://web.facebook.com/profile.php?id=100008344355877" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="social1" href="https://www.instagram.com/im_nothing_99/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="social1" href="https://api.whatsapp.com/send?phone=628558359732" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </center>
</section>