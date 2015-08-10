
$("document").ready(function(){
   clases();
   selectparcial();
   $("#clases").change(function(){
      seccion();
   });
   $("#seleccionar").click(function(){
      estudeval();
   });
});
function estudeval(){
   if($("#clases").val() != 0){
      if($("#parciales").val() != 0){
         var idprog = $("#clases").val();
         var parcial = $("#parciales").val();
         $.ajax({
            type: "get",
            url: "php/getdata.php",
            data: "notas&idprog="+idprog+"&parcial="+parcial,
            success: function(data){
               var obj = jQuery.parseJSON(data);
               if(obj['result'] != null){
                  $("#header").html(obj['header']);
               }
               bootbox.alert(obj['mensaje']);
            }
         });
      }else{
         bootbox.alert("<h4>No ha seleccionado el parcial</h4>");
      }
   }else{
      bootbox.alert("<h4>No ha seleccionado la clase</h4>");
   }
}
