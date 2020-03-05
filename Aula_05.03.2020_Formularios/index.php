<?php
$ex='<center><h1>Login</h1>
<form action="bemvindo.php" method="post">
	Email: <input type="text" name="log"><br>
	Senha: <input type="num" name="sen"><br>
	<button>Concluir</button></center>
</form>';

echo $ex;

if(isset($_GET['erro'])){//isset serve para ver se $_GET[erro] existe
	echo "<center>Erro";
}
?> 