<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/26
 * Time: 11:09
 */
?>


<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=750, user-scalable=no, target-densitydpi=device-dpi">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>嘉里中心</title>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/swiper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script>
        function check() {

            var username = $('#username').val();

            var mobile = $('#mobile').val();

            if (username == "" || mobile == "") {
                alert('请输入完整！');
                return false;
            }

            if (mobile.length != 11) {

                alert("请输入正确手机号！");
                return false;
            }

            document.form1.submit();

        }

    </script>
</head>
<body>
<div class="container-fluid">

    <header class="text-center"><a href="menu.html"><img src="img/headleft.jpg"></a><img src="img/headcenter.jpg"><a
            href="javascript:history.go(-1);"><img src="img/headright.jpg"></a>
    </header>

    <div class="text-center"><img src="img/daoju.jpg"></div>
    <div class="text-center userinfo ">

        <form action="code/api.php" method="post" name="form1" id="form1">
            <input type="text" class="txt " placeholder="请输入姓名" id="username" name="username">
            <input type="text" class="txt " placeholder="请输入手机号" id="mobile" name="mobile">
            <input type="hidden" value='<?php echo $_COOKIE["user"] ?>' id="openid" name="openid">


            <img src="img/submit.png" onclick="return check()">
        </form>
    </div>


    <footer class="text-center"><img src="img/footer.jpg"></footer>
</div>
</body>
</html>