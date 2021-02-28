<?php
session_start();

session_destroy();
echo "<script>window.open('vardhaman/login.php')</script>"
?>