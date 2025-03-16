<?php 
class Colaborador{
  public $endereco;
  public $nomeColaborador;
  public $numeroFuncional;
//construtor da classe
  //function Usuario(){
    public function __construct( $nomeColaborador, $ender, $numeroFuncional) {
    
   
    $this->setEndereco($ender);
    $this->setNomeColaborador($nomeColaborador);
    $this->setNumeroFuncional($numeroFuncional);
  }

  public function getEndereco(){
    return $this->endereco;
  }
  public function getNomeColaborador(){
    return $this->nomeColaborador;
  }
  public function getNumeroFuncional(){
    return $this->numeroFuncional;
  }
  public function setNomeColaborador($nome) {
  $this->nomeColaborador = $nome;
  }
  public function setNumeroFuncional($numerFunc) {
  $this->numeroFuncional = $numerFunc;
  }
  public function setEndereco($ender) {
  $this->endereco = $ender;

  }
 public function mostraDadosDoColaborador() {
  echo("<br>*--------------------------------------*");
  echo("<br>*            Dados do Colaborador      *");
  echo("<br>*--------------------------------------*");
  echo"<br>Nome do Colaborador:",$this->getNomeColaborador();
  echo"<br>Identificação do Colaborador: ", $this->getNumeroFuncional();
  echo"<br>Endereço: ", $this->getEndereco();
  
}
}
?>