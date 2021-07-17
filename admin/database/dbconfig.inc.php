<?php

$url = parse_url(getenv("mysql://b03e9607efe9db:907ce62f@us-cdbr-east-04.cleardb.com/heroku_a5d2e04f2401240?reconnect=true"));

$server = $url["us-cdbr-east-04.cleardb.com"];
$username = $url["b03e9607efe9db"];
$password = $url["907ce62f"];
$db = substr($url["heroku_a5d2e04f2401240"], 1);

$conn = new mysqli($server, $username, $password, $db);

if ($conn) {
    echo "connected";
} else {
    echo '
    <div class="container-fluid">
    <div class="text-center align-items-center justify-content-center"">
        <p class="lead text-gray-800 mb-5">Connection Failed</p>
        <p class="text-gray-500 mb-0">Please check your network connection</p>
        <a href="#">:(</a>
    </div>

    </div>
    ';
}
