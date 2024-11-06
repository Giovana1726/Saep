<?php
$servername = "localhost";
$database = "Saep01";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Usuarios (Nome, Email) VALUES ( $nome, $email)";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $setor = $_POST['setor'];
        $prioridade = $_POST['prioridade'];
        $descricao = $_POST['descricao'];
    
        $sql = "INSERT INTO Tarefas (setor, prioridade, descricao) VALUES ( $setor, $prioridade, $descricao)";
    

    if (mysqli_query($conn, $sql)) {
        echo "Cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    
}
}

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['descricao'] . "</td>";
        echo "<td>" . $row['setor'] . "</td>";
        echo "<td>" . $row['prioridade'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>
                <button class='button edit' onclick='openModal(" . $row['id'] . ", \"" . $row['descricao'] . "\", \"" . $row['setor'] . "\", \"" . $row['prioridade'] . "\", \"" . $row['status'] . "\")'>Editar</button>
                <button class='button delete' onclick='deleteTask(" . $row['id'] . ")'>Excluir</button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhuma tarefa encontrada</td></tr>";
}
?>

?>
