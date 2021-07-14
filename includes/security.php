<?php
session_start();
include('includes/dbconfig.inc.php');

if ($conn) {
    // echo "Database connected";
} else {
    header("Location: dbconfig.inc.php");
}

if (!$_SESSION['username']) {
    header('Location: ./index.php');
}
