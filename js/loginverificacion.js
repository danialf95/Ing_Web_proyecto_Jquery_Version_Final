function loginverification() {
     
     $.ajax({
                data:  $("#formulariologin").serialize(),
                url:   'autenticacion.php',
                type:  'post',
                beforeSend: function () {
                        $("#mensaje").html(" Procesando, espere por favor...");
                },
                success:  function (response) {
                	if(response=="Bienvenido Administrador")
                	{
                        $("#mensaje").show().html(response);
                        $(location).attr('href','plataforma_Administrador.php'); 
                 }

                    if(response=="Bienvenido usuario")
                    {
                        $("#mensaje").show().html(response);
                        $(location).attr('href','plataforma_usuario.php'); 
                       
                    }
                      if(response=="su cuenta ha sido bloqueada")
                      {
                        $("#mensaje").show().html(response).css("color","red");
                      }
                	else {
                		$("#mensaje").show().html(response);
                      }	
                }
        });
   
}