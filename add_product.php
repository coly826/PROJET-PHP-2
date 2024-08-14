<!-- add_product.php -->
<?php
require 'db.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare('INSERT INTO products (name, quantity) VALUES (?, ?)');
    $stmt->execute([$name, $quantity]);

    echo '<div class="divx">Produit ajouté avec succès✔✔👍</div>';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="add_produc.css">
</head>
<body>
    <marquee behavior="" direction=""><h1>Ajouter un produit ********* Ajouter un produit</h1></marquee>
    
    <form class="form2" action="add_product.php" method="post">
    <h2>Ajouter un produit</h2>
        <label for="name">Nom du produit :</label><br>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="quantity">Quantité :</label><br>
        <input type="number" id="quantity" name="quantity" required>
        <br>
        <button type="submit">Ajouter</button>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <button><a href="dashboard.php">Retour pour verifier le stock</a></button>
    </form>

    <style>
        body{
    padding: 80px;
    background: linear-gradient(to right, blue,red,violet,blue,aqua,violet,blue);
}

h2{
    text-align:center;
    color:#0000ff;
    text-transform: uppercase;
    font-style:italic;
    
    
}

h1{
    text-align:center;
    color:white;
    text-transform: uppercase;
    font-style:italic;
    
    
}

.form2{
 margin:auto;
 background-color: white;
 width: 500px;
 padding: 63px 73px;
}

label{
    color:blue;
    font-weight: bold;
    font-style:italic;
}

.form2 input{
font-size: 40px;
border:2px solid blue

}

.form2 button{
    padding: 14px 50px;
    margin-top: 20PX;
    background: blue;
    color:white;
    font-style:italic;
    font-weight: bold;
}
.form2 button a{
    text-decoration:none;
    color:white;
    font-style:italic;
    font-weight: bold;

}
.divx{
   text-align: center;
   color: white;
   font-weight: bold;
   font-size:22px
    
}
    </style>
</body>
</html>
