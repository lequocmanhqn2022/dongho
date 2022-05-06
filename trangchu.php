<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="images/logonho.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    </head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
    }
	
/* trang chu 2 */
.sanphambanchay{
    display: flex;
    padding-bottom: 20px;
}
.le{
    width: 5%;
}
.than1{
    width: 90%;
	padding-top:100px;
    padding-bottom:100px;
	border-bottom: 1px solid rgb(128, 124, 124);
}
.than2{
    width: 90%;
	padding-top:30px;
    padding-bottom:100px;
}
.tennoidung{
    display: flex;
    padding-bottom: 20px;
}
.sanpham{
	width: 100%;
}
.product{
	width: 100%;
	display: flex;
}
.box{
	padding: 40px;
	width:50%;
}
.home-product-item{
    display: block;
	text-decoration: none;
	background: white;
	position: relative;
	border-radius: 2px;
	box-shadow: 0px 2px 2px 1px rgba(27, 27, 27, 0.904);
	transition: transform linear 0.1s;
}

.home-product-item:hover{
	transform: translateY(-1px);
	box-shadow: 0 1px 10px 0 rgba(22, 21, 21, 0.993);

}
.home-product-item-img{
	padding: 50%;
	background-size: cover;
	background-position: center;
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
	background-repeat: no-repeat;
}

.home-product-item-name{
	font-size: 1.4rem;
	font-weight: 400;
	color: var(--text-color);
	line-height: 1.8rem;
	padding: 10px 10px 6px;
	height: 3.6rem;
	overflow: hidden;
	text-overflow: ellipsis;
}

.home-product-item__price{
	display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}

.home-product-item__price-old{
	font-size: 1.4rem;
	color: #666;
	text-decoration: line-through;
	margin-left: 10px;
}

.home-product-item__price-current{
	font-size: 1.6rem;
	color: var(--primary-color);
	margin-left: 10px;

}

.home-product-item__action{
	display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 10px 0;
}
.home-product-item__origin{
	display: flex;
	justify-content: left;
	padding: 3px 10px 0;
	color: #595959;
	font-size: 1.2rem;
	font-weight: 300;
}
.home-product-item__like{
	font-size: 1.3rem;
}

i.home-product-item-icon-like-fill{
	display: none;	
	color: #f63d30;
}
.home-product-item__like--liked .home-product-item-icon-like-empty{
	display: none;
}

.home-product-item__like--liked .home-product-item-icon-like-fill{
	display: block;
}

.home-product-item__rating{
	font-size: 1rem;
	transform: scale(0.8);
	transform-origin: right;
	color: #e2d415;
	margin:-1px 0 0 auto;
}
.home-product-item__sold{
	font-size: 1.2rem;
	color: var(--text-color);
	margin-left: 6px;
}
.home-product-item__star--gold{
	color: #ffce3e;
}
.home-product-item__star--off{
	color: rgb(122, 121, 121);
}

.home-product-item__favourite{
	position: absolute;
	top: 10px;
	left: -4px;
	color: var(--primary-color);
	background: currentColor;
	font-size: 1.2rem;
	font-weight: 500;
	line-height: 1.6rem;
	padding-right: 5px;
	border-top-right-radius: 3px;
	border-bottom-right-radius: 3px;
}

.home-product-item__favourite::after{
	content: "";
	position: absolute;
	left: 0;
	bottom: -3px;
	border-top: 3px solid currentColor;
	border-left: 3px solid transparent;
	filter: brightness(60%);

}
.home-product-item__sale-off{
	position: absolute;
    top: 0;
    right: 0;
    width: 70px;
    height: 70px;
    background: rgba(255, 216, 64, 0.94);
    text-align: center;
    border-top-right-radius: 2px;
}

.home-product-item__sale-off::after{
	content: "";
	position: absolute;
	left: 0;
	bottom: -4px;
	border-style: solid;
	border-width: 0 20px 4px;
	color: rgba(255, 216, 64, 0.94);
	border-color: transparent currentColor transparent currentColor;

}
.home-product-item__sale-off-percent{
	color: #ee4d2d;
    font-weight: 600;
    font-size: 1.2rem;
    line-height: 1.2rem;
    position: relative;
    top: 31px;
}

