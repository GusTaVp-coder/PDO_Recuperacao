<?php
require_once('./produto.crud.php');

if($_POST['txtNomeProduto'] == NULL ||
   $_POST['txtCodProduto'] == NULL || 
   $_POST['txtPrecoProduto'] == NULL || 
   $_POST['txtQtdProduto'] == NULL || 
   $_POST['txtMarcaProduto'] == NULL || 
   $_POST['txtNumeroProduto'] == NULL){
	header('location: error.php?status=acess-deny');
	die();
}

$produto = new stdClass();
$produto->nome = $_POST['txtNomeProduto'];
$produto->codigo = $_POST['txtCodProduto'];
$produto->preco = $_POST['txtPrecoProduto'];
$produto->quantidade = $_POST['txtQtdProduto'];
$produto->marca = $_POST['txtMarcaProduto'];
$produto->numeroserie = $_POST['txtNumeroProduto'];
$register = addProduto($produto);

if(!$register){
        header("location: cadastrado.php?status=success");
        die();
}
header("location: error.php?status=fail");
die();