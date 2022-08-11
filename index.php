<html>

<head>
<title>Exemplo PHP (alterado)</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "00.000.000.00"; // Host fictício lá na AWS
$username = "root";
$password = "Senha123"; // Senha fictícia
$database = "bancodotoshiro";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (ProdutoID, Nome, Peso, Preco, Tipo) VALUES ('$valo>


if ($link->query($query) === TRUE) {
  echo "Processo concluído! Informações estão salvas!";
} else {
  echo "Aconteceu um error: " . $link->error;
}

?>
</body>
</html>

