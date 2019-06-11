<html>
    <head>
       <p>
 
    <img src="https://localhost/sistemadecaja/logo.png"width="75" height="75"/>
</p>
        <meta charset="UTF-8">
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
     <style>

</style>
       <p>
    <center>   <h2> AUTORIDAD AERONÀUTICA CIVIL</h2>  </center>
      <center>      <h3>DIRECCIÒN DE FINANZAS</h3></center>
      <center>      <h4>DEPARTAMENTO DE CONTABILIDAD</h4></center>
       <center>        <h3>RESUMEN DE MOVIMIENTOS  FINANCIERO DETALLADO</h3></center>
</p>
<style type='text/css'>
body
{
font-family: Arial;
font-size: 24px;
}
a {
color: blue;
text-decoration: none;
font-size: 24px;
}
a:hover
{
text-decoration: underline;
}

</style>
</head>
<table>
  
   <table border = 2>
      <table width = 90%>
      
           <body/>
           
           <htlm/>
           
           <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <table class="table">
    <thead>
      <tr>  
  <th>CODIGO FINANCIERO </th>
    <th>CODIGO INTERNO </th>
 <td>CANTIDAD DE OPERACIONES POR SERVICIO </td>
 <td>PRECIO</td>
  <td>COSTO</td>
 <td>DIRECCION </td>

 <td>Fecha de Elaboracion de Informe: </td><td><?php echo date("Y-m-d")  ;?></td>         
      </tr>
    </thead>
    <tbody>
       <?php
 print_r($fechas);
 ?>

<?php

foreach ($indice as $vector) {
     ?>
         <tr>
         <td><?php echo $vector['codigo'];?></td>
          <td><?php echo $vector['cod'];?></td>
       <td><?php echo $vector['cantidad'];?></td>
        <td><?php echo $vector['precio'];?></td>
          <td><?php echo $vector['costo']; ?></td>
           <td><?php echo $vector['direccion']; ?></td>
                            </tr>
  <?php   
     
}
?>
 
 <td><?php echo 'TOTAL RECAUDADO';?></td>
<td><?php echo '';?></td>
<td><?php echo '';?></td>
<td><?php echo '';?></td>
<td><?php echo number_format($suma,2); ?></td>
 <td><?php echo '';?></td>
     
    </tbody>
  </table>
</div>

</body>
</html>

   




