<?php

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$morada = $_POST['morada'];
$email = $_POST['email'];
$codpost = $_POST['codpost'];
$concelho = $_POST['concelho'];
$password = $_POST['password'];
$repass = $_POST['repass'];
$repass = hash("sha512",$repass); //$repass = MD5($repass);

include 'ligaBD.php';

$query = "INSERT into utilizadores(nome, apelido, morada, email, codpost, concelho, pass) values('$nome', '$apelido', '$morada', '$email', '$codpost', '$concelho', '$repass')";
if(mysqli_query($liga, $query)){
    echo "<script>
            alert('Registo efetuado com sucesso!');
            window.location = '../index.html';
    </script>";
}else{
    echo "<script>
            alert('Erro ao efetuar o registo. Tente novamente.');
            window.location = '../html/regista.html';
    </script>";
}


?>