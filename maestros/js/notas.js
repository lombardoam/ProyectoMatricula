
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
               if(obj['noestudiante'] != null){
                  bootbox.dialog({
                     message: "Por favor tome nota de ello.",
                     title: obj['noestudiante'],
                     buttons: {
                        success: {
                           label: "Entendido",
                           className: "btn-primary"
                        }
                     }
                  });
               }
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
   var valores = Array();
   var cantidad = 0;
   var valido = true;
   trs.each(function(){
      var colevals = $(this).find("td.coleval");
      for(i = 0; i < colevals.length; i++){
         var tdactual = $(this).find("td#coleval"+i);
         var valor = tdactual.children("#eval").val();
         if(valor == ""){
            valido = false;
         }
         if(!/^[0-9]*$/.test(valor)){
            valido = false;
         }
      }
   });
   if(valido){
      trs.each(function(){
         var evaluacion = new Array();
         var estudiante = $(this).find("#id_estudiante").val()
         var colevals = $(this).find("td.coleval");
         for(i = 0; i < colevals.length; i++){
            var tdactual = $(this).find("td#coleval"+i);
            evaluacion.push({
               id_evaluacion: tdactual.children("#id_evaluacion").val(),
               valor: tdactual.children("#eval").val()
            });
         }
         valores.push({
            id_estudiante: estudiante,
            evaluaciones: evaluacion
         });
         cantidad++;
      });
      //alert(JSON.stringify(valores));

      $.ajax({
         type: "GET",
         url: "php/submitdata.php",
         data: "notas&object="+JSON.stringify(valores),
         success: function(data){
            bootbox.alert(data);
         }
      });
   }else{
      bootbox.dialog({
         message: "Por favor tome nota de ello.",
         title: '<h4>El espacio para las notas no puede esta vacío y solo puede contener números</h4>',
         buttons: {
            success: {
               label: "Entendido",
               className: "btn-primary"
            }
         }
      });
   }

}
