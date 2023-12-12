<?php
session_start();
include_once './ketnoi.php';

if($_SESSION['email']== "PHTrang1229@gmail.com" && $_SESSION['pass'] == "[29122001"){
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý giày</title>
    <link href="css/tcquantri.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/tcquantri.css" rel="stylesheet">
<!--      <link href="css/styles.css" rel="stylesheet">
 -->    <script src="js/lumino.glyphs.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="C:/xampp/htdocs/Bai_thao_luan_web/Bai-thao-luan-Web/Trang-chu.html">Chickenflyy</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg>
                        Hi, Admin <!-- <?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?> --> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="dangxuat.php"><svg class="glyph stroked cancel">
                                <img src="img/log-out.png" width="14px" style="margin:0 20px 0 0px">
                            </svg>
                            Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active"><a href="quantri.php"><svg class="glyph stroked dashboard-dial">
                        <img src="img/home.png" width="14px " >
                    </svg> <b> Chickenflyy </b> </a></li>
                    <li><a href="quantri.php?page_layout=baocao"><svg class="glyph stroked calendar">
                    </svg> Đơn hàng</a></li>
            <li><a href="quantri.php?page_layout=danhsachdm"><svg class="glyph stroked calendar">
                    </svg> Hãng giày</a></li>
            <li><a href="quantri.php?page_layout=danhsachsp"><svg class="glyph stroked line-graph">
                    </svg> Giày</a></li> 
            <li role="presentation" class="divider"></li>
        </ul>

    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <?php
      // master page
      if(isset($_GET["page_layout"])){
        switch ($_GET["page_layout"]) {
            case 'baocao': include_once './baocao.php';
            break;
            case 'danhsachsp':include_once './danhsachsp.php';
               break;
            case 'themsp':include_once './themsp.php';
               break;
            case 'suasp':include_once './suasp.php';
               break;
            // case 'xoasp':include_once './xoasp.php';
            //    break;
            case 'danhsachdm':include_once './danhsachdm.php';
               break;
            case 'suadm':include_once './suadm.php';
               break;
            case 'themdm':include_once './themdm.php';
               break;

        }
      }
      ?>
    </div>
    <!--/.main-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php
}else
header('location: index.php');
?>