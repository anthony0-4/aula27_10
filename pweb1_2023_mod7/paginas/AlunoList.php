<?php
    include '../db.class.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db = new DB();
        $db->conn();

        $dados = $db->select("aluno");

        if(!empty($_GET['id'])){
            $db->destroy("aluno",$_GET['id']);
            echo "Registro removido com sucesso";
            header('location: AlunoList.php');
        }
        if(!empty($_POST)){
            $db->search("aluno",$_POST);
        }
    ?>

    <div>
        <h3>Listagem de Alunos</h3>
        <form action="AlunoList.php" method="post">
            <select name="tipo">
                <option value="nome">Nome</option>
                <option value="cpf">CPF</option>
                <option value="telefone">Telefone</option>
            </select>
            <input type="text" name="valor">
            <button type="submit">Buscar</button>
            <a href="AlunoForm.php">Cadastrar</a>
        </form>
        <a href="alunoform.php">Cadastrar</a>
    </div>
    <!-- On tables -->
<?php
     foreach($dados as $item){
        echo "<tr>";
        echo "<th scope='row'>$item->id</th>";
        echo  "<td>$item->nome</td>";
        echo  "<td>$item->cpf</td>";
        echo  "<td>$item->telefone</td>";
        echo  "<td>Editar</td>";
        echo  "<td><a onclick='returno confirm(\"deseja excluir?\")'
        href='AlunoList.php?id=$item->id'></a></td>";
        echo "</tr>";
    }?>
</body>
</html>