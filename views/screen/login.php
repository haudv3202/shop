<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:49:38 GMT -->
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
<?php

if (isset($_SESSION['success_message'])) {
    $alert = $_SESSION['success_message'];
    $path_login = $_SESSION['auth_user'][0]->role_id == 1 ? "home" : "admin/";
    echo "<script>Swal.fire(
                  'Thành công!',
                  '$alert',
                  'success'
                );
              (function(){
                        window.setTimeout(function(){
                                window.location.href = '$path_login';
                        },1000)
                })()
                </script>";
    unset($_SESSION['success_message']);
}
if (isset($_SESSION['logout_message'])) {
    $alert = $_SESSION['logout_message'];
    echo "<script>Swal.fire(
                  'Thành công!',
                  '$alert',
                  'error'
                );
                </script>";
    unset($_SESSION['logout_message']);
}



?>
<main class="main-content">
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
                                    <h6>Sign in HexaDash</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="edit-profile__body">
                                    <div class="form-group mb-25">
                                        <label for="username">Username</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="username"
                                                name="username"
                                                placeholder="Examuser"
                                        />
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
                                            />
                                            <div
                                                    class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="admin-condition">
                                        <div class="checkbox-theme-default custom-checkbox">
                                            <input
                                                    class="checkbox"
                                                    type="checkbox"
                                                    id="check-1"
                                            />
                                            <label for="check-1">
                                                <span class="checkbox-text">Keep me logged in</span>
                                            </label>
                                        </div>
                                        <a href="forget-password.html">forget password?</a>
                                    </div>
                                    <div
                                            class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center"
                                    >
                                        <button
                                                type="submit"
                                                name="BtnLogin"
                                                class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn"
                                        >
                                            sign in
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="admin-topbar">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="register" class="color-primary"> Sign up </a>
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
</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:49:39 GMT -->
</html>
