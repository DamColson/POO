<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        for($i = 1;$i<8;$i++){
            ?>
        <p><a href=<?='Exercice'.$i.'/index.php'?>><?= 'Exercice '.$i?></a></p>
        <?php
        }
        ?>
    </body>
</html>
