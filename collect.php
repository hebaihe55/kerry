<?php
require("code/kerry.php");

if (!isset($_COOKIE["user1"])) {

    setcookie(user1, time() + mt_rand(), time() + 24*60*60- (date('H')*60*60+date('m')*60) );
}





$openid = $_COOKIE["user1"];

$userlog= kerry::Userlogin($openid);



if( !is_null( $userlog) )
{
    header("Location:../discount.php?flag=" .$userlog);
    exit();
}



$aa=array();

$aa=kerry::ActiveGroup($openid);

$i=count($aa);

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

    <div class='text-center <?php if($i>=2){echo "show";}else{ echo "hidden";} ?>'>
    <a href="lottery.php"> <img src="img/cc1.jpg" />    </a>
    </div>
    <div class='text-center <?php if($i<2){echo "show";}else{ echo "hidden";} ?>'>
       <img src="img/collect1.jpg" />
    </div>

    <footer class="text-center"><img src="img/footer.jpg"></footer>
</div>
</body>
</html>