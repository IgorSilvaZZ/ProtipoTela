<?php

require_once 'global.php';

try{
    header('Location:index.php');
    $pessoa = new Pessoa();
    $pessoa->setNomePessoa($_POST['txtNome']);
    $pessoa->setRepresentante($_POST['txtRepresentante']);
    $pessoa->setInteresse($_POST['txtInteresse']);
    $pessoa->setvalorPedido($_POST['txtPedido']);
    $pessoa->setcontatoPessoa($_POST['txtContato']);
    $pessoa->setTelefone($_POST['txtTelefone']);
    $pessoa->setTelefone2($_POST['txtTelefone2']);
    $pessoa->setTelefoneCelular($_POST['txtCelular']);
    $pessoa->setFax($_POST['txtFax']);
    $pessoa->setEmail($_POST['txtEmail']);
    $pessoa->setEmail2($_POST['txtEmail2']);
    $pessoa->setEndereco($_POST['txtEndereco']);
    $pessoa->setBairro($_POST['txtBairro']);
    $pessoa->setCidade($_POST['txtCidade']);
    $pessoa->setUf($_POST['txtUf']);
    $pessoa->setCep($_POST['txtCep']);
    $pessoa->setNascimento($_POST['txtNasc']);
    $pessoa->setSexo($_POST['txtSexo']);
    $pessoa->setCpf($_POST['txtCpf']);
    $pessoa->setEstadocivil($_POST['txtCivil']);
    $pessoa->setCargo($_POST['txtCargo']); 
    $pessoa->cadastrar($pessoa);
}

catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

 ?>
