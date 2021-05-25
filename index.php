<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="email.php" method="POST">
    
        <label for="nombre">Tu Nombre:</label>
        <input id="nombre" type="text">
        
        <label for="email">Tu Email:</label>
        <input id="email" type="text">

        <label for="asunto">Asunto:</label>
        <input id="asunto" type="text">

        <label for="texto">Mensaje:</label>
        <textarea name="texto" id="texto" cols="30" rows="8"></textarea>

        <button type="submit">Enviar Mensaje</button>

    </form>
</body>
</html>