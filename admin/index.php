<?php
/**
 * Created by PhpStorm.
 * User: hejiyuan
 * Date: 2015/11/27
 * Time: 19:16
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/try/jeasyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/try/jeasyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/try/jeasyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="http://www.w3cschool.cc/try/jeasyui/jquery.easyui.min.js"></script>
    <script type="text/javascript">
        function doSearch(){
            $('#tt').datagrid('load',{
                itemid: $('#itemid').val(),
                productid: $('#productid').val()
            });
        }
    </script>
</head>
<body>

<div class="demo-info" style="margin-bottom:10px">
    <div class="demo-tip icon-tip">&nbsp;</div>

</div>

<table id="tt" class="easyui-datagrid" style="width:1200px;height:600px"
       url="datagrid24_getdata.php"
       title="Searching" iconCls="icon-search" toolbar="#tb"
       rownumbers="true" pagination="true">
    <thead>
    <tr>
        <th field="RelName" width="80">姓名</th>
        <th field="mobile" width="120">手机号</th>
        <th field="openid" width="80" align="right">微信号</th>
        <th field="ext1" width="150" align="right">折扣券</th>
        <th field="Createdtime" width="200">时间</th>


    </tr>
    </thead>
</table>
<div id="tb" style="padding:3px">
    <span>手机号:</span>
    <input id="mobile" name="mobile" style="line-height:26px;border:1px solid #ccc">

    <a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">搜索</a>
</div>
</body>
</html>