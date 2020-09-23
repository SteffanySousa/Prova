<?php

abstract class Certidao
{
    protected $numeroRegistroCertidao;
    protected $nomePessoa;
    protected $nomeDeclarante;
    protected $tipoCertidao;
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;
    private $registro;
    

    public function __construct ($numeroRegistroCertidao, $nomePessoa,$nomeDeclarante, $tipoCertidao,$dataEmissao, $nomeTabeliao, $nomeCartorio)
    {
        $this->numeroRegistroCertidaoome = $numeroRegistroCertidao;
        $this->nomePessoa = $nomePessoa;
        $this->nomeDeclarante = $nomeDeclarante;
        $this->tipoCertidao = $tipoCertidao;
        $this->dataEmissao = $dataEmissao;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }


}