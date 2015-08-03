$("document").ready(function(){

});
function getEval(){
   $.ajax({
      method: "POST",
      url: "php/getdata.php",
      data: "eval",
      sucess: function(data){
         alert(data);
      }
   });
}
