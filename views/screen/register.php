<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:49:39 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HexaDash</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="./public/backend/assets/css/plugin.min.css" />
    <link rel="stylesheet" href="./public/backend/assets/css/style.css" />

    <link rel="icon" type="image/png" sizes="16x16" href="./public/backend/assets/img/favicon.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<main class="main-content">
    <?php
    if (isset($_SESSION['success_message'])) {
        $alert = $_SESSION['success_message'];
        echo "<script>Swal.fire(
                  'Thành công!',
                  '$alert',
                  'success'
                );
                setTimeout(() => {
                  window.onload
                }, 4000)
                </script>";
        session_unset();
    }
    ?>
    <div class="admin">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                    <div class="edit-profile">
                        <div class="edit-profile__logos">
                            <a href="index">
                                <img class="dark" src="./public/backend/assets/img/logo-dark.png" alt="" />
                                <img class="light" src="./public/backend/assets/img/logo-white.png" alt="" />
                            </a>
                        </div>
                        <div class="card border-0">
                            <div class="card-header">
                                <div class="edit-profile__title">
                                    <h6>Sign Up HexaDash</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="edit-profile__body">
                                    <form action="" method="post">
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-20">
                                                <label for="name">name</label>
                                                <input
                                                        type="text"
                                                        class="form-control"
                                                        id="name"
                                                        name="fullname"
                                                        placeholder="Full Name"
                                                        value="<?php echo !empty($_SESSION['data_old'][0]) ? $_SESSION['data_old'][0] : ""; ?>"
                                                />

                                                    <?php if(!empty($_SESSION['errors']['fullname'])){
                                                        foreach ($_SESSION['errors']['fullname'] as $error){
                                                        ?>
                                                                <div class=" alert alert-danger mt-10 " role="alert">
                                                                    <div class="alert-content">
                                                                        <p><?php echo $error;?></p>
                                                                    </div>
                                                                </div>
                                                        <?php }}?>
                                            </div>
                                            <div class="form-group mb-20">
                                                <label for="username">username</label>
                                                <input
                                                        type="text"
                                                        class="form-control"
                                                        id="username"
                                                        name="username"
                                                        placeholder="Username"
                                                        value="<?php echo !empty($_SESSION['data_old'][1]) ? $_SESSION['data_old'][1] : ""; ?>"
                                                />

                                                <?php if(!empty($_SESSION['errors']['username'])){
                                                    foreach ($_SESSION['errors']['username'] as $error){
                                                        ?>
                                                        <div class=" alert alert-danger mt-10 " role="alert">
                                                            <div class="alert-content">
                                                                <p><?php echo $error;?></p>
                                                            </div>
                                                        </div>
                                                    <?php }}?>
                                            </div>
                                            <div class="form-group mb-20">
                                                <label for="email">Email Adress</label>
                                                <input
                                                        type="text"
                                                        class="form-control"
                                                        id="email"
                                                        name="email"
                                                        placeholder="name@example.com"
                                                        value="<?php echo !empty($_SESSION['data_old'][2]) ? $_SESSION['data_old'][2] : ""; ?>"
                                                />
                                                <?php if(!empty($_SESSION['errors']['email'])){
                                                    foreach ($_SESSION['errors']['email'] as $error){
                                                        ?>
                                                        <div class=" alert alert-danger mt-10 " role="alert">
                                                            <div class="alert-content">
                                                                <p><?php echo $error;?></p>
                                                            </div>
                                                        </div>
                                                    <?php }}?>
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input
                                                            id="password-field"
                                                            type="password"
                                                            class="form-control"
                                                            name="password"
                                                            placeholder="Password"
                                                            value="<?php echo !empty($_SESSION['data_old'][3]) ? $_SESSION['data_old'][3] : ""; ?>"
                                                    />
                                                    <div
                                                            class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"
                                                    ></div>
                                                    <?php if(!empty($_SESSION['errors']['password'])){
                                                        foreach ($_SESSION['errors']['password'] as $error){
                                                            ?>
                                                            <div class=" alert alert-danger mt-10 " role="alert">
                                                                <div class="alert-content">
                                                                    <p><?php echo $error;?></p>
                                                                </div>
                                                            </div>
                                                        <?php }}?>
                                                </div>
                                            </div>
                                            <div
                                                    class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center"
                                            >
                                                <button
                                                        type="submit"
                                                        name="submitBtn"
                                                        class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn"
                                                >
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="admin-topbar">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="login" class="color-primary"> Sign In </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<div class="enable-dark-mode dark-trigger">
    <ul>
        <li>
            <a href="#">
                <i class='bx bxs-moon'></i>
            </a>
        </li>
    </ul>
</div>
<script src="./public/backend/assets/js/plugins.min.js"></script>
<script src="./public/backend/assets/js/script.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:49:39 GMT -->
</html>
