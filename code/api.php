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






function UserEdit()
{


    $username = $_POST["username"];

    $mobile = $_POST["mobile"];

    $openid = $_POST["openid"];

    $ext1 = "";
    $ext2 = "";
 $flag=0;

    $ticket=array();
    $ticket = kerry::TicketUnused();


    if (count($ticket) > 0){

echo date("y-M-d M:h:s");

        if ($ticket["begintime"] < date("y-M-d M:h:s") && $ticket["endtime"] > date("y-M-d M:h:s")) {
            $ext1 = $ticket['brand'];
            $ext2 = $ticket["mid"];
            $flag=1;


        }
    kerry::TicketEdit($ext2);
}

kerry::UserEdit($openid, $username, $mobile,$ext1,$ext2);




//header("Location:../discount.php?flag=" .$flag);
//exit();
}

?>