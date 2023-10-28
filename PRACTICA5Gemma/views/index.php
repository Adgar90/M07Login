<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvi d'idioma</title>
</head>
<body>
    <?php
        
            if ($_COOKIE["language"] == "cat") {
                header("Location: login.html");
            }else if ($_COOKIE["language"] == "en") {
                header("Location: loginEN.html");
            }else if ($_COOKIE["language"] == "es") {
                header("Location: loginES.html");
            }
        
    ?>

    <table width="25%" border="0" align="center">
        <tr>
            <td> Escull idioma </td>
        </tr>
        <tr>
            <td align="center"><a href="crearCookie.php?lang=cat"><img src="catalunya.png" height="50px" width= "50px"></a><h1> CATALÀ </h1> </td>
            <td align="center"><a href="crearCookie.php?lang=es"><img src="espana.png" height="50px" width= "50px"></a><h1> ESPAÑOL </h1> </td>
            <td align="center"><a href="crearCookie.php?lang=en"><img src="reino-unido.png" height="50px" width= "50px"></a><h1> ENGLISH </h1> </td>
        </tr>
    </table>
</body>
</html>