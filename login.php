<?php 
session_start();
require 'config.php';

if(isset($_POST['agencia']) && empty($_POST['agencia'] == false))
{
    $agencia = filter_input(INPUT_POST,'agencia');
    $conta = filter_input(INPUT_POST,'conta');
    $senha = filter_input(INPUT_POST,'senha');    

    $sql = "SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha";
    $sql = $conn->prepare($sql);
	$sql->bindValue(":agencia", $agencia);
	$sql->bindValue(":conta", $conta);
	$sql->bindValue(":senha", md5($senha));
	$sql->execute();
    if($sql->rowCount()>0)
    {
        $sql = $sql->fetch();
        $_SESSION['banco'] = $sql['id'];    

        header("Location: index.php");
        exit;
    }

}


?>
<html>
<head>
<title>Caixa Eletrônico</title>


</head>
<body>
<h1>Banco ZYZ</h1>
<div>
<form method="POST">

<p>Agência:</p>
<input type="text" name="agencia" />


<p>Conta:</p>
<input type="text" name="conta" />


<p>Senha:</p>
<input type="password" name="senha" />
</br>
</br>
<input type="submit" value="Enviar">
</form>



</div>




</body>


</html>

