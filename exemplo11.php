<?php

echo "<h1>Imprimindo um array</h1>";
$cores = array("azul","vermelho","amarelo","verde");
print_r($cores);

echo "<h1>Percorrendo um array</h1>";
foreach($cores as $valor){
    echo $valor;
}

echo "<h1>Percorrendo um array forma 2</h1>";
$cores = ["azul","vermelho","amarelo","verde"];
foreach($cores as $chave => $valor){
    echo "$chave:$valor <br>";
}

echo "<h1> Percorrendo um dicionario</h1>";
$arr = [ 
    "nome"=>"Roberto",
    "sobrenome"=>"Junior",
    "idade"=>23
];
foreach($arr as $chave => $valor){
    echo $chave."=>".$valor."<br/>";
}
?>

<table style="width:100%" border="1">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>


<br><br>

<table border='1' style="width:100%">

<?php
$tabela =[
    ["nome"=>"Roberto","sobrenome"=>"Junior","idade"=>23],
    ["nome"=>"Maria","sobrenome"=>"Eduarda","idade"=>25],
    ["nome"=>"Matheus","sobrenome"=>"Silva","idade"=>18]
];

echo "<tr>";
foreach($tabela[0] as $chaves => $valor){
    echo "<th>$chave</th>";
}
echo "</tr>";

foreach($tabela as $linhas){
    echo "<tr>";
     foreach($linhas as $valor){
         echo "<td>$valor</td>";
     }
     echo "</tr>";
}
?>
</table>
