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
            <a href='create.php'>Adcionar uma Nova Nota</a>
        </form>
    </div>
</body>
</html>

<?php
    include 'db.php';

    $sql = "SELECT * FROM notas";

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo "<table border='1'>
                <tr>
                    
                    <th> TITULO </th>
                    <th> CATEGORIA </th>
                    <th>
                        <a href='update.php?id={$row['id_notas']}'>Editar</a> |
                        <a href='delete.php?id={$row['id_notas']}'>Excluir</a>
                    </th>
                </tr>";

            echo "<tr>
                    
                    <td> {$row['titulo']} </td>
                    <td> {$row['categoria']} </td>
                    
                </tr>
                <tr>    
                    <th> CONTEUDO </th>
                </tr>
                <tr>
                    <td> {$row['conteudo']} </td>
                </tr>";
        }
        echo "</table>";
    }else {
        echo "Nenhum registro encontrado!!!";
    }
    
?>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
            
            
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        .botao {
            text-align: right;
            margin-bottom: 10px;
        }
        
        th:first-child {
            width: 80%; 
        }

        th:nth-child(2) {
            width: 10%; 
        }
        th:nth-child(3) {
            width: 10%; 
        }
    </style>

