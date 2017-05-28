<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <base href="<?php  echo base_url(); ?>" />


    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>   

    <link href="data/css/table.css" rel="stylesheet" type="text/css" />
    <link href="data/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="data/js/table.js"></script> 


    <title>Table</title>
	
 
</head>

<body>

<nav class="navbar navbar-default " >
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand glyphicon glyphicon-home"></span>
      <a class="navbar-brand" href="index.php/">智能餐厅</a>
    </div>
    <ul class="nav navbar-nav">
      <li role="presentation" class="active"><a href="index.php/Table">Tables</a></li>
      <li role="presentation" ><a href="index.php/menu">Menu</a></li>
      <li role="presentation" ><a href="index.php/OrderController">Order</a></li>
      <li role="presentation" ><a href="index.php/Employee">Employee</a></li>
      <li role="presentation" ><a href="index.php/material">Material</a></li>
      
    </ul>
  </div>
</nav>	
	<div class="container">
	<div class="tables" style="border:1px solid #eee;width:900px;height:800px;"> 
	    <h2 class="text-primary">桌位管理
			<!-- <select name="table_type" id="s1">
				<option value="餐桌类型">餐桌类型</option>
			    <option value="堂食">堂食</option>
				<option value="包间">包间</option>
			</select>

			<select name="table_num"， id="s2" >
				<option value="就餐人数">就餐人数</option>
				<option value="1-2人">1-2人</option>
				<option value="3-4人">3-4人</option>
				<option value="5-6人">5-6人</option>
				<option value="7-10人">7-10人</option>
				<option value="11-15人">11-15人</option>
			</select>			
	    	<button class="btn btn-primary" id="querybtn">查询</button> -->
	    </h2>
        <br>
  	
<!--   	<div class="class2"><p>1号桌</p><p>桌型：双人桌</p></div>
    <div class="class1"><p>2号桌</p><p>桌型：双人桌</p></div>
	<div class="class2"><p>3号桌</p><p>桌型：双人桌</p></div>
    <div class="class1"><p>4号桌</p><p>桌型：双人桌</p></div>
    <div class="class2"><p>5号桌</p><p>桌型：双人桌</p></div>
    <div class="class2"><p>6号桌</p><p>桌型：双人桌</p></div>
    <div class="class1"><p>7号桌</p><p>桌型：双人桌</p></div>
    <div class="class2"><p>8号桌</p><p>桌型：双人桌</p></div>
	<div class="class1"><p>9号桌</p><p>桌型：四人桌</p></div>
    <div class="class2"><p>10号桌</p><p>桌型：四人桌</p></div>
    <div class="class1"><p>11号桌</p><p>桌型：四人桌</p></div>
    <div class="class2"><p>12号桌</p><p>桌型：四人桌</p></div>
    <div class="class1"><p>13号桌</p><p>桌型：四人桌</p></div>
    <div class="class2"><p>14号桌</p><p>桌型：四人桌</p></div>
	<div class="class1"><p>15号桌</p><p>桌型：六人桌</p></div>
    <div class="class3"><p>16号桌</p><p>桌型：六人桌</p></div>
    <div class="class2"><p>17号桌</p><p>桌型：六人桌</p></div>
    <div class="class4"><p>18号桌</p><p>桌型：六人桌</p></div>
    <div class="class1"><p>19号桌</p><p>桌型：十人桌</p></div>
    <div class="class2"><p>20号桌</p><p>桌型：十人桌</p></div> -->

<!--     <?php  foreach ($allmessage as $row)
        { ?>  
    <div class="tables class<?php echo "$row->state"  ?>">
        <p><?php echo $row->idtable  ?>号桌</p>
        <p>桌型：<?php echo $row->table_num;  ?>人桌</p>

            <button>修改状态</button>
            <button>点菜</button>

    </div>

    <?php }  ?> -->

<?php  

    foreach ($allmessage as $row)
    {
    echo "<div class='tables class{$row->state}'><p>{$row->idtable}号桌</p><p>桌型：{$row->table_num}人桌</p>";

    switch ($row->state) {
        case '0':
            echo "<button class='yuding' tableId='{$row->idtable}'>预定</button><button class='ruzuo' tableId='{$row->idtable}'>入座</button>";
            break;
        case '1':
            echo "<button class='diancai' tableId='{$row->idtable}'>点菜</button><button class='maidan' tableId='{$row->idtable}'>买单</button>";
            break;
        case '2':
            echo "<button class='shoushiwanbi' tableId='{$row->idtable}'>收拾完毕</button>";
            break;
        case '3':
            echo "<button class='ruzuo' tableId='{$row->idtable}'>入座</button>";
            break;
        

    }

    echo "</div>";


    }



?>  



    </div><!-- 桌位管理结束 -->
	
	
<?php 
		// echo "所有查询结果如下：";
		// echo '<br>';
		// foreach ($allmessage as $row)
	 //   	{
	 //       echo "id: ".$row->idtable;
	 //       echo ' state:'.$row->state;
	 //       echo ' num:'.$row->table_num;
	 //       echo ' type:'.$row->table_type;
	 //       echo '<br>';

	 //   	}

        echo "0可用 绿色<br>";
        echo "1占用 黄色<br>";
        echo "2待收拾 红色<br>";
        echo "3预定 蓝色<br>";



?>


</div>
   <!-- <p>The end of the VIEW </p> -->

</body>
</html>