function Dang_ky() {
            var check = new Array();
            check[0] = document.getElementById("txtten").value;
            check[1] = document.getElementById("txtsdt").value;
            check[2] = document.getElementById("txtemail").value;
            check[3] = document.getElementById("txtmk").value;
            var dem=0,i;
            for(i=0;i<=3;i++)
            {
                if(check[i] != "" )
                {
                    dem++; 
                }
            }
            if(dem==4)
                alert("Đăng ký thành công !");
            if(dem<4)
                alert("Đăng ký thất bại ! Mời kiểm tra lại và điền đầy đủ thông tin ");
        }
        function checktenid()
        {
            var ck=document.getElementById('txtten').value;
            var a=/^[a-zA-Z0-9]{5,15}$/
            if(!a.test(ck)){
            document.getElementById('erronid').style.display='block';
            document.getElementById('erronid').innerHTML='*Vui lòng nhập : 5 - 15 ký tự hợp lệ';
            }
            else{
            document.getElementById('erronid').innerHTML="";
            }
        }
        function checkmk()
        {
            var ck=document.getElementById('txtmk').value;
            var a=/^[a-zA-Z0-9]{5,20}$/
            if(!a.test(ck)){
            document.getElementById('erronmk').style.display='block';
            document.getElementById('erronmk').innerHTML='*Vui lòng nhập : 5 - 20 ký tự hợp lệ';
            }
            else{
            document.getElementById('erronmk').innerHTML="";
            }
        }


        function checksdt()
        {
            var ck=document.getElementById('txtsdt').value;
            var a=/[0-9]/
            if(!a.test(ck)){
            document.getElementById('erronsdt').style.display='block';
            document.getElementById('erronsdt').innerHTML='*Vui lòng nhập đúng số điện thoại của bạn';
            }
            else{
            document.getElementById('erronsdt').innerHTML="";
            }
        } 
        function checkemail()
        {
            var ck=document.getElementById('txtemail').value;
            var a=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            if(!a.test(ck)){
            document.getElementById('erronemail').style.display='block';
            document.getElementById('erronemail').innerHTML='*Vui lòng nhập theo mẫu xyz@gmail.com';
            }
            else{
            document.getElementById('erronemail').innerHTML="";
            }
        }
