
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $rating = $_POST["rating"];

    $servername = "LocalHost";
    $username = "root";
    $password = "root";
    $dbname = "comentarios_db";

    $conn = new mysql($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO comentarios (nome, avaliacao, comentario) VALUES ('$name', $rating, '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Comentário salvo com sucesso!";
    } else {
        echo "Erro ao salvar o comentário: " . $conn->error;
    }

    $conn->close();
}
?>



