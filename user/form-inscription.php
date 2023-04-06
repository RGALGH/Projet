<?php
// je créer ou récupere une session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Inscription d'un utilisateur</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ea6733594a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/../Projet/css/style.css">
</head>

<body>
	<header>
	<nav>
            <div class="navgauche">
                <a href="./../CRUD/index.php"><img src="../images/place.jpg" alt=""></a>
                <h1 class="titre">ToDoList</h1>
            </div>
            <div class="navdroite">
                <a href="./../user/login.php" class="connx">Connexion</a>
                <a href="./../user/form-inscription.php">Inscription</a>
            </div>
        </nav>
		<h1>To Do List</h1>
		<h2>Inscription</h2>
		<section>
			
			<?php
			
			if (isset($_SESSION['creationCompte'])) {
				
				echo $_SESSION['creationCompte'];
				
				unset($_SESSION['creationCompte']);
			}
			?>
		</section>
	</header>
	<main class="carreforminscrip">
		<form action="inscription.php" method="post" class="carreinscrip">
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" placeholder="nom" />
			</div>
			<div>
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom" placeholder="prénom" />
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="email" />
			</div>			
			<div>
				<label for="mdp">Mot de passe</label>
				<input type="password" name="mdp" id="mdp" placeholder="mot de passe" />
			</div>		
			
			<div><input type="submit" value="Enregistrer" /></div>
		</form>

	</main>
	<footer>
        <p class="retv">R&V Entertainment all right reserved</p>
        <a href="" class="dark">Mode sombre</a>
    </footer>

</body>

</html>