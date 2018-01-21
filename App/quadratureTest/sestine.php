  <?php
 
//include '../../Classes/DBM.php';
//include '../../Classes/Quadrature.php';

	
//$quadrature = file_get_contents('../../App/quadratureTest/valori_miner.php');
//
//$array = json_decode($quadrature);

	ini_set('memory_limit', '-1');
	include '../../Classes/DBM.php';
	include '../../Classes/Quadrature.php';
$db = new DBM();
        $sestinaObj= new stdClass;;
    $sestinaObj->esiti =0;
         $sestinaObj->esitiPositivi =0;
         $sestinaObj->esitiNegativi =0;
         $sestinaObj->terni =0;
         $sestinaObj->ambi =0;
         $sestinaObj->sestina = 0;
         $sestina->posizione = 0 ;   
$tripla = isset($_POST['tripla']) ? $_POST['tripla']: '';
$ambi = isset($_POST['ambi']) ? $_POST['ambi']: '';
$myYear = isset($_POST['anno']) ? $_POST['anno']: '';
$esiti = 0;
    $esitiPositivi = 0;
    $esitiNegativi = 0;
    $terni = 0;
$successive = true;	
$model= new stdClass;
$model->tripla = $tripla;
$model->ambo = $ambi;
$model->year = $myYear;
$model->ordine = 'destroso';
	$queryQuad = new Quadrature($model->year, '*', $model->tripla);
	$quadrature = $model->ordine == 'destroso' ? $queryQuad->getQuadratureDestroso() : $queryQuad->getQuadratureSinistroso();
        	
        $estrazioniAnno = getMaxEstrazioneYear($model->year, $db);
	$estrazioniAnnoPrec = getMaxEstrazioneYear($model->year-1, $db);

foreach($quadrature as $estraz){
    $quad = array(  $estraz['somma_1'],
                    $estraz['somma_2'], 
                    $estraz['somma_diag_1'], 
                    $estraz['somma_diag_2'], 
                    $estraz['somma_comune'],
                    $estraz['raddoppio_somma_comune']);

    $nBigEstraz = $estraz['estrazione_1'] > $estraz['estrazione_2'] ? 
                    $estraz['estrazione_1'] : 
                    $estraz['estrazione_2'];

    $ventiCinqueEstraz = getValoriEstratti($estraz['ruota_1'], $estraz['ruota_2'], $model->year, $nBigEstraz, $estrazioniAnno, $estrazioniAnnoPrec, $db);
    
    $Vlbjre5r3aqo = isMyComposition($ventiCinqueEstraz, $quad, $successive=true);
    

                        
                        
}

function getMaxEstrazioneYear($Vzkdzprmnhzz, $Vtppv1qqczva)
	{
		$Vlbjre5r3aqo = $Vtppv1qqczva->read("SELECT MAX(estrazione) as 'myMax' FROM year" . $Vzkdzprmnhzz);
		return isset($Vlbjre5r3aqo[0]) ? $Vlbjre5r3aqo[0]['myMax'] : 0;
	}
	


function addOccurenceComp($quad, $sestina, $estraz)
{
    
    
        for($i=0; $i<6; $i++){
                foreach($estraz as $singola){
                        if($quad[$i] == $singola)
                        {
                            $sestina[$i]++;
                                                       
                        }    
                }     
        }
      
                
              
}

function checkSestina($sestina, $quad, $posizione, $estraz)
{
    $countAmbi = 0;
     $countTerni = 0;
      
       
    for($i=0; $i<6; $i++)
    {
        foreach($estraz as $singola){
            if($quad[i] == $singola)
            {
                $countAmbi++;
                $countTerni++;
                
            }
        }
    }
     $esiti++;
    if($countTerni == 3)
    {
        
        $esitiPositivi++;
        $terni++;
    }
    else if($countAmbi == 2)
    {
        $esitiPositivi++;
        $ambi++;
    }

   
         $sestinaObj->esiti = $esiti;
         $sestinaObj->esitiPositivi = $esitiPositivi;
         $sestinaObj->esitiNegativi = $esitiNegativi;
         $sestinaObj->terni = $terni;
         $sestinaObj->ambi = $ambi;
         $sestinaObj->sestina = $sestina;
         $sestina->posizione = $posizione ;   
   return $sestinaObj;               
}

function contaColpa(){
     for($i=0; $i<6; $i++){
                foreach($estraz as $singola){
                        if($quad[$i] == $singola)
                        {
                            $sestina[$i]++;
                                                       
                        }    
                }     
        }
      
                   
}

