<!-- dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title> 
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>    
    <ul class="dasbord">
    <h2><a href="dashboard.php">&ensp;Dashboard</a></h2>
        <li><a href="add_product.php">Ajouter un produit</a></li>
        <li><a href="remove_product.php">Retirer un produit</a></li>
        <li><a href="check_stock.php">Vérifier le stock</a></li>
        <li><a href="logout.php">Deconnexion</a></li>
    </ul>
    <div class="divn">
        <div><img src="images/L2.png" alt="">
     </div>
     <div>
       <h1>BIENVENUE <br> DANS NOTRE <br> TRABLEAU  DE BORD</h1>
     </div>
    </div>
    <style>
 body{
  background: linear-gradient(to right, blue,violet,red,aqua,violet,blue);
}
.dasbord{
    display: flex;
    list-style: none;
    align-items: center;
    justify-content: center;
}
.dasbord h2 a{
text-decoration: none;
font-weight: bold;
font-size: 26px;
color: white;
}
.dasbord h2{
    border-bottom: 9px solid white;
    border-bottom-left-radius: 30px;
}
h1{
    color:white;
}
.dasbord li{
    padding: 25px;
}
.dasbord li a{
    text-decoration: none;
    font-size: 25px;
    color: white;
}
li::after{
         content: '';
         display: block;
         position: absolute;
         width: 0%;
         left:1px;
         height: 3px;
         margin: 0 auto;
         background: white;
         
         align-items: center;
         justify-content: center;
         transition: width 2s ease-in-out;

        }
        li:hover::after{
            width: 14%;
        }

        .divn {
            display:flex;
            justify-content:center;
            align-items:center;
        }
        @media screen and (max-width: 768px) 
        {
            .dasbord{
    display: inline-block;
    list-style: none;
    align-items: center;     
        }
    }
    </style>
</body>
</html>
