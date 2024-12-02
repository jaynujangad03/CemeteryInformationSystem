
 <!-- 
   <style type="text/css">
   	.grid {
   		margin: 0px 0px 0px 0px;
   		padding: 0px 0px 0px 0px; 
   		height: auto;
   		width: auto;
   	 
   	}
   	.grid {
   		display: grid;
   		grid-template-columns: 1fr 1fr 1fr 1fr;
   		grid-template-rows: 1fr 1fr 1fr;
   		grid-template-areas: 
   	  	"col1" "col2" "col3" "col4";
   	}
   	.col1 {
   		grid-area: col1;  
   	}
   	.col2 {
   		grid-area: col2;
   	}
   	.col3 {
   		grid-area: col3;

   	}
   	.col4 {
   		grid-area: col4;

   	}
   </style> -->

<?php
	include "map1Func.php";

	//   include 'puntaAB.php';
	// include 'puntaC1.php';
 	 // include 'puntaDsevenlayer.php';
	// include 'puntaDsixlayer.php';

?> 
<style type="text/css">
	#stretchmap {
		width: 100px;
		height: 100px;
		margin: -100px 0px 0px 0px;
	}
	#stretchmap img {
		width: 100%;
		height: 100%;
	}

	.bg {
		width: auto;
		height: auto;
	}
	.bg img {
		width: 100%;
		height: 100%;
	}
	/*#container {
    background-image:url(img/bgmap.jpg);
      background-repeat:no-repeat; 
    width:3000px; */

/*}*/
 
.style1 {
        /*background: url(img/bg3.jpg) no-repeat center center ;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;*/
        /*background-size: cover;*/
          background: url(img/bg5.1.jpg);
                  -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; 
        background-size: cover;
      
}
</style>
<!-- <div id="stretch" class="" style="margin: 0px 0px -100px 0px">
	<img src="img/map.jpg">
</div>  -->
<div id="container" > 
	  <table  class="style1" >
	   
 		<tr >
 			<td > 
 			<!-- 	<div  style="margin: 0px 0px  80px 0px">
	  			 	<img src="img/ricefields.jpg" width="1100px" height="100px">
 				</div> -->

 				<div style="margin:  0px  0px 0px 30px;width: 1100px">
 				<?php 
					  include 'puntaAB.php';  
				   ?> 
				 </div>

 				<div style="margin:  0px  0px 0px 40px;width: 1100px">
 				<?php  
				       include 'puntaC.php'; 
				   ?> 
				 </div>
 			</td>
 			<td>
 			 
 				<div style="margin:  0px  0px 0px 10px;width: 200px">
 				<?php  
			    	   include 'puntaC1.php'; 
			    ?> 
				</div>
 			</td> 
 			<td>
 				<div style="margin:  0px  0px 0px 240px;width: 500px">
 				<?php  
			    	  include 'puntaC2.php'; 
			    ?> 
				</div>
 			</td>
 			<td><p style="height: 1000px;background-color: #eee;color: black;text-align: center;">Daanan</p></td>
 			<td>
 				<div style="margin:  0px  0px 0px 0px; width: 220px">
				<?php 
					  include 'puntaD.php'; 
				?>
				</div>
 			</td>
 			  <td>
 				<table style="margin: 50px 0px 50px 0px">
 					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									 include 'puntaDsevenlayer.php';

								?>
							</div>
						</td>
					</tr>
 					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									    include 'puntaDsixlayer.php';

								?>
							</div>
						</td>
					</tr>
				 	<tr>
						<td>
							<div style="margin:  0px  0px -80px 0px;">
								<?php 
									  include 'puntaDfifthlayer.php';

								?>
							</div>
						</td>
					</tr>
				 	<tr>
						<td>
							<div style="margin:  0px  0px -30px 0px;">
								<?php 
									    include 'puntaDforthlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px;">
								<?php 
									   include 'puntaDthirdlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px -50px 0px;">
								<?php 
									  include 'puntaDsecondlayer.php';

								?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="margin:  0px  0px 0px 0px">
								<?php 
									    include 'puntaDfirstlayer.php';

								?>
							</div>
						</td>
					</tr>
				</table>
 			</td> 
 		</tr>
 	
 	</table>    
</div>

<!--  <div  id="stretchmap" style="margin: -600px 0px 0px 0px;">
 	<img src="img/direction.jpg">
 </div> -->