<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title><?=$titlePage;?></title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="../assets/jquery-2.2.1.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Accueil</a>
            <form class="form-inline" method="get" action="<?php echo $baseUrl; ?>/erreur">
                <button class="btn btn-outline-success btn-sm" type="submit">Se déconnecter</button>
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
                            <?php  for($id=1; $id<=$nbreCallOM; $id++) { ?>
                            <tr>
                                <th><?=$id;?></th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher OM" onclick="validerRechercherModal('OM',<?=$id;?>)"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter OM" onclick="validerRemonterModal('OM',<?=$id;?>)"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser OM" onclick="validerReinitialiserModal('OM',<?=$id;?>)"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 offset-sm-1" style="background-color: green;">
                <h4 style="text-align:center; color:black; padding-top:1rem">Tigo Cash</h4>
                <div class="row" style="margin-top:2rem">
                    <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>ETAT</th>
                                <th colspan="3">OPERATIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  for($id=1; $id<=$nbreCallTC; $id++) { ?>
                            <tr>
                                <th><?=$id;?></th>
                                <td>-</td>
                                <td><button class="btn btn-primary btn-sm" title="Rechercher TC" onclick="validerRechercherModal('TC',<?=$id;?>)"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Remonter TC" onclick="validerRemonterModal('TC',<?=$id;?>)"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary btn-sm" title="Reinitialiser TC" onclick="validerReinitialiserModal('TC',<?=$id;?>)"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


		<div class="modal fade"  id="modalRechercher" tabindex="-1" role="dialog" aria-labelledby="modalRechercherTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document" >
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title center-block" id="modalRechercherTitle" style="margin: 0 auto; text-align: center;">RECHERCHE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-body" style="background-color:">
						<div class="row orange">
							<div class="col" id="num">
							Numéro <input type="number" name="saisirnumero" id="saisirnumero" class="form-control saisir" placeholder="Numéro">
							</div>
							<div class="col" id="montt">
							Montant <input type="number" name="saisirmontant"  id="saisirmontant" class="form-control saisir" placeholder="Montant">
							</div>
						</div>
						<div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
							<button class="btn btn-primary btn-sm orange" onclick="validerRechercherBtn()" style="margin: 0 auto; text-align: center;">Recherche</button>
						</div>
						
						<h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
						<table class="table table-sm table-responsive" >
							<thead>
								<tr>
									<th id="">Op</th>
									<th id="">Numéro</th>
									<th id="">Mnt</th>
									<th id="">Date</th>
									<th id="">Rem</th>
									<th id="">Action</th>
								</tr>
							</thead>
                            <tbody id="tbody">
                            </tbody>
					    </table>
					</div>	
					<div class="modal-footer">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      		</div>
				</div>
			</div>
		</div>

        <div class="modal fade"  id="modalRemonter" tabindex="-1" role="dialog" aria-labelledby="modalRemonterTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRemonterTitle">Remonter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
                            <input id="fichier" name="fichier" class="form-control-file"  type="file" accept=".xls.xlsx" ></br>
                            <button class="btn btn-primary btn-sm" onclick="validerUploads()">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalReinitialiser" tabindex="-1" role="dialog" aria-labelledby="modalReinitialserTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalReinitialiserTitle">Reinitialiser</h5>
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
        <script>var baseUrl = '<?php echo $baseUrl?>';</script>
        <script src="../assets/main.js"></script>
    </body>
</html>