function isMyComposition($ventiCinqueEstraz, $quad, $successive){


//    if(count($ventiCinqueEstraz) <= 25) return false;	
    $sestina = array(0,0,0,0,0,0);
$colpi = 0;

    for($i=0; $i<25; $i++){//NON FUNZIONA
        addOccurenceComp($quad, $sestina, array(     $ventiCinqueEstraz[$i],
                                                        $ventiCinqueEstraz[$i],
                                                        $ventiCinqueEstraz[$i],
                                                        $ventiCinqueEstraz[$i],
                                                        $ventiCinqueEstraz[$i]));
  
    
      if($sestinaObj->terni == 0)
      {
                $colpi++;
                $sestinaObj->colpi = $colpi;
      }
      }
    

}
/*
    foreach($sestina as $valore)
    {
            foreach($composizioni as $composizione => $comp)
            {
                    if($comp === $valore)
                    {
                            unset($composizioni[$composizione]);
                            break;
                    }
            }
            if(!count($composizioni))
            {	
                    return $sestina;
            }
    }

    return false;
}*/

function getValoriEstratti($Vjhqqhgfyiag, $Vkcfgrcfdwa5, $Vzkdzprmnhzz, $Vdbkqgspzztj, $Vbexasm3f1c0, $Vc12haoiuusd, $db)
	{
		$Voungjt1lyll = array();
		$Vyxqyeyyweu4 = $Vdbkqgspzztj + 25;
		$Vhr02kzwb2rk = $Vdbkqgspzztj - 24;
		
		if(($Vyxqyeyyweu4 <= $Vbexasm3f1c0) && ($Vhr02kzwb2rk >= 1))
			$V3uzfc1u1jkg = "SELECT * FROM year$Vzkdzprmnhzz WHERE estrazione >= $Vhr02kzwb2rk AND estrazione <= $Vyxqyeyyweu4 ORDER BY estrazione";
		else if(($Vyxqyeyyweu4 > $Vbexasm3f1c0))
			$V3uzfc1u1jkg = "SELECT *, 'id1' OrderKey FROM year$Vzkdzprmnhzz WHERE estrazione >= $Vhr02kzwb2rk UNION SELECT *, 'id2' OrderKey FROM year" . ($Vzkdzprmnhzz+1) . " WHERE estrazione <= " . ($Vyxqyeyyweu4 - $Vbexasm3f1c0) . " ORDER BY OrderKey, estrazione";
		else if(($Vhr02kzwb2rk < 1))
			$V3uzfc1u1jkg = "SELECT *, 'id1' OrderKey FROM year". ($Vzkdzprmnhzz-1) ." WHERE estrazione >= ". ($Vc12haoiuusd - abs($Vhr02kzwb2rk)) ." UNION SELECT *, 'id2' OrderKey FROM year$Vzkdzprmnhzz WHERE estrazione <= $Vyxqyeyyweu4 ORDER BY OrderKey, estrazione";
		else
			die("Errore getValoriEstratti");
		
		$Vlbjre5r3aqo = $db->read($V3uzfc1u1jkg);
		$V3fceidmdbsb = $V0hs02vbbzd4 = 0;
		$Voungjt1lyll[0] = $Voungjt1lyll[1] = array();
		
		foreach($Vlbjre5r3aqo as $V05a0cmbwbwq)
		{
			$VkxbfwlelranRuote = json_decode($V05a0cmbwbwq['valori'], true);
			while ($Vm1my3thfa0yori = current($VkxbfwlelranRuote))
			{
				if(key($VkxbfwlelranRuote) == $Vjhqqhgfyiag)
				{
					$Vftwmde4tnzi = explode('.', $Vm1my3thfa0yori);
					$Voungjt1lyll[0][$V3fceidmdbsb]["estrazione"] = $V05a0cmbwbwq['estrazione'];
					$Voungjt1lyll[0][$V3fceidmdbsb]["data"] = $V05a0cmbwbwq['data'];
					$Voungjt1lyll[0][$V3fceidmdbsb]["luogo"] = $Vjhqqhgfyiag;
					$Voungjt1lyll[0][$V3fceidmdbsb]["uno"] = $Vftwmde4tnzi[0];
					$Voungjt1lyll[0][$V3fceidmdbsb]["due"] = $Vftwmde4tnzi[1];
					$Voungjt1lyll[0][$V3fceidmdbsb]["tre"] = $Vftwmde4tnzi[2];
					$Voungjt1lyll[0][$V3fceidmdbsb]["quattro"] = $Vftwmde4tnzi[3];
					$Voungjt1lyll[0][$V3fceidmdbsb]["cinque"] = $Vftwmde4tnzi[4];
					$V3fceidmdbsb++;
				}
				else if(key($VkxbfwlelranRuote) == $Vkcfgrcfdwa5)
				{
					$Vftwmde4tnzi = explode('.', $Vm1my3thfa0yori);
					$Voungjt1lyll[1][$V0hs02vbbzd4]["estrazione"] = $V05a0cmbwbwq['estrazione'];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["data"] = $V05a0cmbwbwq['data'];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["luogo"] = $Vkcfgrcfdwa5;
					$Voungjt1lyll[1][$V0hs02vbbzd4]["uno"] = $Vftwmde4tnzi[0];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["due"] = $Vftwmde4tnzi[1];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["tre"] = $Vftwmde4tnzi[2];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["quattro"] = $Vftwmde4tnzi[3];
					$Voungjt1lyll[1][$V0hs02vbbzd4]["cinque"] = $Vftwmde4tnzi[4];
					$V0hs02vbbzd4++;
				}
				next($VkxbfwlelranRuote);
			}
		}
		return $Voungjt1lyll;
	}
	





