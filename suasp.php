
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Sửa </title>
    <link rel="stylesheet" href="css/suasptest.css" type="text/css">
</head>
<body>
    
<?php
$id_sp=$_GET['id_sp'];

$sqlhang="SELECT * FROM hang";
$queryhang = mysqli_query($conn,$sqlhang);

$sql="SELECT * FROM sanpham where id_sp ='$id_sp'";
$query=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

if(isset($_POST["submit"])){
    $ten_sp=$_POST["ten_sp"];
    if($_FILES['anh_sp']['name'] ==''){
        $error_anh_sp='<span style="color: red;">(*)</span>';
    }
    else {
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_name = $_FILES['anh_sp']['tmp_name'];
    }
    $gia_sp=$_POST["gia_sp"];
    $so_luong=$_POST["so_luong"];
    $mo_ta=$_POST["mo_ta"];
    $id_hang=$_POST["id_hang"];

    if(isset($ten_sp) && isset($anh_sp) && isset($gia_sp) && isset($so_luong) && isset($mo_ta) && isset($id_hang) ){

        move_uploaded_file($tmp_name,"img/".$anh_sp);

   $sql = "UPDATE sanpham set ten_sp = '$ten_sp', anh_sp ='$anh_sp', gia_sp = '$gia_sp' ,so_luong = '$so_luong', mo_ta = '$mo_ta', id_hang='$id_hang' where id_sp = $id_sp";
   $query = mysqli_query($conn,$sql);
    header('location: quantri.php?page_layout=danhsachsp');
   }
}
?>

<!--/.row-->

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panell" style="margin: 0 100px; padding:50px 100px;">

            <div class="title1" style="margin:70px 30px 10px 0px;"><p>Sửa sản phẩm</p></div>

            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row" >
                        <div class="col-xs-8 than">

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input required type="text" name="ten_sp"
                                    value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];} else echo $row['ten_sp']; ?>"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name="anh_sp" class="form-control">
                                <input type="hidden" name='anh_sp' value="<?php echo $row['anh_sp']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input required type="text" name="gia_sp"
                                    value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else echo $row['gia_sp']; ?>"
                                    class="form-control">
                            </div>                            

                            <div class="form-group">
                                <label>Số lượng</label>
                                <input required type="text" name="so_luong"
                                    value="<?php if(isset($_POST['so_luong'])){echo $_POST['so_luong'];}else echo $row['so_luong']; ?>"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <input required type="text" name="mo_ta"
                                    value="<?php if(isset($_POST['mo_ta'])){echo $_POST['mo_ta'];}else echo $row['mo_ta']; ?>"
                                    class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Thương hiệu</label>
                                <select required name="id_hang" class="form-control">
                                    <?php
                                   while($rowhang = mysqli_fetch_array($queryhang)){
                                   ?>
                                    <option <?php
                                   if($row['id_hang'] == $rowhang['id_hang']){
                                       echo 'selected="select"';
                                   }
                                     ?> value="<?php echo $rowhang['id_hang']; ?>"><?php echo $rowhang['ten_hang']; ?> </option>
                                    <?php
                                   }
                                     ?>
                                </select>
                            </div>
                            
                            <input type="submit" name="submit" value="Sửa đổi" class="btn btn-primary suadoi">
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->

</body>
</html>