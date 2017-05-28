<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InsertOrder</title>
	<base href="<?php  echo base_url(); ?>" />
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="data/js/insertOrder.js"></script>
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        var idorder = $("#idorder").val();
        var order_time = $("#order_time").val();
        var table_idtable = $("#table_idtable").val();
        var menu_idmenu = $("#menu_idmenu").val();
        var order_state = $("#order_state").val();
        var order_description = $("#order_description").val();

        $(".insertOrder").submit(function(e){
          $.ajax({
            type:'POST',
            url:'OrderController/insertOrder',
            data:{
              "idorder":idorder,
              "order_time":order_time,
              "table_idtable":table_idtable,
              "menu_idmenu":menu_idmenu,
              "order_state":order_state,
              "order_description":order_description
            },
            success:function(){
              window.location.href="OrderController/index";
            },
            error:function() {
              alert("Failed");
            }
          });
        });
      });
    </script> -->
</head>
<body>
	<h1>InsertOrders</h1> 

    <form class="insertOrder">
      <div class="form-group">
        <label>idorder</label>
        <input class="form-control" id="idorder" placeholder="idorder">
      </div>
      <div class="form-group">
        <label>order_time</label>
        <input class="form-control" id="order_time" placeholder="order_time">
      </div>
      <div class="form-group">
        <label>table_idtable</label>
        <input class="form-control" id="table_idtable" placeholder="table_idtable">
      </div>
      <div class="form-group">
        <label>menu_idmenu</label>
        <input class="form-control" id="menu_idmenu" placeholder="menu_idmenu">
      </div>
      <div class="form-group">
        <label>order_state</label>
        <input class="form-control" id="order_state" placeholder="order_state">
      </div>
      <div class="form-group">
        <label>order_description</label>
        <input class="form-control" id="order_description" placeholder="order_description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>