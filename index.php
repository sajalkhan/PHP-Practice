<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Learning php language</h1>
    <?php

    //Declaring numbers
    $a = 4;
    $b = 5;
    $c = 6;

    //Arihmetic operations
    echo 'Arithmetic operations: <br/>';
    echo ($a + $b) * $c . '<br/>';
    echo ($a + $b) . '<br/>';
    echo ($a - $b) . '<br/>';
    echo ($a * $b) . '<br/>';
    echo ($a / $b) . '<br/>';
    echo ($a % $b) . '<br/>';


    //Assignment with math operator
    echo 'Assignment with math operator: <br/>';
    $a += $b;
    echo $a . '<br/>';
    $a -= $b;
    echo $a . '<br/>';
    $a *= $b;
    echo $a . '<br/>';
    $a /= $b;
    echo $a . '<br/>';
    $a %= $b;
    echo $a . '<br/>';

    //number checking function
    is_int(4); //true
    is_float(1.3); //true
    is_double(1.33); //true
    is_numeric('3.12'); //true
    is_numeric('3g.12'); //false

    //type casting
    echo 'type casting: ' . '<br/>';
    $stringNumber = '14.455';
    $number = (float)$stringNumber;
    var_dump($number);

    echo '<br/>';
    $number = (int)$stringNumber; // way 1
    var_dump($number);

    echo '<br/>';
    $number = intval($stringNumber);  // way 2
    var_dump($number);

    echo '<br/>';
    $number = doubleval($stringNumber);
    var_dump($number);

    //number 
    echo '<br/> <br/> number functions: <br/>';
    echo 'abs(-15) ' . abs(-15) . '<br/>';
    echo 'pow(2, 3) ' . pow(2, 3) . '<br/>';
    echo 'sqrt(16) ' . sqrt(16) . '<br/>';
    echo 'max(2, 4) ' . max(2, 4) . '<br/>';
    echo 'min(2, 4) ' . min(2, 4) . '<br/>';
    echo 'round(3.4) ' . round(3.4) . '<br/>';
    echo 'round(3.6) ' . round(3.6) . '<br/>';
    echo 'floor(2.6) ' . floor(2.6) . '<br/>';
    echo 'ceil(2.6) ' . ceil(2.6) . '<br/>';

    //formating number
    //!https://www.php.net/manual-lookup.php?pattern=numbers&scope=quickref

    echo '<br/> <br/> Formating number: <br/>';
    $number = 123213213.8999000;
    echo number_format($number, 2, '.', ',') . '<br/>';
    echo number_format($number, 2, ',', '.');

    ?>
</body>

</html>