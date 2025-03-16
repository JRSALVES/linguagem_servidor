<?php
require_once 'Exemplo4_Colaborador.php';
 class RegistroFuncional extends Colaborador
{
private $numerCarteiraProfissional;
private $valorDaRenumeracao;
private $dataAdmissao;
/* metodo construtor */

public function __construct( $nomeColaborador, $ender, $numeroFuncional) {
	parent::__construct($nomeColaborador, $ender, $numeroFuncional);}
    
public function getNumerCarteiraProfissional() {
	return $this->numerCarteiraProfissional;
}
public function setNumerCarteiraProfissional($numeroFuncional) {
	$this->numerCarteiraProfissional = $numeroFuncional;
}
public function getValorDaRenumeracao() {
	return $this->valorDaRenumeracao;
}
public function setValorDaRenumeracao($valorDaRenumeracao) {
	$this->valorDaRenumeracao = $valorDaRenumeracao;
}
public function getDataAdmissao() {
	return $this->dataAdmissao;
}
public function setDataAdmissao($dataAdmissao) {
	$dataAdmissao = dataAdmissao;
}
public function gerarRecibo($dia, $mes, $ano) {
	echo("<br>*--------------------------------------*");
	echo("<br>*            Recibo de Pagamento       *");
	echo("<br>*--------------------------------------*");
	
	echo "<br>Eu, ", parent::getNomeColaborador(), " - Numero de registro " , parent::getNumeroFuncional();
    echo "<br>Portador da carteira profissional numero ", $this->getNumerCarteiraProfissional();
	echo"<br>declaro que recebi o valor de R$ ", $this->getValorDaRenumeracao();
	echo"<br>referente ao meu pagamento, no dia ", $dia,"/",$mes,"/",$ano;
}
}	
?>