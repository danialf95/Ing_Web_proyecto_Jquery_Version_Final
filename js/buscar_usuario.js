function buscardatos() {
     
     $.ajax({
                data:  $("#formulariologin").serialize(),
                url:   'buscando_usuario.php',
                type:  'post',
                beforeSend: function () {
                        $("#mensaje").html(" Procesando, espere por favor...");
                },
                success:  function (response) {
                	if(response=="Usuario Creado Exitosamente")
                    {
                        $("#mensaje").show().html(response);
                     }   
                                           
                  else {
                		 $("#mensaje").show().html(response);
                      }	
                }
        });
   
}
