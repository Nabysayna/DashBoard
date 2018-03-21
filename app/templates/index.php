<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<base href="http://localhost/DashBoard">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <title><?=titlePage;?></title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>



       <?php
session_start(); 
if(isset($_POST['connexion'])) { 

    if(empty($_POST['username'])) {
        echo "Le champ Login est vide.";
    } else {
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            $Username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); 
            $Password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            $mysqli = mysqli_connect("domaine.tld", "root", "", "dbligueyoukaye");
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateurs WHERE username = '".$Username."' AND password = '".$Password."'");
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le login ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    $_SESSION['username'] = $Username; 
//header("Location: http://bbstvnet.com/authentify.php"); // Redirection du navigateur
exit;                }
            }
        }
    }
}
?>
         <body class="body">
         <p>&nbsp;</p>
          <p>&nbsp;</p>
           <p>&nbsp;</p>
            <p>&nbsp;</p>
		<h1 class="h1login" align="center">Connexion</h1>
		<div class="login" align="center" >
			<form action="http://bbstvnet.com/authentify.php" method="POST">
				    <div class="form-row" align="center" >
				    	<p><i class="fa fa-user" style="width: 100px;"></i></p>
				    	<table  align="center" class="panel" border="0" >
				       <tr>
				      <td>			      	
				      <div class="input-group mb-2"  >
				      <br>
				      <input type="text" class="form-control" name="username" placeholder="Username" value="username" required/>
				        </br>
				        </td>
				        </tr>
				      	</div>
				      	<tr>
				      	<td>
				      	<div class="input-group mb-2">
				      		<br>
				        	<input type="password" class="form-control"  name="password" placeholder="Password" value="password" required/>
				        </br>
				        </td>
				        </tr>
				      	</div>
					    </div>
			  <br><tr><td>
			  </br>
			  </td>
			  </tr>
			</div>
            <br><tr><td>
<button type="submit" align="right" value="connexion" class="btn btn-primary connexion">Connexion</button>
			  </br>
			  </td>
			  </tr>
			  </table>
			</form>
		</div>
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>


</body>
</html>