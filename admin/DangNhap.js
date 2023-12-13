function DangNhap() {
	    var check = new Array();
            check[0] = document.getElementById("txte").value;
            check[1] = document.getElementById("txtmk").value;
            var dem=0,i;
            for(i=0;i<=1;i++)
            {
                if(check[i] != "" )
                {
                    dem++; 
                }
            }
            if(dem==2)
                alert("Đăng nhập thành công !");
            if(dem<2)
                alert("Đăng nhập thất bại !!!!! Mời kiểm tra lại và điền đầy đủ thông tin !!!  Nếu chưa có tài khoản vui lòng đăng kí để tiếp tục ! ");
        }

