<!doctype html>
<html lang="fr">
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="../model/assets/sass/bubble.css" media="screen" type="text/css" />
    </head>
    <body>
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            
            <div id="background-wrap">
                <div class="bubble x1"></div>
                <div class="bubble x2"></div>
                <div class="bubble x3"></div>
                <div class="bubble x4"></div>
                <div class="bubble x5"></div>
                <div class="bubble x6"></div>
                <div class="bubble x7"></div>
                <div class="bubble x8"></div>
                <div class="bubble x9"></div>
                <div class="bubble x10"></div>
                <div class="bubble x11"></div>
                <div class="bubble x12"></div>
                <div class="bubble x13"></div>
                <div class="bubble x14"></div>
                <div class="bubble x15"></div>
                <div class="bubble x16"></div>
                <div class="bubble x17"></div>
                <div class="bubble x18"></div>
                <div class="bubble x19"></div>
                <div class="bubble x20"></div>
                <div class="bubble x21"></div>
                <div class="bubble x22"></div>
                <div class="bubble x23"></div>
                <div class="bubble x24"></div>
                <div class="bubble x25"></div>
                <div class="bubble x26"></div>
                <div class="bubble x27"></div>
                <div class="bubble x28"></div>
                <div class="bubble x29"></div>
                <div class="bubble x30"></div>
            </div>


            <div id="container">
                <!-- zone de connexion -->
                <div class="form">
                    <h1>Connexion</h1>
                    <form method="post" action="../controllers/requetes.php?OperaPPE=4441524b2045434e454c4953">
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
