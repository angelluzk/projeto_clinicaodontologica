<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Odontológica</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1>Clínica Odontológica</h1>
        <nav>
            <ul class="flip-menu">
                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> Sobre Nós</a></li>
                <li><a href="#"><i class="fas fa-tooth"></i> Serviços</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Equipe</a></li>
                <li><a href="#"><i class="fas fa-phone"></i> Contatos</a></li>
                <li class="dropdown">
                    <a href="#"><i class="fas fa-user-plus"></i> Cadastro</a>
                    <ul class="dropdown-content">
                        <li><a href="cadastro_estoque.html">Cadastro Estoque</a></li>
                        <li><a href="cadastro_funcionario.html">Cadastro Funcionário</a></li>
                        <li><a href="cadastro_paciente.html">Cadastro Paciente</a></li>
                        <li><a href="cadastro_medico.html">Cadastro Médico</a></li>
                        <li><a href="cadastro_produto.html">Cadastro Produto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><i class="fas fa-calendar-check"></i> Consulta</a>
                    <ul class="dropdown-content">
                        <li><a href="listar_estoque.php">Listar Estoque</a></li>
                        <li><a href="listar_funcionario.php">Listar Funcionário</a></li>
                        <li><a href="listar_paciente.php">Listar Paciente</a></li>
                        <li><a href="listar_medico.php">Listar Médico</a></li>
                        <li><a href="listar_produto.php">Listar Produto</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <?php
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $crm = $_POST['crm'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $sql = "INSERT INTO medicos(nome, especialidade, crm, telefone, email, endereco) 
                    VALUES('$nome','$especialidade','$crm','$telefone','$email','$endereco')";
        $con = mysqli_connect("127.0.0.1", "root", "", "clinicaodontologica");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL:" . mysqli_connect_error();
        }
        mysqli_query($con, $sql);
        echo "<div class='mensagem-sucesso'>Médico cadastrado com sucesso!</div>";
        mysqli_close($con);
        ?>
        <h2 class="botao-alterar"><a id="voltar-link" href="cadastro_medico.html">VOLTAR</a></h2>   
    </main>    
    <footer>
        <p>&copy; 2024 Clínica Odontológica. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
