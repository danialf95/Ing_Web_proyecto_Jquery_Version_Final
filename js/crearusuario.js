function creaciondatos() {
     
     $.ajax({
                data:  $("#formulariologin").serialize(),
                url:   'creandousuarios.php',
                type:  'post',
                beforeSend: function () {
                        $("#mensaje").html(" Procesando, espere por favor...");
                },
                success:  function (response) {
                	
                     if(response=="Usuario Creado Exitosamente")
                    {
                        $("#mensaje").show().html(response).css("color","green");
                     }   
                                           
                  else {
                		 $("#mensaje").show().html(response).css("color","red");
                      }	
                }
        });
   
}
