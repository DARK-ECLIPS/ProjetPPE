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
                    <form action="verification.php" method="POST">
                        <h1>Connexion</h1>
                        <div class="inputBox">
                            <input type="text" placeholder="Identifiant" name="userID" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Mot de passe" name="password" required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" id='submit' value='Connexion'>
                        </div>
                        <p class="forget">Mot de passe oublié ? <a href="#">Cliquez ici</a></p>
                        <?php
                        if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>