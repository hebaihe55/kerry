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

    <title>后台</title>
    <link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="themes/icon.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="js/easyui-lang-zh_CN.js"></script>

    <style>
        html,body,div,table{ margin: 0; padding: 0; border: 0; text-align: center }



    </style>


    <script type="text/javascript">
        function doSearch(){
            $('#tt').datagrid('load',{
                mobile: $('#mobile').val()

            });
        }
    </script>
</head>
<body>

<div class="demo-info" style="width: 1200px;    margin: 0 auto">




<table id="tt" class="easyui-datagrid" style="width:1200px;height:600px; margin: 0 auto;"
       url="datagrid24_getdata.php"
       title="搜索" iconCls="icon-search" toolbar="#tb"
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
</div>
</body>
</html>