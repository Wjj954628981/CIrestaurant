$(document).ready(function(){


	console.log("loaded.")
	$("#insertbtn").click(function(event) {
	  window.location.href="index.php/OrderController/jumpintoInsert";
	});





});

function getOrderByTableId(){
	var tableId=$('#tableId').val();
	window.location.href="index.php/OrderController/getOrderByTableId/"+tableId;
}

function clickChangeOrder(id,type){
	console.log("you click "+id);
	$.post("index.php/OrderController/changeOrderState",
	{
		idorder:id,
		type:type

	},
	    function(data,status){
	    // alert("数据: \n" + data + "\n状态: " + status);

	    location.reload();
	});

	

}



