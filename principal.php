<?php 
  include "validacao.php";
  include "conexao.php";

  // destino do formulário para inserir por padrão
  $destino = './usuario/inserir.php';

  // se idAlt for diferente de vazio - se existir idAlt
  if (!empty($_GET['idAlt'])) {
    // gurda na variável $id o valor da pessoa clicado no lápis da tabela 
    $id = $_GET['idAlt'];

    //busca o udsuário do idAlt
    $sql = "SELECT * FROM usuario WHERE id= '$id' ";

    //executa comando
    $dados = mysqli_query($conexao, $sql);

    //Váriavel com nossos dados: 
    $dadosAlt = mysqli_fetch_assoc($dados);

    // echo "Carregado pessoa: ".$dadosAlt['nome'] //testando o funcionamento, ['nomd'] pode ser alterado para outras informações como senha, email, nome;

    $destino = './usuario/alterar.php';
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./recursos/style.css">
    <!-- TabelaJS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo do site -->
    <link rel="shortcut icon" type="imagex/png" href="./assets/truck-fast-solid.ico">
    <title>Sitema Venda+</title>
    <!-- logo: <i class="fa-solid fa-store"></i><i class="fa-solid fa-plus"></i> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./principal.php"><i class="fa-solid fa-truck-fast"></i> vendasExpress</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              
              <a class="btn btn-outline-danger ms-3" href="./sair.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>

            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu">
              <h6>Bem-vindo(a) <?php echo $_SESSION['usuario'] ?></h6>
                <ul class="menu">
                    <li><a href="./principal.php" class="menu-item"><i class="fa-solid fa-web-awesome"></i> Usuário </a></li>
                    <li><a href="./cidade.php" class="menu-item"><i class="fa-solid fa-building"></i> Cidade </a></li>
                    <li><a href="./cliente.php" class="menu-item"><i class="fa-solid fa-user-group"></i> Cliente </a></li>
                    <li><a href="./funcionario.php" class="menu-item"><i class="fa-solid fa-user-tie"></i> Funcionário </a></li>
                    <li><a href="./produto.php" class="menu-item"><i class="fa-solid fa-box"></i> Produto </a></li>
                    <li><a href="./venda.php" class="menu-item"><i class="fa-solid fa-cart-shopping"></i> Produto </a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md card">
                    <h3>Cadastro</h3>
                          <form action="<?=$destino?>" method="post"> 
                          <div class="form-group">
                              <label> ID </label>
                              <input value="<?php echo isset($dadosAlt) ? $dadosAlt['id'] : '' ?>" name="id" class="form-control" placeholder="Seu id" readonly>
                            </div> 
                            <div class="form-group">
                              <label> Nome </label>
                              <input value="<?php echo isset($dadosAlt) ? $dadosAlt['nome'] : '' ?>" name="nome" type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="form-group">
                              <label> CPF </label>
                              <input value="<?php echo isset($dadosAlt) ? $dadosAlt['cpf'] : '' ?>" name="cpf" type="text" class="form-control cpf" placeholder="seu cpf" required>
                            </div>
                            <div class="form-group">
                              <label> Senha </label>
                              <input value="<?php echo isset($dadosAlt) ? $dadosAlt['senha'] : '' ?>" name="senha" type="password" class="form-control" placeholder="Senha" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-form">Cadastrar</button>
                            <button type="reset" class="btn btn-outline-danger btn-form">Limpar</button>
                          </form>
                    </div>
                    <div class="col-md card">
                        <h3>Listagem</h3>
                        <table class="table" id="tabela">
                            <thead>
                              <!-- Colunas -->
                              <tr>  
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Opções</th>
                              </tr>
                            </thead>
                            <!-- Informações da tabela -->
                            <tbody>

                              <?php
                                // SQL seleciona todos os usuários da tabela do banco de dados
                                $sql = "SELECT * FROM usuario";
                                $resultado = mysqli_query($conexao, $sql);

                                // o while fica a todo momento adicionando cada linha de cada usuário do banco de dados até terminar(looping)
                                // em $coluna tem as seguintes informações(id, nome, cpf, senha)
                                while ($colunas = mysqli_fetch_assoc($resultado)){
                              ?>
                              <tr>
                                <th scope="row"> <?php echo $colunas['id'] ?> </th>
                                <td> <?php echo $colunas['nome'] ?> </td>
                                <td> <?php echo $colunas['cpf'] ?> </td>
                                <td> 
                                  <a href="principal.php?idAlt=<?= $colunas['id'] ?>"><i class="fa-regular fa-pen-to-square mr-10"></i></a>
                                  <a href="<?php echo './usuario/excluir.php?id='.$colunas['id'] ?>"><i class="fa-regular fa-trash-can" style="color: #f21818;"></i></a>
                               </td>
                              </tr>

                              <?php } ?>

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Tabela -->
      <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
      <!-- J QuaryMask -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- JavaScript -->
      <script src="./recursos/script.js"></script>
</body>
</html>