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
    <!-- ---- https://www.php.net/manual/en/ref.strings.php ---->
    <h1>Learning php string</h1>

    <?php

    //? https://www.php.net/manual/en/ref.strings.php //

    //!create a simple string 
    $name = 'sajal';
    $data = "hello $name. how are you?";
    $data2 = 'hello $name. how are you?';

    echo $data . '<br/>';
    echo $data2 . '<br/>';

    //!string concatenation
    echo 'Hello' . ' world' . ' php ' . '<br/>';

    //!string functions
    echo '<h3>String functions</h3>';
    $example = "    Hello world     ";

    echo "1 - " . strlen($example) . '<br/>';
    echo "2 - " . trim($example) . '<br/>'; //remove space from both side
    echo "3 - " . ltrim($example) . '<br/>'; // remove space from left side
    echo "4 - " . rtrim($example) . '<br/>'; //remove space from right side
    echo "5 - " . str_word_count($example) . '<br/>';
    echo "6 - " . strrev($example) . '<br/>';
    echo "7 - " . strtoupper($example) . '<br/>';
    echo "8 - " . strtolower($example) . '<br/>';
    echo "9 - " . ucfirst('hello') . '<br/>'; // make first char to uppercase
    echo "10 - " . lcfirst('HELLO') . '<br/>'; // make first char to lowercase
    echo "11 - " . ucwords($example) . '<br/>'; // convert first char of word to uppercase
    echo '12 - ' . strpos($example, 'world') . '<br/>'; //find the current index of that string
    echo '13 - ' . strpos($example, 'World') . '<br/>'; //find the current index of that string
    echo '14 - ' . stripos($example, 'WORLD') . '<br/>'; // search world from whole string but make it lowercase then search
    echo '15 - ' . substr($example, 8) . '<br/>'; // substring 0-8 char
    echo '16 - ' . str_replace('world', 'php', $example) . '<br/>'; // replace word to php from 'hello world';
    echo '17 - ' . str_replace('World', 'php', $example) . '<br/>'; // here World isn't present in our sentence so it will not replace
    echo '18 - ' . str_ireplace('WORLD', 'php', $example) . '<br/>'; // replace Word to php from 'hello world' here we use i for make those string lowercase then replace;

    //! Multiline text and line breaks
    echo '<h3>Multiline text and line breaks</h3>';

    $longtext = " Hello my name is sajal
    i live in dhaka
    i work as a software engineer";

    $longtext2 = " Hello my name is <b>sajal</b>
    i live in dhaka
    i work as a <b>software engineer</b>";

    echo "<b>1)</b> - " . $longtext . '<br/>';
    echo "<b>2)</b> - " . nl2br($longtext) . '<br/>'; // it's give a line break if there is any enter between text
    echo "<b>3)</b> - " . nl2br($longtext2) . '<br/>';
    echo "<b>4)</b> - " . htmlentities($longtext2) . '<br/>'; //it's show all html attribute inside text element
    echo "<b>5)</b> - " . nl2br(htmlentities($longtext2)) . '<br/>';

    ?>
</body>

</html>