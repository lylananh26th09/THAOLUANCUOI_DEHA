<?php
// LẤY TRANG VÀ TRUY VẤN TÌM KIẾM

// Thanh phân trang
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else $page=1;
$rowsPerPage=4;
$perRow=$page*$rowsPerPage - $rowsPerPage;

//nhan tu khoa tim kiem
if(isset($_POST['stext'])){
    $stext=$_POST['stext'];
}
else $stext=$_GET['stext'];

$stextNew = trim($stext); //loai bo cac khoang trang dau va cuoi chuoi tu khoa
$arr_stextNew = explode(' ',$stextNew);// ngat 1 chuoi thanh 1 mang cac ki tu
$stextNew = implode('%',$arr_stextNew); // noi phan tu mang voi 1 chuoi
$stextNew='%'.$stextNew.'%';


// TRUY VẤN CƠ SỞ DỮ LIỆU
$sql="SELECT * FROM sanpham where ten_sp LIKE ('$stextNew') order by id_sp limit $perRow,$rowsPerPage ";
$query = mysqli_query($conn,$sql);

// tong so ban ghi
$totalRows= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sanpham where ten_sp LIKE ('$stextNew')"));

//tong so trang
$totalPages=ceil($totalRows/$rowsPerPage);
//xay dung thanh phan trang
$listPage ="";
for($i=1; $i <= $totalPages;$i++){
       if($page==$i){
           $listPage.='<li class ="active"><a href="index.php?page_layout=danhsachtimkiem&stext='.$stext.'&page='.$i.'">'.$i.'</a></li>';

       }
       else $listPage .='<li><a href="index.php?page_layout=danhsachtimkiem&stext='.$stext.'&page='.$i.'">'.$i.'</a></li>';
}
?>
<div id="wrap-inner">
    <div class="products">
        <h3>Tìm kiếm với từ khóa: <span><?php echo $stext; ?></span></h3>
        <div class="product-list row">
            <?php
            while($row = mysqli_fetch_array($query)){

            ?>
            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                <img src="Bai-thao-luan-Web/picture_kawaii/<?php echo $row['anh_sp'];?>"  class="img-thumbnail">
                <p><a class="ten" href="#"><?php echo $row['ten_sp'];?></a></p>
                <p class="price"><?php echo $row['gia_sp'];?></p>
                <div class="marsk">
                    <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'];?>">Xem chi tiết</a>
                </div>
            </div>
            <?php
            }
            ?>

        </div>
    </div>

    <ul class="pagination" style="float: right">
                        <li><a href="#"><</a></li>
                        <?php echo $listPage; ?>
                        <li><a href="#">></a></li>

                </ul>
</div>

<style type="text/css">
    .products{
        background-color: #FCDFB2 ;
        margin: 10px 0;

    }             

    h3{
        text-align: center;
        font-weight: 600;
        font-size: 36px;
        margin: 0  0 40px 0;

    }  

    .row{
        font-size: 20px;
    }

    .col-xs-12 img{
        width: 250px;
        height: 300px;
        margin: 0 20px;
    }

    a{
        margin: 0 20px;
        text-decoration: none;
        color: black;
        text-align: center;

    }

    .price{
        margin: 0 20px;
        text-align: center;
        color:#FF5A00 ;
        font-weight: 700;

    }

    .ten{
        margin-bottom: 0;
        font-weight: 600;
    }

    .marsk{
        margin: 0 74px;
    }
</style>