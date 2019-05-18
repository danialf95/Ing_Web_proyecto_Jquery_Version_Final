function procesar() {
     
     $.ajax({
                data:  $("#formulariologin").serialize(),
                url:   'procesar_transaccion.php',
                type:  'post',
                beforeSend: function () {
                        $("#mensaje").html(" Procesando, espere por favor...");
                },
                success:  function (response) {
                	
                     if(response=="TRANSACCION REALIZADA CON EXITO")
                    {
                        $("#mensaje").show().html(response+" SERAS REDIRIGIDO EN UN MOMENTO").css("background-color","green").css("color","white");
                        setTimeout(function() {$(location).attr('href','formulario_transaccion.php')},3000);
                     }   
                                           
                  else {
                		 $("#mensaje").show().html(response).css("background-color","red").css("color","white");
                      }	
                }
        });
   
}