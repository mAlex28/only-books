<?php
session_start();
include('includes/header.php');

?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                <img src="../assets/img/logo_32px.png" alt="Admin Logo" class="brand-image elevation-3" style="opacity: .8"> OnlyBooks Admin</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to admin panel</p>
                <?php
                // if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                //     echo '<div class="alert alert-danger" role="alert">' . $_SESSION['status'] . '</div>';
                //     unset($_SESSION['status']);
                // }
                ?>
                <form action="adminlogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <button type="submit" name="adminLoginBtn" class="btn btn-primary btn-block">Log In</button>
                        </div>

                    </div>
                </form>

                <p class="mb-1">
                    <a href="">I forgot my password</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php
    include('includes/script.php');
    ?>