<!DOCTYPE html>
<head>

<title> EXEMPLO 3 DE REQUISOÇÕES </title>

</head>

<body>
<form method="GET" action="ex3.php">
<label for="cars">Choose a car:</label>

<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<input type="submit" value="confirmar">
</form>
<br>
<br>
<?php

if(!isset($_GET["cars"])){
    echo "<h1>cara tu não selecionou nada</h1>";
    exit;
}
echo "<h1> irmão, tu selecionou: ".$_GET["cars"];

?>
</body>
</html>
    
