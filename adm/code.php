<?php
session_start();
require 'dbcon.php';
//==Usuarios==//

//==Cliente==//

if (isset($_POST['delete_cliente'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['delete_cliente']);

    $query = "DELETE FROM usuario WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "cliente excluído com sucesso";
        header("Location: exibir.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foi possível excluir o cliente";
        header("Location: exibir.php");
        exit(0);
    }
}

if (isset($_POST['update_cliente'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['student_id']);

    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $login = mysqli_real_escape_string($mysqli, $_POST['login']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
    $funcao = mysqli_real_escape_string($mysqli, $_POST['funcao']);

    $query = "UPDATE usuario SET nome='$nome', cpf='$cpf', email='$email', login='$login', senha='$senha', funcao='$funcao' WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "cliente atualizado com sucesso";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "cliente não atualizado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['save_user'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $login = mysqli_real_escape_string($mysqli, $_POST['login']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
    $funcao = mysqli_real_escape_string($mysqli, $_POST['funcao']);

    $query = "INSERT INTO usuario (nome, cpf, email, login, senha, funcao";

    if ($funcao === "funcionario") {
        $consultorio = mysqli_real_escape_string($mysqli, $_POST['consultorio']);
        $cargo = mysqli_real_escape_string($mysqli, $_POST['cargo']);
        $query .= ", consultorio, cargo";
    }

    $query .= ") VALUES ('$nome', '$cpf', '$email', '$login', '$senha', '$funcao'";

    if ($funcao === "funcionario") {
        $query .= ", '$consultorio', '$cargo'";
    }

    $query .= ")";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "Usuário cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Falha ao cadastrar o usuário";
        header("Location: home.php");
        exit(0);
    }
}

//==Funcionario==//


if (isset($_POST['delete_func'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['delete_func']);

    $query = "DELETE FROM funcionarios WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "funcionário excluído com sucesso";
        header("Location: exibir_func.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foi possível excluir o funcionário";
        header("Location: exibir_func.php");
        exit(0);
    }
}



if (isset($_POST['update_func'])) {
    $student_id = mysqli_real_escape_string($mysqli, $_POST['student_id']);

    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $setor = mysqli_real_escape_string($mysqli, $_POST['setor']);
    $departamento = mysqli_real_escape_string($mysqli, $_POST['departamento']);

    $query = "UPDATE funcionarios SET nome='$nome', cpf='$cpf', email='$email', setor='$setor', departamento='$departamento' WHERE id='$student_id' ";
    $query_run = mysqli_query($mysqli, $query);

    if ($query_run) {
        $_SESSION['message'] = "funcionário atualizado com sucesso";
        header("Location: exibir_func.php");
        exit(0);
    } else {
        $_SESSION['message'] = "funcionário não atualizado";
        header("Location: exibir_func.php");
        exit(0);
    }
}



if (isset($_POST['save_func'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $setor = mysqli_real_escape_string($mysqli, $_POST['setor']);
    $departamento = mysqli_real_escape_string($mysqli, $_POST['departamento']);

    $query = "INSERT INTO funcionarios (nome,cpf,email,setor,departamento) VALUES ('$nome','$cpf','$email','$setor','$departamento')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "funcionário cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "funcionário não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}

if (isset($_POST['save_ocorrncia'])) {
    $nome =  mysqli_real_escape_string($mysqli, $_POST['nome']);
    $obs =  mysqli_real_escape_string($mysqli, $_POST['observacao_cliente']);
    $dep = mysqli_real_escape_string($mysqli, $_POST['dep']);
    $data = mysqli_real_escape_string($mysqli, $_POST['data']);

    $query = "INSERT INTO `consulta`(`id`, `nome`, `observacao_cliente`, `especialidade`, `estado`, `data`) VALUES(0,'$nome','$obs','$especialidade','Aberto','$data')";

    $query_run = mysqli_query($mysqli, $query);
    if ($query_run) {
        $_SESSION['message'] = "cliente cadastrado com sucesso!";
        header("Location: home.php");
        exit(0);
    } else {
        $_SESSION['message'] = "cliente não cadastrado";
        header("Location: home.php");
        exit(0);
    }
}
?>
