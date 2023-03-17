<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pa');

$id = $_POST['id'];

$qry = mysqli_query($koneksi, "SELECT * FROM warna WHERE id = '$id'");
$data = mysqli_fetch_array($qry);
echo json_encode($data);
?>