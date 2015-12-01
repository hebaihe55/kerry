<?php

$conn = @mysql_connect('localhost','hejiyuan1','HJYhjy@123321');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('WECHAT1', $conn);

?>