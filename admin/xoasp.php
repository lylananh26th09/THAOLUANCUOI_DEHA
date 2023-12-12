<?php
session_start();
if($_SESSION['email']== "PHTrang1229@gmail.com" && $_SESSION['pass'] == "[29122001"){
    $id_sp=$_GET['id_sp'];
    include_once './ketnoi.php';
    $sql = "DELETE FROM sanpham where id_sp='$id_sp'";
    $query = mysqli_query($conn,$sql);
    header('location:quantri.php?page_layout=danhsachsp');
}
else header('location:index.php');
?>

