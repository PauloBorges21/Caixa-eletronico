<?php
session_start();
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false)
{

}else{
    header("Location: login.php");
}

?>
<html>
<head>
<title>Caixa Eletrônico</title>


</head>
<body>
<h1>Banco ZYZ</h1>
<div>
<p>Agência: <span>0000</span></p>
<p>Conta: <span>0000</span></p>

<a href="sair.php">Sair</a>

</div>


<form>
</form>

</body>


</html>

