<?php
session_start();
include('database/dbconfig.inc.php');

if ($conn) {
    // echo "Database security connected";
} else {
    header("Location: database/dbconfig.inc.php");
}

// if (!$_SESSION['username']) {
//     header('Location: index.php');
// }
