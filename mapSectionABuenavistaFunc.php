<style type="text/css">
   .grave{
		/*font-size: 12px;*/
		width: 100%;
		margin: 0;
		padding: 0;
		text-align: center;   
	} 

	.grave tr td { 
		border-width:1px;
		border-style:solid;
		border-bottom-color:#aaa;
		border-right-color:#aaa;
		border-top-color:#ddd;
		border-left-color:#ddd;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		margin:0px;
		padding:0px;
	}
	.gravebg {
		background-color: #fff;
		color: #000;
	}
	.fill{
		/*border: 1px solid #f9112c;*/
		background-color: #f66c7c;
		color: #fff;
	}
</style>

<?php 
function retrieveData_ASC_Horizontal_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
 
function retrieveData_DESC_Horizontal_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadDatas_A_Buenavista($sql);
}
  
// section A second row
function sectionA_firstrow(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=1,$gravenoto=4);

		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 97 , 4";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_firstrow_secondcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=5,$gravenoto=9);
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 94 , 3";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_firstrow_thirdcolumn(){
	retrieveData_DESC_Horizontal_A($gravenofrom=10,$gravenoto=15); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 88 , 6";
	 // 	loadDatas_A_Buenavista($sql);
}

// end section A first row

// section A second row
function sectionA_secondrow_firstcolumn(){ 
		retrieveData_DESC_Horizontal_A($gravenofrom=16,$gravenoto=21); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 82, 6";
	 // 	loadDatas_A_Buenavista($sql);
}


function sectionA_secondrow_secondcolumn(){ 
		retrieveData_DESC_Horizontal_A($gravenofrom=22,$gravenoto=23); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 80, 2";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_secondrow_thirdcolumn(){ 
		retrieveData_DESC_Horizontal_A($gravenofrom=24,$gravenoto=31); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 72, 8";
	 // 	loadDatas_A_Buenavista($sql);
}

// end section A Second row

// section A third row
function sectionA_thirdrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=32,$gravenoto=32); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 71, 1";
	 // 	loadDatas_A_Buenavista($sql);
}
// end section A third row

// section A forth row
function sectionA_forthrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=33,$gravenoto=35); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 68, 3";
	 // 	loadDatas_A_Buenavista($sql);
}
function sectionA_forthrow_secondcolumn(){ 

retrieveData_DESC_Horizontal_A($gravenofrom=101,$gravenoto=101); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO ASC LIMIT 68,1";
	 // 	loadDatas_A_Buenavista($sql);
}
// end forth row
function sectionA_fifthrow_firstcolumn(){ 
retrieveData_DESC_Horizontal_A($gravenofrom=36,$gravenoto=42); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 60, 8";
		// loadDatas_A_Buenavista($sql);
} 

function sectionA_fifthrow_thirdcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=44,$gravenoto=47); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 56, 4";
	 // 	loadDatas_A_Buenavista($sql);
} 

// end section a fifth
// section a six row
function sectionA_sixthrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=48,$gravenoto=58); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 41, 15";
	 // 	loadDatas_A_Buenavista($sql);
} 
// end section a six row
// section a seven row 
function sectionA_seventhrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=59,$gravenoto=69); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 36, 15";
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a seven row
// section a eight row 
function sectionA_eightrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=70,$gravenoto=80); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 21, 15"; 
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a eight row
// section a nine row 
function sectionA_ninerow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=81,$gravenoto=91); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 10, 11"; 
	 // 	loadDatas_A_Buenavista($sql);
} 
// end section a nine row
// section a ten row 
function sectionA_tenrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=92,$gravenoto=95); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 6, 4"; 
	 // 	loadDatas_A_Buenavista($sql); 
}
function sectionA_tenrow_secondcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=96,$gravenoto=96); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 5, 1"; 
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a ten row
// section a eleven row 
function sectionA_elevenrow_firstcolumn(){ 
	retrieveData_DESC_Horizontal_A($gravenofrom=95,$gravenoto=100); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 3, 4"; 
	 // 	loadDatas_A_Buenavista($sql);
}
function sectionA_elevenrow_secondcolumn(){
	retrieveData_DESC_Horizontal_A($gravenofrom=101,$gravenoto=101); 
	 	// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO ASC LIMIT 101, 1";
	 	// loadDatas_A_Buenavista($sql);
}


 function loadDatas_A_Buenavista($sql=""){
 		global $mydb;
			echo '<table class="grave">';
			 	$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

						echo '<tr class="gravebg">'; 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';
							}else{
									$graveno = '<td class="gravebg"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';

							} 
						}else{
							$graveno = '<td clas="gravebg" ><a href="#"  data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';
						}  
				 
							echo  $graveno;
					}
						echo '</tr>';
			}
			echo '</table>';
 }
 
?>