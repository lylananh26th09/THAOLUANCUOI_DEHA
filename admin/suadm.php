<link rel="stylesheet" type="text/css" href="css/themdm.css">
<?php
$id_hang=$_GET['id_hang'];
$sql="SELECT * FROM hang where id_hang ='$id_hang'";
$query=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST["suadm"])){
    $ten_hang = $_POST['ten_hang'];
    if(isset($ten_hang)){
        $sql="UPDATE hang set ten_hang ='$ten_hang' where id_hang = '$id_hang'";
        $query=mysqli_query($conn,$sql);
        header('location:quantri.php?page_layout=danhsachdm');
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sửa hãng giày</h1>
    </div>

    <div class="col-xs-12 col-md-5 col-lg-5">
            <form class="panel-body" method="post">
                <div class="form-group">
                    <label>Tên hãng giày:</label>
                    <input type="text" name="ten_hang" class="form-control" value="<?php echo $row['ten_hang']; ?>" >
                </div>
                <div class="form-group">
                    <input type="submit" name="suadm"  class= "btn btn-primary" value="Sửa đổi">
                </div>
            </form>
        </div>
    </div>
</div>
<!--/.row-->