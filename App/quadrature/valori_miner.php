<?php
	include '../../Classes/DBM.php';
	include '../../Classes/Quadrature.php';
	
	

	$Vfs2niaige2t = json_decode($_REQUEST['model']);
	if($Vfs2niaige2t->ambo == 'uniti')
	{
		$Vv02uoebc004 = array('1-2','1-5','2-3','3-4','4-5');
		$Vuvnz2ge1d1y = false;
	}
	else
	{
		$Vv02uoebc004 = array('1-3','1-4','2-4','2-5','3-5');
		$Vuvnz2ge1d1y = true;
	}
	
	$Vwvjd4q4sfbo = new Quadrature($Vfs2niaige2t->year, $Vv02uoebc004, $Vfs2niaige2t->tripla, $Vuvnz2ge1d1y);
	$V1riot0zwstj = $Vwvjd4q4sfbo->getQuadrature();
	if(count($V1riot0zwstj["destroso"]) == 0)
		$V1riot0zwstj["destroso"][] = array(
			"ruota_1" 		=> '-/-',
			"distanza_1" 	=> '-/-',
			"val1_1" 		=> '-/-',
			"val2_1" 		=> '-/-',
			"trip_1" 		=> '-/-',
			"somma_1" 		=> '-/-',
			"estrazione_1"	=> '-/-',
			"data_1"		=> '-/-',
			
			"ruota_2" 		=> '-/-',
			"distanza_2"	=> '-/-',
			"val1_2" 		=> '-/-',
			"val2_2" 		=> '-/-',
			"trip_2" 		=> '-/-',
			"somma_2" 		=> '-/-',
			"estrazione_2" 	=> '-/-',
			"data_2" 		=> '-/-',
			
			"somma_comune" 	=> '-/-',
			"somma_diag_1" => '-/-',
			"somma_diag_2" => '-/-',
			"raddoppio_somma_comune" => '-/-',
			
			"diagonale" => '-/-',
			
			"sopra" => '-/-',
			"destra" => '-/-',
			"sotto" => '-/-',
			"sinistra" =>'-/-'
		);
		
	if(count($V1riot0zwstj["sinistroso"]) == 0)
		$V1riot0zwstj["sinistroso"][] = array(
			"ruota_1" 		=> '-/-',
			"distanza_1" 	=> '-/-',
			"val1_1" 		=> '-/-',
			"val2_1" 		=> '-/-',
			"trip_1" 		=> '-/-',
			"somma_1" 		=> '-/-',
			"estrazione_1"	=> '-/-',
			"data_1"		=> '-/-',
			
			"ruota_2" 		=> '-/-',
			"distanza_2"	=> '-/-',
			"val1_2" 		=> '-/-',
			"val2_2" 		=> '-/-',
			"trip_2" 		=> '-/-',
			"somma_2" 		=> '-/-',
			"estrazione_2" 	=> '-/-',
			"data_2" 		=> '-/-',
			
			"somma_comune" 	=> '-/-',
			"somma_diag_1" => '-/-',
			"somma_diag_2" => '-/-',
			"raddoppio_somma_comune" => '-/-',
			
			"diagonale" => '-/-',
			
			"sopra" => '-/-',
			"destra" => '-/-',
			"sotto" => '-/-',
			"sinistra" =>'-/-'
		);
	
	echo json_encode($V1riot0zwstj);
?>