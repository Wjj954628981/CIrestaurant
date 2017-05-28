<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title >Material</title>
    <base href="<?php  echo base_url(); ?>" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="data/js/material.js"></script>
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
        <li role="presentation" ><a href="index.php/OrderController">Order</a></li>
        <li role="presentation" ><a href="index.php/Employee">Employee</a></li>
        <li role="presentation" class="active"><a href="index.php/material">Material</a></li>
        
      </ul>
    </div>
  </nav>
  <div class="container">
  <div>
    <h1 class="text-center text-primary"><a href="index.php/material">Material</a></h1> 
    <!-- <button class="btn btn-primary" id="insertbtn">Insert</button> -->
    <br>

    <br><br>
    <div class="container">
      
    </div>
    <div class="row">
      <div class="input-group col-md-4 col-md-offset-4" >
            <input type="text" class="form-control" placeholder="输入你关心的食材" id="searchName" >
            <span class="input-group-btn">
              <button class="btn btn-info" type="button" id="searchByName">搜索</button>
            </span>
            <span class="input-group-btn ">
              <button class="btn btn-danger col-md-offset-1" type="button" onclick="location='index.php/material/getDangerMaterial'">查看需要补货食材</button>
            </span>

      </div><!-- /input-group -->

        

    </div>
  





  </div>
  <p></p>
  <div class="table-container" ">
    <table class="table table-bordered" id="order-table">
      <thead>
        <tr class="active">
          <th>食材编号</th>
          <th>食材名称</th>
          <th>食材单位</th>
          <th>警戒数量</th>
          <th>食材数量</th>
          <th>操作</th>

        </tr>
      </thead>
      <tbody>
<?php 
    foreach ($material as $row)
    {
?>
        <tr>
          <th><?php echo $row->idmaterial?></th>
          <th><?php echo $row->material_name?></th>
          <th><?php echo $row->material_unit?></th>
          <th><?php echo $row->material_min?></th>
          <th class="<?php  if($row->material_num<$row->material_min){ echo "danger";}   ?>">
            <?php echo $row->material_num?>
          </th>
          <th style="width: 20%;">
            <div class="input-group" >
                  <span class="input-group-btn">
                    <button class="btn btn-default inMaterial" type="button" mId="<?php echo $row->idmaterial  ?>">入库</button>
                  </span>
                  <input type="number" class="form-control" placeholder="" min="1">
                  <span class="input-group-btn">
                    <button class="btn btn-default outMaterial" type="button" mId="<?php echo $row->idmaterial  ?>">出库</button>
                  </span>
            </div><!-- /input-group -->
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