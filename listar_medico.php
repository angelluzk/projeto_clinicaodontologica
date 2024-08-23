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
    <main class="table-geral">
    <h1>Lista de Médicos - ALTERAR/DELETAR</h1>
    <div>
        <form method="GET" action="listar_medico.php">
            <input type="text" name="search" placeholder="Buscar por Nome" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit">Buscar</button>
        </form>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>CRM</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Deleta</th>
                <th>Altera</th>
            </tr>
            <?php
            $con = mysqli_connect("localhost", "root", "", "clinicaodontologica");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $search = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

            $sql = "SELECT * FROM medicos";
            if (!empty($search)) {
                $sql .= " WHERE nome LIKE '%$search%'";
            }

            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['especialidade']; ?></td>
                    <td><?php echo $row['crm']; ?></td>
                    <td><?php echo $row['telefone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['endereco']; ?></td>
                    <td>
                        <form action="realizadelmedico.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                            <button class="botao-del" type="submit" name="botdelmedico" value="ok">Del</button>
                        </form>
                    </td>
                    <td>
                        <form action="formaltmedico.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                            <button class="botao-alt" type="submit" name="botaltmedico" value="ok">Alt</button>
                        </form>
                    </td>
                </tr>
            <?php }
            mysqli_close($con); ?>
        </table>
    </div>
</main>     
    <footer>
        <p>&copy; 2024 Clínica Odontológica. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
