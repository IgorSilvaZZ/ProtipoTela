<?php

class Pessoa{
    private $idPessoa;
    private $nomePessoa;
    private $representante;
    private $interesse;
    private $valorPedido;
    private $ontatoPessoa;
    private $telefone;
    private $telefone2;
    private $telefoneCelular;
    private $fax;
    private $email;
    private $email2;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $nascimento;
    private $sexo;
    private $cpf;
    private $estadoCivil;
    private $cargo;




    public function getIdPessoa(){
        return $this->idPessoa;
    }
    public function getNomePessoa(){
        return $this->nomePessoa;
    }
    public function getRepresentante(){
        return $this->representante;
    }
    public function getInteresse(){
        return $this->interesse;
    }
    public function getvalorPedido(){
        return $this->valorPedido;
    }
    public function getcontatoPessoa(){
        return $this->contatoPessoa;
    }
    public function getTelefone (){
        return $this->telefone;
    }
    public function getTelefone2(){
        return $this->telefone2;
    }
    public function getTelefoneCelular (){
        return $this->telefoneCelular;
    }
    public function getFax (){
        return $this->fax;
    }
    public function getEmail (){
        return $this->email;
    }
    public function getEmail2 (){
        return $this->email2;
    }
    public function getEndereco (){
        return $this->endereco;
    }
    public function getBairro (){
        return $this->bairro;
    }
    public function getCidade (){
        return $this->cidade;
    }
    public function getUf (){
        return $this->uf;
    }
    public function getCep (){
        return $this->cep;
    }
    public function getNascimento (){
        return $this->nascimento;
    }
    public function getSexo (){
        return $this->sexo;
    }
    public function getCpf (){
        return $this->cpf;
    }
    public function getEstadocivil (){
        return $this->estadoCivil;
    }
    public function getCargo (){
        return $this->cargo;
    }


    public function setIdPessoa($idPessoa){
        return $this->idPessoa = $idPessoa;
    }
    public function setNomePessoa($nomePessoa){
        return $this->nomePessoa = $nomePessoa;
    }
    public function setRepresentante($representante){
        return $this->representante = $representante;
    }
    public function setInteresse($interesse){
        return $this->interesse =  $interesse;
    }
    public function setvalorPedido($valorPedido){
        return $this->valorPedido = $valorPedido;
    }
    public function setcontatoPessoa($contatoPessoa){
        return $this->contatoPessoa = $contatoPessoa;
    }
    public function setTelefone ($telefone){
        return $this->telefone = $telefone;
    }
    public function setTelefone2($telefone2){
        return $this->telefone2 = $telefone2;
    }
    public function setTelefoneCelular ($telefoneCelular){
        return $this->telefoneCelular = $telefoneCelular;
    }
    public function setFax ($fax){
        return $this->fax = $fax;
    }
    public function setEmail ($email){
        return $this->email = $email;
    }
    public function setEmail2 ($email2){
        return $this->email2 = $email2;
    }
    public function setEndereco ($email2){
        return $this->endereco = $email2;
    }
    public function setBairro ($bairro){
        return $this->bairro = $bairro;
    }
    public function setCidade ($cidade){
        return $this->cidade = $cidade;
    }
    public function setUf ($uf){
        return $this->uf = $uf;
    }
    public function setCep ($cep){
        return $this->cep = $cep;
    }
    public function setNascimento ($nascimento){
        return $this->nascimento = $nascimento;
    }
    public function setSexo ($sexo){
        return $this->sexo = $sexo;
    }
    public function setCpf ($cpf){
        return $this->cpf = $cpf;
    }
    public function setEstadocivil ($estadoCivil){
        return $this->estadoCivil = $estadoCivil;
    }
    public function setCargo ($cargo){
        return $this->cargo = $cargo;
    }


    public function cadastrar($pessoa){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "insert into tbpessoa (nomePessoa, representante, 
                        interesse, valorPedido, contatoPessoa, telefone,
                        telefone2, telefoneCelular,fax, email, email2, endereco,
                        bairro, cidade, uf, cep, nascimento, sexo, cpf, estadoCivil,
                        cargo)
                        values ('".$pessoa->getNomePessoa()."',
                        '".$pessoa->getRepresentante()."',
                        '".$pessoa->getInteresse()."',
                        '".$pessoa->getvalorPedido()."',
                        '".$pessoa->getcontatoPessoa()."',
                        '".$pessoa->getTelefone()."',
                        '".$pessoa->getTelefone2()."',
                        '".$pessoa->getTelefoneCelular()."',
                        '".$pessoa->getFax()."',
                        '".$pessoa->getEmail()."',
                        '".$pessoa->getEmail2()."',
                        '".$pessoa->getEndereco()."',
                        '".$pessoa->getBairro()."',
                        '".$pessoa->getCidade()."',
                        '".$pessoa->getUf()."',
                        '".$pessoa->getCep()."',
                        '".$pessoa->getNascimento()."',
                        '".$pessoa->getSexo()."',
                        '".$pessoa->getCpf()."',
                        '".$pessoa->getEstadocivil()."',
                        '".$pessoa->getCargo()."')";                
        $conexao->exec($queryInsert);
        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idpessoa, nomePessoa, representante, 
        interesse, valorPedido, contatoPessoa, telefone,
        telefone2, telefoneCelular,fax, email, email2, endereco,
        bairro, cidade, uf, cep, nascimento, sexo, cpf, estadoCivil,
        cargo       
        from tbpessoa";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public function listarPessoa($pessoa){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idPessoa, nomePessoa, representante, 
                        interesse, valorPedido, contatoPessoa, telefone,
                        telefone2, telefoneCelular,fax, email, email2, endereco,
                        bairro, cidade, uf, cep, nascimento, sexo, cpf, estadoCivil,
                        cargo
                        from tbpessoa
                        where idPessoa = ".$pessoa->getIdPessoa();
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            $pessoa->setNomePessoa  ($linha['nomePessoa']);
            $pessoa->setRepresentante  ($linha['representante']);
            $pessoa->setInteresse  ($linha['interesse']);
            $pessoa->setvalorPedido  ($linha['valorPedido']);
            $pessoa->setcontatoPessoa  ($linha['contatoPessoa']);
            $pessoa->setTelefone  ($linha['telefone']);
            $pessoa->setTelefone2  ($linha['telefone2']);
            $pessoa->setTelefoneCelular  ($linha['telefoneCelular']);
            $pessoa->setFax  ($linha['fax']);
            $pessoa->setEmail  ($linha['email']);
            $pessoa->setEmail2  ($linha['email2']);
            $pessoa->setEndereco  ($linha['endereco']);
            $pessoa->setBairro  ($linha['bairro']);
            $pessoa->setCidade  ($linha['cidade']);
            $pessoa->setUf  ($linha['uf']);
            $pessoa->setCep  ($linha['cep']);
            $pessoa->setNascimento  ($linha['nascimento']);
            $pessoa->setSexo  ($linha['sexo']);
            $pessoa->setCpf  ($linha['cpf']);
            $pessoa->setEstadocivil  ($linha['estadoCivil']);
            $pessoa->setCargo  ($linha['cargo']);
            $pessoa->cadastrar($pessoa);
        }
        return $pessoa;   
    }
}
