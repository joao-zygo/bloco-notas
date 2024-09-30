<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = $_POST['categoria'];
    $conteudo = $_POST['conteudo'];
    $titulo = $_POST['titulo'];

    $sql = "INSERT INTO notas (categoria, conteudo,titulo) VALUES ('$categoria', '$conteudo', '$titulo')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="create.php">
    TÍTULO: <input type="text" name="titulo" required>
    CATEGORIA: <input type="text" name="categoria" required>
    CONTEÚDO: <input type="text" name="conteudo" required>
    
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver notas.</a>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;   

}

label {
    display: block;
    margin-bottom:   
 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: white;
    color:   
 #fff;
    border: 1px solid black;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

a {
    text-decoration: none;
    color: #007bff;   
    background-color: white;
    color:   
 #fff;
    border: 1px solid black;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;

}
</style>