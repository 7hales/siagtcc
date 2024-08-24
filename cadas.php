<?php

if(isset($_POST['submit']))
{
    include_once('config.php');
   
   $nome = $_POST['nome'];
   $matricula = $_POST['matricula'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result  = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,matricula,senha) VALUES ('$nome','$matricula','$email','$senha')");
  
}



?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadcs.css"> 
    <title>Cadastro Escolar</title>
</head>
<body>

    <header>
        <img class="logo" src="siag.png" alt="Logo SIAG">
        <div>Sistema Integrado de Agendamentos</div>
    </header>
    
    <div class="registration-container">
        <h2>Cadastro SIAG</h2>
        <form action="cadas.php" method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" required><br>
            <input type="text" name="matricula" placeholder="Matrícula" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <input type="password" name="confirm_password" placeholder="Confirmar Senha" required><br>
            <input type="submit" name="submit" id="submit">
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>

</body>
</html>