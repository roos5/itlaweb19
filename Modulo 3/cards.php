<!doctype html>
<html>
<head>
<?php
//Realizar lista con array en PHP que contenga mínimo 5 palabras reservadas del lenguaje y presentar en vista usando un ciclo, el componente a utilizar será un card. Organizar uno al lado de otro como tipo tabla.
$cont = 0;
$top = 8;
$array = array('$_SESSION', 8, 6, 7, 3, 1, 2, 5, 4);
foreach($array as $valor)

echo
'
<div class="card" style="width: 18rem;">
  <img src="http://localhost/codes2/Modulo%203/k2.jpg" class="card-img-top" alt="Kratos">
  <div class="card-body">
    <h5 class="card-title">Lord Kratos</h5>
    <p class="card-text">God of War </p>
   
  </div>
</div>
'
;
$cont++;

?>
</body>
</html>