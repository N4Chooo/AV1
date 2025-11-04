<?php 
if (isset($_GET['won'])){
   if($_GET['won'] == 1){
    echo "Has ganado";
   }else{
    echo "Has perdido";
   }
}



?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Mastermind Numérico</title>
</head>
<body>
    <a href = 'index.php?reset=1'><button>Volver a jugar</button></a>
</body>
</html>