.home-product-item__sale-off-label{
	font-size: 1.3rem;
	line-height: 1.3rem;
	color: #333333;
	position: relative;
	top: -10px;
	font-weight: 600;
}
/* trang chu 3 */
.sale{
    display: flex;
    padding-bottom: 20px;
}
.noidung {
    padding-top: 15px;
    height: 100px;
    font-size: 50px;
	font-weight: bold;
    padding-top: 20px;
    color: rgb(51 51 51);
}

li {
    list-style: none;
}
a {
    text-decoration: none;
}

/* Phần header */
.head1{
    display: block;
    background-color: #333333;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.le{
    width: 5%;
}
.head-address{
    display: flex;
    width: 100%;
    height: 50px;
    border-bottom: 1px solid rgb(68, 67, 67);
}
.address{
    display: flex;
    width: 23%;
    padding-top: 10px;
    padding-left: 50px;
    padding-bottom: 10px;
}
.contact{
    display: flex;
    width: 47%;
    padding-top: 10px;
    padding-bottom: 10px;
}
.contact > a:hover {
    color: #D26E4B;
    transition: 0.1s;
}
.ic-icon{
    display: flex;
    width: 20%;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 100px;
    justify-content: right;
}
.ic-icon > i{
    padding-left: 15px;
}
.head-logo{
    display: flex;
    width: 100%;
    height: 150px;
    border-bottom: 1px solid rgb(68, 67, 67);
}
.logo{
    display: flex;
    width: 23%;
    padding-top: 10px;
    padding-left: 50px;
    padding-bottom: 10px;
    justify-content: center;
}
.logo > img{
    width: 80%;
}
.search{
    display: flex;
    width: 47%;
    padding-top: 50px;
    padding-bottom: 50px;
    justify-content: center;
}
.search .search-text{
    border: none;
    outline: none;
    float: left;
    padding: 0;
    color:black;
    font-size: 15px;
    line-height: 30px;
    font-size: 20px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 400px;
}
.search .search-btn{
    color: #333333;
    font-size: 25px;
    background-color: #D26E4B;
    width: 50px;
    display: flex;
    border: none;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    padding-top: 10px;
    padding-left: 10px;
    cursor: pointer;
}
.search .search-btn:hover {
    background-color: #d38c72;
    transition: 0.3s;
}
.dangnhap-giohang{
    display: flex;
    width: 20%;
    padding-top: 50px;
    padding-bottom: 50px;
    justify-content: center;
    padding-right: 100px;
    justify-content: right;
}
.dangnhap-giohang li{
    padding: 20px 30px;
}
.login {
    padding-top: 10px;
    padding-right: 50px;
    color: #551A8B;
}
.login:hover .user1{
    display: block;
}
.login .user1 {
    font-size: 16px;
    font-weight: 0px;
    /* ẩn  */
    position: absolute;     
    display: none;
    background-color: #e8e8e8;
    border-radius: 20px;
    width: 130px;
    height: 60px;
}
.user1 a {
    color: rgb(46, 45, 45);
}
.user1 .user11 {
    margin: -12px -12px;
}
.user1 .user12 {
    margin-top: -30px;
    margin-left: -12px;
}
.user1 li>a:hover {
    color: #e9443e;
}
.login .user21 p {
    margin-left: -10px;
    margin-top: -1px;
    font-size: 16px;
    font-weight: bold;
    color: rgb(46, 45, 45);
}
.user2 {
    display: flex;
}
.user2 .user21 {
    padding-top: 60px;
}
.user2 .user21:hover ul{
    display: block;
}
.user2 .user21 ul{
    font-size: 30px;
    font-weight: 2px;
    display: none;
    background-color: #e8e8e8;
    border-radius: 15px;
    width: 170px;
    height: 90px;
}
.user2 .user21 .u1 {
    padding: 5px 10px;
}
.user2 .user21 .u2 {
    padding:5px 10px;
}
.user2 .user21 li {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
    padding-left: 5px;
}
.user2 .user21 a {
    color: rgb(10, 10, 10);
} 
.user2 .user21 a:hover {
   color: #e9443e;
} 
.user2 .user22{
    display: block;
    position:relative;
}
.user2 .user22 a{
    padding-top: 45px;
    font-size: 35px;
    padding-left: 10px;
    color: rgb(84, 136, 214);
}
#soLuongSP {
    margin-top: -48px;
    margin-left: 40px;
    background: #fff;
    font-size: 16px;
    font-weight: bold;
    padding: 6px 6px;
    color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    cursor: pointer;    
}
.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
}
#mucluc{
    text-decoration: none;
}
.head2 {
    background-color: #333333;
    justify-content: center;
    display: flex;
    height: 80px; 
}
.head2 .menu {
    font-size: 20px;
    display: flex;
}
.head2 .menu>li  {
    padding: 25px 40px;
}
.head2 li a {
    color: #fff;
}
.head2 li a:hover {
    color: #D26E4B;
}

