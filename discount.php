<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/30
 * Time: 22:19
 */

$flag=$_GET["flag"];


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

    <div class="text-center"><img src="img/discount1.jpg"></div>
    <div class='text-center  <?php if($flag!=""){echo "show";}else{echo "hidden";}?>  '>
        <img src="img/discount2_01.jpg">
        <?php if($flag=="ESSIE NAILS"){?>
        <h2 style="height:48px; line-height: 34px; font-size: 3em "><?php echo $flag?></h2>
        <h3>凭此电子券至店铺消费即享5折优惠</h3>
        <?php } else { ?>
            <h2 style="height:48px; line-height: 4px; font-size: 3em "><?php echo $flag?></h2>
            <h3>凭此电子折扣券可至北区1F客服台兑换实体优惠券</h3>
            <h3>（仅限当天优惠使用）</h3>
        <?php }  ?>

    </div>
    <div class='text-center <?php if($flag==""){echo "show";}else{echo "hidden";}?>'><a href="show.php?#a<?php echo rand(1,6)?>"> <img src="img/discount3.jpg"></a></div>
<div style="visibility: hidden" ><img src="img/discount2_03.jpg" /> </div>
    <footer class="text-center"><img src="img/footer.jpg"></footer>
</div>
</body>
</html>