<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/26
 * Time: 11:04
 */
require("kerry.php");


switch($_GET["action"])
{
    case 'usercheck': UserCheck();
        break;
    default:UserEdit();


}


function UserCheck()
{
    if($_GET["username"]=="kerry" && $_GET["userpwd"]=="kerry123")
    {
        header("Location:../admin/index.php");
        exit();
    }
    else
    {
        header("Location:../admin/login.php");
        exit();
    }


}


/*



function UserEdit()
{



$username = $_POST["username"];

$mobile = $_POST["mobile"];

$openid = $_POST["openid"];


kerry::UserEdit($openid, $username, $mobile);


header("Location:../discount.html");
exit();
}

*/
?>