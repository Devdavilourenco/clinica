
        <?php
require './dbcon.php';
$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE login=? AND senha=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $funcao = $row['funcao'];
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];

    if ($funcao == "adm") {
        echo "<center><h2>Login Efetuado com Sucesso-ADM(".$row['nome'].")!</h2></center>";
        echo "<center><img src='https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/Projeto-Oficina/main/site/img/carregando.gif'></center>";
        echo "<script>setTimeout(function() { window.location.href = 'adm/home.php?nome=" . $row['nome'] . "'; }, 2000);</script>";
    } else if ($funcao == "cliente") {
        echo "<center><h2>Login Efetuado com Sucesso Cliente(".$row['nome'].")!</h2></center>";
        echo "<center><img src='https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/Projeto-Oficina/main/site/img/carregando.gif'></center>";
        echo "<script>setTimeout(function() { window.location.href = 'cliente/home.php?nome=" . $row['nome'] . "'; }, 2000);</script>";
    } else if ($funcao == "funcionario") {
        echo "<center><h2>Login Efetuado com Sucesso Funcionario(".$row['nome'].")!</h2></center>";
        echo "<center><img src='https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/Projeto-Oficina/main/site/img/carregando.gif'></center>";
        echo "<script>setTimeout(function() { window.location.href = 'func/home.php?cargo=" . $row['cargo'] . "'; }, 2000);</script>";
    }
} else {
    echo "<center><h2>Usuário e/ou senha incorreto(s)</h2></center>";
    echo "<center><img src='https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/Projeto-Oficina/main/site/img/carregando.gif'></center>";
    echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 2000);</script>";
}

?>

