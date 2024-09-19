<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css links -->
    <link rel="stylesheet" href="./recursos/particle.css">
    <link rel="stylesheet" href="./recursos/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sitema Venda+</title>
    <!-- logo: <i class="fa-solid fa-store"></i><i class="fa-solid fa-plus"></i> -->
</head>
<body>
    
    <div class="painel">
        <form>
            <h3>LOGIN</h3>
            <h5> Seja bem vindo ao sitema! Insira suas informações.</h5>
            <div class="form-group">
              <label class="painel-label-texto"><i class="fa-solid fa-user"> </i> CPF </label>
              <input type="text" class="form-control" placeholder="000.000.000-00">
            </div>
            <div class="form-group">
              <label class="painel-label-texto"><i class="fa-solid fa-lock"> </i> Senha </label>
              <input type="password" class="form-control" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary btn-form">Login</button>
            <a class="btn bg-dark " href="./principal.php"></a>
        </form>
    </div>

    <!-- particles.js container -->
    <div id="particles-js"></div> <!-- stats - count particles -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    
    <script src="./recursos/script.js"></script>
    <script src="./recursos/particle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>