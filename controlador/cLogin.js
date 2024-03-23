$(document).ready(function () {
   
   $("#inicio").click(function (e) {
       e.preventDefault();
   username=$("#username").val();
   password=$("#password").val();

    const options ={
       method: "GET"
    };

    fetch("../modelo/buscarusuarios.php?usuario="+username+"&contrasena="+password, options)
    .then( response => response.json())
    .then( data=> {
       if (data ["respuesta"] == "YES"){
           alert ( "encontrado"); 
           $(location).attr('href' , 'vMenu.php');     
       }
       else {
           alert ("no encontrado")
       }
    });
   e.preventDefault();
   e.stopPropagation();

   });

   $("#regresar").click(function (e) {

    e.preventDefault();
    $(location).attr('href' , 'index.html');     
    e.preventDefault();
    e.stopPropagation();

  });

});