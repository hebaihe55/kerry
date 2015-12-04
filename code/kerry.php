<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/25
 * Time: 13:47
 */
header("Content-type: text/html;charset=utf-8");

class kerry
{


    public static function test()
    {

        return "hello world";
    }

//判断用户是否存在
    public static function UserCheck($openid)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysql_connect_error());
        }
        $sql = " select count(openid) from users where openid='" . $openid . "'";

        $result = $conn->query($sql);

        $rows = $result->fetch_row();

        return $rows[0];
    }


    //判断用户是否存在
    public static function Userlogin($openid)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysql_connect_error());
        }
        $sql = " select ext1 from users where openid='" . $openid . "'";

        $result = $conn->query($sql);

        $rows = $result->fetch_row();

        return $rows[0];
    }



    //查找未使用的折扣券
    public static function TicketUnused()
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysql_connect_error());
        }
        $sql = "select * from ticket where flag1=0 order by begintime  limit 0,1";

        $result = $conn->query($sql);

        $rows = $result->fetch_assoc();

        return $rows;
    }


    //活动分组
    public static function ActiveGroup($openid)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");

        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysql_connect_error());
        }

        $sql = "SELECT active ,COUNT(mid) total FROM active WHERE openid='" . $openid . "' GROUP BY active";


        $rs = $conn->query($sql);

        $result = array();
        while ($row = $rs->fetch_array()) {

            $result[$row[0]] = $row[1];


        }


        mysqli_close($conn);

        return $result;


    }


    //活动添加
    public static function ActiveAdd($openid, $avtive)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");

        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysql_connect_error());
        }

        $sql = "insert into active(openid,active) values('" . $openid . "','" . $avtive . "')";
        $result = false;


        if (mysqli_query($conn, $sql)) {
            $result = true;
        }


        mysqli_close($conn);


        return $result;

    }

    public static function TicketEdit($mid)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "update ticket set flag1=1 where mid=" . $mid ;

        echo $sql;

        $result = false;


        if (mysqli_query($conn, $sql)) {
            $result = true;
        }


        mysqli_close($conn);


      echo $result;
    }



    public static function UserEdit($openid, $userName, $mobile,$ext1,$ext2)
    {
        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "update users set relname='" . $userName . "', mobile='" . $mobile .  "', ext1='" . $ext1 . "', ext2='" . $ext2 ."' where openid='" . $openid . "'";


        $result = false;


        if (mysqli_query($conn, $sql)) {
            $result = true;
        }


        mysqli_close($conn);


       return $result ;
    }


//添加用户
    public static function UserAdd($openid)
    {

        $conn = mysqli_connect("localhost", "hejiyuan1", "HJYhjy@123321", "WECHAT1");
        $conn->query("set names utf8");
// 检测连接
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $sql = "insert into users(openid) values('" . $openid . "')";


        $result = false;


        if (mysqli_query($conn, $sql)) {
            $result = true;
        }


        mysqli_close($conn);


        return $result;

    }


}

?>