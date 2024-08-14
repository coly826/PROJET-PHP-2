<!-- check_stock.php -->
<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Stock disponible</title>
</head>
<body>
<marquee behavior="" direction=""><h1>Stock disponible ********* Stock disponible</h1></marquee>

    <h2>Stock disponible</h2>
    <table >
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Quantité</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo htmlspecialchars($product['id']); ?></td>
            <td><?php echo htmlspecialchars($product['name']); ?></td>
            <td><?php echo htmlspecialchars($product['quantity']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table><br><br>
    <div class="aa">
    <a href="dashboard.php">Retour pour verifier le stock</a>
    </div>
    <style>
             body{
              padding: 20px;
              background: linear-gradient(to right, blue,red,white,aqua,violet);
             }
             table{
                border:3px solid white;
                margin:auto;
             }
             th, td{
               
                padding: 10px 60px;
                font-weight: bold;
                color:blue;
                font-style:italic;
                border-collapse:collapse;              
             }
             h2{
                text-align:center;
             }
             tr:nth-child(even){
                background: linear-gradient(to right, orange, violet);  
             }
             tr:nth-child(odd){
                background-color: gainsboro;
                background: linear-gradient(to right, red, white,orange);
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
            a{             
               color:black;
               font-style:italic;
               font-weight: bold;
               text-decoration:none;
               text-align:center;
               background: linear-gradient(to right, blue,red,white,aqua,violet);
               padding: 20px 170px;
               margin:auto
             
              }
              .aa{
                display: flex;
                justify-content: center;
                align-items: center;
              }

    </style>
</body>
</html>
