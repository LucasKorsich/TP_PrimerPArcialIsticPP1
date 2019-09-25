
<!DOCTYPE html>
<html>
<body>

<h2>An Ordered HTML Listadeusuario</h2>


<ol>
<?php
$miarchivo =fopen ("usuarios.txt","r");
while (!feof($miarchivo)){
	$objeto=json_decode(fgets($miarchivo));
	echo "<li>".$objeto->Nombre."</li>";
}
fclose($miarchivo);
?>
</ol>
</body>
</html>