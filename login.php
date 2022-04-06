<!--PARTIE ADMINISTRATION-->
<?php

session_start();
if(isset($_POST['submit'])){
	if(!empty($_POST['identifiant']) AND !empty($_POST['mdp'])){
		$pseudo_par_defaut = "admin";
		$mdp_par_defaut = "1234";

		$pseudo_saisi = htmlspecialchars($_POST['identifiant']);

		$mdp_saisi = htmlspecialchars($_POST['mdp']);

		if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
			$_SESSION['mdp'] = $mdp_saisi;
			header('Location: admin.php');

		}else{
			echo "Votre mot de passe ou pseudo est incorrect";
		}
	
	}else{
		echo "Veuillez compléter tous les champs..";
	}
}
	?>


<!--CODES HTML-->
<html>
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Earth</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/navbar.js"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
	<script src="js/login.js"></script>
    	<section id=navbar>         
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="max-width: 100%;">
 <img style="height: 70px;" src="img/icon.png">
	 <!--<img class="fit-picture" src="img/icon3.png" alt style="height: 140px; width:; margin-top:50%;"></a>-->

	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#00e476; margin-left: 59%;">
	   <span class="navbar-toggler-icon"></span>
	 </button>
   
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
		<!---- <img style="height: 70px;" src="img/icon3.png">-->
	   <ul class="navbar-nav mr-auto" style="float: right;font-size:18px;">
		 <li class="nav-item active">
		   <a class="nav-link" href="index.php">Accueil </a>
		 </li>                       
								 <li class="nav-item active">
		   <a class="nav-link" href="contact.php">Contact </a>
		 </li>                        <li class="nav-item active">
		   <a class="nav-link" href="login.php">Connexion </a>
		 </li>
	   </ul>
	 </div>
   </nav>

	
	</head>

	<body><br> 

							<!--<div class="col-7 col-md-4">
								<a href="index.html">
									<img class="logo" src="img/icon.png" alt="Logo_page" title="Accueil" id="logo" style=" width: 250px; margin-top: -75px;" />
								</a>
							</div>-->
							


	<div class="form-modal"> 
    
		<div class="form-toggle">
			<button id="login-toggle" onclick="toggleLogin()">Connexion</button>
			<button id="signup-toggle" onclick="toggleSignup()">Inscription</button>
		</div>
	
		<div id="login-form">
			<form method="POST" action="../GlobalEarth/inscription-login/login.inc.php">
				<input type="text" name="identifiant" placeholder="Identifiant"/>
				<input type="password" name="mdp" placeholder="Mot de passe"/>
				<button type="submit" name="submit" class="btn login">Connexion</button>
				<p><a href="javascript:void(0)">Mot de passe oublié</a></p>
				<hr/>
				
			</form>
		</div>
	
		<div id="signup-form">
			<form action="../GlobalEarth/inscription-login/inscription.inc.php" method="post">
				<input type="email" name="mail" placeholder="Entrer Email"/>
				<input type="text" name="identifiant" placeholder="Identifiant"/>
				<input type="password" name="mdp" placeholder="Mot de passe"/>
				<input type="password" name="mdp2" placeholder="Veuillez confirmer votre mot de passe"/>
				<button type="submit" name="submit" class="btn signup">Créer compte</button>
				<p>En cliquant<strong> sur Créer un compte,</strong> vous acceptez nos <a href="javascript:void(0)">conditions d'utilisation.</a>.</p>
				<hr/>
				
			</form>
		</div>
	
	</div>
</body>
	</html>
	