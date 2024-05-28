<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cs.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="js/java.js"></script>
</head>
<body>
<div class="place">
<a href="gamesPC.html" ><img src="image/games.jpg" alt="Каталог компьютеров для игр" class="img1"></a>
        <a href="programsPC.html" ><img src="image/progi.jpg" alt="Каталог компьютеров для работы с программами" class="img2"></a>

    <div class="content">
        <?php
            include 'connect/content.php';
        ?>
    </div>


    <div class="fon"></div>
        <div class="fon2"></div>
        <div class="rovnost">
        <div class="header">
            <div class="logo">
            <a href=""><!--<h1>PCstore</h1>--><img src="image/logo.png" class="logoL"></a>
            </div>

            <?php
            /*session_name("WebPC");
            session_start();*/
            echo "<div class='menu'>
                <a href='polzovatel/index.php' class='adel'><h3>".$_GET["email"]." Войти</h3></a>
            </div>
            <div class='menu'>
                <a href='reg/index.php' class='adel'><h3>Зарегистрироваться</h3></a>
            </div>
            <div class='noone'>
            <div class='menu'>
                <a href='catalog/index.php' class='adel'><h3>Каталог</h3></a>
            </div></div>
            <!--<div class='menu'>
                <h3>Корзина</h3>
            </div>-->
        </div>
        </div>";
        ?>

    <div class="footer">
        <div class="textGL">Ⓒ Все права защишены.</div>
    </div>

    

</div>

    
</body>
</html>