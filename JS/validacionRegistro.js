$(document).ready(function(){

    $("form#formRegistro").validetta({
        onValid:(e)=>{
            e.preventDefault();
            $.ajax({
                method:"post",
                url:"./PHP/registro_AX.php",
                data: $("form#formRegistro").serialize(),
                cache:false,
                success:(RespuestaServidor_AX)=>{
                    let AX = JSON.parse(RespuestaServidor_AX);
                    let icono;
                    if(AX.codigo == 1){icono = 'success';}else{icono = 'error';}
                    if(AX.codigo == 1){
                        Swal.fire({
                            icon: icono,
                            title: 'Datos correctos',
                            text: AX.mensaje
                            });
                        }
                    else{
                        Swal.fire({
                            icon: icono,
                            title: 'Error',
                            text: AX.mensaje
                          });
                    }
                    
                    
                }
            }); 
        }
    });
});