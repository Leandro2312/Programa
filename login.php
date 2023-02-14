<?php
session_start();
$_SESSION["nome"] = "Leandro";
echo $_SESSION["nome"];
echo "<hr>";
?>
<?php include_once "header.php"?>

<form method="POST" action="validar.php">

<label>Usuario:</label>
<input type="text" name="usuario" required><br>

<label>Senha:</label>
<input type="password" name="senha" required><br>

<button type="submit">Entrar</button> 
</form>
<?php include_once "footer.php"?>
