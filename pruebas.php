<?php

/*var_dump($_GET);

$Numero=2;
while($Numero<10){
	echo"Se esta ejecutando el codigo porque el numero es igual a ".$Numero."<br><hr>";
	$Numero;
}
*/


?>


<script>
var Numero= 30;
/*var a=20; for(var b=0;b<a;b++){alert ("wey"+ b);}

while (Numero >20){
	
	alert("Este se va a ejecutar hasta que"+ Numero+"sea menor que 20");
	Numero--;
}*/

</script>
<form method="post">
<button type="submit "name="boton" id="boton">boton</button>
</form>
<?php
$Numerito = 20;

if(isset($_POST["boton"])){
	if($Numerito > 5){
		echo"wey";
	}
}
?>