<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<base href="http://localhost/DashBoard">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?=titlePage;?></title>
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
		<script src="http://code.jquery.com/jquery.js"></script>
    </head>
   
    <body class="body">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<h1 class="h1login" align="center">Connexion</h1>
		<div class="login" align="center" >
			<div class="form-row" align="center" >
				<p><i class="fa fa-user" style="width: 100px;"></i></p>
				<table  align="center" class="panel" border="0" >
				    <tr>
					    <td>			      	
					      	<div class="input-group mb-2"  >
						      	<br>
						      	<input type="text" class="form-control" name="username" placeholder="Username" id="username" required/>
						      	<br>
							</div>
					    </td>
					</tr>
					<tr>
					    <td>
					      		<br>
					        	<input type="password" class="form-control" id="password"  name="password" placeholder="Password" required/>
					        	<br>
					      	</div>
					    </td>
					</tr>
				  	<br>
				  	<tr>
				  		<td><br></td>
				  	</tr>
	            	<br>
	            	<tr>
	            		<td>
							<button align="right" id="connexion" class="btn btn-primary">Connexion</button>
				  			<br>
				  		</td>
				  	</tr>
				</table>
			</div>
		</div>


		<script src="assets/bootstrap/js/bootstrap.js"></script>


		<script>
			$(function(){

				var baseUrl = '<?php echo $baseUrl?>'

	           	console.log('Begin');
				var compteur = 0;
				$('#connexion').click(function(){
				   // console.log("Nombre de click"+compteur++)
				   // console.log("-"+$('#username').val()+ "-"+$('#password').val()+ "-");
				   // console.log("-"+$('#username').val()+ "-"+$('#password').val()+ "-");
				   if($('#username').val().length==0 || $('#password').val().trim().length==0){
				   		alert("Champ vide")
				   }else{
			    		console.log("-"+$('#username').val()+ "-"+$('#password').val()+ "-");

			    		$.post(
			    		 	'http://bbstvnet.com/authentify.php', 
			    		 	{username : $("#username").val().trim(), password : $("#password").val().trim()},
			    		 	function(datas){ 
			    		 		var result = JSON.parse(datas);
			    		 		if(result.etat){
			    		 			document.location.href=baseUrl+"/index.php/accueil"
			    		 		}
			    		 		else{
			    		 			alert("reste sage")
			    		 		}
			    		 	}
			    		);
				   }
				});




	        });
		</script>

	 
	</body>
</html>