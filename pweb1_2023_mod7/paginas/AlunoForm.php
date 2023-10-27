<?php 
    include '../db.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $db = new DB();
    $db->conn();

    if($_POST){
        $dados = $db->Insert("aluno",$_POST);
    }
?>
<body>
    <form action="alunoform.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome"><br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf"><br>
        <label for="relefone">Telefone</label>
        <input type="text" name="telefone">

        <button type="submit">Salvar</button>
        <a href="alunolist.php">Voltar</a>
    </form>
</body>
</html>