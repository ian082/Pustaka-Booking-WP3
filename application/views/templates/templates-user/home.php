<section class="beranda">
    <div class="container-fluid">
        <br>
        <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1500" class="p-5 mt-5 text-center text-white">
            <h1>WELCOME</h1>
            <p>- PUSTAKA BOOKING UBSI -</p>
            <img src="assets/img/logo.png" class="img-fluid" alt="" width="300" height="300">
        </div>
        <br>
    </div>
</section>
<script>
    const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('.toggle_btn i')
    const dropDownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen ?
            'fa-solid fa-xmark' :
            'fa-solid fa-bars'
    }
</script>
<div class="container mt-5">