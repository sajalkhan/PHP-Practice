<?php include_once '../includes/header.php';

// ! $_Files variable diye amra url a asa data get korbo
//! files er data associative array

$data = $_FILES['userImage'];

echo '<pre>';
print_r($data);
echo '</pre>';

//! upload file
if (!empty($data['name'])) {

    $loc = "../uploads/";

    if (move_uploaded_file($data['tmp_name'], $loc . $data['name'])) {
        echo 'File Uploaded Successfully! <br/> <br/>';

        $path = $loc . $data['name'];
        echo "<img src='$path' width='50%' height='50%'/>";
    }
} else {
    echo 'File not found.';
}


include_once '../includes/footer.php';
