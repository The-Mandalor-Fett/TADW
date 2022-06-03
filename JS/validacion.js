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
                    let icono;
                    if(AX.codigo == 0){icono = 'error';}else{icono = 'success';}
                    if(AX.codigo == 1){
                        Swal.fire({
                            icon: icono,
                            title: 'Datos correctos',
                            text: AX.mensaje,
                            didDestroy:()=>{
                                window.location.href = "./PHP/trabajoTerminal.php";
                            }
                          });
                        }
                    else if(AX.codigo == 2){
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

