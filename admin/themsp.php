 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Thêm </title>
	<link rel="stylesheet" href="css/themsptest.css" type="text/css">
</head>

<body>
<?php
$sqlhang="SELECT * FROM hang";
$queryhang = mysqli_query($conn,$sqlhang);

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
        $sql = "INSERT INTO sanpham(ten_sp, anh_sp, gia_sp, so_luong, mo_ta, id_hang) 
        values
        ('$ten_sp', '$anh_sp', '$gia_sp', '$so_luong', '$mo_ta', '$id_hang')";
		$query = mysqli_query($conn,$sql);
         // header('location: index.php?page_layout=danhsachsp');
		}

}
?>

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panell" style="margin: 0 100px; padding:50px 100px;">

            <div class="title1" style="margin:70px 30px 10px 0px;"><p>Thêm sản phẩm</p></div>

            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row" >
                        <div class="col-xs-8 than">

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input required type="text" name="ten_sp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input required id="img" type="file" name="anh_sp" >
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input required type="text" name="gia_sp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Số lượng</label>
                                <input required type="text" name="so_luong" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <input required type="text" name="mo_ta" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Thương hiệu</label>
                                <select required name="id_hang" class="form-control">
                                    <option value="unselect">Lựa chọn nhà cung cấp</option>
                                    <?php
						           while($rowhang = mysqli_fetch_array($queryhang)){
						           ?>
                                    <option value="<?php echo $rowhang['id_hang']; ?>"><?php echo $rowhang['ten_hang']; ?>
                                    </option>
                                    <?php
                                   }
						             ?>
                                </select>
                            </div>

                            <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary themmoi">
                            <!-- <a href="quantri.php?page_layout=danhsachsp" class="btn btn-danger">Hủy bỏ</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html> 
<!--/.row-->