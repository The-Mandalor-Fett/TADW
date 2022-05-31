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
                    let AX = JSON.parse(RespuestaServidor_AX);
                    if(AX.codigo == 1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos correctos',
                            text: AX.mensaje
                          });
                        }
                    else if(AX.codigo == 2){
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos correctos',
                            text: AX.mensaje
                          });
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: AX.mensaje
                          });
                    }
                    
                    
                }
            }); 
        }
    });
});

