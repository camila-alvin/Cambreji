function iniciarsesion() {
    var usuario=$('#usuario').val();
    var password=$('#password').val();
    password=hex_md5(password);
    // alert(password);
    // se almacenan los valores del usuario y la contraseña
    var param={
        "usuario":usuario
        "password":password    
    };
    
    $.ajax({
        method:'POST',
        url:'datos.php',
        data:param,
        success:function(resp){
            alert(resp);
            if (resp=='sesionIniciada') {
                location.href='Administracion.html';
                
            } else {
                alert('Datos incorrectos');
                
            }

        }
    });
}