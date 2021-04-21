<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!------------- Documentation -------------->
    <!-- ---- https://www.php.net/manual/en/ ---->
    <h1>Learning php functions</h1>

    <?php

    //! create a simple function 

    function userName($name)
    {
        echo "Hello  $name" . '<br/>';
    }

    userName('sajal');

    //! create sum of two functions
    function add($a, $b)
    {
        return $a + $b;
    }

    echo add(1, 2) . '<br/>';


    //! create a function to sum all number using ...$num spread operator

    function sum(...$num)
    {
        $result = 0;
        //! way 1
        // for ($i = 0; $i <= count($num); $i++) {
        //     $result += $i;
        // }

        //!way 2
        foreach ($num as $n) {
            $result += $n;
        }

        //!way 3
        // return array_reduce($num, fn ($carry, $n) => $carry + $n); // support php version above 7,0


        echo $result;
    }

    sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    ?>
</body>

</html>