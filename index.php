<!-- Phần Trang chủ động -->

<?php
session_start();
include_once './cauhinh/ketnoi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Trang chủ Chickenflyy </title>
	<link rel="stylesheet" href="Bai-thao-luan-Web/Trang-chu.css" type="text/css">
	<LINK REL="SHORTCUT ICON"  HREF="Bai-thao-luan-Web/picture_kawaii/logo.jpg">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- 	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="< anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> 
</head>

<body class="anhnen">

<style type="text/css">
	.anhnen{
	background-image: url("Bai-thao-luan-Web/picture_kawaii/CHICKENFLYY CHICKENFLYY CHICKENFLYY!.png");
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
</style>
    <!-- header -->
<div class="header">
		<div class="header_left">
			<a href="Bai-thao-luan-Web/Chickenflyy.html"><p class="ChucNang1">CHICKENFLYY</p></a>
			<ul class="cha">
				<!-- Sản phẩm -->
			<li><a href="#"><p class="ChucNang1">GIÀY</p></a>
				<ul class="con">
					<li><a href="Bai-thao-luan-Web/GiayNike.html">NIKE</a></li>
					<li><a href="Bai-thao-luan-Web/GiayPuma.html">PUMA</a></li>
					<li><a href="Bai-thao-luan-Web/GiayNB.html">NEW BELANCE</a></li>
					<li><a href="Bai-thao-luan-Web/GiayJordan.html">JORDAN</a></li>
					<li><a href="Bai-thao-luan-Web/GiayMLB.html">MLB</a></li>
					<li><a href="PhuKien.html">PHỤ KIỆN</a></li>
				</ul>
				

			</li>

			<li><a href="#"><p class="ChucNang1">BÁN CHẠY</p></a>
				<ul class="con1">
					<li><a href="Bai-thao-luan-Web/BanChay.html">Bán chạy tháng 8 2023</a></li>
					<li><a href="Bai-thao-luan-Web/BanChayT72023.html">Bán chạy tháng 7 2023</a></li>
					<li><a href="Bai-thao-luan-Web/BanChay2023.html">Bán chạy nhất 2023</a></li>
				</ul>
			</li>

			</ul>
		</div>

 		 <div class="header_center">
			<a class="TrangChu" href="http://localhost/Bai_thao_luan_web1/" ><img src="Bai-thao-luan-Web/picture_kawaii/Picture7.png"></a>
		</div>

		<!-- Chức năng -->
		<div class="header_right" >
			<!-- Tìm kiếm -->
			<a href="#" class="ChucNang2" ><img src="Bai-thao-luan-Web/picture_kawaii/Picture1.png" alt=""></a>
			 <?php
                include_once './chucnang/timkiem/timkiem.php';
                ?>  
			<!-- Giỏ hàng -->
			<a href="#" class="ChucNang2" ><img src="Bai-thao-luan-Web/picture_kawaii/Picture3.png" alt=""></a>
			
			<!-- Đăng nhập -->
			<a href="Bai-thao-luan-Web/DangNhap.html" class="ChucNang2" ><img src="Bai-thao-luan-Web/picture_kawaii/Picture5.png" alt=""></a>
		</div>
		
		<br>
		<div class="KeNgang" style="margin:85px 0 0 0 ;"></div>

</div>

		<section id="body">
        <div >
            <div class="row">

                <div id="main" class="col-md-12">
                    <!-- main -->
                    <?php
                    //  trang liên kết
                    if(isset($_GET["page_layout"])){
                    switch ($_GET["page_layout"]) {
                    case 'danhsachtimkiem':include_once './chucnang/timkiem/danhsachtimkiem.php';
                    break;
                    case 'chitietsp':include_once './chucnang/sanpham/chitietsp.php';
                    break;
                    }
                    }
                    else include_once './chucnang/sanpham/sanpham.php';
                    ?>
				</div>
            </div>
        </div>
    	</section>
    	<br style="height:100px;">
<!-- end main -->

	<div class="KeNgang"></div>

<div class="footer">

		<div class="footer1">
			<div class="footer_left">
				<p class="TrangChu"><img src="Bai-thao-luan-Web/picture_kawaii/Picture7.png"></p>
			</div> 

			<div class="icon">
				<a href="https://www.facebook.com/ongstore1108" class="icon1"><img src="Bai-thao-luan-Web/picture_kawaii/facebook (1).png"></a>
				<a href="https://www.instagram.com/chickenflyy__/" class="icon2"><img src="Bai-thao-luan-Web/picture_kawaii/instagram (2).png"></a>
				<a href="https://www.tiktok.com/@chickenflyy?" class="icon3"><img src="Bai-thao-luan-Web/picture_kawaii/tiktok.png"></a>
		
			</div>
		</div>
		
		<div class="GIAY"> 
			<p style="color: #ed7d31"> GIÀY </p>
			<a href="Bai-thao-luan-Web/GiayNike.html" class="GC1"> NIKE </a><br>
			<a href="Bai-thao-luan-Web/GiayPuma.html" class="GC2"> PUMA </a><br>
			<a href="Bai-thao-luan-Web/GiayNB.html" class="GC3"> NEW BELANCE </a><br>
			<a href="Bai-thao-luan-Web/GiayJordan.html" class="GC4"> JORDAN </a><br>
			<a href="Bai-thao-luan-Web/GiayMLB.html" class="GC5"> MLB </a><br>
			<a href="Bai-thao-luan-Web/PhuKien.html" class="GC6"> PHỤ KIỆN </a><br>
		</div>

		<div class="Bestseller">
			<p style="color: #ed7d31"><b> BÁN CHẠY</b> </p>
			<a href="Bai-thao-luan-Web/BanChay.html" class=""> Bán chạy tháng 8 </a><br>
			<a href="Bai-thao-luan-Web/BanChayT72023.html" class=""> Bán chạy tháng 7 </a><br>
			<a href="Bai-thao-luan-Web/BanChay2023.html" class=""> Bán chạy nhất 2023 </a><br>
		</div>	

		<div class="CNkhac"> 
			<a href="Bai-thao-luan-Web/FeedBack.html"> FEEDBACK </a><br>
			<a href="Bai-thao-luan-Web/TuyenDung.html"> TUYỂN DỤNG </a><br>
			<a href="Bai-thao-luan-Web/Chickenflyy.html"> VỀ CHICKENFLYY </a>
		</div>
		<br>
		<div class="BQ"> <p> © CHICKENFLYY - Bản quyền bởi 小星星 </div>

</div>	
</body>
</html>