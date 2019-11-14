<?PHP

/*Realiza un conversor de monedas. La cantidad en pesetas que se quiere convertir y la tasa de cambio deberán estar almacenada en variables. Este deberá de realizarlo una función, es decir, la función recibirá las variables necesarias para realizar el cambio.*/

// 1 peseta = 0.25 
$tasa= 52.80;
$conv= $_POST["conv"];
if(isset($_POST["monto"])){
define ("cantidad", $_POST["monto"]);
}
else{
    
}

echo "</br>";
if ($conv==1){
echo "El resultado en pesos dominicanos es:\n";
echo (cantidad*$tasa);
echo "\n DOP";
    
} else{
 echo "Elresultado en Dolares es:\n";
 echo cantidad/$tasa;
 echo "\n Dolares";
	
}
?>


