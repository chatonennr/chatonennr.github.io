//------------------------------------------------------------------------------------------------------
//----------------EMPIEZAN FUNCIONES PARA PARA USUARIO--------------------------------------------------
//------------------------------------------------------------------------------------------------------

// Hacemos una funcion dibujar tabla de usuario 

function dibujarTabla(){
    const options = {
        method: "GET"
    };
   

   fetch("../modelo/mTablausuario.php", options)
       .then(response => response.json())
       .then(data => {
        console.log(data);
        if (data["Estado"] == "OK") {
            $("#tabla").html(data['respuesta']);

            $('#tablausuario').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": true,
              "ordering": false,
              "info": true,
              "autoWidth": false,
              "responsive": true,

            });

        } 

        else {
            if (data["respuesta"] == "sin token") {
                url = 'VLogin.php';
                url = encodeURI(url);
                window.open(url, '_self');
            
            }
            else{
                alert("No encontrado");
            }
        }

    });


}

// termina funcion dibujar tabla de usuario

// Hacemos una funcion eliminar desde el id usuario

function eliminar(id_usuario){
   
    const options = {
        method: "GET"
    };
   
    
   fetch("../modelo/mBorrar.php?id_usuario=" +id_usuario, options)
       .then(response => response.json())
       .then(data => {
       console.log(data);
       if (data["Estado"] == "OK") {

          alert ("borrado");
          dibujarTabla(); 

       } 
       
       else {

          alert("No borrado");

       }
       
   });

}

// termina funcion eliminar desde el id usuario

// Hacemos una funcion para seleccionar el rol en lista

function selectRol(){

    const options = {
        method: "GET"
    };     

   fetch("../modelo/mConsultarol.php", options)
   .then(response => response.json())
   .then(data => {

        console.log(data);
        if (data["Estado"] == "OK") {

            $("#select-rol").html(data["respuesta"]);

        } 

    });


}

// termina funcion para seleccionar el rol en lista


// Hacemos una funcion para modificar para el registro en usuario

function modificarusuario(id_usuario){

    selectRol();
    $("#modal-modificar").modal();
    

    $("#guardar_cambios").click(function(){
      miembro = $("#miembro").val();
      clave = $("#clave").val();

      rol1 = $("#select-rol1 option:selected").val();

      fetch("../modelo/mModificarusuarios.php?username=" + miembro + "&contrasena=" + clave + "&id_rol=" + rol1 + "&id=" + id_usuario)
      .then(response => response.json())
      .then(data => {
            console.log(data);
            if (data ["Estado"] == "OK"){
                $("#modal-modificar").modal('toggle');
                    
                alert ( "actualizado");

                $("#miembro").val("");
                $("#clave").val("");
                $("#select-rol").val(0);

                dibujarTabla();
            }

            else{
                alert ( "no actualizado"); 
            }            

        });            
   });

    

}

// termina funcion para modificar para el registro en usuario

// Hacemos una funcion para seleccionar elrol que quieres modificar

function selectRol1(){

    const options = {
        method: "GET"
    };     

   fetch("../modelo/mConsultarol.php", options)
   .then(response => response.json())
   .then(data => {

        console.log(data);
        if (data["Estado"] == "OK") {

            $("#select-rol1").html(data["respuesta"]);

        } 

    });


}

// termina funcion para seleccionar elrol que quieres modificar

//------------------------------------------------------------------------------------------------------
//----------------TERMINAN FUNCIONES DE USUARIO---------------------------------------------------------
//------------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------------
//----------------EMPIEZAN FUNCIONES PARA PARA PRODUCTO-------------------------------------------------
//------------------------------------------------------------------------------------------------------

// Hacemos una funcion dibujar tabla de producto 

function dibujarTabla1(){
    const options = {
        method: "GET"
    };

   fetch("../modelo/mTablaproducto.php", options)
       .then(response => response.json())
       .then(data => {
           console.log(data);
           if (data["Estado"] == "OK") {
               $("#tabla1").html(data['respuesta']);

               $('#tablaproducto').DataTable({
                   "paging": true,
                   "lengthChange": false,
                   "searching": true,
                   "ordering": false,
                   "info": true,
                   "autoWidth": false,
                   "responsive": true,
               });
           } else {
               alert("No encontrado");
           }
       });


}

// termina funcion dibujar tabla de producto

// Hacemos una funcion eliminar desde el id producto

