<?php include_once '../includes/header.php';

// ! $_POST variable use korle url a submit kora info show kore na tokhon $_POST eta diye data dhorte hobe
echo 'name:' . $_POST['name'] . '</br>';
echo 'password: ' . $_POST['password'] . '</br> <br/>';

//! $_REQUEST ai attribut automatically buje j eta get/post method diye data astece
echo 'request name: ' . $_REQUEST['name'] . '</br>';
echo 'request password: ' . $_REQUEST['password'] . '</br> </br>';

echo "<a href='https://www.google.com'>{$_POST['name']}</a>" . '</br> </br>';

include_once '../includes/footer.php';
