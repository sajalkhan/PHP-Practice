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
    <h1>Learning php Date</h1>

    <?php

    //print current date
    echo date('Y-m-d H:i:s') . '</br>';

    //print yesterday
    echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '</br>';
    echo date('d.m.Y H:i:s', strtotime('-1 days')) . '</br>';
    echo date('d.m.Y', strtotime('-1 days')) . '</br>';

    //Different format
    echo date('F j Y, H:i:s') . '</br>';

    // Print current timestamp
    echo time() . '</br>';

    //parse date
    $parseDate = date_parse('2020-10-12 09:00:00');
    echo '<pre>';
    print_r($parseDate);
    echo '</pre>';

    //parse date from format
    $dateString = 'February 4 2020 12:45:35';
    $parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
    echo '<pre>';
    print_r($parseDate);
    echo '</pre>';

    ?>
</body>

</html>