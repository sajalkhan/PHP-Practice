<!--//! include file use korle jodi file er name vul ow hoy tar poro page break kore na nicher content show kore-->
<?php include 'partials/header.php' ?>
<!-- //!require file a jodi file er name correct na hoy tahole puro page a error show kore  -->
<!-- php require 'partials/header.php' -->
<!-- //!include_one user korle amra jodi multiple time same file include kori tar poro ekta file e include hobe -->
<!-- php include_once 'partials/header.php' -->

<h1>Learning php language</h1>
<h4>welcome to my landing page</h4>

<?php
require_once 'function/math.php';

echo sum(10, 20) . '</br>';

echo sub(20, 10) . '</br>';

?>

<?php include_once 'partials/footer.php' ?>