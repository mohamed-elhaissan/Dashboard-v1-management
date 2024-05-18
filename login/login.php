<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../assestes/Logo.png" type="image/png">
    <title>Login</title>
</head>
<body>
    <form method="post" action="verfiy.php">
        <img src="../assestes/logo.svg" >
        <p>Merci d'entrer vos informations de connexion</p>
        <div>
            <label >Email</label>
            <input type="email" placeholder="Entrer  Email" required>
            <label >Password</label>
            <input type="password" placeholder="Entrer  password" required>
            <a href="#">Mot de passe oublié ?</a>
            <button>Se connecter <ion-icon name="arrow-forward-outline"></ion-icon> </button>
            <p>Vous n’avez pas de compte ? <a href="#" id="create">Créer un compte</a></p>
        </div>
    </form>
    <form method="post" action="insert.php">
        <img src="../assestes/logo.svg" >
        <p>Merci d'entrer vos informations de connexion</p>
        <div>
            <label >nom</label>
            <input type="text" placeholder="Entrer votre nom" required>
            <label >Adresse e-mail</label>
            <input type="email" placeholder="Enter  Email" required>
            <label >Téléphone</label>
            <input type="tel" placeholder="Entrer  téléphone" required>
            <label >mot de passe </label>
            <input type="password" placeholder="Entrer  password" required style="margin-bottom: 10px;">
            
            <button>S’inscrire <ion-icon name="arrow-forward-outline"></ion-icon> </button>
            <p>Vous possedez déjà un compte ?  <a href="#" id="connecter">Se connecter</a></p>
        </div>
    </form>

    







    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>