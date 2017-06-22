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
  <link href="data/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="data/css/style.css" rel="stylesheet" type="text/css" />

  <script src="data/js/menu.js"></script>


    <title>Menu</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="navbar-brand glyphicon glyphicon-home"></span>
        <a class="navbar-brand" href="index.php/">智能餐厅</a>
      </div>
      <ul class="nav navbar-nav">
      <li role="presentation" ><a href="index.php/Table">Tables</a></li>
        <li role="presentation" class="active"><a href="index.php/menu">Menu</a></li>
        <li role="presentation" ><a href="index.php/OrderController">Order</a></li>
        <li role="presentation" ><a href="index.php/Employee">Employee</a></li>
        <li role="presentation" ><a href="index.php/material">Material</a></li>
        
      </ul>
    </div>
  </nav>

  <div class="container">
    <h1 class="text-center text-primary">
    Menu 
    <br>
      <small>
        当前桌号是：
        <span id="tableId"><?php echo $tableId  ?></span>
      </small>
    </h1> 



<!--   <ul>
    <?php   foreach ($dishes as $row) { ?>
    <li>
      <p class="dishes"><?php echo $row->dish_name;  ?></p>
      <p class="dishid" hidden="true"><?php echo  $row->idmenu; ?></p>
      <p ><?php echo  $row->dish_price."￥"; ?></p>
      <button class="subadd" name="sub">-</button>
      <input type="text" name="number" id="number" value="0" />
      <button class="subadd" name="add">+</button>
    </li>
    <?php  } ?>
  </ul> -->
  <ul class="nav nav-tabs">
    <li role="presentation"  ><a class="typeChange" menuType="0">所有菜品</a></li>
    <li role="presentation"><a class="typeChange" menuType="1">热菜</a></li>
    <li role="presentation"><a class="typeChange" menuType="2">凉菜</a></li>
    <li role="presentation"><a class="typeChange" menuType="3"">主食</a></li>
    <li role="presentation"><a class="typeChange" menuType="4"">酒水</a></li>
  </ul>
<div class="container">
    <div class="row center-block" >
    <?php   foreach ($dishes as $row) { ?>
    <div class="col-xs-6 col-sm-4 " style="margin-bottom: 30px; padding-bottom: 10px; border-bottom: 1px; border-bottom-style: solid; border-bottom-color:rgba(128, 128, 128, 0.45); ">

      <p class="dishes" >
        <h4><?php echo $row->dish_name;  ?></h4>
        <h5 style="float: right;margin-right: 170px;"><?php echo "￥".$row->dish_price; ?></h5>
      </p>
      <p class="dishid" hidden="true"><?php echo  $row->idmenu; ?></p>
      <!-- <p ><?php echo "￥". $row->dish_price; ?></p> -->
      <img src="data/img/<?php echo $row->dish_photo ?>" class="img-circle" width="200px" height="200px">
      <br>
      
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="subadd" name="sub"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
      <input type="text" name="number" id="number" value="0"  size="2"/>
      <button class="subadd" name="add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>

    </div>
    <?php  } ?>
  </div>
</div>


  <p><button id="commit" class="btn btn-primary btn-lg btn-block" >确认点菜</button></p>

  <ul class="nav nav-tabs">
    <li role="presentation"  ><a class="typeChange" menuType="0">所有菜品</a></li>
    <li role="presentation"><a class="typeChange" menuType="1">热菜</a></li>
    <li role="presentation"><a class="typeChange" menuType="2">凉菜</a></li>
    <li role="presentation"><a class="typeChange" menuType="3"">主食</a></li>
    <li role="presentation"><a class="typeChange" menuType="4"">酒水</a></li>
  </ul>

  <div class="ordered"></div>

  
  <?php 
        // echo base_url();  
  ?>
   <p class="text-center">NKU SoftWare Engineering Team One </p>
  </div>
</body>
</html>