/* Phần footer */
.nut {    
    font-size: 18px; 
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;        
}
form{
    width: 100%;
    background-color: #333333;
    display: table;
}
.le{
    width: 5%;
}
h1{
    padding-bottom: 20px;
}
.btn{
    padding: 10px 0 10px;
    color: white;
}
.chantrang {
    width: 100%;
    height: 100%; 
    display: flex;
    color: white;
}
.chantrang .nut:hover {
    color: #D26E4B;
}
.chan1{
    width: 22%;
    padding: 50px;
}
.chan2{
    width: 24%;
    padding: 50px;
}
.chan3{
    width: 24%;
    padding: 50px;
}
.chan1a {
    padding: 5px;
    margin-top: 3%;
}
.chan1b {
    margin-top: -8%;
    margin-left: 10%;
    font-size: 18px;
}
.chan1c {
    padding: 5px;
    margin-top: 3%;
    margin-left: -1%;
}
.chan1d {
    margin-top: -8%;
    margin-left: 10%;
    font-size: 18px;
}
.chan1e {
    padding: 5px;
    margin-top: 3%;
    margin-left: -1%;
}
.chan1f {
    margin-top: -8%;
    margin-left: 10%;
    font-size: 18px;
}
.chan1g {
    margin-top: 4%;
    margin-left: 10%;
    font-size: 18px;
}
.logochan{
    width: 20%;
    padding: 50px;
}
.logochan img{
    height: auto;
}
#backtop {
    width: 70px;
    height: 70px;
    background: #D26E4B;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    position: fixed;
    bottom: 25px;
    right: 20px;
    cursor: pointer;
}
</style>
<body>

<header>
    <div class="head1">
        <div class="head-address">
            <div class="le"><br></div>
            <div class="address">
                <div class="icon">
                    <i class="fa fa-map-marker-alt"
                    style="color: white; font-size: 25px;"></i>
                </div>
                <div style="color: white; font-size: 20;padding-left: 10px;padding-top: 3px;">Tổ 11, khu vực 2, phường Nhơn Bình</div>
            </div>
            <div class="contact">
                <div class="icon">
                    <i class="fas fa-phone-alt "
                    style="color: white; font-size: 25px;"></i>
                </div>
                <a href="trangchu.php" style="color: white; font-size: 20;padding-left: 10px;padding-top: 3px;cursor: pointer;">0398849060</a>
            </div>
            <div class="ic-icon">
                <a href=""><i class="fab fa-facebook"
                style="color: white; font-size: 25px;cursor: pointer;"></i></a>
                <i class="fab fa-facebook-messenger"
                style="color: white; font-size: 25px;cursor: pointer;"></i>
                <i class="fab fa-instagram"
                style="color: white; font-size: 25px;cursor: pointer;"></i>
            </div>
            <div class="le"><br></div>
        </div>
        <div class="head-logo">
            <div class="le"><br></div>
            <div class="logo">
            </div>
            <div class="search">
                <input id="timkiem" type="text" class="search-text" placeholder="Tìm kiếm ...">   
                <button class="search-btn" type="submit" onclick="timkiem(this)">
                    <i class="fas fa-search"> </i>
                </button>
            </div>
            <div class="le"><br></div>
        </div>
    </div>   
    <!--tạo mục menu-->
    <div class="head2" id="myHeader">
        <nav id="mucluc">
            <ul class="menu">
                <li> <a href="trangchu.php"> TRANG CHỦ </a> </li>
                <li> <a href="gioithieu.php"> GIỚI THIỆU </a></li> 
                <li> <a href="nuochoa.php?sex=1"> ĐỒNG HỒ NAM </a> </li>
                <li> <a href="nuochoa.php?sex=0"> ĐỒNG HỒ NỮ </a></li> 
                <li> <a href="lienhe.php"> LIÊN HỆ </a></li>  
            </ul>
        </nav>
    </div>
