<?php include_once '../includes/header.php';

$name = $_REQUEST['name'];
$pass = $_REQUEST['password'];

// if ($name === 'sajal') {
//     header('Location: https://www.google.com'); //! from here we redirect to another location
// }

//! pass home page data to about page and add necessary logic in that page
if ($name === 'sajal') {
    //* 1st way
    // header('Location: about.php?name=' . $_REQUEST['name'] . '&password=' . $_REQUEST['password']);

    //* 2nd way and safe
    $info = array(
        'name' => $_REQUEST['name'],
        'password' => $_REQUEST['password']
    );

    $query = http_build_query($info);
    header('Location: about.php?' . $query);
}

include_once '../includes/footer.php';
