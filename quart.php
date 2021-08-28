<?php 

print "Usando print para exibir na tela <br/>";

$data = "20 de agosto de 2020";
$salario = 850.00;
$cargo = "Estagiário";

echo "Arquivo criado em $data <br/>";

printf("Salario minimo: R$%.2f <br/>", $salario);

$texto = sprintf("%s recebe R$%.2f por mês", $cargo, $salario*2);
echo $texto;

 ?>

<?php 
$cor = "azul";
$cor_do_fundo = "amarelo";
$_cor = "vermelho";

$fundo = "azul";
$Fundo = "amarelo"
$FUNDO = "vermelho";

echo $fundo." - ".$Fundo." - ".$FUNDO."<br/>";

 ?>

<?php 
$nome = "Armandinho";

function exibirnome(){
	$nome = "Josefá";
	echo "Valor da variável dentro da função".$nome;
}
exibir ();
echo "<br/> Valor da variável fora da função".$nome;

 ?>

 <?php 
$ano = 2020;
function exibirAno($parametro){
	$parametro = $parametro + 4;
	return $parametro;
}
echo "Estamos em ".$ano." e daqui a 4 anos estaremos em ".exibirAno($ano);
  ?>

<?php 
$ano = 2020;

function exibirano(){
	GLOBAL $ano;
	$ano++;
	return $ano;
}
echo "<br/> Ano:  ".$ano;
echo "<br/> Ano:  ".exibir();
echo "<br/> Ano:  ".exibir();
echo "<br/> Ano:  ".exibir();
echo "<br/> Ano:  ".exibir();
 ?>

<?php 
function exibirestatica(){
	STATIC $ano;
	$ano++;
	echo "<br/>". $ano;
}
echo exibirEstatica();
echo exibirEstatica();
echo exibirEstatica();
 ?>
