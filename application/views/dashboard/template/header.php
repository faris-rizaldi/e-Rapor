<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?= base_url('assets/') ?>images/favicon.ico">
        <title><?= $title; ?></title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/simplebar.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/select2.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/dropzone.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/uppy.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.steps.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.timepicker.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/quill.snow.css">
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/feather.css">
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/daterangepicker.css">
        <!-- App CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/app-light.css" id="lightTheme">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>css/app-dark.css" id="darkTheme" disabled>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <style>
            .table-responsive,
            .btn-primary {
                display: none;
            }
            /* Style the scrollbar */
            ::-webkit-scrollbar {
                width: 8px; /* width of the entire scrollbar */
            }

            /* Style the scrollbar track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1; /* color of the tracking area */
            }

            /* Style the scrollbar thumb */
            ::-webkit-scrollbar-thumb {
                background: #ccc; /* color of the scroll thumb */
                border-radius: 8px; /* roundness of the scroll thumb */
            }

            /* Change color on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #999; 
            }
        </style>
    </head>
    <body class="vertical  light  ">
        <div class="wrapper">
            <nav class="topnav navbar navbar-light">
                <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                    <i class="fe fe-menu navbar-toggler-icon"></i>
                </button>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted pr-0 d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="text-center">
                                <span class="avatar avatar-sm mt-2">
                                    <img src="<?= base_url('assets/') ?>avatars/face-7.jpg" alt="..." class="avatar-img rounded-circle">
                                </span>
                            </div>
                            <div class="mx-3">
                                <span class="d-block">Nusroh Latifah</span>
                                <small class="text-muted small">Guru</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('dashboard/profile') ?>">Profile</a>
                            <a class="dropdown-item" href="<?= base_url('login') ?>">Keluar</a>
                        </div>
                    </li>                             
                </ul>
            </nav>