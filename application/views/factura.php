
<html>
   <p>
 
    <img src="https://localhost/caja/logo.png"width="125" height="60"/>
</p>
    <head>
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
    </head>
    <body onload="imprimir();">
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
       
    <center>   <h2>AUTORIDAD AERONÀUTICA CIVIL</h2>  </center>
      <center>      <h2>DIRECCIÒN DE FINANZAS</h2></center>
      <center>      <h3>DEPARTAMENTO DE TESORERÌA</h3></center>
       <center>        <h1>RECIBO DE PAGO</h1></center
       <left>      <h4>RUC: 8-NT-1-13178-35</h4></left>
       <left>      <h4>DIRECCION:  ALBROOK EDIF. 805, Balboa
 </h4></left>

<script>
   
   
   </script>
       
       
          
       <table width="100%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10" >  
       <tr>
    <td>Numero de Factura: </td>
    <td>  <?php
       echo $detalles['idcuentaalcontado'];
       ?></td>
       <br><br>
  </tr>
  
    <tr>
    <td>Nombre de la Compañia: </td>
    <td>  <?php
       echo $detalles['nombredelacompañia'];
       ?></td>
       <br><br>
  </tr>
  
   <tr>
    <td>Pais de Procedencia del Cliente </td>
    <td>  <?php
       echo $detalles['paises'];
       ?></td>
       <br><br>
  </tr>
  <td>Ciudad de Procedencia del Cliente </td>
    <td>  <?php
       echo $detalles['ciudad'];
       ?></td>
       <br><br>
  </tr>
    <tr>
    <td>Cliente: </td>
    <td>  <?php
       echo $detalles['cliente'];
       ?></td>
    <br><br>
  </tr>
         </tr>
    <tr>
    <td>Descripcion de la Cuenta: </td>
    <td>  <?php
       echo $detalles['descripcion'];
       ?></td>
    <br><br>
  </tr>
  
   <tr>
    <td>Monto a Pagar: </td>
    <td>  <?php
       echo $detalles['precio'];
       ?></td>
    
  </tr>
   <tr>
    <td>Fecha y Hora de la Creacion de la Cuenta: </td>
    <td>  <?php
       echo $detalles['fechahora'];
       ?></td>
    
     <tr>
    <td>Direccion Remitente: </td>
    <td>  <?php
       echo $detalles['direccion'];
       ?></td>
    
  </tr>
  <tr>
    <td>Fecha de Facturacion: </td>
    <td>  <?php
       echo date('Y-m-d');
       ?></td>
    
  </tr>
  
 <tr>
    <td>Correo Electronico del Cliente: </td>
    <td>  <?php
       echo $detalles['correo'];
       ?></td>
    
  </tr>
  
  <tr>
    <td>Numero del Celular del Cliente </td>
    <td>  <?php
       echo $detalles['celular'];
       ?></td>
    
  </tr>
    <tr>
    <td>Forma de Pago </td>
    <td>  <?php
       echo $detalles['formadepago'];
       ?></td>
    
  </tr>
    
     <tr>
    <td>Responsable de la Factura: </td>
    <td> </td>
      </tr>
      
       <tr>
    <td>Cajero Responsable: </td>
    <td> </td>
      </tr>
      
     
       <tr>
      </tr>
        <tr>
      </tr>
      <tr>
      </tr>
        <tr>
      </tr>
        <tr>
      </tr>
           <tr>
      </tr>
        <tr>
      </tr>
    
 
    
    

    
    
    
  </tr>
    
  </tr>
  
       </table>
       
   <br>
   <br/>      
     <br>
   <br/> 
     <br>
   <br/> 
     <br>
   <br/> 
     <br>
   <br/> 
     <br>
   <br/> 
     <br>
   <br/> 
     <br>
   <br/> 
      <tr>
    <td>Firma del Cajero Responsable: </td>
    <td> </td>
      </tr

         
     
       
     
    </body>
</html>
