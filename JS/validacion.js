$(document).ready(function(){
    
    $("form#formSesion").validetta({
        onValid:(e)=>{
            e.preventDefault();
            $.ajax({
                method:"post",
                url:"./PHP/inicioSesion_AX.php",
                data: $("form#formSesion").serialize(),
                cache:false,
                success:(RespuestaServidor_AX)=>{
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos correctos',
                        text: RespuestaServidor_AX
                      });
                    

                }
            }); 
        }
    });
});