function eliminarproducto(id_producto){
   
    const options = {
        method: "GET"
    };
   
    
   fetch("../modelo/mBorrarproducto.php?id_producto=" +id_producto, options)
       .then(response => response.json())
       .then(data => {
       console.log(data);
       if (data["Estado"] == "OK") {

          alert ("borrado");
          dibujarTabla1(); 

       } 
       
       else {

          alert("No borrado");

       }
       
   });

}

// termina funcion eliminar desde el id producto

// Hacemos una funcion para modificar para el registro en producto

function modificarproductoo(id_producto){

    
    $("#modal-modificarprod").modal();
    

    $("#guardar_cambios1").click(function(){
        name_product1 = $("#name_product1").val();
        price1 = $("#price1").val();
        stock1 = $("#stock1").val();

      
      fetch("../modelo/mModificarproducto.php?nombre_producto=" + name_product1 + "&precio=" + price1 + "&existencia=" + stock1 + "&id_producto=" + id_producto)
      .then(response => response.json())
      .then(data => {
            console.log(data);
            if (data ["Estado"] == "OK"){
                $("#modal-modificarprod").modal('toggle');
                    
                alert ( "actualizado");

                $("#name_product1").val("");
                $("#price1").val("");
                $("#stock1").val("");

                dibujarTabla1();
            }

            else{
                alert ( "no actualizado"); 
            }            

        });            
   });

    

}

// termina funcion para modificar para el registro en producto



//------------------------------------------------------------------------------------------------------
//----------------TERMINAN FUNCIONES PARA PARA PRODUCTO-------------------------------------------------
//------------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------------
//----------------EMPIEZAN FUNCIONES PARA PARA CLIENTE--------------------------------------------------
//------------------------------------------------------------------------------------------------------

// Hacemos una funcion dibujar tabla de cliente 

function dibujarTabla2(){
    const options = {
        method: "GET"
    };

   fetch("../modelo/mTablacliente.php", options)
       .then(response => response.json())
       .then(data => {
           console.log(data);
           if (data["Estado"] == "OK") {
               $("#tabla2").html(data['respuesta']);

               $('#tablacliente').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                });
           } else {
               alert("No encontrado");
           }
       });


}

// termina funcion dibujar tabla de cliente

// Hacemos una funcion eliminar desde el id cliente

function eliminarcliente(id_cliente){
   
    const options = {
        method: "GET"
    };
   
    
   fetch("../modelo/mBorrarcliente.php?id_cliente=" +id_cliente, options)
       .then(response => response.json())
       .then(data => {
       console.log(data);
       if (data["Estado"] == "OK") {

          alert ("borrado");
          dibujarTabla2(); 

       } 
       
       else {

          alert("No borrado");

       }
       
   });

}

// termina funcion eliminar desde el id cliente



//------------------------------------------------------------------------------------------------------
//----------------TERMINAN FUNCIONES PARA PARA CLIENTE--------------------------------------------------
//------------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------------
//----------------INICIA EL DOCUMENT READY--------------------------------------------------------------
//------------------------------------------------------------------------------------------------------

