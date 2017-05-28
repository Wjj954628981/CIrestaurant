$(document).ready(function(){

	console.log("table view loaded!");

	$('.ruzuo').click(function(){
			var tableId=$(this).attr("tableId");
			$.post("index.php/Table/changeState",
			{
				tableId:tableId,
				tableState:1

			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);

			    location.reload();
			});
		
	});
	$('.yuding').click(function(){
			console.log($(this).attr("tableId"));
			var tableId=$(this).attr("tableId");
			$.post("index.php/Table/changeState",
			{
				tableId:tableId,
				tableState:3

			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);

			    location.reload();
			});
		
	});
	$('.diancai').click(function(){
			console.log($(this).attr("tableId"));
			var tableId=$(this).attr("tableId");
			window.location.href = "index.php/Menu/index/"+tableId;
			
		
	});
	$('.maidan').click(function(){
			console.log($(this).attr("tableId"));

			var tableId=$(this).attr("tableId");

			window.location.href = "index.php/OrderController/payOrder/"+tableId;
			// $.post("index.php/Table/changeState",
			// {
			// 	tableId:tableId,
			// 	tableState:2

			// },
			//     function(data,status){
			//     // alert("数据: \n" + data + "\n状态: " + status);

			//     location.reload();
			// });
		
	});
	$('.shoushiwanbi').click(function(){
			console.log($(this).attr("tableId"));
			var tableId=$(this).attr("tableId");
			$.post("index.php/Table/changeState",
			{
				tableId:tableId,
				tableState:0

			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);

			    location.reload();
			});
		
	});
		








});