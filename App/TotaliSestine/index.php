<html>
<head>
	
    
    <!-- TEMPLATE -->
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="custom.css">
        
        <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="../js/jQuery.print.js"></script>
        <script type="text/javascript" src="script.js"></script>
    <!-- END TEMPLATE -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTTO</title>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">-->
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="../js/dhtmlxSuite_v451/skins/terrace/dhtmlx.css" />
</head>
<body>
     <div  class="container-fluid">
	<div id="header">
    	<img src="../img/back.png" class="btnBack" onClick="window.location.href = '..'">
        <div class="title">quadrature</div>
    </div>
    <!------------------------------------------------------------------->
   
    <div id="content" style="padding:20px">
    	
        <div id="HMI">
        	Seleziona Anno
            <select id="cmb_Year" class="selectCustom" style="margin-right: 100px">
				<?php
                for($i=date("Y"); $i>=1871; $i--)
                	echo '<option value="' . $i . '">' . $i . '</option>';
                ?>
            </select>
            Composizione
            <input type="text" id="txtSestina" class="TextboxCustom" style="display: none; margin-right: 100px">
            
            Ordine
            <select id="cmb_Ordine" class="selectCustom" style="margin-right: 100px">
                <option value="destroso">Destroso</option>
                <option value="sinistroso">Sinistroso</option>
            </select>
            
            Tripla
            <select id="cmb_Tripla" class="selectCustom">
                <option value="1-4-7">1-4-7</option>
                <option value="2-5-8">2-5-8</option>
                <option value="3-6-9">3-6-9</option>
            </select>
                        <input type="button" value="Ricerca" id="btnRicerca" title="Ricerca">

            <input type="button" value="AGGIORNA" id="btnEsegui" title="Esegui">
            <div style="clear:both"></div>
        </div>
        <div id="noData" style="font-size:30px;font-weight:bold;color:#CCC;padding-top:300px;text-align:center;display:none;">
       	 	RICERCA FINITA SENZA RISULTATI
        </div>
        <div id="container" style="padding-left:120px;padding-top:20px;display:none;">
        
        	<div id="sestinaValues">
            <!--<div class="sestinaItem sestinaItemBorderRight">0</div><div class="sestinaItem sestinaItemBorderRight">0</div><div class="sestinaItem sestinaItemBorderRight">1</div><div class="sestinaItem sestinaItemBorderRight">2</div><div class="sestinaItem sestinaItemBorderRight">3</div><div class="sestinaItem">4</div>
            --></div>
           	<div style="clear:both"></div>

        </div><br><br>
        
      

            </div> 
        </div>   

    <!------------------------------------------------------------------->
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../js/jQuery.print.js"></script>
    <script type="text/javascript" src="../js/dhtmlxSuite_v451/codebase/dhtmlx.js"></script>
<!--	<script type="text/javascript" src="../quadratureTest/quadrature.js"></script>-->
<!--    <script type="text/javascript" src="main.js"></script>-->
	    <script type="text/javascript" src="../quadratureTest/quadrature.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
    $('#sestine').DataTable( {
    paging: true,
     responsive: true,
     
} );


function showSestine() {

    var anno= $('#cmb_Year').val();
    var tripla= $('#cmb_Tripla').val();

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sestinaValues").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","stampa.php?anno="+anno,true);
        xmlhttp.send();
    }

$("#btnRicerca").click(function(){
    showSestine();
});

});
 </script>