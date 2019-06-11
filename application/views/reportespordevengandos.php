<html>
    <head>
       <p>
 
    <img src="https://localhost/sistemadecaja/logo.png"width="75" height="75"/>
</p>
        <meta charset="UTF-8">
         <script type="text/javascript">
//            function imprimir() {
//                if (window.print) {
//                    window.print();
//                } else {
//                    alert("La función de impresion no esta soportada por su navegador.");
//                }
           // }
        </script>
    </head>
    <body onload="imprimir();">
     <style>

</style>
       <p>
    <center>   <h2> AUTORIDAD AERONÀUTICA CIVIL</h2>  </center>
      <center>      <h3>DIRECCIÒN DE FINANZAS</h3></center>
      <center>      <h4>DEPARTAMENTO DE CONTABILIDAD</h4></center>
       <center>        <h3>REPORTE DE COBROS POR FECHAS- DEVENGANDOS </h3></center>
       
   
       
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

<div class="container">
  
   <script> 
       

var mydate=new Date(); 
var year=mydate.getYear(); 
if (year < 1000) 
year+=1900; 
var day=mydate.getDay(); 
var month=mydate.getMonth()+1; 
if (month<10) 
month="0"+month; 
var daym=mydate.getDate(); 
if (daym<10) 
daym="0"+daym; 
document.write("<small><font color='000000' face='Arial'><b></b></font></small>") ;

</script> 


<?php
 print_r($fechas);
 ?>


  <table class="table">
    <thead>
      <tr>  
      <th>Fecha de Facturacion</th>   
  <th>Cuenta de Ingreso </th>
    <th>Devengando </th>

 <td>Cantidad de Servicios </td>

 <td>Recaudado </td>

 
    <h5 style="word-spacing: none;">Fecha de Elaboracion de Informe:<?php echo date("Y-m-d")  ;?></h5>
      </tr>
    </thead>
    <tbody>
<?php

foreach ($indice as $vector) {
     ?>
         <tr>
            <td><?php echo $vector['Fecha'];?></td>
         <td><?php echo $vector['Codigo'];?></td>
           <td><?php echo $vector['Devengando'];?></td>
       <td><?php echo $vector['Cantidad'];?></td>
          <td><?php echo $vector['Total']; ?></td>
    
      
                     </tr>
  <?php   
     
}
?>
    
<td><?php echo '';?></td>
<td><?php echo '';?></td>
<td><?php echo '';?></td>    

  <td><?php echo 'TOTAL RECAUDADO';?></td>
  <td><?php echo number_format($suma,2); ?></td>
 <td><?php echo '';?></td>
     
                     </tr>

     
    </tbody>
  </table>
</div>

</body>
</html>

   




