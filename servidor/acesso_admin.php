<?php
session_start();
// Resgatando dados do input
$email = $_POST['email'];
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {
    // Conexão com o banco
    include_once('./conn.php');
    // Instrução SQL
    $sql = "SELECT * FROM adm WHERE email = '$email' AND senha = '$senha' ";
    // Execução da instrução sql
    $resultadoConsulta = $conn->query($sql);
    // Essa variavel recebe a lista de moradores cadastrados no banco
    $adm = mysqli_fetch_all($resultadoConsulta);
    // Essas variaveis globais recebem o valor da consulta no banco
    $_SESSION['nome'] = $adm[0][1];
    $_SESSION['email'] = $adm[0][2];
    $_SESSION['senha'] = $adm[0][3];
    // Redirecionado para a pagina de adm
    header('Location: ../home_admin.php');
}
else {
    echo "
        <script>
            alert('Email ou Senha invalidos!')
            location.href = './login_admin.php'
        </script>    
    ";
}

