<?php
echo '<h1>Funções</h1>';
echo '<p>
Em termos simples, uma função é um trecho de código que realiza uma tarefa. É uma boa prática escrever nossas funções de forma que cada uma execute uma e apenas uma tarefa. Para criar uma função em PHP, usamos a seguinte sintaxe:
</p>';

echo '<pre>
function nome_da_minha_funcao($arg1, $arg2, …, $argn){
    comandos;
    return expressão; // opcional
}
</pre>';

echo '<p>
O processo de executar uma função também é conhecido como chamada de função. Uma função pode ser chamada no nosso programa quantas vezes quisermos.
</p>';

echo '<p>
Vamos por partes, começando com exemplos simples e introduzindo os mais complexos aos poucos. Primeiramente, vamos definir uma função que simplesmente diz “Olá mundo”:
</p>';

echo "<pre>function dizer_ola_mundo() {
	echo 'Olá mundo';
	}

	dizer_ola_mundo();
	dizer_ola_mundo();
	dizer_ola_mundo();
</pre>";

echo '<p>
a saída do comando acima será: <br><br>
Olá mundo<br>
Olá mundo<br>
Olá mundo<br><br>

pois a função dizer_ola_mundo() foi chamda tres veses.

</p>';
?>

<?php
echo '<h1>Argumento</h1>';

echo '<p>Toda função pode receber valores. Esses valores são chamados de argumentos. Veja, por exemplo, a função date que usamos antes:
<pre>date("Y")</pre>;
</p>';

echo '<p>
Estamos chamando a função passando um único argumento: a string contendo o caractere “Y”. Para receber esses argumentos, temos que definir as variáveis que serão usadas para guardá-los. Damos a essas variáveis o nome de parâmetros. Veja o exemplo a seguir:
<pre>
function dizer_ola($nome){
	echo "Olá, $nome!<br>";
}
dizer_ola("aluno");
dizer_ola("professor");
dizer_ola("João");
</pre>
</p>';

echo '<p>A saída da finção acima será: <br><br>
Olá aluno!<br>
Olá professor!<br>
Olá João!
</p>';

echo '<h1>Passagem por prâmetro e por valor</h1>';

echo '<p>Exemplos cod_4</p>';


echo '<h1>Funções recursivas</h1>';
echo '<p>Exemplos cod_5</p>';

?>