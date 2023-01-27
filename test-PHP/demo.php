<!--exercice 0-->
<?php

$var = 5;
echo "$var";

?>

<!--exercice 1-->
<?php

$word = "c'est";
$word2 = "vie.";
$word3 = "Simplon";
$word4 = "la";
echo "$word3 $word $word4 $word2";

?>

<!--exercice 2-->
<?php

$variable1=12;
$variable2=4;
echo $variable1 / $variable2;

?>

<!--exercice 3-->
<?php

$var="clement";
$var1= "extrapolation";
echo strlen($var . $var1);

?>

<!--exercice4-->
<?php

$maitrise_du_code = 1000;
if ($maitrise_du_code >= 1000);
echo "je maitrise tellement le code maintenant";

?>

<!--exercice 5-->
<?php

$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;

$chiffre_fetiche_andre = $chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = $chiffre_fetiche_andre;
echo $chiffre_fetiche_sandrine;
echo $chiffre_fetiche_xavier;

if ($chiffre_fetiche_sandrine -($chiffre_fetiche_andre + $chiffre_fetiche_xavier) < 50) {
    echo $chiffre_fetiche_sandrine -($chiffre_fetiche_andre + $chiffre_fetiche_xavier);
}

?>

<!--exercice 6-->
<?php

$compte = -100;
if ($compte > 0){;
echo "Bravo, vous êtes un bon gestionnaire";
}else {
echo "Vous faites vraiment n'importe quoi avec votre argent";
}
?>

<!--exercice 7-->
<?php

$vent = 50;
$houle = 10;
$cadence_vague = 0;

if ($vent > 30 && $houle <= 20 && $cadence_vague >= 10) {
    echo "On peut aller Surfer";
} else if ($vent < 30 && $houle <= 30 && $cadence_vague <= 8) {
    echo "On peut aller Surfer";
} else {
    echo "les conditions ne sont pas bonnes pour aller surfer";
}

?>

<!--exercice 8-->
<?php

$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;

function isMultiple($nbr1, $nbr2) {
    if($nbr1 % $nbr2 == 0) {
        return $nbr1;
    } else {
        return $nbr1 * -1;
    }
}

$result = isMultiple($nombre_1, 2) + isMultiple($nombre_2, 2) + isMultiple($nombre_3, 2) + isMultiple($nombre_4, 2) + isMultiple($nombre_5, 2) + isMultiple($nombre_6, 2);
echo $result;
?>