<?php
 define('AFFICHE','ch1');
 $ch1 = '<p>hello</p>';
 $ch2 = '<p>bonjour</p>';
 $ch3 = '<p>salut</p>';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>PHP page</title>
</head>
<body>
    <p>safwen haboubi</p>
    <?php
    $test="safwen";
    echo $test;
    $maVariable = 123;
    echo $maVariable;
    $maVariable = false;
    echo $maVariable;
    $maVariable = 3.1415;
    echo $maVariable;
    $maVariable = "bonjour";
    echo $maVariable;  ?>
    <br/>
    <?php
 $T =[2,3,4];
 print_r($T);
 $personne = array("nom"=>"safwen","prenom"=>"haboubi");
 print_r($personne);
    ?>
<br>
<?php
    if(AFFICHE=='ch1'){echo $ch1;}
    else if (AFFICHE=='ch2'){echo $ch2;}
    else if (AFFICHE=='ch3'){echo $ch3;}
    ?>
</body>
</html>