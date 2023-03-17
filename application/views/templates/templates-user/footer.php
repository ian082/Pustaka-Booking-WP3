</div>
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

<footer class="p-3 footer sticky-footer text-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ikhsan .P (12210480) - <?= date('Y'); ?></span>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity="sha256-/ijcOLwFf26xEYAjW75FizKVo5tnTYiQddPZoLUHHZ8=" crossorigin="anonymous"></script>

<script src="<?= base_url() ?>assets/user/js/bootstrap.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>


<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<script src=".assets/js/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>