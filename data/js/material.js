$(document).ready(function(){


	console.log("material loaded.")

	$('#searchByName').click(function(){
		var name=$('#searchName').val();
		var url="index.php/material/searchByName/"+name;
		// URLEncoder.encode(url,"utf-8")
		url=encodeURI(url);
		console.log(url)
		location.href=url;

	});

	$('.inMaterial').click(function(){
		var mId=$(this).attr('mId')
		var num=$(this).parent().next().val()
		// alert(mId+"  "+num);
		$.post("index.php/material/addMaterial",
		{
			id:mId,
			num:num

		},
		    function(data,status){
		    // alert("数据: \n" + data + "\n状态: " + status);

		    location.reload();
		});
	});

	$('.outMaterial').click(function(){
		var mId=$(this).attr('mId')
		var num=$(this).parent().prev().val()
		// alert(mId+"  "+num);
		$.post("index.php/material/minusMaterial",
		{
			id:mId,
			num:num

		},
		    function(data,status){
		    // alert("数据: \n" + data + "\n状态: " + status);

		    location.reload();
		});

		
	});
	


});



	





