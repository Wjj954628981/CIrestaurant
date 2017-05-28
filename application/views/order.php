<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title >Orders</title>
    <base href="<?php  echo base_url(); ?>" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link href="data/css/order.css" rel="stylesheet" type="text/css" />
    <link href="data/css/style.css" rel="stylesheet" type="text/css" />
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="data/js/order.js"></script>
</head>
<body>

  <nav class="navbar navbar-default " >
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="navbar-brand glyphicon glyphicon-home"></span>
        <a class="navbar-brand" href="index.php/">智能餐厅</a>
      </div>
      <ul class="nav navbar-nav">
        <li role="presentation" ><a href="index.php/Table">Tables</a></li>
        <li role="presentation" ><a href="index.php/menu">Menu</a></li>
        <li role="presentation" class="active"><a href="index.php/OrderController">Order</a></li>
        <li role="presentation" ><a href="index.php/Employee">Employee</a></li>
        <li role="presentation" ><a href="index.php/material">Material</a></li>
        
      </ul>
    </div>
  </nav>
  
  <div class="container">
  <div>
    <h1 class="text-center text-primary"><a href="index.php/OrderController">Orders</a></h1> 
    <!-- <button class="btn btn-primary" id="insertbtn">Insert</button> -->
    <br>
    <span>&emsp;按照订单状态筛选： </span>
    <div class="btn-group" role="group">

      <button type="button" class="btn btn-default" onclick="javascript:location.href='index.php/OrderController/getOrderByState/1'">等待制作</button>
      <button type="button" class="btn btn-default" onclick="javascript:location.href='index.php/OrderController/getOrderByState/2'">正在制作</button>
      <button type="button" class="btn btn-default" onclick="javascript:location.href='index.php/OrderController/getOrderByState/3'">已经完成</button>
      <button type="button" class="btn btn-default" onclick="javascript:location.href='index.php/OrderController/getOrderByState/4'">历史订单</button>
    </div>
    <br><br>
    <span>&emsp;按照桌号筛选： </span>
    <input type="text" id="tableId" >
    <button type="button" class="btn btn-default" onclick="getOrderByTableId()">查询</button>

  </div>
  <p></p>
  <div class="table-container">
    <table class="table table-bordered" id="order-table">
      <thead>
        <tr class="active">
          <th>下单编号</th>
          <th>下单时间</th>
          <th>下单桌号</th>
          <th>所点菜品</th>
          <th>订单状态</th>
          <!-- <th>order_description</th> -->
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
<?php 
 	foreach ($orders as $row)
 	{
?>
        <tr>
          <th><?php echo $row->idorder?></th>
          <th><?php echo $row->order_time?></th>
          <th><?php echo $row->table_idtable?></th>
          <th><?php echo $row->menu_idmenu?></th>
          <th class="<?php  if($row->order_state==1) echo "bg-warning";
          if($row->order_state==2) echo "bg-info"; if($row->order_state==3) echo "bg-success";  ?>">
            <?php  
            if($row->order_state==1) echo "等待制作";
            if($row->order_state==2) echo "正在制作"; 
            if($row->order_state==3) echo "制作完成"; 
            if($row->order_state>=4) echo "订单完成"; 
            ?>
          </th>
          <!-- <th><?php echo $row->order_description?></th> -->
          <th >
            <button class="btn btn-info" id="<?php echo $row->idorder?>" onclick="clickChangeOrder(this.id,'up')">
              <?php 
                if($row->order_state==1) echo "开始制作";
                if($row->order_state>=2) echo "制作完成"; 
  
              ?>
            </button>
            <button class="btn btn-default" id="<?php echo $row->idorder?>" onclick="clickChangeOrder(this.id,'down')">
              <?php 
                if($row->order_state==1) echo "取消订单";
                if($row->order_state>=2) echo "撤销制作"; 

              
              ?>
            </button>
          </th>
        </tr>
<?php
 	}
?>
      </tbody>
    </table>
  </div>
  </div>
</body>
</html>