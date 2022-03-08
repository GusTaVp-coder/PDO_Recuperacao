<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário de Cadastro de Produtos</title>
</head>

<body>
    <div class="container col-6">
        <fieldset>
            <legend>Cadastro de Produtos</legend>
            <form action="./produto.register.php" method="post">
                <div class="form-group mb-3">
                    <label for="nomepro" class="form-label">Nome:</label>
                    <input class="form-control" type="text" name="txtNomeProduto" id="nomepro" placeholder="Informe o nome do produto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cod" class="form-label">Código:</label>
                    <input class="form-control" type="text" name="txtCodProduto" id="cod" placeholder="Informe o código do produto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input class="form-control" type="text" name="txtPrecoProduto" id="preco" placeholder="Informe o preço do produto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="qtd" class="form-label">Quantidade:</label>
                    <input class="form-control" type="text" name="txtQtdProduto" id="qtd" placeholder="Informe a quantidade do produto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input class="form-control" type="text" name="txtMarcaProduto" id="marca" placeholder="Informe a marca do produto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nmrpro" class="form-label">Número de Série:</label>
                    <input class="form-control" type="text" name="txtNumeroProduto" id="nmrpro" placeholder="Número de série do produto" required>
                </div>
                <button class="btn btn-success" type="submit">Cadastrar Produto</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>