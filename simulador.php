<?php
	
	 echo date('d/m/Y');
	 echo"<br>";
	 $dias = 1;
	 echo date('d/m/Y', strtotime('+'. $dias .' days', strtotime('22-04-1989')));
	 
	 
	 class Lotes 
	{
		 public $idade_semana; 
		 public $producao_ave_semana;
		 public $consumo_ave_semana;
		 public $mortalidade_ave_semana;
		 
		 public function __construct(){
			
			 $this->idade_semana = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90); 
			 
			 $this->producao_ave_semana = array(
			 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,
			 0.1,0.3,0.6,0.8,0.9,0.91,0.92,0.93,
			 0.94,0.95,0.95,0.95,0.95,0.95,0.94,
			 0.94,0.94,0.94,0.93,0.93,0.93,0.93,
			 0.92,0.92,0.92,0.92,0.91,0.91,0.91,0.91,
			 0.9,0.9,0.89,0.89,0.89,0.88,0.88,
			 0.87,0.87,0.87,0.86,0.86,0.85,0.85,0.85,
			 0.84,0.84,0.83,0.83,0.83,0.82,0.82,
			 0.81,0.81,0.8,0.8,0.79,0.78,0.77,0.76,
			 0.75,0.74,0.73,0.72,0.72,0.72,0.72,0.72,
			 0.71,0.71,0.71,0.71,0.7);
			
			
		}
	}
	
	$lote = new Lotes();
	
	for($i=0; $i<count($lote->producao_ave_semana);$i++)
	{
		
		echo"<br> ". ($i+1). " - " . $lote->producao_ave_semana[$i];
	}
	
?>





