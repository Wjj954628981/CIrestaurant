<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title >Employee</title>
    <base href="<?php  echo base_url(); ?>" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="data/js/employee.js"></script>
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
        <li role="presentation" class="active"><a href="index.php/Employee">Employee</a></li>
        <li role="presentation" ><a href="index.php/material">Material</a></li>
        
      </ul>
    </div>
  </nav>
  <div class="container">
  <div>
    <h1 class="text-center text-primary"><a href="index.php/Employee">Employees</a></h1> 
    <!-- <button class="btn btn-primary" id="insertbtn">Insert</button> -->
    <br>

    <br><br>


  </div>
  <p></p>
  <div class="table-container" ">
    <table class="table table-bordered" id="order-table">
      <thead>
        <tr class="active">
          <th>雇员编号</th>
          <th>雇员姓名</th>
          <th>
            <div class="dropdown" >
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                雇员职位
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="index.php/Employee">全部</a></li>
                <li><a href="index.php/Employee/getEmployeeByposition/1">服务员</a></li>
                <li><a href="index.php/Employee/getEmployeeByposition/2">厨师</a></li>
                <li><a href="index.php/Employee/getEmployeeByposition/3">大堂经理</a></li>
              </ul>
            </div>
          </th>
          <th>加入时间</th>
          <!-- <th>order_description</th> -->
          <th>
            操作 
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addEmployee">
              新增雇员
            </button>
          </th>
        </tr>
      </thead>
      <tbody>
<?php 
    foreach ($employees as $row)
    {
?>
        <tr>
          <th><?php echo $row->idemployee?></th>
          <th><?php echo $row->employee_name?></th>
          <th><?php echo $row->employeecol_position?></th>
          <th ><?php echo $row->join_time?></th>
          <th >
              <div class="btn-group" role="group" aria-label="...">
                <button type="button"  class="btn btn-info btn-sm modifyEm" emId="<?php echo $row->idemployee?>" data-toggle="modal" data-target="#modifyEmployee" >修改</button>
                <button type="button"  class="btn btn-warning btn-sm dismissEm" emId="<?php echo $row->idemployee?>">解雇</button>
              </div>
          </th>
        </tr>
<?php
    }
?>
      </tbody>
    </table>
  </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">新增雇员</h4>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">姓名</span>
            <input id="addName" type="text" class="form-control" placeholder="姓名" aria-describedby="basic-addon1">
          </div>
          <p></p>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">职位</span>
            <input id="addPosition" type="text" class="form-control" placeholder="职位" aria-describedby="basic-addon2">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary" id="addNewEmployee">新增</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modifyEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">修改雇员</h4>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">姓名</span>
            <input id="modifyName" type="text" class="form-control" placeholder="姓名" aria-describedby="basic-addon1">
          </div>
          <p></p>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">职位</span>
            <input id="modifyPosition" type="text" class="form-control" placeholder="职位" aria-describedby="basic-addon2">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary" id="modifyOneEmployee">修改</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>