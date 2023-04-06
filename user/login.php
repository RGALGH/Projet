<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Identification</h1>
        <section>
            <?php
          
            if (isset($_SESSION['login'])) {
                
                echo $_SESSION['login'];
            
                unset($_SESSION['login']);
            }
            ?>
        </section>
    </header>
    <main>
        <form action="authentification.php" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email" />
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="mot de passe" />
            </div>
            <div><input type="submit" value="Connecter" /></div>

        </form>
    </main>
    <footer>
        <p class="retv">R&V Entertainment all right reserved</p>
        <a href="" class="dark">Mode sombre</a>
    </footer>

</body>

</html>