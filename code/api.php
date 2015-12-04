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


        if ($ticket["begintime"] < date("Y-m-d H:m:s") && $ticket["endtime"] > date("Y-m-d H:m:s")) {
            $ext1 = $ticket['brand'];
            $ext2 = $ticket["mid"];
            $flag=1;


        }
        else
        {
            $ext1 = "";
            $ext2 = $ticket["mid"];
            $flag=1;
        }

}
   $userlog= kerry::Userlogin($openid);

    if($userlog==null)
    {
        kerry::UserEdit($openid, $username, $mobile,$ext1,$ext2);
        kerry::TicketEdit($ext2);
    }






header("Location:../discount.php?flag=" .$ext1);
exit();
}

?>