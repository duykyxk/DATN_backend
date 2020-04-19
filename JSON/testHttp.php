<?php

$raw = file_get_contents("php://input");
file_put_contents("httprequest.txt", "raw:".$raw, FILE_APPEND);
$data = json_decode($raw);
 // file_put_contents("httprequest.txt", "data:".$data, FILE_APPEND);
 echo "đã có";

$status = $_POST['status'];
file_put_contents("httprequest.txt", $status, FILE_APPEND);
$admin = $_POST['body'];
file_put_contents("httprequest.txt", $admin, FILE_APPEND);
?>