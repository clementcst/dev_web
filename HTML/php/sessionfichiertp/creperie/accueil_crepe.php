<!DOCTYPE html>
<html>

    <head>
    <title>Vous voici chez le marchant de crêpe</title>
    <meta charset="utf_8">
    </head>
    <body>
    <center><p>Bienvenue chez le creprier CYCREPE</p></center>
    <center><p>Ici vous pouvez commander entre 1 et 99 crêpe, à voir selon le stock de la creperie</p></center>
    <form action="traitement_crepe.php" method="post">
    <lable for="crepe" > Combien de crêpe(s) désirez vous commander ?</label>
    <input type="text" name="nombre_crepe"/>
    <input type="submit" name="valider" value="Confirmer"/>
    </form>
    </body>
</html>