function editardatosuser() {
    
     $.ajax({
                data:  $("#formulariologin").serialize(),
                url:   'update_usuarios.php',
                type:  'post',
                beforeSend: function () {
                        $("#mensaje").html(" Procesando, espere por favor...");
                },
                success:  function (response) {
                  
         if(response=="El Registro ha sido Modificado")
                    {
                        $("#mensaje").show().html(response).css("color","green").setTimeout(function() {}, 10000);
                    }   
                                
                  else {
                    $("#mensaje").show().html(response).css("color","red");
                      } 
                }
        });
   
}