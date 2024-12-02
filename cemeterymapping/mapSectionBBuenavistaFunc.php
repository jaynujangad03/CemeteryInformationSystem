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
function retrieveData_ASC_Horizontal_B($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_B_Buenavista($sql);
}
 
function retrieveData_DESC_Horizontal_B($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadDatas_B_Buenavista($sql);
}

function sectionB_firstrow(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 3 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_firstrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 3,10 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_secondrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 14,10 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_thirdrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 24,5 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_thirdrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 29,5 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_thirdrow_thirdcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 34,11 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_forthrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 45,3 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_forthrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 48,2 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_forthrow_thirdcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 50,8 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_fifthrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 58,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_fifthrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 64,1 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_fifthrow_thirdcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 65,4 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_sixrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 69,9 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_sixrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 78,3 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_sevenrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 81,1 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_sevenrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 82,3 ";
		loadDatas_B_Buenavista($sql);
}

function sectionB_eightrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 85,9 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_eightrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 94,3 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_ninerow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 97,17 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_ninerow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 114,1 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_tenrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 115,8 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_tenrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 123,3 ";
		loadDatas_B_Buenavista($sql);
} 
function sectionB_tenrow_thirdcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 126,7 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_elevenrow_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 133,8 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_elevenrow_secondcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 141,3 ";
		loadDatas_B_Buenavista($sql);
}  
function sectionB_paaman_row1_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 144,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_paaman_row2_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 150,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_paaman_row3_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 156,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_paaman_row4_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 162,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_paaman_row5_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 168,6 ";
		loadDatas_B_Buenavista($sql);
}
function sectionB_paaman_row6_firstcolumn(){
		$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='B' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO  LIMIT 174,6 ";
		loadDatas_B_Buenavista($sql);
}

function loadDatas_B_Buenavista($sql=""){
		global $mydb;
			echo '<table class="grave">'; 
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

						echo '<tr>'; 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';
							}else{
									$graveno = '<td class="gravebg"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';

							} 
							// $graveno = $result->GRAVENO;

						// if age < 13 then call define(_col_,"style","style={background=red}");
						}else{
						    // $graveno = $result->GRAVENO;
							$graveno = '<td class="gravebg"  ><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';

						} 
 

					 //  for ($i=0; $i < $gravenos; $i++) { 
						// 	# code...
						// 	if ($i = $gravenos) {
						// 		# code...
						// 		$gravenos = '<td class="fill"><a title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';
						//   }
					     
						// }
					 
						  echo  $graveno;
					}

							
						echo '</tr>';
			}
			echo '</table>';
}

?>