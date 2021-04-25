<?php include_once '../includes/header.php';

$name = $_REQUEST['name'];
$pass = $_REQUEST['password'];

echo $name;
if ($name === 'sajal') {
    header('Location: https://www.google.com'); //! from here we redirect to another location
}

include_once '../includes/footer.php';
