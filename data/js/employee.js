$(document).ready(function(){


	console.log("employee loaded.")

	$("#addNewEmployee").click(function(event) {
		var addName=$('#addName').val()
		var addPosition=$('#addPosition').val()


		$.post("index.php/Employee/addEmployee",
		{
			name:addName,
			position:addPosition

		},
		    function(data,status){
		    // alert("数据: \n" + data + "\n状态: " + status);

		    location.reload();
		});
	});



	$('.modifyEm').click(function(){
		var modifyemId=$(this).attr("emId");
		var modifyName=$(this).parent().parent().prev().prev().prev().text();
		var modifyPosition=$(this).parent().parent().prev().prev().text();
		// alert(modifyemId+"  "+modifyName+" "+modifyPosition);

		$('#modifyName').val(modifyName);
		$('#modifyPosition').val(modifyPosition);

		$('#modifyOneEmployee').click(function(){
			modifyName=$('#modifyName').val();
			modifyPosition=$('#modifyPosition').val();
			
			$.post("index.php/Employee/updateEmployee",
			{
				emId:modifyemId,
				name:modifyName,
				position:modifyPosition

			},
			    function(data,status){
			    // alert("数据: \n" + data + "\n状态: " + status);
			    if (status=='success') {
			    	alert("修改成功");
			    	location.href ="index.php/Employee"
			    }
			    

			    // location.reload();
			});
			
		});

	});

	$('.dismissEm').click(function(){
		if(confirm("确定要解雇吗？")){
			var emId=$(this).attr("emId");
			// alert(emId);
			$.post("index.php/Employee/deleteEmployee",
			{
				emId:emId,

			},
			    function(data,status){
			    	if (status=='success') {
			    		alert("解雇成功");
			    	}
			    

			    location.reload();
			});
		}

	});





});



	





