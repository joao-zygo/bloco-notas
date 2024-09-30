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
    categoria: <input type="text" name="categoria" required>
    conteudo: <input type="text" name="conteudo" required>
    título: <input type="text" name="titulo" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver notas.</a>
