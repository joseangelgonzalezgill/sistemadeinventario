<html>
    
    <head>
       <p>
 
</p>
        <meta charset="UTF-8">
<!--         <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>-->
    </head>
<!--    <body onload="imprimir();">-->
        <div
       <p>
    <center><h2> AUTORIDAD AERONÀUTICA CIVIL</h2>  </center>
            <center> <h4>RESUMEN DE LICENCIAS POR PILOTO</h4></center>
            <center> <td>Fecha de Elaboracion de Informe: </td><td><?php echo date("Y-m-d")  ;?></td> </center> 
           <br></br>
           <center>  
               <?php
 
 ?> </center> 

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
    
    <?php

// Se evalúa a true ya que $var está vacia
if (!empty($indice)) {



?>
 <table   align="center" border="1" style="width:900px; height:100px;" >
  <tr>
    <td colspan="4" align="center" bgcolor="666666"><font color="#FFFFFF"><strong>INFORMACIÓN GENERAL DEL PILOTO</strong></font></td>
</tr>
<tr bgcolor="aaaaaa">
  
<tr>
      <td align="left">Nombre del Piloto</td>
      <td> <?php echo $indice[0]['Nombre'];?> 
            <td/>
</tr>   
<tr>
      <td align="left">Idetificacion Personal del Piloto</td>
      <td> <?php echo $indice[0]['Cedula'];?> 
            <td/>
</tr>  

 
<tr>
      <td align="left">Fecha de Nacimiento</td>
      <td> <?php echo $indice[0]['FechadeNacimientodeLicencia'];?> 
            <td/>
</tr>  

<tr>
      <td align="left">Direccion Residencial</td>
      <td> <?php echo $indice[0]['Domicilio'];?> 
            <td/>
</tr> 
<tr>
      <td align="left">Telefono Residencial</td>
      <td><?php echo $indice[0]['Telefono1']; ?></td>
            
</tr>  

<tr>
      <td align="left">Telefono Celular</td>
      <td><?php echo $indice[0]['Telefono2']; ?></td>
            
</tr> 


<tr>
      <td align="left">Fecha del Ultimo Examen  Medico </td>
      <td><?php echo $indice[0]['Examen']; ?></td>
            
</tr>  


  
  

   
  </table>
    <?php
    } else { 
        Print "<h1><center> No Existen Registros Vinculados!</center></h1>";
    }
    ?>
    
</div>
</body>
<br></br>
<br></br>
<br></br>
         <div>

<table align="center" cellspacing="8" cellpadding="1" border="1" bgcolor=dddddd>
 <tr>
    <td colspan="4" align="center" bgcolor="666666"><font color="#FFFFFF"><strong>INFORMACIÓN HISTORICAS DE LAS LICENCIAS DEL PILOTO</strong></font></td>
</tr>
<tr bgcolor="aaaaaa">
    
    <td align="left">Numero de Licencia</td>
    <td align="left">Descripcion</td>
    <td align="left">Fecha de Emision</td>
    <td align="left">Fecha de Vencimiento</td>
  

</tr>

 <?php

foreach ($indice as $vector) {
     ?>
<tr>
       <td><?php echo $vector['Licencia'];?> </td>
        <td><?php echo $vector['descripcion'];?></td>
         <td><?php echo $vector['FechadeEmisiondeLicencia']; ?></td>
          <td><?php echo $vector['FechadeVencimiento']; ?></td>
          
                              <?php   

}
?> 
</tr>

</table>

         </div>
<br><br>
<center>
<form>
<input type="button" value="Regresar" onclick="window.location.href='https://localhost/licencias/index.php/licencias/llamado/'" />
</form>
    </center>     
</html>                
   


