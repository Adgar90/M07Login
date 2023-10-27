<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language</title>
    <style>
        h1, img {
            padding:25px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_COOKIE["lang"])) {
        if ($_COOKIE["lang"] == "es") {
            header("Location: views/login_es.html");
        } else if ($_COOKIE["lang"] == "en") {
            header("Location: views/login_en.html");
        } else if ($_COOKIE["lang"] == "cat") {
            header("Location: views/login_cat.html");
        }
    }
    ?>
    <table width="25%" border="0" align="center">
        <tr>
            <td align="center">
                <a href="creaCookie.php?idioma=cat"><img src="icons/icon_cat.png"></a>
                <h1>CATALÀ</h1>
            </td>
            <td align="center">
                <a href="creaCookie.php?idioma=es"><img src="icons/icon_es.png"></a>
                <h1>ESPAÑOL</h1>
            </td>
            <td align="center">
                <a href="creaCookie.php?idioma=en"><img src="icons/icon_en.png"></a>
                <h1>ENGLISH</h1>
            </td>
        </tr>
    </table>
    
    
    	
</body>
</html>