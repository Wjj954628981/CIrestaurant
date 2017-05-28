$(document).ready(function(){
	console.log("window load.!!")
 	// 开始写 jQuery 代码...
 	console.log("extern file")


 	//商品数量
 	var orderDishes=[];
	var subs = document.getElementsByName("sub");
	var numbers = document.getElementsByName("number");
	var dishid = document.getElementsByClassName("dishid");

	
	for(var i=0;i<subs.length;i++){
		subs[i].index = i;
		subs[i].onclick = function(){
			
			var j = numbers[this.index].value;
			if(j>0)
			{
				numbers[this.index].value = j-1;
				rmindex=orderDishes.indexOf(dishid[this.index].innerText);
				orderDishes.splice(rmindex,1);
				console.log(orderDishes);



			}
		}
	}
	var adds = document.getElementsByName("add");
	for(var i=0;i<adds.length;i++){
		adds[i].index = i;
		adds[i].onclick = function(){
			var j = number[this.index].value;
			numbers[this.index].value =	parseInt(j)+ 1;
			orderDishes.push(dishid[this.index].innerText);
			console.log(orderDishes);
			
		}
	}

	// $('.type').click(function(){
	// 	console.log('type click.')
	// 	var end='.com'
	// 	window.location.href = 'http://www.baidu'+end;
	// });




	$("#commit").click(function(){
		for(var i=0;i<orderDishes.length;i++){
			var tableId=$('#tableId').val()
			console.log(tableId)
			$.post("index.php/OrderController/insert",
			{
			    table_idtable:tableId,
			    menu_idmenu:orderDishes[i],
			    order_description:''
			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);
			    if(status=="success"){
			    	location.href="index.php/OrderController/getOrderByTableId/"+tableId;
			    }
			});

		}

		

	});

	$('.typeChange').click(function(){
		var tableId=$('#tableId').val();
		var menuType=$(this).attr("menuType");
		if(menuType>0){
			location.href="index.php/menu/getDishByType/"+menuType+"/"+tableId;
		}else{
			location.href="index.php/menu/index/"+tableId;
		}
		


	});

	
		
	



});


