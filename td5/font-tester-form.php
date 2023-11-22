<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tester </title>
</head>
<body>
    <form method="POST">
        <input type="number" name="size">
        <input type="color" name="color">
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit">Valider</button>
    </form>

    <p style="color: <?=$_POST['color']??'black'?>; font-size: <?=$_POST['size']??'15'?>px"><?=$_POST['message']??''?></p>
</body>
</html>