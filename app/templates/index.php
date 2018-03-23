<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=$titlePage;?></title>


        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body class="body" style="margin-top: 10%">
		<h1 class="h1login" align="center">Connexion</h1>
		<div class="login" align="center" >
            <p><?=$baseUrl;?></p>
			<form action="<?=$baseUrl;?>/" method="POST">
                <div class="form-row" align="center" >
                    <p><i class="fa fa-user" style="width: 100px;"></i></p>
                    <table  align="center" class="panel" border="0" >
                        <tr>
				            <td>
                                <div class="input-group mb-2"  >
				      	            <br>
				      	        	<input type="text" class="form-control" name="username" placeholder="Username" required/>
				        	        <br/>
                                </div>
                            </td>
                        </tr>
				      	<tr>
				      	    <td>
				      	        <div class="input-group mb-2">
				      		        <br>
				        	        <input type="password" class="form-control"  name="password" placeholder="Password" required/>
				        		    <br/>
                                </div>
                            </td>
				        </tr>
					    <tr>
                            <td>
					            <button type="submit" align="right" class="btn btn-primary connexion">Connexion</button>
			                    <br>
			                </td>
			            </tr>
			        </table>
                </div>
            </form>
        </div>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>