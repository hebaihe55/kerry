<?php
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$itemid = isset($_POST['mobile']) ? mysql_real_escape_string($_POST['mobile']) : '';

	
	$offset = ($page-1)*$rows;
	
	$result = array();

mysql_query("set names utf8");




	$where = "mobile like '%$itemid%'";
	$rs = mysql_query("select count(*) from users where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from users  where " . $where . " limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	
	echo json_encode($result);
?>