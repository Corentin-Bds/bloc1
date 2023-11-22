<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font tester</title>
</head>
<body>
    <?php 
        if(empty($_GET)){
            die("Erreur: Rien dans l'url");
        }
        $message = $_GET['message']??'Hello';
        $color = $_GET['color']??'black';
        $size = $_GET['size']??'12'
    ?>
    <ul>
        <li><a href="?message=Rouge en 15&color=red&size=15">Rouge en 15</a></li>
        <li><a href="?message=Vert en 30&color=green&size=30">Vert en 30</a></li>
        <li><a href="?message=Bleu en 50&color=blue&size=50">Bleu en 50</a></li>
    </ul>
    
    <p style="color:<?=$color?>; font-size:<?=$size?>px"><?=$message?></p>
</body>
</html>