

<html lang="en">
  <head>
    <title>OPERATEURS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    </head>
    <body >
	<div class="container" class="container-fluid" >
	<div class="container" >
		<a href="logout.php">Se déconnecter</a></div>
		<div class="row" >

		<div  class="col-sm-6 col-md-6 col-xs-12" style="background-color:orange">
			<div class="row orangeprincipale" >
				<div class="row orange" style="background-color:" >
				<div class="col-md-8 col-xs-1">
              <div><h1 style="color:black;"> OM</h1></div></div></div>

              <!-- modal de trafic -->
				<div class="col-md-10 col-xs-1" align="right"><button type="button" class="" data-toggle="modal" data-target=".bd-example-modal-sm" ><span id="span">Trafic</span></button>
					 </div>
			 
				<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" style="background-color:black">
					<div class="modal-content" id="modaltrafic" style="background-color:orange">

					  <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">1</div></div>
					  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div></div>
					  <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">2</div></div>
				   	  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div> </div>
                      <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">3</div></div>
					  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div> </div>
                      <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">4</div></div>
					  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div> </div>
					  <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">5</div></div>
					  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div> </div>
					  <div class="row" id="modalmodal">
					  <div class="col-sm-2">
					  <div id="idd">6</div></div>
					  <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  </div> </div>
					  <div class="form-check">
					  </div>
                      <div class="modal-footer">
						<button type="button" class="" onclick="valider()">Valider</button>
						<button type="button" class="" data-dismiss="modal">Close</button>
					 </div>
						


			    </div>
			    </div>
			    </div>
			    </div>


			<div class="row orange" >
						<div class="col-sm-1" id="idphone" style="width:20px;">Id</div>
						<div class="col-sm-3">Etats</div>
						<div class="col-sm-8">Les opérations</div>
					</div>

		<div class="row orange" >
		<div class="col-sm-2">
		<div id="idd">1</div></div>
		<div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div>
			<div class="col-sm-3 col-xs-2">
			<div>





			<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document" >
					<div class="modal-content tigo">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						</div></div></div></div>


			<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document" >
							<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
							</div>
	                        </div>
							</div>
			                </div>

					
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" id=test1 onclick="myFunctionorange(1)" class="button" data-toggle="modal" data-target="#exampleModal" ><span style="">Rechercher</span>
            </button>
            </div></div>

              <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div>
		


		    <div class="col-sm-3">
		    <div id="idd">2</div>
		    <div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div></div>
            <div class="col-sm-3 col-xs-2">
			<div>
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" name="rechercherorange" class="" id="recher" background-color:orange; margin:auto;"  onclick="myRechercheorange()"><span style="color:black;">Rechercher</span></button>
            </div></div>
            <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="lireexcel.php" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div>
		
		<div class="col-sm-3">
		    <div id="idd">3</div>
		    <div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div></div>
			<div class="col-sm-3 col-xs-2">
			<div>
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" name="rechercherorange" class="" id="recher" background-color:orange; margin:auto;"  onclick="myRechercheorange()"><span style="color:black;">Rechercher</span></butto>
            </div></div>
            <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="lireexcel.php" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div>
		

			<div class="col-sm-3">
		    <div id="idd">4</div>
		    <div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div></div>
			<div class="col-sm-3 col-xs-2">
			<div>
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" name="rechercherorange" class="" id="recher" background-color:orange; margin:auto;"  onclick="myRechercheorange()"><span style="color:black;">Rechercher</span></butto>
            </div></div>
            <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="lireexcel.php" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div>
		
<div class="col-sm-3">
		    <div id="idd">5</div>
		    <div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div></div>
			<div class="col-sm-3 col-xs-2">
			<div>
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" name="rechercherorange" class="" id="recher" background-color:orange; margin:auto;"  onclick="myRechercheorange()"><span style="color:black;">Rechercher</span></button>
            </div></div>
            <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="lireexcel.php" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div>
		
<div class="col-sm-3">
		    <div id="idd">6</div>
		    <div class="col-sm-1">
			<p class="stateChecker" style="width: 3rem ; height: 3rem ;"></p>
			</div></div>
			<div class="col-sm-3 col-xs-2">
			<div>
			<div class="modal-title titremod" id="" style="display:none;"></div>
			<button type="button" name="rechercherorange" class="" id="recher" background-color:orange; margin:auto;"  onclick="myRechercheorange()"><span style="color:black;">Rechercher</span></button>
            </div></div>
            <div class="col-sm-3">
			  <button type="button" id="remonterorange" class="" data-toggle="modal" data-target=".bd-example-modal-lg"  >
			  <span style="color:black;">Remonter</span></button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content" style="margin:20px;">
						<form style="margin:20px;" method="POST" action="lireexcel.php" class="form" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
								<!--<input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".doc,docx,x" onchange="myFunction11()"/>-->
								<input id="fichierorange" name="fichier" class="form-control-file"  type="file" accept=".xls" ></br>
								<input type="submit"  value="remonter" name="submit">
							</div>
						</form>
                     </div></div></div></div>
                     <div class="col-sm-2 col-xs-2">
                     <div ><button type="button" id=rn1 class="" onclick="reinitialiser(this)" ><span style="color:black;">Reinitialiser</span></button></div></div></button></div>
			
	
           
</body>

<script src="http://code.jquery.com/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>


	
</html>








