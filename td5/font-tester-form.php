<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tester</title>
</head>
<body>
    <?php 
        $color = $_POST['color']??'';
        $size = $_POST['size']??10;
        $message = $_POST['message']??'';

        if(isset($_POST['sizevar'])){
            $sizevar = $_POST['sizevar'];
            if($sizevar == '+'){
                $size++;
            }
            else{
                $size--;
            };
        };
        
    ?>
    <form method="POST">
        <input type="number" name="size" value="<?=$size?>">
        <input type="color" name="color" value="<?=$color?>">
        <textarea name="message" id="message" cols="30" rows="10"><?=$message?></textarea>
        <button type="submit">Valider</button>
        <button type='submit' name="sizevar" value='+'>+</button>
        <button type='submit' name="sizevar" value='-'>-</button>
    </form>
    <p style="color: <?=$color?>;font-size: <?= $size?>px"><?=$message?></p>
</body>
</html>