<meta charset="utf-8" />

<title>Administracion de Usuarios</title>

<?php

foreach($css_files as $file): ?>

<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>

<?php foreach($js_files as $file): ?>

<script src="<?php echo $file; ?>"></script>

<?php endforeach; ?>

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

<body>

<!--<h1>CONSULTAR EXPEDIENTE</h1>-->

<div class="contenido-crud">

<?php echo $output; ?>

</div>