</header>

<script>
    function timkiem(x) {
        $timkiem = $("#timkiem").val();
        if($timkiem == "")
            alert("Chưa nhập thông tin! "); 
        else 
            window.location.replace($timkiem+".php");
    };

    window.onscroll = function() {myFunction()};
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;    
    function myFunction() {
    if (window.pageYOffset > sticky) 
        header.classList.add("sticky");
    else 
        header.classList.remove("sticky");
    }
</script>

<style>
    .slider{
    width: 100%;
    position: relative;
    background: rgb(0, 0, 0);
}
.slide{
    width: 100%;
    height: 910px;
}
#prev{
    font-size: 35px;
    color: white;
    text-transform: uppercase;
    position: absolute;
    left: 20px;
    top: 50%;
    opacity: 0.6;
}
#prev:hover{
    color: tomato;
}
#next{
    font-size: 35px;
    color:  white;
    text-transform: uppercase;
    position: absolute;
    right: 20px;
    top:50%;
    opacity: 0.6;
}
#next:hover{
    color: tomato;
}
</style>
            <div class="slider">
                <img class="slide" stt="0" src="https://www.xwatch.vn/wp-content/uploads/2019/05/50-thuong-hieu-dong-ho-the-gioi-29-min.jpg"/>
                <img class="slide" style="display:none" stt="1" src="https://luxshopping.vn/Uploads/News/travel-watches-banner.png"/>
                <img class="slide" style="display:none" stt="2" src="https://minhtan.com.vn/wp-content/uploads/2018/10/thuong-hieu-dong-ho-noi-tieng-the-gioi-0.png"/>
                <img class="slide" style="display:none" stt="3" src="https://cdn.tgdd.vn/Files/2019/02/25/1151828/diyrntio_800x450.png"/> 
                <img class="slide" style="display:none" stt="4" src="https://cdn.tgdd.vn/Files/2022/01/15/1410939/anhdau_1280x720-800-resize.png"/>
                <a href="#" id="prev"><i class="fas fa-chevron-left"></i></a>
                <a href="#" id="next"><i class="fas fa-chevron-right"></i></a>
            </div>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script>
            $(()=>{
                $('#next').click(function(){
                    changeImage('next');
                })
                $('#prev').click(function(){
                    changeImage('prev');
                })
            })
           function changeImage(type){
                let imgSelectVisible = $('img.slide:visible');
                let imgVisible = parseInt(imgSelectVisible.attr('stt'));
                let eqNumber = type === 'next' ? imgVisible + 1 : imgVisible - 1;
                if(eqNumber >= $('.slide').length){
                    eqNumber=0;
                }
                $('img.slide').eq(eqNumber).fadeToggle(3000);
                imgSelectVisible.hide();
            }
           setInterval(function(){
                $('#next').click();
            },3000);
        </script>
<div class="sanphambanchay">
        <div class="le"><br></div>
        <div class="than1">
            <marquee class="noidung" behavior="Alternate" direction="right">
                SẢN PHẨM BÁN CHẠY
            </marquee>

		<div class="product">
            <div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("http://vnnews24h.net/img_data/images/top-10-thuong-hieu-dong-ho-dat-gia-nhat-the-gioi-0.jpg");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>

                </a>
            </div>

			<div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("https://shopwatch.vn/wp-content/uploads/2018/04/dong-ho-rolex.jpg");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>

                </a>
            </div>

			<div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5gXxHZc3HT6bECTggKupLOTWVRE89PSbrY3M5kf9LUSCUjHImYxMzzIdQ8I8zQCgN5o4&usqp=CAU");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>
                </a>
            </div>
			
        </div>

        </div>
        <div class="le"><br></div>
