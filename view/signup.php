<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Enregistrez-vous !</title>
        <link rel="stylesheet" href="../assets/style/style.css">
    </head>
    <body>
        <section class="signUp">
            <form class="signUp" action="../index.php" method="post">
                Nom d'utilisateur:<input type="text" name="username" value="">
                Mot de passe:<input type="text" name="password" value="">
                Confirmez le mot de passe:<input type="text" name="passwordConfirm" value="">
                Email:<input type="mail" name="mail" value="">
                Combien font 3+2 ?:<input type="text" name="honeypot" value="">
                <button type="send" name="log">S'enregistrer</button>
            </form>
        </section>
    </body>
</html>
