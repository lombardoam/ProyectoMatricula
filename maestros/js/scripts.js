$("document").ready(function(){
   evaluaciones();
   clases();
   parcial();
   hidden();
   $("#clases").change(function(){
      idconfiguracion();
      seccion();
   });
});
$(document).keydown(function(tecla){
    if (tecla.keyCode == 116) {
      if (confirm('Actualizar la página hará que pierda los cambios, ¿Desea continuar?')) {
      }else{
         return false;
      }
    }
    if (tecla.keyCode == 221) {
      if (confirm('Cerrar la pestaña hará que pierda los cambios, ¿Desea continuar?')) {
      }else{
         return false;
      }
    }
});
function hidden(){
   var cuenta = $("input#num_cuenta").val();
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "hidden",
      success: function(data){
         $("div#hidden").html(data);
      }
   });
}
function agregar(parcial){
   if($("#id_config").val() != ""){
      if($("#clases").val() != 0){
         $("tbody#"+parcial).append("<tr><td><input type=\"text\" class=\"form-control\" placeholder=\"Nombre\" name=\"nombre\"></td><td><input type=\"text\" class=\"form-control\" placeholder=\"Descripcion\" name=\"descripcion\"></td><td><input type=\"text\" class=\"form-control\" placeholder=\"0\" name=\"puntos\"></td><td><a href=\"javascript:\" class=\"btn btn-success\" onclick=\"guardareditar("+parcial+", this)\">Guardar</a> <input type=\"hidden\" value=\"hola\" id=\"hideval\"> <a href=\"javascript:\" class=\"btn btn-danger\" id=\"elimsolo\" onclick=\"eliminarsolo(this)\">X</a></td></tr>");
         var valor = parseInt($("#h"+parcial).val());
         valor += 1;
         $("#h"+parcial).val(valor);
         //alert(valor);
      }else{
         bootbox.alert("<h4>Por favor seleccione una clase</h4>");
      }
   }else{
      bootbox.dialog({
         message: "Por favor seleccione un Tipo de Evaluación para esta clase, luego hace click en guardar antes de agregar evaluaciones.",
         title: "No ha configurado esta clase!",
         buttons: {
            success: {
               label: "Entendido",
               className: "btn-primary"
            }
         }
      });
   }
}
function guardareditar(parcial, elem){
   if($('#id_config').val() != 0){

      //Obtenemos a los hermanos del elemento actual
      var hermanos = $(elem).parent().siblings();
      var hide = $(elem).parent().find("#hideval");
      var elima = $(elem).parent().find("#elimsolo");
      var nombre, descripcion, puntos;
      hermanos.each(function(){
         var input = $(this).find('input');
         switch(input.attr('id')){
            case nombre:
               nombre = input.val();
               break;
            case descripcion:
               descripcion = input.val();
               break;
            case puntos:
               puntos = parseInt(input.val());
               break;
         }
         //$(this).find('input').replaceWith(function(){
         //   return '<td>'+this.value+'<td>';
         //});
      });
      if(nombre != "" && descripcion != "" && puntos != ""){
         if($.isNumeric(puntos)){
            var id_config = $('#id_config').val();
            hermanos.each(function(){
               var input = $(this).find('input');
               input.attr("readonly", "true");
            });
            $.ajax({
               type: "GET",
               url: "php/submitdata.php",
               data: "insert&id_config="+id_config+"&nombre="+nombre+"&descripcion="+descripcion+"&puntos="+puntos+"&parcial="+parcial,
               success: function(data){
                  var obj = jQuery.parseJSON(data);
                  if(obj['cambio'] != null){
                     bootbox.alert(obj['mensaje']);
                     hide.val(obj['last_id']);
                  }
               }
            });
            $(elem).replaceWith(function(){
               return "<a href=\"javascript:\" class=\"btn btn-success\" onclick=\"habilitareditar("+parcial+", this)\">Editar</a>";
            });
         }else{
            bootbox.alert("<h4>Los puntos solo pueden tener números</h4>");
         }
      }else{
         bootbox.alert("<h4>Por favor llene todos los campos antes de guardar</h4>");
      }
   }else{
      bootbox.alert("<h4>Por favor seleccione una clase</h4>");
   }
   if(elima != null){
      elima.replaceWith(function(){
         return "<a href=\"javascript:\" class=\"btn btn-danger\" onclick=\"eliminar("+parcial+", this)\">X</a>";
      });
   }
   //alert(valor);
}
function habilitareditar(parcial, elem){
   var hermanos = $(elem).parent().siblings();
   hermanos.each(function(){
      $(this).find('input').removeAttr("readonly");
   });
   $(elem).replaceWith(function(){
      return "<a href=\"javascript:\" class=\"btn btn-success\" onclick=\"actualizareditar("+parcial+", this)\">Guardar</a>";
   });
}
function evaluaciones(){
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "eval",
      success: function(data){
         $("select#tipo_evaluacion").html(data);
      }
   });
}
function guardar(){
   if($("#tipo_evaluacion").val() != 0){
      if($("#clases").val() != 0){
         var tipo = $("#tipo_evaluacion").val();
         var progra = $("#clases").val();
         $.ajax({
            type: "GET",
            url: "php/submitdata.php",
            data: "tipo_eval&tipo="+tipo+"&progra="+progra,
            success: function(data){
               var result = jQuery.parseJSON(data);
               if(result['cambio'] != null){
                  bootbox.alert(result['mensaje']);
                  $("#id_config").val(result['id_config']);
               }else{
                  bootbox.alert(result['mensaje']);
               }
            }
         });
      }else{
         bootbox.alert("<h4>Por favor seleccione una clase.</h4>");
      }
   }else{
      bootbox.alert("<h4>Por favor seleccione un tipo de evaluación.</h4>");
   }

}
function idconfiguracion(){
   var id_prog = $("#clases").val();
   $.ajax({
      data: "id_prog="+id_prog,
      url: "php/getdata.php",
      type: "GET",
      success: function(response){
         var obj = jQuery.parseJSON(response);
         if(obj['mensaje']){
            bootbox.dialog({
               message: "Por favor seleccione un Tipo de Evaluación para esta clase, luego hace click en guardar antes de agregar evaluaciones.",
               title: obj['mensaje'],
               buttons: {
                  success: {
                     label: "Entendido",
                     className: "btn-primary"
                  }
               }
            });
         }else{
            $("#id_config").val(obj['id_config']);
            $("#tipo_evaluacion").val(obj['tipo_eval']);
            mostrareval(obj['id_config']);
         }
      }
   });
}
function actualizareditar(parcial, elem){
   if($("#id_config").val() != 0){

      //Obtenemos el id de la evaluación actual
      var id_eval = $(elem).parent().find("#hideval").val();

      //Para obtener el valor de cada uno de los inputs
      var nombre, descripcion, puntos;
      var hermanos = $(elem).parent().siblings();
      hermanos.each(function(){
         var input = $(this).find('input');
         input.attr("readonly", "true");
         switch(input.attr('id')){
            case nombre:
               nombre = input.val();
               break;
            case descripcion:
               descripcion = input.val();
               break;
            case puntos:
               puntos = parseInt(input.val());
               break;
         }
      });
      var id_config = $('#id_config').val();
      $.ajax({
         type: "GET",
         url: "php/submitdata.php",
         data: "update&id_eval="+id_eval+"&id_config="+id_config+"&nombre="+nombre+"&descripcion="+descripcion+"&puntos="+puntos+"&parcial="+parcial,
         success: function(data){
            var obj = jQuery.parseJSON(data);
            if(obj['cambio'] != null){
               bootbox.alert(obj['mensaje']);
            }
         }
      });
      $(elem).replaceWith(function(){
         return "<a href=\"javascript:\" class=\"btn btn-success\" onclick=\"habilitareditar("+parcial+", this)\">Editar</a>";
      });
   }
}
function mostrareval(config){
   if($("#clases").val() != 0){
      if(config != 0){

         //Petición ajax para conseguir las evaluaciones
         $.ajax({
            type: "GET",
            url: "php/getdata.php",
            data: "mostrar&id_config="+config,
            success: function(data){
               var obj = jQuery.parseJSON(data);
               bootbox.dialog({
                  message: "Puede modificar la información en cada evaluación.",
                  title: "Cargando..",
                  buttons: {
                     success: {
                        label: "Entendido",
                        className: "btn-primary"
                     }
                  }
               });
               //para asignar las evaluaciones a cada parcial
               var parciales = $("#cantidadparciales").val();
               for(i = 1; i <= parciales; i++){
                  $("tbody#"+(i-1)).html(obj[i][1]);
               }

            }
         });
      }else{
         bootbox.dialog({
            message: "Seleccione un tipo de evaluación y luego hace click en guardar, despues procede a configurar las evaluaciones.",
            title: "No hay ninguna configuración almacenada.",
            buttons: {
               success: {
                  label: "Entendido",
                  className: "btn-primary"
               }
            }
         });
      }
   }else{

      }
}
function eliminarsolo(elem){
   $(elem).parent().parent().remove();
}
function eliminar(parcial, elem){
   //var valor = parseInt($("#h"+parcial).val());
   //valor -= 1;
   //$("#h"+parcial).val(valor);
   //Para obtener el valor de cada uno de los inputs
   var hideval = $(elem).parent().find("#hideval").val();
   var result;
   var yo = elem;
   if($("#clases").val() != 0){
      bootbox.dialog({
         message: "Deberá actualizar las demás evaluaciones para que los puntos concuerden con la evaluación en puntos oro o en base a 100.",
         title: "¿Está seguro que desea eliminar la evaluacion?",
         buttons: {
            success: {
               label: "Eliminar",
               className: "btn-danger",
               callback: function(yo) {
                  $.ajax({
                     type: "GET",
                     url: "php/submitdata.php",
                     data: "eliminar&id_eval="+hideval,
                     success: function(data){
                        var obj = jQuery.parseJSON(data);
                        if(obj['cambio'] == 'si'){
                           bootbox.alert(obj['mensaje']);
                           result = 'si';
                           $(elem).parent().parent().remove();
                        }else{
                           bootbox.alert(obj['mensaje']);
                           result = 'no';
                        }
                     }
                  });
               }
            },
            main: {
               label: "Cancelar",
               className: "btn-primary"
            }
         }
      });
   }else{
      bootbox.alert("<h4>Por favor seleccione una clase</h4>");
   }

}
function mensaje(){
   bootbox.dialog({
      message: "Para agregar evaluaciones al sistema, seleccione una clase desde la sección general de esta ventana, luego proceda a gestinar sus evaluaciones.",
      title: "Seleccione una clase.",
      buttons: {
         success: {
            label: "Entendido",
            className: "btn-primary"
         }
      }
   });
}
window.setTimeout( mensaje, 300 );