</div>

<div class="sale">
        <div class="le"><br></div>
        <div class="than2">
            <marquee class="noidung" behavior="Alternate" direction="right">
                SALE OF TO 30%
            </marquee>

        <div class="product">

		<div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("https://www.turbowatch.net/img_data/images/nhung-luu-y-cho-nguoi-moi-bat-dau-mua-dong-ho-patek-philippe-1.jpg");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>
                </a>
            </div>

			<div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw7oBi2XwdmPTjlQ8xqg19213TuaiBAbLCqS1qf1TA56DDT2ZgAvgll5FrN0OgbAKFnTY&usqp=CAU");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>
                </a>
            </div>

			<div class='box'>
			    <a class='home-product-item' href='chitiet.php'>
					<div class='home-product-item-img' style='background-image: url("https://dep.com.vn/wp-content/uploads/2021/05/richard-mille-rm-21-01-dong-ho-deponline-01-20210504.jpg");'></div>
			        <h4 class='home-product-item-name'>Tên Sản Phẩm 1</h4>

					<div class='home-product-item__price'>
					<span class='home-product-item__price-old'>Giá 1đ</span>
					<span class='home-product-item__price-current'>giảm giá 1đ</span>
					</div>

					<div class='home-product-item__action'>

					<span class='home-product-item__like home-product-item__like--liked'>
					        <i class='far fa-heart home-product-item-icon-like-empty'></i>
					        <i class='fas fa-heart home-product-item-icon home-product-item-icon-like-fill'></i>
					</span>

					<div class='home-product-item__rating'>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
                    <i class='fas fa-star home-product-item__star--gold'></i>
					</div>

					<span class='home-product-item__sold'>100 đã bán</span>
					</div>

					<div class='home-product-item__origin'>
					<span class='home-product-item__origin-name'>Việt Nam</span>
					</div>

					<div class='home-product-item__sale-off'>
											<span class='home-product-item__sale-off-percent'>50%</span>
											<span class='home-product-item__sale-off-label'>GIẢM</span>
					</div>
                </a>
            </div>
			
        </div>

        </div>

        <div class="le"><br></div>
</div>

<form action="" method="POST" role="form">
    <div class="chantrang">
        <div class="le"><br></div>
        <div class="chan1">
            <h1>Thông tin liên hệ</h1>
            <div class="fas fa-map-marker-alt chan1a"></div>
            <p class="chan1b"> 170 An Dương Vương, Tp. Quy Nhơn, Tỉnh Bình Định</p>
            <div class="fas fa-phone-alt chan1c"> </div>
            <div class="chan1d"> 0398849060 </div>
            <div class="fas fa-envelope-open chan1e"></div>
            <div class="chan1f"> lehungmanhqn2018@gmail.com</div>
        </div>
        <div class="chan2">
            <h1>Liên kết</h1>
            <p><input class="btn nut" type="submit" name="page" value="Trang chủ"></p>
            <p><input class="btn nut" type="submit" name="nuochoanam" value="Đồng Hồ nam"></p>
            <p><input class="btn nut" type="submit" name="nuochoanu" value="Đồng hồ nữ"></p>
            <p><input class="btn nut" type="submit" name="gioithieu" value="Giới thiệu"></p>
            <p><input class="btn nut" type="submit" name="lienhe" value="Liên hệ"></p>
        </div>
        <div class="chan3">
            <h1>Hổ trợ</h1>
            <p><input class="btn nut" type="submit" name="dieukhoang" value="Điểu khoản"></p>
            <p><input class="btn nut" type="submit" name="doitra" value="Chính sách đổi trả"></p>
            <p><input class="btn nut" type="submit" name="huongdan" value="Hướng dẫn sử dụng"></p>
        </div>
        <div class="le"><br></div>
    </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk" crossorigin="anonymous"></script>

<script>
                                                    window.fbAsyncInit = function() {
                                                        FB.init({
                                                            appId: "1784956665094089",
                                                            xfbml: true,
                                                            version: "v2.6"
                                                        });
                                                    };
                                                    (function(d, s, id){
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) { return; }
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "//connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-customerchat" page_id="104437142245218"></div>
