<meta charset="utf-8" />

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body style="color:black; ">

<title>Administracion de Usuarios</title>


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

formItem  {
    display: block;
    text-align: center;
    line-height: 150%;
    font-size: .85em;
}


body{
    padding: 0px;
    margin: 0px;
    border:none;
    width: 100%;
}

#header{
    width: 100%;
    padding: 0px;
    margin: 0px;
    overflow:hidden;
}

#footer{
    position: fixed;
    bottom:0;
    left:0;
    width: 100%;
    padding: 0px;
    margin: 0px;
    overflow:hidden;
}

#formulario{
    margin: 3px auto;
    text-align: center;
    border-radius: 2px;
    border: 2px solid #666666;
    width: 200px;
}
.centrar-form{
 margin: 50px auto;
 float:none;
}
*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body{
    padding: 0px;
    margin: 0px;
    border:none;
    width: 100%;
}

#header{
    width: 100%;
    padding: 0px;
    margin: 0px;
    overflow:hidden;
}

#footer{
    position: fixed;
    bottom:0;
    left:0;
    width: 100%;
    padding: 0px;
    margin: 0px;
    overflow:hidden;
}

#formulario{
    margin: 0 auto;
    align-content: center;
    align-items: center;
    align-self: center;
    alignment-adjust: central;
    
    border-radius: 5px;
    border: 1px solid #666666;
    width: 1000px;
}

label {
    font-weight: bold;
    color: #444;
    font-size: 14px;
}

input {
    font-size: 14px;
}

input[type="text"] {
    border-radius: 5px;
    margin: 10px 0;
    background: #fff;
    border: 1px solid #ccc;
    color: #777;
    max-width: 100%;
    outline: none;
    padding: 7px 8px;
}

input[type="submit"] {
    border-radius: 5px;
    margin: 10px 0;
    background: #0088B2;
    color: #fff;
    padding: 8px 14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

textarea{
   
}

input[type="submit"]:hover {
    background: #444;
}

form {
  padding: 30px;
}

form input, form textarea {
  display: block;
  width: 100%;
}
</style>

<center>
    <h1>  SISTEMA INTERNO DE VERIFICACION DE LICENCIAS DE PILOTOS </h1>
        <h2> AUTORIDAD AERONAUTICA CIVIL </h2>
        
    <head>

</head>
   <br><br/>
<br><br/>
<br><br/>
  
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <center>
      <body>

<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>
       
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="licencia"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker
        ({
			
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
       
		})
        
              
        
	})
</script>
      
 

  
<!--   <input type="button" class="btn btn-primary btn-lg"  onclick="location.href= php echo base_url('index.php/reportedecaja/reportesfinancieros';)" value="GENERAR REPORTE FINANCIERO " name="boton" 
          -->
          
          

   </center>
  <center>
  <div class="col-md-6 col-sm-6 col-xs-12">
            <form   autocomplete="off" method="post" action="<?php echo base_url('/index.php/informacion/consulta'); ?>">

                            
                            <br>
                                  <br>
                                  <div style="width: 60%; margin-left: 700px;align-content:center " >
                                      
        

                             <input   type="text" name="licencia" placeholder="Licencia">
                                     </div>     
                                  
    
                                                                
                                  <br>
                                  <br>
                                  <center>
                                      <button style="margin-left:900px"class="btn btn-primary btn-lg" type="submit">Consultar</button>
                                    </center>
                                        </form>
                      
                               
 
       </center>
 
                      
          
     </div>
     
</body>
</head>
</div>