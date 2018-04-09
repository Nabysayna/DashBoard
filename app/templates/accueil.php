<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>OPERATEURS</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
        <!-- Custom Fonts -->
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="../assets/jquery-2.2.1.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Accueil</a>
            <form class="form-inline" method="get" action="<?php echo $baseUrl; ?>/erreur">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Se déconnecter</button>
            </form>
        </nav>

        <div class="row" style="margin-top:2rem; margin-right:0.5rem; margin-left:0.5rem">
            <div class="col-sm-5" style="background-color: orange; margin-bottom: 1rem">
                <h4 style="text-align: center; color:black;padding-top: 1rem">Orange Money</h4>
                <div class="row" style="margin-top: 2rem;">
                    <div class="col-sm-12 col-xs-12">
                        <table class="table table-sm" style="text-align: center;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ETAT</th>
                                <th colspan="3">OPERATIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="ligneOM-1">
                                <th>1</th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher" data-toggle="modal" data-target="#modalRechercheOM"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter" data-toggle="modal" data-target="#modalRemonterOM"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser" data-toggle="modal" data-target="#modalReinitialiserOM"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            <tr id="ligneOM-2">
                                <th>2</th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher" data-toggle="modal" data-target="#modalRechercheOM"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter" data-toggle="modal" data-target="#modalRemonterOM"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser" data-toggle="modal" data-target="#modalReinitialiserOM"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 offset-sm-1"  style="background-color: green;">
                <h4 style="text-align:center; color:black;padding-top: 1rem">Tigo Cash</h4>
                <div class="row" style="margin-top: 2rem">
                    <div class="col-sm-12 col-xs-12"  style="text-align: center;">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ETAT</th>
                                <th colspan="3">OPERATIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="ligneTC-1">
                                <th>1</th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher" data-toggle="modal" data-target="#modalRechercheTC"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter" data-toggle="modal" data-target="#modalRemonterTC"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser" data-toggle="modal" data-target="#modalReinitialiserTC"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            <tr id="ligneTC-2">
                                <th>2</th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher" data-toggle="modal" data-target="#modalRechercheTC"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter" data-toggle="modal" data-target="#modalRemonterTC"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser" data-toggle="modal" data-target="#modalReinitialiserTC"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



		<div class="modal fade"  id="modalRechercheOM" tabindex="-1" role="dialog" aria-labelledby="modalRechercheLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document" >
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title center-block" id="modalRechercheLabel" style="margin: 0 auto; text-align: center;">RECHERCHE OM</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-body" style="background-color:">
						<div class="row orange">
							<div class="col" id="num">
							Numéro <input type="number" name="saisirnumeroOM" id="saisirnumeroOM" class="form-control" placeholder="Numéro">
							</div>
							<div class="col" id="montt">
							Montant <input type="number" name="saisirmontantOM"  id="saisirmontantOM" class="form-control" placeholder="Montant">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
							<button class="btn btn-primary btn-sm orange" onclick="validerRechercherOM()" style="margin: 0 auto; text-align: center;">Recherche</button>
						</div>
						
						<h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
						<table class="table table-responsive table-sm table-hover" >
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
		    			<h4><i class="fa fa-upload" aria-hidden="true" style=""></i> Importer un fichier Excel</h4>
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
		    			<label for="fichier">Réinitilisation en cours...</label>
		      		</div>
				</div>
	  		</div>
	 	</div> 



		<div class="modal fade"  id="modalRechercheTC" tabindex="-1" role="dialog" aria-labelledby="modalRechercheLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document" >
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title center-block" id="modalRechercheLabel" style="margin: 0 auto; text-align: center;">RECHERCHE TC</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-body" style="background-color:">
						<div class="row orange">
							<div class="col" id="num">
							Numéro <input type="number" name="saisirnumeroTC" id="saisirnumeroTC" class="form-control" placeholder="Numéro">
							</div>
							<div class="col" id="montt">
							Montant <input type="number" name="saisirmontantTC"  id="saisirmontantTC" class="form-control" placeholder="Montant">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
							<button class="btn btn-primary btn-sm tigo" onclick="validerRechercherTC()" style="margin: 0 auto; text-align: center;">Recherche</button>
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

        <div class="modal fade"  id="modalRemonterTC" tabindex="-1" role="dialog" aria-labelledby="modalRemonterTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRemonterTitle">Remonter TC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4><i class="fa fa-upload" aria-hidden="true" style=""></i> Importer un fichier Excel</h4>
                        <input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
                        <input type="submit"  value="remonter" name="submit" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalReinitialiserTC" tabindex="-1" role="dialog" aria-labelledby="modalReinitialserTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalReinitialiserTitle">Reinitialiser TC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="fichier">Réinitialisation en cours...</label>
                    </div>
                </div>
            </div>
        </div>



        <script src="../assets/bootstrap/js/bootstrap.js"></script>
    	<script>
            var baseUrl = '<?php echo $baseUrl?>';
            var typeacces="";

    		$(function(){
    			console.log('Begin 1');
                $("button[data-target^='#modal']").on( "click", function() {
                    console.log( $( this ).parent().parent().attr("id"));
                    typeacces = $( this ).parent().parent().attr("id");
                })
    		})

    		function validerRechercherOM(){
    			console.log("validerRechercherOM")
                console.log(typeacces)

                if( ($("#saisirnumeroOM").val().trim().length!=0) && ($("#saisirmontantOM").val().trim().length!=0)){
                    $.post(baseUrl+"/ajax/rechercheom", {numero : $("#saisirnumeroOM").val().trim(), montant : $("#saisirmontantOM").val().trim()}, function(datas){
                            console.log(datas);
                    });
                }else {
                    alert("champ vide")
                }
    		}

            function validerRechercherTC(){
                console.log("validerRechercherTC")
                console.log(typeacces)
            }
    	</script>
    </body>
</html>
