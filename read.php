<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="botao">
        <form>
            <a href='create.php'><button>+</button>Adcionar uma Nova Nota</a>
        </form>
    </div>
</body>
</html>

<?php
    include 'db.php';

    $sql = "SELECT * FROM notas";

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){
        echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> TITULO </th>
            <th> CONTEUDO </th>
            <th> CATEGORIA </th>
        
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                <td> {$row['id_notas']} </td>
                <td> {$row['titulo']} </td>
                <td> {$row['conteudo']} </td>
                <td> {$row['categoria']} </td>
                <td>
                <a href='update.php?id={$row['id_notas']}'>Editar</a> |
                <a href='delete.php?id={$row['id_notas']}'>Excluir</a>
                </td>
                </tr>";
        }
        echo "</table>";
    }else {
        echo "Nenhum registro encontrado!!!";
    }
    
?>

