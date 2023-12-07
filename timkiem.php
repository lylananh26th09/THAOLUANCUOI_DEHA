<script>
function searchFocus() {
    if (document.sform.stext.value == 'Nhập từ khóa ...') {
        document.sform.stext.value = '';
    }
}

function searchBlur() {
    if (document.sform.stext.value == '') {
        document.sform.stext.value = 'Nhập từ khóa ...';
    }
}
</script>

<div class="box" id="search">
                <form method="post" name="sform" action="index.php?page_layout=danhsachtimkiem" class="sbox">
                    <input onfocus="searchFocus();" onblur="searchBlur();" name="stext" type="text" class="stt" placeholder="Tìm kiếm...">
                    <a class="sbutton" type="submit" name="submit" href="javascript:void(0);">
                    <i class="fa fa-search"></i>
                    </a>
                </form>
            </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">
    /* FORM TÌM KIẾM */

.stt {
    border: none;
    background: white;
    outline: none;
    float: left;
    padding: 0 ;
    color: #black;
    font-size: 18px;
    transition: 0.4s;
    border-radius: 30px;
}

input.stt{
    padding: 0 0 0 10px;
}

.box {
    height: 48px;
    width: 350px;
    position: absolute;
    transform: translate(-50%,-50%);
    background: #F5CEBB;
    border-radius: 30px;
    padding: 10px;
    margin: 30px 0 0 0;
}

.sbutton {
    float: right;
    width: 40px;
    display: flex;
    justify-content: center;
    text-decoration: none;
    transition: 0.4s;
    margin: 3px 0 0 0;
}

.sbox:hover > .stext {
    width: 280px;
    padding: 0 5px;
    border-radius: 50px;
}

.fa-search {
    color: #ed7d31;
}

.timkiem img:hover > .box{
    display: block;
            transition: ease-out 0.60s;
            -moz-transition: ease-out 0.60s;
            -webkit-transition: ease-out 0.60s;
}

</style>