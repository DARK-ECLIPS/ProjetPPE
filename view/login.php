<!doctype html>
<html lang="fr">
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
    </head>
    <body>
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div id="container">
                <!-- zone de connexion -->
                <div class="form">
                    <h1>Connexion</h1>
                    <form method="post" action="../model/controllers/requetes.php?OperaPPE=login">
                        <input type="hidden" name="OperaPPE" value="login">
                        <div class="inputBox">
                            <input type="text" placeholder="Identifiant" name="pseudo" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Mot de passe" name="mdp" required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value='Connexion'>
                        </div>
                        <p class="forget">Mot de passe oublié ? <a href="#">Cliquez ici</a></p>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>