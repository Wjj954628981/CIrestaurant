$(document).ready(function(){

	console.log("payorder view loaded!");

	$('.payorder').click(function(){
			console.log($(this).attr("tableId"));

			var tableId=$(this).attr("tableId");




			$.post("index.php/OrderController/clearTableOrder",
			{
				tableId:tableId,

			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);
			    $.post("index.php/Table/changeState",
			    {
			    	tableId:tableId,
			    	tableState:2

			    },
			        function(data,status){
			        // alert("数据: \n" + data + "\n状态: " + status);
			        alert("买单成功！");
			        window.location.href="index.php/Table"

			        // location.reload();
			    });
			});
		
	});







});