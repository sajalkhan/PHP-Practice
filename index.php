<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo 'welcome to php <br/>';
    echo 'hello world from php';

    //variables types
    /**
        string
        integer
        float/double
        boolean
        null
        array
        object
        resource
     */

    //declare variable
    $name = 'sajal';
    $age = 28;
    $isMale = true;
    $price = 150.50;

    //print variable
    echo '<br/> <br/>';
    echo 'Name: ' . $name . '<br/>'; //! here .  this dot will concanate/add those two value
    echo 'Age: ' . $age . '<br/>';
    echo 'Is Male?: ' . $isMale . '<br/>'; //! when we concanate a boolean value with string it return true for 1 and false for null
    echo 'Price: ' . $price . '<br/>';

    //print type of a variable
    echo gettype($name) . '<br/>';
    echo gettype($age) . '<br/>';
    echo gettype($isMale) . '<br/>';
    echo gettype($price) . '<br/>';

    //print the whole variable
    var_dump($name, $age, $isMale, $price);

    //variable checking function
    is_int($age); //true
    is_int($name); //false
    is_string($name); // true
    is_bool($isMale); // true
    is_float($price); // float

    echo '<br/> check is_int return type: ' . is_int($age) . '<br/>';

    //check if variable is defined
    isset($name); //true
    isset($address); //false

    // constants
    define('PI', 3.14);
    echo PI . '<br/>';

    //using php default constant
    echo SORT_ASC . '<br/>';
    echo PHP_INT_MAX . '<br/>';

    ?>
</body>

</html>