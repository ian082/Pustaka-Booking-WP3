<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka Booking</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo'); ?>logo-pb.png">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!--<link href="<?= base_url('assets/'); ?>user/css/bootstrap.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css">
    <link href="<?= base_url('assets/'); ?>user/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        .pp {
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3);
            border: solid 2px black;
            border-radius: 50px;
            background: whitesmoke;
        }

        .tombol {
            color: white;
            border: solid 2px black;
            border-radius: 30px;
        }

        span {
            color: white;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <header id="beranda">
        <div class="navbar">
            <div class="logo">
                <a href="<?= base_url('home'); ?>">Pustaka Booking</a>
            </div>
            <ul class="links">
                <li class="link">
                    <a href="<?= base_url('home'); ?>">Beranda</a>
                </li>
                <?php
                if (!empty($this->session->userdata('email'))) { ?>
                    <li class="link">
                        <a class="" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
                    </li>
                    <li class="link">
                        <a class="" href="<?= base_url('member/myprofil'); ?>">Profil</a>
                    </li>
                    <li class="link">
                        <a class="" href="<?= base_url('member/logout'); ?>">Logout</a>
                    </li>
                    <span>Selamat Datang <b><?= $user; ?></b></span>
                <?php } else { ?>
                    <li class="link">
                        <a href="#" data-toggle="modal" data-target="#loginModal" class="action_btn">Login | Registrasi</a>
                    </li>
                <?php } ?>
            </ul>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu fixed-top">
            <?php
            if (!empty($this->session->userdata('email'))) { ?>
                <li class="link">
                    <a href="<?= base_url('home'); ?>">Beranda</a>
                </li>
                <li class="link">
                    <a class="" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
                </li>
                <li class="link">
                    <a class="" href="<?= base_url('member/myprofil'); ?>">Profil</a>
                </li>
                <li class="">
                    <a class="action_btn" href="<?= base_url('member/logout'); ?>">Logout</a>
                </li>
            <?php } else { ?>
                <li class="link">
                    <a href="#kontak">Kontak</a>
                </li>
                <li class="">
                    <a href="#" data-toggle="modal" data-target="#loginModal" class="action_btn">Login | Registrasi</a>
                </li>
            <?php } ?>
        </div>

    </header>