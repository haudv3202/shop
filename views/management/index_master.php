<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/demo8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:48:25 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin</title>
    <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
    />

    <link rel="stylesheet" href="../public/backend/assets/css/plugin.min.css" />
    <link rel="stylesheet" href="../public/backend/assets/css/style.css" />

    <link rel="icon" type="image/png" sizes="16x16" href="../public/backend/assets/img/favicon.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="layout-light side-menu">
<?php
if (isset($_SESSION['success_categories'])) {
    $alert = $_SESSION['success_categories'];
    $path_redect = $_SESSION['url'];
    echo "<script>Swal.fire(
                  'Thành công!',
                  '$alert',
                  'success'
                );
            (function(){
                                window.setTimeout(function(){
                                        window.location.href = '$path_redect';
                                },1000)
                        })()
                </script>";
    unset($_SESSION['success_categories']);
    unset($_SESSION['url']);
}

?>
<div class="mobile-search">
    <form action="https://demo.dashboardmarket.com/" class="search-form">
        <img src="../public/backend/assets/img/svg/search.svg" alt="search" class="svg" />
        <input
                class="form-control me-sm-2 box-shadow-none"
                type="search"
                placeholder="Search..."
                aria-label="Search"
        />
    </form>
</div>
<div class="mobile-author-actions"></div>

<?php include('body/header.php') ?>


<main class="main-content">
    <?php include('body/slider.php') ?>
    <?php include('body/content.php') ?>
    <?php include('body/footer.php') ?>
</main>


<div id="overlayer">
    <div class="loader-overlay">
        <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
        </div>
    </div>
</div>
<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>
<div class="customizer-wrapper">
    <div class="customizer">
        <div class="customizer__head">
            <h4 class="customizer__title">Customizer</h4>
            <span class="customizer__sub-title"
            >Customize your overview page layout</span
            >
            <a href="#" class="customizer-close">
                <img class="svg" src="../public/backend/assets/img/svg/x2.svg" alt="" />
            </a>
        </div>
        <div class="customizer__body">
            <div class="customizer__single">
                <h4>Layout Type</h4>
                <ul class="customizer-list d-flex layout">
                    <li class="customizer-list__item">
                        <a
                                href="https://demo.dashboardmarket.com/hexadash-html/ltr"
                                class="active"
                        >
                            <img src="../public/backend/assets/img/ltr.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item">
                        <a href="https://demo.dashboardmarket.com/hexadash-html/rtl">
                            <img src="../public/backend/assets/img/rtl.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="customizer__single">
                <h4>Sidebar Type</h4>
                <ul class="customizer-list d-flex l_sidebar">
                    <li class="customizer-list__item">
                        <a href="#" data-layout="light" class="dark-mode-toggle active">
                            <img src="../public/backend/assets/img/light.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item">
                        <a href="#" data-layout="dark" class="dark-mode-toggle">
                            <img src="../public/backend/assets/img/dark.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="customizer__single">
                <h4>Navbar Type</h4>
                <ul class="customizer-list d-flex l_navbar">
                    <li class="customizer-list__item">
                        <a href="#" data-layout="side" class="active">
                            <img src="../public/backend/assets/img/side.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item top">
                        <a href="#" data-layout="top">
                            <img src="../public/backend/assets/img/top.png" alt="" />
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="colors"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

<script src="../public/backend/assets/js/plugins.min.js"></script>
<script src="../public/backend/assets/js/script.min.js"></script>
</body>

</html>
