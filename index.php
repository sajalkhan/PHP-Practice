<?php include_once 'includes/header.php' ?>


<form action='pages/home.php' method='POST' enctype='multipart/form-data'>
    <!-- //* ai khane name ta important. name attribute diye data pass hocce ek page theke arek page a -->
    <input type='file' name='userImage' />
    <input type='submit' value='submit' /> <br /> <br />
</form>


<?php include_once 'includes/footer.php' ?>