<?php

include('../includes/security.php');

if (isset($_POST['adminLoginBtn'])) {
    $adminLogin = $_POST['username'];
    $passLogin = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email = '$adminLogin' AND password = '$passLogin'";
    $query_run = mysqli_query($con, $query);
    $usertype = mysqli_fetch_array($query_run);

    if ($usertype['role'] == 1) {

        $_SESSION['username'] = $adminLogin;
        header('Location: index.php');
        // } else if ($usertype['userRole'] == 2) {

        //     $_SESSION['username'] = $adminLogin;
        //     header('Location: ../index.php');
    } else {

        $_SESSION['status'] = "Invalid credentials";
        header('Location: ../joinus.php');
    }
}