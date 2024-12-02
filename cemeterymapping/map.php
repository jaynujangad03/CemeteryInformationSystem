
<style type="text/css">
 .scrolly {
  /* width: 1400px;
    height:450px;*/
    /*border: thin solid black;*/
    /*overflow-: hidden; */
    overflow: auto;
}  
.scroll {
	   /*width: 600px;*/
    height:500px;
    /*border: thin solid black;*/
    /*overflow-: hidden; */
    overflow-y: auto;
}
</style>
<!-- <button id="btn_ZoomIn" class="btn btn-xs btn-info"> <i class="fa fa-search-plus"> </i> </button>
<button id="btn_ZoomOut" class="btn btn-xs btn-info"><i class="fa fa-search-minus"></i></button>
<button id="btn_ZoomReset" class="btn btn-xs btn-info">Zoom Reset</button> -->
<div class="scroll" id="zoom"> 	

<?php 
 if (isset($_GET['location'])) {
 	# code...
 	if ($_GET['location']=='BUENAVISTA LOOC CEMETERY') {
 		# code...
 		include 'mapBuenavista.php';
 	}else{ 
 		include 'puntaMap.php';
 	}
 }else{
 	if ($res->LOCATION=='BUENAVISTA LOOC CEMETERY') {
 		# code...
 		include 'mapBuenavista.php';
 	}else{
 		include 'puntaMap.php'; 
 	}
 }
?>

</div>