//$qudrature =  
//$dbm = new DBM();
//$x_pag = 1;
//$tripla = isset($_POST['tripla']) ? $_POST['tripla']: '';
//$ambi = isset($_POST['ambi']) ? $_POST['ambi']: '';
//$pag = isset($_GET['actual']) ? $_GET['actual'] : 1;
//
//// Controllo se $pag è valorizzato e se è numerico
//// ...in caso contrario gli assegno valore 1
//if (!$pag || !is_numeric($pag)) $pag = 1; 
//
//$myYear = isset($_POST['anno']) ? $_POST['anno']: '';
//
//if($ambi == 'uniti')
//   $query = $dbm->read("SELECT count(*) as righe FROM quad$myYear where tripla = '$tripla' "
//            . "and (distanza = '1-2' or distanza = '1-5' or distanza = '2-3' or distanza = '3-4' or distanza = '4-5')");
//
//$all_rows = "";
//	
//foreach($query as $row)
//{
//    $all_rows = $row['righe'];	
//}        
//
//
//
//	
//$output = $dbm->read("SELECT * FROM quad$myYear where tripla = '$tripla' "
//            . "and (distanza = '1-2' or distanza = '1-5' or distanza = '2-3' or distanza = '3-4' or distanza = '4-5')");
//
//	$quad = [];
//$all_pages = 0;
//
//
//
//
//
//
//
//
//$first = ($pag - 1) * $x_pag;	
//  getSestina($output,$myYear);
// // echo json_encode($quad);
//
//function getSestina($output,$myYear)
//{ $dbm = new DBM();
//	$dbm->write("DELETE FROM sest$myYear");
//for($i = 0; $i < count($output); $i++)
//{
//   $val1= $output[$i]['val1'];
//   $val2 =  $output[$i]['val2'];   
//	for($j = 1; $j <= count($output); $j++)
//	{
//            
//            if($output[$i]['estrazione'] != $output[$j]['estrazione'])
//            {
//		$val3 = $output[$j]['val1'];
//		$val4 = $output[$j]['val2'];
//		$temp1 = $output[$i]['val1'] + $val3;
//		 if ($temp1 > 90)  $temp1 = $temp1 - 90;
//		
//		$temp2 = $output[$i]['val2'] + $val4 ;
//		 if ($temp2 > 90)  $temp2 = $temp2 - 90;
//		
//		if($temp1 == $temp2)
//		{
//			$oriz1 = $val1+$val2;  
//                          if ($oriz1 > 90)  $oriz1 = $oriz1 - 90;
//			$oriz2 = $val3+$val4;  
//                          if ($oriz2 > 90)  $oriz2 = $oriz2 - 90;			
//			$diag1 = $val1 + $val4; 
//                          if ($diag1 > 90)  $diag1 = $diag1 - 90;
//			$diag2 = $val2 + $val3; 
//                          if ($diag2 > 90)  $diag2 = $diag2 - 90;
//                        $ultiSest = $diag1+$diag2;  
//                          if ($ultiSest > 90)  $ultiSest = $ultiSest - 90;
//                       
//                       
//                         
//                        $dbm->write("INSERT INTO sest$myYear VALUES($oriz1,$oriz2, $temp1, $ultiSest, $diag1, $diag2)");
//		}
//            }	
//	}
//}
//}
 
