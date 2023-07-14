<?php
session_start();
require 'dbcon.php';

if (isset($_GET['nome'])) {
    $_SESSION['nomeUsuario'] = $_GET['nome'];
}

if (isset($_SESSION['nomeUsuario'])) {
    $nomeUsuario = $_SESSION['nomeUsuario'];
} else {
    $nomeUsuario = '';
}
?>
    <!-- CSS -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* navbar */
        .top-nav {
            background-color: var(--brand);
            color: #fff;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .top-nav p {
            display: inline-block;
            margin-bottom: 0;
            margin-right: 10px;
        }

        .top-nav span,
        .top-nav i {
            vertical-align: middle;
        }

        .navbar {
            box-shadow: var(--shadow);
        }

        .social-icons a {
            width: 28px;
            height: 28px;
            display: inline-flex;
            color: #fff;
            background-color: rgba(255, 255, 255, 0.25);
            text-decoration: none;
            align-items: center;
            justify-content: center;
            border-radius: 100px;
        }

        .social-icons a:hover {
            background-color: #fff;
            color: var(--brand);
        }

        .navbar .navbar-nav .nav-link {
            color: var(--dark);
        }

        .navbar .navbar-nav .nav-link:hover {
            color: var(--brand);
        }

        .navbar .navbar-nav .nav-link.active {
            color: var(--brand);
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: 700;
        }

        .navbar-brand .dot {
            color: var(--brand);
        }

        .bg-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <!-- Navbar 1 -->
    <div class="top-nav" id="home" style="background-color: #38AAF2;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> suportsinfo@gmail.com</p>
                    <p> <i class='bx bxs-phone-call'></i> (85) 9 1234.5678</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="./img/logo.png" alt="" srcset="" style="width: 90px;">
                Suport's
                <span class="dot"  style="color: #38AAF2;">
                ADM - <?php echo $nomeUsuario; ?>   
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1" aria-hidden="true">Cadastro_Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exibir.php">Exibir_Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exibir_func.php">Exibir_Funcionario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ocorrencia_view.php">ver consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ocorrencia_view.php" data-bs-toggle="modal" data-bs-target="#exampleModal2">agendar consulta</a>
                    </li>
                </ul>
                <a href="../index.php" style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand ms-lg-3">Sair</a>
            </div>
        </div>
    </nav>

<!-- Modal Cadastro Usuario -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container">
                    <h1 style="text-align:center;">Cadastro de Usuario</h1>
                    <form action="code.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Cpf:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Login:</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Digite o login">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite o senha">
                        </div>
                        <div class="form-group">
                            <label for="funcao">Função:</label>
                            <select class="form-control" id="funcao" name="funcao" required>
                                <option selected disabled>Selecione um item</option>
                                <option value="adm">ADM</option>
                                <option value="funcionario">Funcionário</option>
                                <option value="cliente">Cliente</option>
                            </select>
                        </div>
                        <div class="form-group" id="consultorioDiv" style="display: none;">
                            <label for="setor">Consultório:</label>
                            <input type="text" class="form-control" id="consultorio" name="consultorio" placeholder="Digite o Consultório">
                        </div>
                        <div class="form-group" id="cargoDiv" style="display: none;">
                            <label for="cargo">Cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Digite o cargo">
                        </div>
                        <div style="text-align:center;">
                            <br>
                            <button type="submit" name="save_user" class="btn btn-primary">Cadastrar</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal de consulta -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url('img/ocor2.png'); min-height:250px;">
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-4 col-12 row g-3" action="./code.php" method="post">

                                <div>
                                    <h1>consulta
                                    <a href="./" class="btn btn-danger float-end">VOLTAR</a>
                                    </h1>
                                    <p>agende sua consulta abaixo</p>
                                </div>
                                <div class="col-lg-12">
                                    <label for="userName" class="form-label">Nome</label>                                        
                                    <input type="text" class="form-control" name="nome" id="userName"
                                            aria-describedby="emailHelp">
                                </div>                                  
                                <div class="col-12">
                                    <label for="userName" class="form-label">Descreva o problema:</label>
                                    <input type="textarea" class="form-control" name="observacao_cliente" id="userName"
                                            aria-describedby="emailHelp">
                                </div>
                                
                                <div class="col-12">
                                    <label for="userName" class="form-label">Data de registro:</label>
                                    <input type="date" class="form-control" name="data" id="userName"
                                            aria-describedby="emailHelp" >
                                </div> 
                                
                                <div class="inputBox">
                                <label for="inputState" class="form-label">especialidade:</label>
                                <select id="inputState" class="input" name="dep" id="userName">
                                    <option selected disabled>Selecione</option>
                                    <option>odontologia</option>
                                    <option>enfermagem</option>
                                    <option>pediatria</option>
                                    <option>pscicologia</option>
                                </select>
                                <br>
                            </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand" name="save_ocorrncia" style="background-color: #38AAF2;border: #38AAF2">registrar ocorrência</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<script>
    const funcaoSelect = document.getElementById("funcao");
    const setorDiv = document.getElementById("consultorioDiv");
    const cargoDiv = document.getElementById("cargoDiv");

    funcaoSelect.addEventListener("change", function() {
        if (this.value === "funcionario") {
            setorDiv.style.display = "block";
            cargoDiv.style.display = "block";
        } else {
            setorDiv.style.display = "none";
            cargoDiv.style.display = "none";
        }
    });
</script>


    
    <!-- JavaScript -->
    <script>
        const dataAtual = new Date();
        const anoAtual = dataAtual.getFullYear();
        document.getElementById('anoAtual').innerHTML = anoAtual;
    </script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#cpf");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
</script>
