<?php 
  include("../includes/top.php");
  
  session_start();
  $nombre=$_SESSION["sesionusuario"];
  
  $nombre=strtoupper($nombre);

  


?>

<script src="../controlador/cTabla.js"></script>

<h1> Hola <?php    echo $nombre     ?>   </h1>


<!--botones-->

<div class="row">

  <div class="col-2">
    <button id="productos" class="btn btn-primary btn-block">productos <i class="fa fa-sharp fa-regular fa-truck"></i></span></button>
  </div>

         
  <div class="col-2">
    <button id="clientes" class="btn btn-primary btn-block">clientes <i class="fa fa-sharp fa-solid fa-users"></i></span></button>
  </div>

          
  <div class="col-2">
    <button id="usuarios" class="btn btn-primary btn-block">usuarios <i class="fa fa-sharp fa-solid fa-user"></i></button>
  </div>

          
 <div class="col-2">
    
  </div>

  <div class="col-2">
    
  </div>

  <div class="col-2">
    <button id="cerrar_sesion" class="btn btn-primary btn-block">cerrar sesion</button>
  </div>

          
</div> 

<!--Termina botones-->

<!--Salto de linea-->
<br/>
<!--Termina salto de linea-->

<!----------------------------------------------------->
<!------  EMPIEZA TODO SOBRE LA TABLA USUARIOS  ------->
<!----------------------------------------------------->

<!-- boton agregar y tabla de usuario -->

<section class="content">
  <div id="div-usuario" class="card card-primary card-outline">
    
    <div class="row">
      <div class="col-sm-1">

      </div>

      <div class="col-sm-3">
        <br>
        <button id="agregar" class="btn btn-block btn-primary">agregar</button>

      </div>


    </div>

    <div id="tabla" class="card-body">
         
    </div>

  </div>
  
</section>

<!-- termina boton agregar y tabla de usuario -->

<!-- modal del boton agregar de la tabla usuario -->

<div class="modal fade" id="modal-registro">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Registrar nuevo usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>

      </div>

      <div class="modal-body">

        <div class= "row">

          <div class="col-sm-6">
           <label> usuario: </label>
           <input id="user" type="text" class="form-control">
           <label> contraseña: </label>
           <input id="pass" type="text" class="form-control">
           <label >Rol</label>

           <!-- formulario manual-->

           <!-- <select id="select-rol" class="form-control">
           <option id="1" value="1">administrador</option>
           <option id="2" value="2">empleado</option>


           </select>   -->

           <!-- termina mi formulario manual-->

           <select id="select-rol" class="form-control">
           </select> 

          </div> 

        </div>      
              
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="insertar" type="button" class="btn btn-primary">insertar</button>
      </div>
      
    </div>

  </div>

</div>   

<!-- termina modal del botton agragar de la tabla usuario -->

<!-- modal del boton modificar de la tabla usuario -->

<div class="modal fade" id="modal-modificar">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Modificar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>

      </div>

      <div class="modal-body">

        <div class= "row">

          <div class="col-sm-6">
           <label> usuario: </label>
           <input id="miembro" type="text" class="form-control">
           <label> contraseña: </label>
           <input id="clave" type="text" class="form-control">
           <label >Rol</label>

           <!-- formulario manual-->

           <!-- <select id="select-rol" class="form-control">
           <option id="1" value="1">administrador</option>
           <option id="2" value="2">empleado</option>


           </select>   -->

           <!-- termina mi formulario manual-->

           <select id="select-rol1" class="form-control">
           </select> 

          </div> 

        </div>      
              
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="guardar_cambios" type="button" class="btn btn-primary">guardar cambios</button>
      </div>
      
    </div>

  </div>

</div>   

<!-- termina modal del botton modificar de la tabla usuario -->

<!----------------------------------------------------->
<!------  TERMINA TODO SOBRE LA TABLA USUARIO  -------->
<!----------------------------------------------------->

<!--------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------->


<!----------------------------------------------------->
<!------  EMPIEZA TODO SOBRE LA TABLA PRODUCTO  ------->
<!----------------------------------------------------->

