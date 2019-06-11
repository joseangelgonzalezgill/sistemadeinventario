<meta charset="utf-8" />
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
</style>

<center>
   <h2> REPORTE GENERAL DE CONTABILIDAD POR RANGO DE FECHAS POR CUENTAS DE INGRESOS Y COBRAR </h2>
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
   <div class="col-md-6 col-sm-6 col-xs-12">
   
    

                  
                  
                  <form id="loginform" autocomplete="off" method="post" action="<?php echo base_url('index.php/reportedecaja/reportesporcuentas'); ?>">

                              <label for="rango_fechas">Introduzca la Fecha de Inicial del Reporte</label><br>

                              <input class="form-control" id="date1" name="date1" placeholder="MM/DD/YYYY" type="text"/>
                             <br></br>
                                   <label for="rango_fechas">Introduzca la Fecha de Final del Reporte</label><br>
                                   <input class="form-control" id="date2" name="date2" placeholder="MM/DD/YYYY" type="text"/>


                             

                              <div class="pull-right">

                                  <br>

                                 <button class="btn btn-primary btn-lg" type="submit">GENERAR REPORTE POR RANGO DE FECHAS</button>

                              </div>

                            </form>
     </div>
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
		var date_input=$('input[name="date1"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker
        ({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
        var date_input=$('input[name="date2"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker
        ({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
        
        
        
        
        
	})
</script>
      
 
<br><br/>
<br><br/>
<br><br/>

  
  
      
          
          

   </center>
</body>
</div>