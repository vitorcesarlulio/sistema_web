﻿<?PHP
require_once("../seguranca.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário de Cadastro </title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>

<form name="frm_login" action="cadastro_login.php" method="post">
<div id="principal">
  <h1> Cadastro de Login </h1>
    <label> Nome </label>
    <input name="txt_nome" type="text" class="input_01" placeholder="Entre com o Nome">
    
    <label> Login </label>
    <input name="txt_login" type="text" class="input_01" placeholder="Entre com o Login">
    
    <label> Senha </label>
    <input name="txt_senha" type="password" class="input_01" placeholder="Entre com a Senha">
    
    <input name="btn_enviar" type="submit" class="btn">
</div>
</form>
</body>
</html>
