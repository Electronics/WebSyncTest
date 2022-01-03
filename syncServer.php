<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With");
    $receive = round(microtime(true) * 1000);
    echo $_POST["original"] . '|';
    echo $receive . '|';
    echo round(microtime(true) * 1000);
?>
