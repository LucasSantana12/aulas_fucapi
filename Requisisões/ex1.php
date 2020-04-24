<html>
<body>
Bem vindo <?php 

if( isset( $_GET["nome"]) ){
    echo $_GET["nome"];
}else{
    echo "";
}?> <br>

Seu email é: <?php
if( isset( $_GET["email"]) ){
    echo $_GET["email"];
}else{
    echo "";
}?> <br>

</body>
</html>