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

    <script src="data/js/payorder.js"></script>



    <title>Pay Your Order</title>
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
      <li role="presentation" ><a href="index.php/menu">Menu</a></li>
      <li role="presentation" ><a href="index.php/OrderController">Order</a></li>
      <li role="presentation" ><a href="index.php/Employee">Employee</a></li>
      <li role="presentation" ><a href="index.php/material">Material</a></li>
      
    </ul>
  </div>
</nav>
    <div class="text-center">
    <h2> Table  <?php echo $tableId ?>  </h2> 

    



      <div class="table-container col-md-4 col-md-offset-4">
        <table class="table table-striped" id="order-table">
          <thead>
            <tr>
              <th>菜品</th>
              <th>价格</th>
            </tr>
          </thead>
          <tbody>
    <?php 
      $total=0;
      foreach ($orders as $row)
      {
    ?>
            <tr>
              <th><?php echo $row->dish_name?></th>
              <th><?php echo $row->dish_price; $total+=$row->dish_price; ?></th>
            </tr>
    <?php
      }
    ?>
          <tr class="warning">
            <th>总价</th>
            <th><?php echo $total  ?></th>
          </tr>

          </tbody>
        </table>
    


  <button type="button" class="btn btn-info btn-lg btn-block payorder" tableId="<?php  echo $tableId  ?>">买单完毕</button>

</div>
</body>
</html>