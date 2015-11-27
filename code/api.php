<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/26
 * Time: 11:04
 */
require("kerry.php");

$username = $_POST["username"];

$mobile = $_POST["mobile"];

$openid = $_POST["openid"];


kerry::UserEdit($openid, $username, $mobile);


header("Location:../discount.html");
exit();
?>