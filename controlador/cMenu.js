/* $(document).ready(function () {
   
    $("#registrar").click(function (e) {
        e.preventDefault();
    username=$("#username").val();
    password=$("#password").val();
 
     const options ={
        method: "GET"
     };
 
     fetch("../modelo/registrarusuarios.php?usuario="+username+"&contraseña="+password, options)
     .then( function ( response){
         return response.json();
        })
     .then( function(data) {
        if (data ["respuesta"] === "OK"){
            alert ( "registrado"); 
                 
        }
        else {
            alert ("no registrado")
        }
     });
    e.preventDefault();
    e.stopPropagation();
 
    });
 
 }); */

