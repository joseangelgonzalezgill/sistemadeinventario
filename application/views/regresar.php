<meta charset="utf-8" />

<title>Administracion de Usuarios</title>

<?php

foreach($css_files as $file): ?>

<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>

<?php foreach($js_files as $file): ?>

<script src="<?php echo $file; ?>">


</script>

<?php endforeach; ?>

<style type='text/css'>

body

{

font-family: Arial;

font-size: 20px;

}

a {

color: blue;

text-decoration: none;

font-size: 20px;

}

a:hover

{

text-decoration: underline;

}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
     position: relative; 
         left: 800px;
    padding: 10px 10px;
  
}

</style>
</head>


<body>


<div class="contenido-crud">

<?php echo $output; ?>
    
 
</div>