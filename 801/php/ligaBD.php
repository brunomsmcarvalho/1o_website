<?php

$server = "localhost";
$user = "root";
$key = "";
$db = "ti931";

$liga = mysqli_connect($server, $user, $key, $db);
if (!$liga) {
    echo"<script>
            alert('Erro ao ligar à base de dados. Tente novamente.');
    </script>";
    die('Error: ' . mysqli_connect_error());
}
