<?php



require("code/kerry.php");


if (!isset($_COOKIE["user"])) {

    setcookie(user, time() + mt_rand(), time() + 60 * 60 * 24 * 30);
}


$openid = $_COOKIE["user"];


if (kerry::UserCheck($openid) == 0) {

    kerry::UserAdd($openid);
}

?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=750, user-scalable=no, target-densitydpi=device-dpi">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>静安嘉里中心</title>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/swiper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>
<body>
<div class="container-fluid">

    <header class="text-center"><a href="menu.html"><img src="img/headleft.jpg"></a><img src="img/headcenter.jpg"><a
            href="javascript:history.go(-1);"><img src="img/headright.jpg"></a>
    </header>


    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="map.php"><img src="img/banner1.png" class="img-responsive"></a></div>
            <div class="swiper-slide"><a href="coffee.html"><img src="img/banner2.jpg" class="img-responsive"></a></div>
            <div class="swiper-slide"><a href="cake.html"><img src="img/banner3.jpg" class="img-responsive"></a></div>
            <div class="swiper-slide"><a href="sewing.html"><img src="img/banner4.jpg" class="img-responsive"></a></div>
            <div class="swiper-slide"><a href="sos.html"><img src="img/banner5.jpg" class="img-responsive"></a></div>
            <div class="swiper-slide"><a href="market.php"><img src="img/banner6.jpg" class="img-responsive"></a></div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->



    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            spaceBetween: 30,
            autoplay: 3000
        });
    </script>




    <div class="text-center"><img src="img/logo.jpg"></div>
    <footer><img src="img/footer.jpg"></footer>


</div>
</body>
</html>