<!-- boton agregar y tabla de PRODUCTO -->

<section class="content">
  <div id="div-producto" class="card card-primary card-outline">
    
    <div class="row">
      <div class="col-sm-1">

      </div>

      <div class="col-sm-3">
        <br>
        <button id="agregar1" class="btn btn-block btn-primary">agregar</button>

      </div>


    </div>

    <div id="tabla1" class="card-body">
         
    </div>

  </div>
  
</section>

<!-- termina boton agregar y tabla de PRODUCTO -->

<!-- modal del boton agregar de la tabla PRODUCTO -->

<div class="modal fade" id="modal-registro1">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Registrar nuevo producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>

      </div>

      <div class="modal-body">

        <div class= "row">

          <div class="col-sm-6">

           <label> nombre producto: </label>
           <input id="name_product" type="text" class="form-control">
           <label> precio: </label>
           <input id="price" type="text" class="form-control">
           <label> stock: </label>
           <input id="stock" type="text" class="form-control">
        
          </div> 

        </div>      
              
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="insertar1" type="button" class="btn btn-primary">insertar</button>
      </div>
      
    </div>

  </div>

</div>

<!-- termina modal del botton agragar de la tabla PRODUCTO -->

<!-- modal del boton modificar de la tabla producto -->

<div class="modal fade" id="modal-modificarprod">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Modificar Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>

      </div>

      <div class="modal-body">

        <div class= "row">

          <div class="col-sm-6">
           <label> nombre producto: </label>
           <input id="name_product1" type="text" class="form-control">
           <label> precio: </label>
           <input id="price1" type="text" class="form-control">
           <label> stock: </label>
           <input id="stock1" type="text" class="form-control">

           <!-- formulario manual-->

           <!-- <select id="select-rol" class="form-control">
           <option id="1" value="1">administrador</option>
           <option id="2" value="2">empleado</option>


           </select>   -->

           <!-- termina mi formulario manual-->

           
            

          </div> 

        </div>      
              
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="guardar_cambios1" type="button" class="btn btn-primary">guardar cambios</button>
      </div>
      
    </div>

  </div>

</div>   

<!-- termina modal del botton modificar de la tabla producto -->

<!----------------------------------------------------->
<!------- TERMINA TODO SOBRE LA TABLA PRODUCTO -------->
<!----------------------------------------------------->

<!--------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------->

<!----------------------------------------------------->
<!------  EMPIEZA TODO SOBRE LA TABLA CLIENTE  -------->
<!----------------------------------------------------->

<!-- boton agregar y tabla de CLIENTE -->

<section class="content">
  <div id="div-cliente" class="card card-primary card-outline">
    
    <div class="row">
      <div class="col-sm-1">

      </div>

      <div class="col-sm-3">
        <br>
        <button id="agregar2" class="btn btn-block btn-primary">agregar</button>

      </div>


    </div>

    <div id="tabla2" class="card-body">
         
    </div>

  </div>
  
</section>

<!-- termina boton agregar y tabla de CLIENTE -->

<!-- modal del boton agregar de la tabla CLIENTE -->

<div class="modal fade" id="modal-registro2">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Registrar nuevo cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>

      </div>

      <div class="modal-body">

        <div class= "row">

          <div class="col-sm-6">

           <label> nombre cliente: </label>
           <input id="name_coustumer" type="text" class="form-control">
           <label> primer apellido: </label>
           <input id="last_name" type="text" class="form-control">
           <label> fecha registro: </label>
           <input id="registration_Date" type="text" class="form-control">
           <label> correo: </label>
           <input id="e_mail" type="text" class="form-control">
           <label> contacto: </label>
           <input id="contact" type="text" class="form-control">
        
          </div> 

        </div>      
              
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="insertar2" type="button" class="btn btn-primary">insertar</button>
      </div>
      
    </div>

  </div>

</div>

<!-- termina modal del botton agragar de la tabla CLIENTE -->

<!----------------------------------------------------->
<!------- TERMINA TODO SOBRE LA TABLA CLIENTE --------->
<!----------------------------------------------------->






<?php 
  include("../includes/footer.php");
?> 




 



