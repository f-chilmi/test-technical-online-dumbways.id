<?php
include_once ("koneksi.php");

$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$photo = $_POST['photo'];

mysqli_query($koneksi , "INSERT INTO user (id, name, type, photo)
                                     VALUES ('$id', '$name', '$type', '$photo')");



?>