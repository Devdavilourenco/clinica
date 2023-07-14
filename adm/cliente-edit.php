+<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    
    <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: #E7DFDD;
                border-radius: 30px;
            }::-webkit-scrollbar-thumb{
                background: #000000;
                border-radius: 30px;
            }
        </style>
    <title>Cliente Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Cliente 
                            <a href="exibir_func.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                            $query = "SELECT * FROM usuario WHERE id='$student_id' ";
                            $query_run = mysqli_query($mysqli, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nome" value="<?=$student['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cpf:</label>
                                        <input type="text" name="cpf" value="<?=$student['cpf'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Login</label>
                                        <input type="text" name="login" value="<?=$student['login'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="text" name="senha" value="<?=$student['senha'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <label for="funcao">Função:</label>
                                        <select class="form-control"  id="funcao" name="funcao" required>
                                            <option selected disabled>Selecione um item</option>
                                            <option value="adm">ADM</option>
                                            <option value="funcionario">Funcionário</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </div>


                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_cliente" class="btn btn-primary">
                                            Atualizar Cliente
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#cpf");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
</script>
</body>
</html>