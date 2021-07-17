<?php
error_reporting();
ini_set('display_errors', 1);


include('adminsecurity.php');

if (isset($_POST['adminLoginBtn'])) {
    $adminLogin = $_POST['username'];
    $passLogin = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$adminLogin' AND password = '$passLogin'";
    $query_run = mysqli_query($conn, $query);
    // $usertype = mysqli_fetch_array($query_run);

    if ($query_run) {


        // $_SESSION['username'] = $adminLogin;
        header('Location: index.php');
    } else {
        echo "error";
        // $_SESSION['status'] = "Invalid credentials";
        header('Location: login.php');
    }
}
