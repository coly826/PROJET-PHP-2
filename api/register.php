<!-- register.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <form class="form1" action="" method="post">
       <h2>Inscription</h2>
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
        <button type="submit">S'inscrire</button>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;ou
       <a class="ax" href="login.php">Se connecter si vous avez un compte</a>
    </form>
    <style>
        body{
            background: linear-gradient(to right, blue,red,violet,blue,aqua,violet,blue);
            padding: 104px;
        }
        div{
          margin-top: -84px;
          margin-left: 500px;
          color:blue;
         }        

  
.form1{
    border-bottom: 2px;
    background-color: white;
    width: 598px;
    padding: 22px;
    margin: auto;
    text-align: center;
    border: 3px solid orange;
    box-shadow: 0 0 12px orangered;
    
}
 .form1 h2{
   text-align: center;
   color: blue;
   font-style: italic;
   font-size: 43px;
}
.form2 h2{
  text-align: center;
  color: blue;
  font-style: italic;
  font-size: 43px;
}
 .form1 input{
    padding: 13px 150px;
    font-style: italic;
    box-shadow: 0 0 12px gray;
    color: blue;
    border: none;
    outline: none;
    font-size: 22px;
    margin-left: -32px;
   
}
.dropdown-content{
  display: none;
  position: absolute; 
  margin-left: 400px;
  margin-top: -12px;
  list-style: none;
}
ul .dropdown{
 list-style: none;
}
.dropdown-content a{
  text-decoration: none; 
}
.dropdown-content p{
  color: gray;
}
.dropdown:hover .dropdown-content{
display: block;
}
strong{
  color: blue;
  margin-top: -400px;
}
.div2{
  color: red;
  background-color: gray;
}
  .form1 button{
  padding: 12px 44px;
  margin-top: -12px;
  margin-left: -20px;
  box-shadow: 0 0 12px gray;
  background-color: white;
  border: none;
  font-weight: bold;
  color: blue;
  font-style: italic;
  font-size: 20px;
}

.form1 .label1{
  margin-left: -370px;
  color: blue;
   font-style: italic;
   font-weight: bold;
   font-size: 22px;
}
.form1 .label2{
   margin-left: -410px;
   font-size: 22px;
   color: blue;
   font-style: italic;
   font-weight: bold;
}
 .form1 .ax{
   margin-left: 35px;
   color: orange;
   font-style: italic;
   font-weight: bold;
   font-size: 15px;
}
.form1 .ax{
 text-decoration: none;
}
 .form1 .ax:hover{
   border-bottom: 4px solid green;
   font-weight: bold;
}
p{
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
@media screen and (max-width: 768px){
  .form1{
    width: 100%;
  }
}
        @media screen and (max-width: 768px) 
        {
            .form1{
                width: 100%;
               
            }
        }
        @media screen and (max-width: 420px) 
        {
            .form1{
                width: 100%;
                padding: 40px;               
            }
        }
    </style>    
</body>
</html>
<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    if ($stmt->execute([$username, $password])) {
        echo ' <div><strong> Utilisateur enregistré avec succès</strong><?div>';
    } else {
        echo 'Erreur lors de l\'inscription';
    }
}
?>

<!--
CREATE DATABASE magasin;

USE magasin;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    montants INT NOT NULL
);
-->
