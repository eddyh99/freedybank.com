<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand text-center" href="index.html">
            <img src="assets/img/logo.png" alt="" class="" style="height: 25px;">
            Freedy
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 ms-2 me-lg-0 py-2 px-3" id="sidebarToggle"
            href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link active" href="dashboard-1.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Settings</div>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="col-12 box-dashboard-freedy-top px-3 py-5 mt-3 mb-4 d-flex flex-row align-items-center">
                        <h3 class="me-auto fw-bold text-blue-freedy">MASTER WALLET M3RC4N73</h3>
                        <img src="assets/img/logo.png" alt="" style="height: 75px;" class="me-5">
                    </div>
                    <div class="col-12">
                        <div class="title d-flex flex-row">
                            <span class="fw-bold text-blue-freedy me-auto">Currency</span>
                            <span class="fw-bold text-blue-freedy">Balance</span>
                        </div>
                        <div class="list-currency">
                            <div class="my-3">
                                <a href="master-wallet-1.html">
                                    <div class="box-list fw-bold d-flex flex-row py-4 px-4">
                                        <span class="me-auto">USD</span>
                                        <span>$ 1500</span>
                                    </div>
                                </a>
                            </div>
                            <div class="my-3">
                                <a href="master-wallet-1.html">
                                    <div class="box-list fw-bold d-flex flex-row py-4 px-4">
                                        <span class="me-auto">EUR</span>
                                        <span>$ 1000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>