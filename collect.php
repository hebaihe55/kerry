<?php
require("code/kerry.php");

$openid = $_COOKIE["user"];

$rs = array();

$rs = kerry::ActiveGroup($openid);





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

    <header class="text-center"><a href="menu.html">
            <img src="img/headleft.jpg"></a><img src="img/headcenter.jpg"><a href="javascript:history.go(-1);"><img
                src="img/headright.jpg"></a>
    </header>

    <div class="text-center">
        <img src='<?php if ($rs["咖啡杯"] < 1) {
            echo "img/errcoffee.jpg";
        } else {
            echo "img/findcoffee.jpg";
        } ?>'><img src='<?php if ($rs["剪刀"] < 1) {
            echo "img/errshear.jpg";
        } else {
            echo "img/findshear.jpg";
        } ?>'><img src='<?php if ($rs["厨师帽"] < 1) {
            echo "img/errhat.jpg";
        } else {
            echo "img/findhat.jpg";
        } ?>'></div>


    <footer class="text-center"><img src="img/footer.jpg"></footer>
</div>
</body>
</html>