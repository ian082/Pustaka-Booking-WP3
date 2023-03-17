<style>
    ul {
        background: linear-gradient(to right, midnightblue, black 150%);
    }
</style>


<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu -->
    <div class="sidebar-heading">
        Home
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Kategori Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Data Buku</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
</ul>
<!-- End of Sidebar -->