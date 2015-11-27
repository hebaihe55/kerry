<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/27
 * Time: 18:32
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="../css/style1.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->

    <!--//webfonts-->
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>

    <script>
        function oncheck()
        {
            if( $("#username").val()=="" ||  $("#userpwd").val()=="")
            {
                alert("请输入完整");
                return false;
            }

            return true;

        }


    </script>

</head>
<body>

<!--SIGN UP-->

<div class="login-form">

    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"> </div>
    <div class="avtar">
        <img src="../img/avtar.png" />
    </div>
    <form action="../code/api.php" method="get" onsubmit="return oncheck()" >
        <input type="text" class="text" placeholder="用户名"   id="username" name="username"  >
        <div class="key">
            <input type="password" placeholder="密码" id="userpwd" name="userpwd">
        </div>
     <input type="hidden" name="action" value="usercheck">
    <div class="signin">
        <input type="submit" value="Login" >
    </div>
    </form>
</div>
<div class="copy-rights">

</div>

</body>
</html>