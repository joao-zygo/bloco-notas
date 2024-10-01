<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $categoria = $_POST['categoria'];
    $conteudo = $_POST['conteudo'];
    $titulo = $_POST['titulo'];

    $sql = "UPDATE notas SET categoria='$categoria', conteudo='$conteudo',titulo='$titulo' WHERE id_notas=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn ->close();
    header ("Location: read.php");
    exit();
}

$sql = "SELECT * FROM notas WHERE id_notas=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=" update.php?id=<?php echo $row['id_notas'];?>">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" value="<?php echo $row['categoria']; ?>" required>
        <label for="conteudo">Conteudo</label>
        <input type="text" name="conteudo" value="<?php echo $row['conteudo']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
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
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"],
a {
    background-color: #fff;
    color: #000;
    border: 1px solid #000;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
}
</style>   
</body>
</html>