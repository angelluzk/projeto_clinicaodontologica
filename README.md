# 🏥 Clinica Odontológica - Sistema de Cadastro(Funcionários/Pacientes/Médicos/Produtos) e Gerenciamento de Estoque

![Status](https://img.shields.io/badge/status-concluído-brightgreen)
![PHP](https://img.shields.io/badge/PHP-7.4+-8892BF?logo=php\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?logo=mysql\&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?logo=css3\&logoColor=white)
![Feito com ❤️](https://img.shields.io/badge/feito%20com-%E2%9D%A4-red)

---

## 📚 Finalidade

Este projeto foi desenvolvido como **projeto acadêmico**, atividade **avaliativa**, no **Curso Técnico em Informática**, com o objetivo de praticar:

* Desenvolvimento Full Stack (front-end e back-end).
* Integração com banco de dados relacional.
* Estruturação e manipulação de formulários.

---

## ✅ Funcionalidades

* 📋 Cadastro de pacientes com dados pessoais.
* 👩‍💼 Cadastro de funcionários com informações profissionais.
* 📦 Cadastro de produtos com detalhes técnicos.
* 🥼 Cadastro de médicos com informações profissionais.
* 📝 Gerenciamento de Estoque.
* 🗄️ Armazenamento e manipulação de dados via **MySQL**.
* 🔄 Funcionalidades **CRUD** para clientes, funcionários e produtos:
  * **Listar** registros cadastrados.
  * **Editar** informações existentes.
  * **Deletar** registros indesejados.
* 🖥️ Interfaces simples e funcionais para interação com o sistema.

---

## 🛠️ Tecnologias utilizadas

* HTML5, CSS3
* PHP (com MySQLi)
* MySQL

---

## 🚀 Como executar o projeto

1. Clone este repositório:

```bash
   git clone https://github.com/seu-usuario/projeto_clinicaodontologica.git
```

2. Configure o servidor local (**XAMPP**).

3. Execute o script SQL para criar o banco de dados e as tabelas:

```sql
CREATE DATABASE IF NOT EXISTS clinicaodontologica;
USE clinicaodontologica;

CREATE TABLE `estoque` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_entrada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `funcionarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `data_admissao` date NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `medicos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `especialidade` varchar(100) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `pacientes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `produtos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
```

4. Coloque os arquivos do projeto na pasta `htdocs` (caso use **XAMPP**).

5. Acesse via navegador:

```
http://localhost/projeto_clinicaodontologica
```

---

## 📸 Prints do Sistema

### 🖼️ Tela Inicial

![Tela Inicial](images/print_tela_inicial.png)

![Tela Inicial](images/print_menu_cad.png)

![Tela Inicial](images/print_menu_listar.png)

### 🖼️ Tela de cadastro de Pacientes

![Cadastro de Pacientes](images/print_cad_paciente.png)

### 🖼️ Tela de Listar de Pacientes

![Listar de Pacientes](images/print_listar_pacientes.png)

### 🖼️ Tela de Listar de Funcionários

![Listar de Funcionários](images/print_listar_func.png)

### 🖼️ Tela de Listar de Médicos

![Listar de Médicos](images/print_listar_med.png)

### 🖼️ Tela de Listar de Produtos

![Listar de Produtos](images/print_listar_prod.png)

### 🖼️ Tela de Listar de Estoque

![Listar de Estoque](images/print_listar_estoque.png)

---

## 🤝 Contribuição

Projeto desenvolvido por **Angelita Luz** durante o **Curso Técnico em Informática**.

---
