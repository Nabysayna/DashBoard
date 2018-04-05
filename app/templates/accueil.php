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
						      		<td><button class="btn btn-primary btn-sm"  id="test1" onclick="myFunction(1)" class="" data-toggle="modal" data-target="#modalRechercheOM">Rechercher</button></td>
						      		<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalRemonterOM" >Remonter</button></td>
						      		<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalReinitialiserOM" >Reinitialiser</button></td>
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
						      		<td><button class="btn btn-primary btn-sm"  id="test2" onclick="myFunction(2)" class="" data-toggle="modal" data-target="#modalRechercheTC">Rechercher</button></td>
						      		<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalRemonterOM">Remonter</button></td>
						      		<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalReinitialiserOM">Réinitialiser</button></td>
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
				      				<td><input type="checkbox" value="1" id="defaultCheck1"></td>
				    			</tr>
				    			<tr>
				      				<th>2</th>
				      				<td><input type="checkbox" value="2" id="defaultCheck1"></td>
					    		</tr>	
				  			</tbody>
	    				</table>
		      		</div>
		      		<div class="modal-footer">
		        		<button class="btn btn-primary" id="validerTraficOM">Valider</button>
		        		<button class="btn btn-primary" data-dismiss="modal">Close</button>
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

		<div class="modal fade"  id="modalRechercheOM" tabindex="-1" role="dialog" aria-labelledby="modalRechercheOMLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document" >
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title center-block" id="modalRechercheOMLabel" style="margin: 0 auto; text-align: center;">RECHERCHE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-body" style="background-color:">
						<div class="row orange">
							<div class="col" id="num">
							Numéro <input type="number" name="numero" id="saisirnumero" class="form-control" placeholder="Numéro">
							</div>
							<div class="col" id="montt">
							Montant <input type="number" name="montant"  id="saisirmontant" class="form-control" placeholder="Montant">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
							<button class="btn btn-primary btn-sm orange" style="margin: 0 auto; text-align: center;">Recherche</button>
						</div>
						
						<h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
						<table class="table table-sm table-hover" >
							<thead>
								<tr>
									<th id="">Opération</th>
									<th id="">Numéro</th>
									<th id="">Montant</th>
									<th id="">Date</th>
									<th id="">Remonté</th>
									<th id="">Action</th>
								</tr>
							</thead>
					    </table>
					</div>	
					<div class="modal-footer">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span></button>
		      		</div>

				</div>
			</div>
		</div>


		<div class="modal fade"  id="modalRemonterOM" tabindex="-1" role="dialog" aria-labelledby="modalRemonterTitle" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		        		<h5 class="modal-title" id="modalRemonterTitle">Remonter OM</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		    			<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
						<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
						<input type="submit"  value="remonter" name="submit" class="btn btn-primary btn-sm">
		      		</div>
				</div>
	  		</div>
	 	</div> 


  		<div class="modal fade"  id="modalReinitialiserOM" tabindex="-1" role="dialog" aria-labelledby="modalReinitialserTitle" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		        		<h5 class="modal-title" id="modalReinitialiserTitle">Reinitialiser OM</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		    			<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
		      		</div>
				</div>
	  		</div>
	 	</div> 

		<div class="modal fade"  id="modalRechercheTC" tabindex="-1" role="dialog" aria-labelledby="modalRechercheTCLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document" >
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title center-block" id="modalRechercheTCLabel" style="margin: 0 auto; text-align: center;">RECHERCHE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-body" style="background-color:">
						<div class="row orange">
							<div class="col" id="num">
							Numéro <input type="number" name="numero" id="saisirnumero" class="form-control" placeholder="Numéro">
							</div>
							<div class="col" id="montt">
							Montant <input type="number" name="montant"  id="saisirmontant" class="form-control" placeholder="Montant">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
							<button class="btn btn-primary btn-sm tigo" style="margin: 0 auto; text-align: center;">Recherche</button>
						</div>
						
						<h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
						<table class="table table-sm table-hover" >
							<thead>
								<tr>
									<th id="">Opération</th>
									<th id="">Numéro</th>
									<th id="">Montant</th>
									<th id="">Date</th>
									<th id="">Remonté</th>
									<th id="">Action</th>
								</tr>
							</thead>
					    </table>
					</div>	
					<div class="modal-footer">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span></button>
		      		</div>

				</div>
			</div>
		</div>


    	<script src="../assets/bootstrap/js/bootstrap.js"></script>

    	<script>

    		console.log('Begin 0');
    		$(function(){
    			console.log('Begin 1');
    			validerTraficOM();

    			$("#validerTraficOM").onclick(function(){
    				console.log("test")
    			})
    		})


    		function validerTraficOM(){
    			console.log("test")
    		}

    	</script>
    </body>
</html>
          
            