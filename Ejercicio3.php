<?PHP

/*Realiza un conversor de monedas. La cantidad en pesetas que se quiere convertir y la tasa de cambio deberán estar almacenada en variables. Este deberá de realizarlo una función, es decir, la función recibirá las variables necesarias para realizar el cambio.*/

// 1 peseta = 0.25 
$tasa= 52.80;
$moneda = 4;
$conv =$_POST["conv"];
if(isset($_POST["monto"])){
define ("cantidad", $_POST["monto"]);
}
else{
    
}
echo "esto da";
echo "</br>";
if ($conv==1){
echo (cantidad*$tasa)/$moneda;
echo "\n DOP";
    
} else{
    echo cantidad/$tasa;
    echo "Dolares";
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post" action="">
inserte la cantidad a convertir 
<input type="text" name="monto">
<input type="submit" value="convertir">
<br>
seleccione el tipo de conversion <br>
<input type="radio" name="conv" value="1" checked>Dolares <br>
<input type="radio" name="conv" value="1" checked>Pesos <br>

</body>
</html>
