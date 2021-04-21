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
    <h1>Learning php array</h1>

    <?php

    //! Create Array
    $fruits = ['Banana', 'Mango', 'Orange', 'Apple'];

    //! print the whole array
    var_dump($fruits);

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! get element by index
    echo $fruits[1] . '<br/>';

    //! set element by index
    $fruits[0] = 'Banana';

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! Check if array has element at specific index
    isset($fruits[3]); //false

    //! Append element
    $fruits[] = "jack fruits";

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! print the length of an array
    echo 'Length of fruits array = ' . count($fruits) . '<br/>';

    //! Add element at the end of the array
    array_push($fruits, 'foo');

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! remove element from the end of array
    echo  array_pop($fruits);
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! Add element at the beginning of the array
    array_unshift($fruits, 'bar');
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //! Remove element at the begining of the array
    echo array_shift($fruits);

    //! split the string into an array
    $string = "sajal, kajal, rana, mamun";
    echo '<pre>';
    var_dump(explode(',', $string));
    echo '</pre>';

    //! combine array element into string
    echo implode('+', $fruits);

    //! check if element exist in the array
    echo '<pre>';
    var_dump(in_array('Mango', $fruits));
    echo '</pre>';

    //! Search element index in the array
    echo '<pre>';
    var_dump(array_search('Apple', $fruits));
    echo '</pre>';

    //! Merge two array
    $vegetables = ['potato', 'cucumber'];
    echo '<pre>';
    var_dump(array_merge($fruits, $vegetables));
    echo '</pre>';

    //! Merge two array using spread operator
    // echo '<pre>';
    // var_dump([...$fruits, ...$vegetables]);
    // echo '</pre>';


    //! sorting of array (Reverse order also)
    echo '<pre>';
    sort($fruits);
    var_dump($fruits); //print
    echo '</pre>';

    //! sort reverse order
    echo '<pre>';
    rsort($fruits);
    var_dump($fruits); //print
    echo '</pre>';

    //TODO: Associative array
    //! Create an associative array [N.B: Associative array is stored keay value pairs way]
    $person = [
        'name' => 'sajal',
        'surname' => 'Khan',
        'age' => 28,
        'hobbies' => ['programming', 'playing', 'cooke']
    ];

    echo '<pre>';
    print_r($person);
    // var_dump($person);
    echo '</pre>';

    //! Get element by key
    echo $person['name'] . '<br/>';
    echo $person['hobbies'][0] . '<br/>';

    //! Set element by key
    $person['channel'] = 'soharub hossen';

    echo '<pre>';
    print_r($person);
    echo '</pre>';

    //! Null coalescing assignment operator
    // if (!isset($person['address'])) {
    //     $person['address'] = 'unknown';  //this is tredational way
    // }

    //using coalescing assignment--> we can do above  change using this way
    $person['address'] = $person['address'] ?? 'unknown'; // if person address is present then store it or store unknown
    // $person['address'] ??= 'unknown';

    echo '<pre>';
    print_r($person);
    echo '</pre>';

    //! print the keys of the array
    echo '<pre>';
    print_r(array_keys($person));
    echo '</pre>';


    //! print the values of the array
    echo '<pre>';
    print_r(array_values($person));
    echo '</pre>';

    //! Sorting associative arrays by value
    ksort($person); // sort by key
    asort($person); // sort by value

    echo '<pre>';
    print_r($person);
    echo '</pre>';

    ?>
</body>

</html>