$(document).ready(function () {

    $("#div-usuario").hide(); 
    $("#div-producto").hide();
    $("#div-cliente").hide();

    $("#productos").click(function (e) {

        $("#div-usuario").hide(); 
        $("#div-producto").show();
        $("#div-cliente").hide();    
        e.preventDefault();
        e.stopPropagation();
 
    });

    $("#clientes").click(function (e) {

        $("#div-usuario").hide(); 
        $("#div-producto").hide();
        $("#div-cliente").show();    
        e.preventDefault();
        e.stopPropagation();
 
    });

    $("#usuarios").click(function (e) {

        $("#div-usuario").show(); 
        $("#div-producto").hide();
        $("#div-cliente").hide();    
        e.preventDefault();
        e.stopPropagation();
 
    });

    $("#cerrar_sesion").click(function (e) {

        e.preventDefault();
        $(location).attr('href' , 'vLogin.php');     
        e.preventDefault();
        e.stopPropagation();
 
    });

   //-----------------------------------------------------------
   //----------------EMPIEZA TODO PARA LA TABLA USUARIO---------
   //-----------------------------------------------------------
   

   //llamamos la funcion dibujartabla para que se muestre (usuario)
   dibujarTabla();
   //llamamos la funcion selectRol para que se muestre un listado de roles (rol)
   selectRol();
   //llamamos la funcion selectRol para que se muestre un listado de roles (rol)
   selectRol1();
   

   //ponemos una accion al dar click en el boton llamado agregar, para que se abra un modal 

   $("#agregar").click(function(){
   $("#modal-registro").modal();
   });

   
   
   


   //ponemos una accion al dar click en el boton llamado insertar, para que se inserte un registro

   $("#insertar").click(function(){
   usuario = $("#user").val();
   password = $("#pass").val();

   rol = $("#select-rol option:selected").val();

      fetch("../modelo/mRegistro.php?usuario=" + usuario + "&contrasena=" + password + "&id_rol=" + rol,)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data ["ESTADO"] == "OK"){
                $("#modal-registro").modal('toggle');
                    
                alert ( "registrado");

                $("#user").val("");
                $("#pass").val("");
                $("#select-rol").val(0);

                dibujarTabla();
            }

            else{
                alert ( "no registrado"); 
            }            

        });            
   });
   //termina el poner una accion al dar click en el boton llamado insertar, para que se inserte un registro

   //-----------------------------------------------------------
   //----------------TERMINA TODO PARA LA TABLA USUARIO---------
   //-----------------------------------------------------------


   //-----------------------------------------------------------
   //----------------EMPIEZA TODO PARA LA TABLA PRODUCTO--------
   //-----------------------------------------------------------

   //llamamos la funcion dibujartabla para que se muestre (usuario)
   dibujarTabla1();
   
   //ponemos una accion al dar click en el boton llamado agregar, para que se abra un modal 

   $("#agregar1").click(function(){
   $("#modal-registro1").modal();
   });


   //ponemos una accion al dar click en el boton llamado insertar, para que se inserte un registro

   $("#insertar1").click(function(){

        name_product = $("#name_product").val();
        price = $("#price").val();
        stock = $("#stock").val();
       
        fetch("../modelo/mRegistroproducto.php?nombre_producto=" + name_product + "&precio=" + price + "&existencia=" + stock,)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data ["ESTADO"] == "OK"){
                $("#modal-registro1").modal('toggle');
                    
                alert ( "registrado");

                $("#name_product").val("");
                $("#price").val("");
                $("#stock").val("");

                dibujarTabla1();
            }

            else{
                alert ( "no registrado"); 
            }            

        });            
   });
  
   //termina el poner una accion al dar click en el boton llamado insertar, para que se inserte un registro

   //-----------------------------------------------------------
   //----------------TERMINA TODO PARA LA TABLA PRODUCTO--------
   //-----------------------------------------------------------


   //-----------------------------------------------------------
   //----------------EMPIEZA TODO PARA LA TABLA CLIENTE---------
   //-----------------------------------------------------------

   //llamamos la funcion dibujartabla para que se muestre (cliente)
   dibujarTabla2();
   
   //ponemos una accion al dar click en el boton llamado agregar, para que se abra un modal 

   $("#agregar2").click(function(){
   $("#modal-registro2").modal();
   });


   //ponemos una accion al dar click en el boton llamado insertar, para que se inserte un registro

   $("#insertar2").click(function(){

        name_coustumer = $("#name_coustumer").val();
        last_name = $("#last_name").val();
        registration_date = $("#registration_date")
        e_mail = $("#e_mail").val();
        contact = $("#contact").val();
       
        fetch("../modelo/mRegistrocliente.php?nombre_cliente=" + name_coustumer + "&apellido_paterno=" + last_name + "&fecha_registro=" + registration_date  + "&correo=" + e_mail + "&contacto=" + contact,)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data ["ESTADO"] == "OK"){
                $("#modal-registro2").modal('toggle');
                    
                alert ( "registrado");

                $("#name_coustumer").val("");
                $("#last_name").val("");
                $("#registration_date").val("");
                $("#e_mail").val("");
                $("#contact").val("");

                dibujarTabla2();
            }

            else{
                alert ( "no registrado"); 
            }            

        });            
   });
  
   //termina el poner una accion al dar click en el boton llamado insertar, para que se inserte un registro

   //-----------------------------------------------------------
   //----------------TERMINA TODO PARA LA TABLA CLIENTE--------
   //-----------------------------------------------------------


});

//------------------------------------------------------------------------------------------------------
//----------------TERMINA EL DOCUMENT READY-------------------------------------------------------------
//------------------------------------------------------------------------------------------------------