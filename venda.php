<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css-->
     <link rel="stylesheet" href="./recursos/venda.css">
    <!-- TabelaJS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fontawasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Logo do site -->
    <link rel="shortcut icon" type="imagex/png" href="./assets/logo-oficial.svg">
    <title>Sitema Venda+</title>
</head>
<body>
     <div class="container">
        <br>
        <div class="row ">
            <div class="col-md-8">
                <h3>Tela de Venda</h3>
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="">Produto</label>
                            <select class="form-control" name="" id="">
                                <option value="">Mouse</option>
                                <option value="">Teclado</option>
                                <option value="">Celular</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label for="">Quantidade</label>
                            <input type="number" required class="form-control"/>
                        </div>

                        <div class=" col">
                            <button type="submit" class="btn btn-primary" style="margin-top: 32px;"> <i class="fa-solid fa-plus"></i></button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-sm table-striped  mt-4">
                                <thead class="table-secondary">
                                    <th class="col-6"> Produto </th>
                                    <th class="col-1"> Quantidade </th>
                                    <th class="col-2 "> Valor </th>
                                    <th class="col-2"> Total </th>
                                    <th class="col-1"> Opções</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mouse </td>
                                        <td> 2 </td>
                                        <td> 20 </td>
                                        <td> 40 </td>
                                        <td> <a href="#"><i class="fa-solid fa-circle-minus" style="color: #f21818;"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td>Mouse </td>
                                        <td> 2 </td>
                                        <td> 20 </td>
                                        <td> 40 </td>
                                        <td> <a href="#"><i class="fa-solid fa-circle-minus" style="color: #f21818;"></i></a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h3> Resumo da Venda </h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""> Cliente </label>
                        <select name="" id="" class="form-control">
                            <option> João </option>
                            <option> Aline </option>
                            <option> Pedro</option>
                            <option> Alice</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for=""> Funcionário </label>
                        <select class="form-control" name="" id="">
                            <option value=""> Cleusa </option>
                            <option value=""> Julia </option>
                            <option value=""> Pablo </option>
                            <option value=""> Juliano </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for=""> Quantidade Total</label>
                        <input type="text" value="2" readonly class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""> Valor Total</label>
                        <input type="text" value="40" readonly class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""> Observações</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>

                    <a href="#" class="btn btn-success"> Finalizar </a>
                    <a href="#" class="btn btn-outline-danger"> Cancelar</a>
                </form>
            </div>
        </div>
     </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>