<style>
    .card1 {
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="card1 table-responsive full-width mt-5">
                        <table class="table table-bordered table-striped tablehover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>Buku</th>
                                <th>Penulis</th>
                                <th>penerbit</th>
                                <th>Tahun</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($temp as $t) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="10%">
                                    </td>
                                    <td nowrap><?= $t['penulis']; ?></td>
                                    <td nowrap><?= $t['penerbit']; ?></td>
                                    <td nowrap><?= substr($t['tahun_terbit'], 0, 4); ?></td>
                                    <td nowrap>
                                        <a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin Tidak Jadi Booking ' . $t['judul_buku']' ?')">
                                            <center>
                                                <i class="text-white btn btn-sm fas fw fa-trash"></i>
                                            </center>
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="pt-5 pb-3" colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <a class="card1 btn btn-sm text-white" href="<?php echo base_url(); ?>"><span class="fas fw faplay"></span> Lanjutkan Booking Buku</a>
                    <a class="card1 btn btn-sm text-white" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><span class="fas fw fastop"></span> Selesaikan Booking</a>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </center>
</div>