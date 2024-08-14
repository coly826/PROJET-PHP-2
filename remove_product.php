<!-- remove_product.php -->
<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare('SELECT quantity FROM products WHERE id = ?');
    $stmt->execute([$id]);
    $product = $stmt->fetch();

    if ($product && $product['quantity'] >= $quantity) {
        $stmt = $pdo->prepare('UPDATE products SET quantity = quantity - ? WHERE id = ?');
        $stmt->execute([$quantity, $id]);

        echo '<div><strong> Produit retiré avec succès✔✔👍</strong></div>';
    } else {
        echo '<h4>Quantité insuffisante</h4>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Retirer un produit</title>
</head>
<body>
   
    <marquee behavior="" direction=""><h1>Retirer un produit ********* Retirer un produit</h1></marquee>
    <form class="form2" action="remove_product.php" method="post">
    <h2>Retirer un produit</h2>
        <label for="id">ID du produit :</label>
        <input type="number" id="id" name="id" required>
        <br><br>
        <label for="quantity">Quantité à retirer :</label>
        <input type="number" id="quantity" name="quantity" required>
        <br>
        <button type="submit">Retirer</button>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
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
 
 padding: 66px 77px;
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
div{
   
   margin-left: 500px;
  }
  strong{
     color:white;
  }
  h4{
    margin-left: 500px;
    color:red;
    font-size:22px
  }
    </style>
</body>
</html>
