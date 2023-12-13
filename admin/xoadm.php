<?php
session_start();
if($_SESSION['email']== "PHTrang1229@gmail.com" && $_SESSION['pass'] == "[29122001"){
    $id_hang=$_GET['id_hang'];
    include_once './ketnoi.php';
    $sql = "DELETE FROM hang where id_hang='$id_hang'";
    $query = mysqli_query($conn,$sql);
    header('location:quantri.php?page_layout=danhsachdm');
}
else header('location:index.php');
?>
