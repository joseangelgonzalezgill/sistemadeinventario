
<html>
   <p>
 
    <img src="https://localhost/caja/logo.png"width="125" height="125"/>
</p>
    <head>
     
        
     <STYLE TYPE="text/css">
  #micapa {top:auto; left:auto;}
</STYLE>
<!--       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
           function imprimir() {
              if (window.print) {
                  window.print();
              } else {                    alert("La función de impresion no esta soportada por su navegador.");
              }
           }
        </script>
    </head>
    <body onload="imprimir();">
<!--       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
 

    <center>   <h1>AUTORIDAD AERONÁUTICA CIVIL</h1>  </center>
      <center>      <h2>DIRECCIÓN DE FINANZAS</h2></center>
      <center>      <h3>DEPARTAMENTO DE TESORERÌA</h3></center>
      <center>        <h1>RECIBO DE PAGO</h1></center>
      <div ID = "micapa">
       <left>     <h4>RUC: 8-NT-1-13178-35</h4></left>
       <left>    <h4>DIRECCIÓN:ALBROOK EDIF. 805, Balboa</h4></left>
      </div>
      
    <table  align="center" width="85%" border="2" bordercolor="#0000FF" >  
           

       <tr>
    <td>Numero de Factura: </td>
    <td>  <?php
       echo $detalles['idcuentacontable'];
       ?></td>
     
  </tr>
  
    <tr>
    <td>Nombre de la Compañia: </td>
    <td>  <?php
       echo $detalles['nombredelacompañia'];
       ?></td>
     
  </tr>
  <tr>
    <td>Unidad Gestora: </td>
    <td>  <?php
       echo $detalles['nombre_direccion'];
       ?></td>
    
  </tr>
  <tr>
    <td>Cuenta a Pagar: </td>
    <td>  <?php
       echo $detalles['nombredelacuenta'];
       ?></td>
      
  </tr>
  
    <tr>
    <td>Cliente: </td>
    <td>  <?php
       echo $detalles['cliente'];
       ?></td>
   
  </tr>
         
    <tr>
    <td>Descripcion de la Cuenta: </td>
    <td>  <?php
       echo $detalles['descripcion'];
       ?></td>
    </tr>
   <tr>
    <td>Direccion del Cliente: </td>
    <td>  <?php
       echo $detalles['direccion'];
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
    <td>Monto a Pagar: </td>
    <td>  <?php
       echo $detalles['precio'];
       ?></td>
     
  </tr>

  
  <tr>
      <td>Total en Efectivo: </td>
    <td>  <?php
       echo $detalles['montoenefectivo'];
       ?></td>
    
  </tr>
  <tr>
      <td>Total en Cheque: </td>
    <td>  <?php
       echo $detalles['montoencheque'];
       ?></td>
  </tr>
   <tr>
      <td>Total Pagado: </td>
    <td>  <?php
       echo $detalles['totaldepado'];
       ?></td>
  </tr>
    
  <tr>
    <td>Tipo de Cheque </td>
    <td>  <?php
       echo $detalles['tipodecheque'];
       ?></td>
    
  </tr>
  
  
  
  <tr>
    <td>Banco de Procedencia del Cheque </td>
    <td>  <?php
       echo $detalles['banco'];
       ?></td>
    
  </tr>
   <tr>
    <td>Numero del Cheque </td>
    <td>  <?php
       echo $detalles['numerodecheque'];
       ?></td>
    
  </tr>
   <tr>
    <td>Fecha y Hora de la Creacion de la Factura: </td>
    <td>  <?php
       echo $detalles['fechadegeneracion'];
       ?></td>
    
     
  <tr>
    <td>Fecha de Facturacion: </td>
    <td>  <?php
       echo date('Y-m-d');
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
       </table>
     
        
        
    </body>
</html>
