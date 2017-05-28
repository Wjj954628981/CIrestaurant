<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?php  echo base_url(); ?>" />
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
     
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
     
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="data/js/cook.js"></script>



    <title>Cook ~.~</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="navbar-brand glyphicon glyphicon-home"></span>
        <a class="navbar-brand" href="index.php/menu">智能餐厅</a>
      </div>
      <ul class="nav navbar-nav">
      <li role="presentation" ><a href="index.php/Table">Tables</a></li>
        <li role="presentation" ><a href="index.php/menu">Menu</a></li>
        <li role="presentation" ><a href="index.php/OrderController">Order</a></li>
        
      </ul>
    </div>
  </nav>

</body>
</html>