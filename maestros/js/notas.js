
$("document").ready(function(){
   clases();
   selectparcial();
   $("#clases").change(function(){
      seccion();
   });
   $("#seleccionar").click(function(){
      estudeval();
   });
   $("#guardnts").click(function(){
      guardnts();
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
                  $("#body").html(obj['content']);
               }
               bootbox.alert(obj['mensaje']);
            }
         });
      }else{
         bootbox.alert("<h4>Por favor seleccione un parcial</h4>");
      }
   }else{
      bootbox.alert("<h4>Por favor seleccione una clase</h4>");
   }
}
function guardnts(){
   var trs = $("tbody#body").find("tr");
   var valores = new Array();
   trs.each(function(){
      var id_estudiante = $(this).find("#id_estudiante").val();
      var colevals = $(this).find("td#coleval");
      alert(colevals.length);
      for(i = 0; i < colevals.length; i++){
         var eval = colevals[i].children("input#id_evaluacion").val();
         alert(eval);
      }
   });
}
