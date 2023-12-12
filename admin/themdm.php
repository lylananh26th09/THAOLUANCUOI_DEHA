<link rel="stylesheet" href="css/themdm.css" type="text/css" >
<?php 
if(isset($_POST["themmoi"])){
    $ten_hang = $_POST['ten_hang'];
    if(isset($ten_hang)){
        $sql1="INSERT INTO hang(ten_hang) values('$ten_hang')";
        $sql2="ALTER TABLE hang DROP id_hang"; 
        $sql3="ALTER TABLE hang AUTO_INCREMENT = 1"; 
        $sql4="ALTER TABLE hang ADD id_hang int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"; 
        mysqli_query($conn,$sql1);
     
        header('location:quantri.php?page_layout=danhsachdm');
    }
}
?>
 <div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Thêm hãng giày </h1>
    </div>

    <div class="col-xs-12 col-md-5 col-lg-5">
            <form class="panel-body" method="post">
                <div class="form-group">
                    <label>Tên hãng giày:</label>
                    <input type="text" name="ten_hang" class="form-control" placeholder="------">
                </div>
                <div class="form-group">
                    <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
                </div>
            </form>
    </div>
 </div>

