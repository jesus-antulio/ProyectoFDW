<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposteria | Productos </title>
    <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/product.css">
    <link rel="stylesheet" href="../styles/compartido.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="banner"></div>

    <div class="container">
        <h1>Productos</h1>
        <div class="flex-container">
            <?php
                echo "
                <div class='producto'>
                    <div class='producto-img'>
                        img
                    </div>
                    <div class='producto-info'>
                        <h2>Producto 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                        <a href='#'>Ver más</a>
                        <label>$$$</label>
                    </div>
                </div>";
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>