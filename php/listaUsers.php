<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/descarregar.ico">
    <meta name="description" content="Férias Low Cost - Encontre as melhores ofertas de férias a preços acessíveis.">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Férias Low Cost</title>
</head>
<body>
    <header> <!-- Topo da página-->
        <div id="topo">
            <div id="logo"><img src="../img/descarregar.png"></div>
            <div id="slogan"><p>As melhores ofertas de férias a preços imbatíveis!</p></div>    
        </div>
<!-- menu de navegação -->
<div id="menu">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- Centro: marca + links -->
      <div class="d-flex flex-grow-1 justify-content-center align-items-center">
        <a class="navbar-brand" href="../index.html">Home</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav d-flex align-items-center" style="gap: 20px;">
            <li class="nav-item">
              <a class="nav-link" href="../html/praia.html">Férias de Verão</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/neve.html">Férias de Inverno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/viagem.html">Férias em Viagem</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mostra Utilizadores Registados</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Direita: pesquisa + ícone -->
      <div class="d-flex align-items-center" style="gap: 20px;">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="../html/regista.html" class="nav-link">
          <i class="fa fa-user" style="font-size: 20pt; color: rgba(17, 128, 12, 0.8);"></i>
        </a>
      </div>
    </div>
  </nav>
</div>
    </header>
<main>
    <table class="table table-dark table-striped">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Morada</th>
            <th>Código Postal</th>
            <th>Concelho</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            include 'ligaBD.php';
            $query = "SELECT * FROM utilizadores";
            $resultado = mysqli_query($liga, $query);
            if (mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td><?php echo $row['id_utilizador']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['apelido']; ?></td>
                        <td><?php echo $row['morada']; ?></td>
                        <td><?php echo $row['codpost']; ?></td>
                        <td><?php echo $row['concelho']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php 
                }
            }else{
                echo "<tr><td colspan='7'>Não existem registos na base de dados.</td></tr>";
            }

?>
</tbody>
    </table>
</main>
<footer>
        <div id="rodape">
            <p class="rodas">© 2023 Férias Low Cost. Todos os direitos reservados.<br>Desenvolvido por Bruno Carvalho &reg; TI931 - Julho 2025</p>
        </div>
    </footer>
</body>
</html>