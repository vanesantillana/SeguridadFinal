<!DOCTYPE html>
<html>
<head>
	<title>XSS</title>
</head>
<body>
<?php
setcookie("username","admin",time()+3600);
setcookie("password","123",time()+3600);

if($_POST['content']!=null){
	$fp=fopen("comments.txt", "a");
	fwrite($fp, $_POST['content']."<hr/>\n");
	fclose($fp);
}
$texto=file_get_contents('comments.txt');
//$texto= strip_tags($texto);
echo $texto;

/*<
<script type="text/javascript">
	alert("hola");
</script>
<script type="text/javascript">
	alert(document.cookie);
</script>
*/

?>

<h3>Comentar</h3>
<form action="post.php" method="post">
	<textarea name="content" rows="3" cols="100"></textarea>
	<input type="submit" name="Enviar">
</form>
</body>
</html>

