<?php
    include './db.class.php'
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

        $dadosaluno = ['nome'=>"Anthony",
        'cpf'=>"12345678912345",
        'telefone'=>"12354938793"];

        //$db->insert("aluno", $dadosaluno);
    ?>
    <!-- On tables -->
<table class="table-primary">...</table>
<table class="table-secondary">...</table>
<table class="table-success">...</table>
<table class="table-danger">...</table>
<table class="table-warning">...</table>
<table class="table-info">...</table>
<table class="table-light">...</table>
<table class="table-dark">...</table>
<?php
     foreach($dados as $item){
        echo "<tr>";
        echo "<th scope='row'>$item->id</th>";
        echo  "<td>$item->nome</td>";
        echo  "<td>$item->cpf</td>";
        echo  "<td>$item->telefone</td>";
        echo "</tr>";
    }?>
</body>
</html>