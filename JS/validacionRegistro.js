$(document).ready(function(){

    $("form#formRegistro").validetta({
        onValid:(e)=>{
            e.preventDefault();
            $.ajax({
                method:"post",
                url:"./PHP/registro_AX.php",
                data: $("form#formRegistro").serialize(),
                cache:false,
                success: (respuesta_AX)=>{
                    let AX = JSON.parse(respuesta_AX);
                    let icono;
                    if(AX.codigo == 1){icono = 'success';}else{ icono = 'error';}
                    if(AX.codigo == 1){
                        $("form")[0].reset();
                        Swal.fire({
                            icon: icono,
                            title: 'Datos correctos',
                            text: AX.mensaje,
                            confirmButtonText: 'Ok',
                            didDestroy:()=>{
                                window.location.href = "./ProyectoSesion.html";
                            }
                    });
                }else{
                    $("input#usuario").val("");
                    Swal.fire({
                            icon: icono,
                            title: 'Error',
                            text: AX.mensaje,
                            confirmButtonText: 'Ok'
                            
                    });
                }
                
            }
        }); 
        }
    });
});