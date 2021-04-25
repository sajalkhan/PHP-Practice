<?php include_once 'includes/header.php' ?>


<form action='pages/home.php' method='POST'>
    <!-- //!ai khane name ta important. name attribute diye data pass hocce ek page theke arek page a -->
    <input type='text' name='name' placeholder='user name' /> <br />
    <input type='password' name='password' placeholder='password' /> <br />
    <input type='submit' value='submit' />
</form>


<?php include_once 'includes/footer.php' ?>