<!-- login.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body1">
   
    <form class="form2" action="authenticate.php" method="post">
    <h2>Connexion</h2>
    <label class="label1" for="username">Nom d'utilisateur :</label>
        <ul>
        <li class="dropdown">
        <input type="text" id="username" name="username" placeholder="Veillez saisir votre email" required>
        <ul class="dropdown-content">
                        <li>
                                <p> Veillez saisir votre email</p>
                            </li>
                       
                    </ul>
                </li>
                </ul>         
        <label class="label2" for="password">Mot de passe :</label>
        
        <br><ul>
        <li class="dropdown">
        <input type="password" id="password" name="password" placeholder="Veillez saisir votre m de pass" required>                   
                    <ul class="dropdown-content">
                        <li>
                                <p> Veillez saisir votre m de pass</p>
                           </li>                     
                    </ul>
                </li>
                </ul>
        <br>
        <button type="submit">Se connecter</button>&ensp;&ensp;&ensp; ou
       <a class="ax" href="register.php">S'inscrire si vous avez pas un compte</a>
    </form>
    <style>
         body{
            background: linear-gradient(to right, blue,red,violet,blue,aqua,violet,blue);

        }

    </style>
</body>
</html>
