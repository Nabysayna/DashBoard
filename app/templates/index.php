<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=$titlePage;?></title>
    	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/bootstrap/css/bootstrap.css">

		<script src="<?php echo $baseUrl; ?>/assets/jquery-2.2.1.min.js"></script>
    </head>
    <body class="container">
		<h1 class="h1login" align="center" style="margin-top: 5rem; margin-bottom: 2rem">Connexion</h1>
		<div class="row">
            <div class="col-sm-4" style="margin: 0 auto; text-align: center">
                <div class="alert alert-danger" role="alert" style="margin: 0 auto; text-align: center;margin-bottom: 2rem; display: none; ">
                    login ou mot de passe incorrecte!
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control enfocus" name="username" placeholder="Username" id="username" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control enfocus" id="password"  name="password" placeholder="Password" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <button id="connexion"  style="margin: 0 auto; text-align: right" class="btn btn-primary">Connexion</button>
                </div>
            </div>
		</div>

        <script src="<?php echo $baseUrl; ?>/assets/bootstrap/js/bootstrap.js"></script>
		<script>
			$(function(){
                var baseUrl = '<?php echo $baseUrl?>';
        $('.enfocus').on('focus', function(){
          $('.alert-danger').css('display','none') ;
        })      
				$('#connexion').click(function(){
				    if($('#username').val().length==0 || $('#password').val().trim().length==0){
                        alert("Please enter your login and password")
                    }
                    else{
			    		$.post(baseUrl+"/index.php/ajaxconnexion",
                           {username : $("#username").val().trim(), password : $("#password").val().trim()},
                           function(datas){
                               var result = JSON.parse(datas);
                               if(result.etat){
                                   document.location.href=baseUrl+"/index.php/accueil"
                               }
                               else{
                                //alert(datas);
                                $('.alert-danger').css('display','block') ; 
                              }
                           }
                        );
                    }
				});
	        });
		</script>
	</body>
</html>