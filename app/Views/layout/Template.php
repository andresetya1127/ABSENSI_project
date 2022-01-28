<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/sweetalert.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/datatable.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/tableresponsive.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css"> -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/asset/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="<?= base_url(); ?>/asset/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url(); ?>/asset/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>/asset/additional-methods.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url(); ?>/asset/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/asset/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/asset/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/asset/responsive.bootstrap4.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url(); ?>/asset/sweetalert2.min.js"></script>

</head>

<body>
    <!--  -->
    <div class="container me-0 ms-0 ps-0 ">
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-end bg-dark w1">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <div class="d-flex flex-column flex-shrink-0 bg-dark" style="width: 4.5rem; height: 100%;">
                    <a href="/" class="d-block p-3 link-dark text-decoration-none">
                        <img src="/img/logo.png" alt="logo" width="40px" height="32px">
                    </a>
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                        <li class="nav-item ">
                            <a href="<?= base_url('pages/'); ?>" class="nav-link py-3 border-bottom" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">
                                <i class="bi bi-house-door-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Pages/menu'); ?>" class="nav-link py-3 border-bottom" data-bs-toggle="tooltip" title="Data" data-bs-placement="right">
                                <i class="bi bi-qr-code-scan"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom" data-bs-toggle="tooltip" title="Text Pada Tooltip(Link)" data-bs-placement="right">
                                <svg class="bi" width="24" height="24" role="img" aria-label="Products">
                                    <use xlink:href="#grid"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                <svg class="bi" width="24" height="24" role="img" aria-label="Customers">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown border-top">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="" alt="mdo" width="24" height="24" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <?= $this->renderSection('content'); ?>



    <!-- Tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>