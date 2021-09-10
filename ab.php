<?php 

for ($x=1; $x < 100 ; $x++) { 
	if ($x == 10) {
		goto desvio;

		echo "<br/>".$x;
	}

	desvio:
	echo "<br/> Pronto, aqui esta o desvio.";

}

 ?>


<?php 

for ($g=1; $g <= 100 ; $g++) { 
	if ($g % 2 == 0) {
		continue;
	}
	echo "<br/>".$g;
}

 ?>


 <?php 

 	function somaValor(){	//assinatura, só é possivel usar do jeito que esta- CRIANDO A FUNÇÃO
		$num1 = 10;
		$num2 = 15;

		$resp = num1+num2;

		echo "A soma é ".$resp;
 	}
		somaValor();	//executando a função

 	 ?>


 	  <?php 
 	  //criando a função
 	function somaValor($num1,$num2){	//A ASSINATURA DIZ QUE QUANDO FOR USAR ESSA FUNÇÃO, TEM QUE OBRIGARIAMENTE, PASSAR DOIS VALORES (PODERIA INSERIR UM TEXTO-CONCATENAR)

		$resp = num1+num2;

		echo "A soma é ".$resp;
 	}
 	
 		$valor1 = 10;
 		$valor2=15;
		somaValor($valor1,$valor2);	//executando a função

 	 ?>

	public void somaValor(){

	}

