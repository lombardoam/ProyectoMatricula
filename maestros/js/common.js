function clases(){
   var cuenta = $("input#num_cuenta").val();
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "clases&cuenta="+cuenta,
      success: function(data){
         $("select#clases").html(data);
      }
   });
}

function seccion(){
   var id_prog = $("#clases").val();
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "seccion&id_progra="+id_prog,
      success: function(data){
         var obj = jQuery.parseJSON(data);
         if(obj['seccion'] != null){
            $("label#seccion").text(obj['seccion']);
         }else{
            bootbox.alert(obj['mensaje']);
         }
      }
   });
}
function parcial(){
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "parciales",
      success: function(data){
         $("div#parciales").html(data);
      }
   });
}
function selectparcial(){
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "selectparciales",
      success: function(data){
         var obj = jQuery.parseJSON(data);
         if(obj['result'] != null){
            $("#parciales").html(obj['html']);
         }else{
            bootbox.alert(obj['mensaje']);
         }
      }
   });
}
