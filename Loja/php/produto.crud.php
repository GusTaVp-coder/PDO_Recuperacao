<?php
    require_once('./conexao.php');
 
function addProduto($produto)
{
    try {
        $con = getConnection();
        $stmt = $con->prepare("INSERT INTO produto(nome, preco, quantidade_estoque, num_serie, codigo, marca) 
        VALUES (:nome, :codigo, :preco, :quantidade, :marca, :numeroserie)");
        $stmt->bindParam(":nome", $produto->nome);
        $stmt->bindParam(":codigo", $produto->codigo);
        $stmt->bindParam(":preco", $produto->preco);
        $stmt->bindParam(":quantidade", $produto->quantidade);
        $stmt->bindParam(":marca", $produto->marca);
        $stmt->bindParam(":numeroserie", $produto->numeroserie);
        if ($stmt->execute())
            echo "Aluno foi cadastrado com sucesso!";
    } catch (PDOException $error) {
        echo "Erro ao cadastrar esse aluno. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}