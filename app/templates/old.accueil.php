<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>OPERATEURS</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
    
     	<script src="../assets/jquery-2.2.1.min.js"></script>
    </head>
    <body class="container">

    	<div class="row" style="margin-bottom: 3rem;">
    		<a  class="col-sm-12" style="text-align: right;" href="<?php echo $baseUrl; ?>/erreur"> Se déconnecter</a>
    	</div>

		<div class="row" style="margin-top: 2rem">
			<div class="col-sm-6" style="background-color: orange; margin-bottom: 1rem; padding-top: 2rem ">
	            <div class="row">
	            	<div class="col-10">
	            		<h4 style="color:black;">Orange Money</h4>
		            </div>
		            <div class="col-2">
	            		<button class="btn btn-primary btn-sm" style="margin-right: 2rem"   data-toggle="modal" data-target="#modalTraficOM">Trafic</button>
		            </div>
	            </div>
	            <div class="row" style="margin-top: 2rem; padding-bottom: 1rem">
	            	<div class="col-sm-12 col-xs-12">
	            		<table class="table-responsive table-sm">
	            			<thead>
						    	<tr style="text-align: center;">
						      		<th>ID</th>
		            				<th>ETAT</th>
		            				<th colspan="3">OPERATIONS</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						      		<th>1</th>
						      		<td>-</td>
						      		<td><button class="btn btn-primary btn-sm">Rechercher</button></td>
						      		<td><button class="btn btn-primary btn-sm">Remonter</button></td>
						      		<td><button class="btn btn-primary btn-sm">Réinitialiser</button></td>
						    	</tr>						    	
						  	</tbody>
	            		</table>
		            </div>
	            </div>
	        </div>
	        <div class="col-sm-6"  style="background-color: green; padding-left: 2rem; padding-top: 2rem ">
	        	<div class="row">
	            	<div class="col-10">
	            		<h4 style="color:black;">Tigo Cash</h4>
		            </div>
		            <div class="col-2">
	            		<button class="btn btn-primary btn-sm" style="margin-right: 2rem"  data-toggle="modal" data-target="#modalTraficTC">Trafic</button>
		            </div>
	            </div>

	            <div class="row" style="margin-top: 2rem; padding-bottom: 2rem">
	            	<div class="col-sm-12 col-xs-12">
	            		<table class="table-responsive table-sm" border="0">
	            			<thead>
						    	<tr style="text-align: center;">
						      		<th>ID</th>
		            				<th>ETAT</th>
		            				<th colspan="3">OPERATIONS</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						      		<th>1</th>
						      		<td>-</td>
						      		<td><button class="btn btn-primary btn-sm">Rechercher</button></td>
						      		<td><button class="btn btn-primary btn-sm">Remonter</button></td>
						      		<td><button class="btn btn-primary btn-sm">Réinitialiser</button></td>
						    	</tr>
						  	</tbody>
	            		</table>
		            </div>
	            </div>
	        
	        </div>
	    </div>

	    <div class="modal fade" id="modalTraficOM" tabindex="-1" role="dialog" aria-labelledby="modalTraficOMTitle" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content"  style="background-color:orange">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="modalTraficOMTitle">traffic OM</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		    			<table class="table-responsive table-sm" border="0">
				  			<tbody>
				    			<tr>
				      				<th>1</th>
				      				<td><input type="checkbox" value="" id="defaultCheck1"></td>
				    			</tr>
				    			<tr>
				      				<th>2</th>
				      				<td><input type="checkbox" value="" id="defaultCheck1"></td>
					    		</tr>	
				  			</tbody>
	    				</table>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-primary" onclick="valider()">Valider</button>
		        		<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		      		</div>
		    	</div>
		  	</div>
		</div>

		<div class="modal fade" id="modalTraficTC" tabindex="-1" role="dialog" aria-labelledby="modalTraficTCTitle" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content"  style="background-color:green">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="modalTraficTCTitle">traffic TC</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		    			<table class="table-responsive table-sm" border="0">
				  			<tbody>
				    			<tr>
				      				<th>1</th>
				      				<td><input type="checkbox" value="" id="defaultCheck1"></td>
				    			</tr>
				    			<tr>
				      				<th>2</th>
				      				<td><input type="checkbox" value="" id="defaultCheck1"></td>
					    		</tr>	
				  			</tbody>
	    				</table>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-primary" onclick="valider()">Valider</button>
		        		<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		      		</div>
		      	</div>
		    </div>
		</div>

		
    
    	<script src="../assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
          
            