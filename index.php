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
    <h1>Learning php file system</h1>


    <?php

    //TODO: read -> https://www.php.net/manual/en/book.filesystem.php

    //? Magic constants
    echo __DIR__ . '</br>'; //!eta file er exect location bolbe
    echo __FILE__ . '</br>'; //!eta current file er name and path dibe
    echo __LINE__ . '</br>'; //!eta file er kon line a likci seta bolce

    //? create Directory
    // mkdir('test'); //! eta test name ekta folder create korbe

    //? rename directory
    // rename('test', 'test2'); //! eta folder er name rename korbe

    //? delete directory
    // rmdir('test2'); //! eta folder remove korbe

    //? read file and folders inside directory
    echo file_get_contents('test/lorem.txt'); //! eta file theke data niye read kore

    //? Read files and folders inside directory
    $files = scandir('./'); //! eta ai directory te thaka sob file er list array akare dibe

    echo '<pre>';
    print_r($files);
    echo '</pre>';

    //? file_get_contents, file_put_contents
    file_put_contents('test/sample.txt', 'here i have create a new file '); //! etar ekta specific directory te file create korbe and shate data store ow kora jabe
    echo file_get_contents('test/sample.txt'); //! eta file read korbe

    //? file_get_contents from url
    $api_data = file_get_contents('https://jsonplaceholder.typicode.com/todos/1');

    echo '<pre>';
    echo $api_data;
    echo '</pre>';

    //? convert json data to array
    // $user = json_decode($api_data); //!eta oi json take object array te convert korbe
    $user = json_decode($api_data, true); //! eta json take associative array akare store korbe 

    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    //? check file is exists or not
    echo file_exists('test/sample.txt') . '<br/>'; //! eta return korbe true
    echo is_dir('test') . '</br>'; //! jodi ai name kono folder thake then retun true


    ?>
</body>

</html>