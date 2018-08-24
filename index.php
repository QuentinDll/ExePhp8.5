<?php
// declaration du tableaux
$month = array (
  'janvier',
  'février',
  'mars',
  'avril',
  'mai',
  'juin',
  'juillet',
  'aout',
  'septembre',
  'octobre',
  'novembre',
  'décembre'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <ul>
        <?php
        // declaration de la boucle for
        foreach ($month as $element)
        {
            echo $element .' ';
        }
        ?>
        </ul>
    </body>
</html>
