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
            <select id="cmb_Year" name="cmb_Year" class="selectCustom" style="margin-right: 100px">
				<?php
                for($i=date("Y"); $i>=1871; $i--)
                	echo '<option value="' . $i . '">' . $i . '</option>';
                ?>
            </select>
<!--            Composizione-->
            <input type="text" id="txtSestina" class="TextboxCustom" style="display: none; margin-right: 100px">
            
            Ordine
            <select id="cmb_Ordine" class="selectCustom" style="margin-right: 100px; ">
                <option value="destroso">Destroso</option>
                <option value="sinistroso">Sinistroso</option>
            </select>
            
            Tripla
            <select id="cmb_Tripla" name="cmb_Tripla" class="selectCustom">
                <option value="1-4-7">1-4-7</option>
                <option value="2-5-8">2-5-8</option>
                <option value="3-6-9">3-6-9</option>
            </select>
                        <input type="button" value="Ricerca" id="btnRicerca" title="Ricerca">

            <input type="button" value="AGGIORNA" id="btnEsegui" title="Esegui">
        </div>
       <br/>
        <div id="container" style="">
        
           <div class="table-responsive">
            <table id="sestine" style="width: 100%;" class="table hover table-striped table-bordered "  >
                        <thead>
                            <tr>
                                <th>Sestina</th>
                                <th>EsitiPositivi</th>
                                <th>EsitiNegativi</th>                                
                                <th>Ambi</th>
                                <th>Terni</th>
                                <th>Quaterne</th>
                                <th>Tripla</th>
                            </tr>
                        </thead>
                    </table>
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


$("#btnRicerca").click(function(){
    var anno= $('select[name=cmb_Year]').val();
        var tripla= $('select[name=cmb_Tripla]').val();
    $.ajax({
url: "stampa.php",
type: "get",
data: { anno: anno, tripla: tripla }
}).done(function (result) {
debugger;
var jsdata = JSON.parse(result);
$('#sestine').dataTable().fnAddData(jsdata);}).fail(function (jqXHR, textStatus, errorThrown) {
    
});
});
// needs to implement if it fails
    
    
    
    
    
    
  $(document).ready(function(){
             
 $("#sestine").DataTable({
 "dataType": "json",
  "cache": false,
"columns": [
    { "data": "sestina" },
    { "data": "EsitiPositivi" },
    { "data": "EsitiNegativi" },
    { "data": "Ambi" },
    { "data": "nTerni" },
    { "data": "nQuaterne" },
    { "data": "trip" }
  ],
processing: true,
retrieve: true
});
  
      
      
  });  
    
    
 
 </script>
 
