$("document").ready(function(){
   evaluaciones();
   clases();
   seccion();
   parcial();
   hidden();
   $("#clases").change(function(){
      idconfiguracion();
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
   var cuenta = $("input#num_cuenta").val();
   $.ajax({
      type: "GET",
      url: "php/getdata.php",
      data: "seccion&cuenta="+cuenta,
      success: function(data){
         $("label#seccion").html(data);
      }
   });
}
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
   $("tbody#"+parcial).append("<tr><td><input type=\"text\" class=\"form-control\" placeholder=\"Nombre\" name=\"nombre\"></td><td><input type=\"text\" class=\"form-control\" placeholder=\"Descripcion\" name=\"descripcion\"></td><td><input type=\"text\" class=\"form-control\" placeholder=\"0\" name=\"puntos\"></td><td><a href=\"javascript:\" class=\"btn btn-success\" onclick=\"guardareditar("+parcial+", this)\">Guardar</a> <input type=\"hidden\" value=\"hola\" id=\"hideval\"> <a href=\"javascript:\" class=\"btn btn-danger\" onclick=\"eliminar("+parcial+", this)\">X</a></td></tr>");
   var valor = parseInt($("#h"+parcial).val());
   valor += 1;
   $("#h"+parcial).val(valor);
   //alert(valor);
}
function eliminar(parcial, elem){
   var valor = parseInt($("#h"+parcial).val());
   valor -= 1;
   $("#h"+parcial).val(valor);
   $(elem).parent().parent().remove();
   //alert(valor);
}
function guardareditar(parcial, elem){

   if($('#id_config').val() != ""){

      //Obtenemos a los hermanos del elemento actual
      var hermanos = $(elem).parent().siblings();
      var hide = $(elem).parent().find("#hideval");


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
                     alert(hide.val());
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

   //alert(valor);
}
function habilitareditar(parcial, elem){
   var hermanos = $(elem).parent().siblings();
   hermanos.each(function(){
      $(this).find('input').removeAttr("readonly");
      //$(this).find('input').replaceWith(function(){
      //   return '<td>'+this.value+'<td>';
      //});
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
   if($("#tipo_evaluacion").val() != "Seleccione un tipo de evaluacion.."){
      if($("#clases").val() != "Seleccione una clase.."){
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
            bootbox.alert(obj['mensaje']);
         }else{
            $("#id_config").val(obj['id_config']);
            $('select#tipo_evaluacion option[value="'+ obj['tipo_eval'] +'"]').attr('selected', 'selected');
            alert(obj);

         }
      }
   });
}
function actualizareditar(parcial, elem){
   if($("#id_config").val() != null){

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
               alert(hide.val());
            }
         }
      });
      $(elem).replaceWith(function(){
         return "<a href=\"javascript:\" class=\"btn btn-success\" onclick=\"habilitareditar("+parcial+", this)\">Editar</a>";
      });
   }
}
function mostrardata(){

}
