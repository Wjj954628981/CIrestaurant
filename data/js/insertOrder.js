$(document).ready(function(){


  $(".insertOrder").submit(function(e){
    var idorder = $("#idorder").val();
    var order_time = $("#order_time").val();
    var table_idtable = $("#table_idtable").val();
    var menu_idmenu = $("#menu_idmenu").val();
    var order_state = $("#order_state").val();
    var order_description = $("#order_description").val();

    alert(table_idtable+"  "+menu_idmenu+"  "+order_state+"  "+order_description);

    $.ajax({
      type:"POST",
      url:"index.php/OrderController/insertOrder",
      data:{
        "idorder":idorder,
        "order_time":order_time,
        "table_idtable":table_idtable,
        "menu_idmenu":menu_idmenu,
        "order_state":order_state,
        "order_description":order_description
      },
      success:function(){
        alert("success");
        window.location.href="OrderController/index";
      },
      error:function() {
        alert("Failed");
      }
    });
  });


  
});