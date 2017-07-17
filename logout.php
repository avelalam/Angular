<?php
session_start();
session_destroy();
echo" You are logged out";
echo"
<html>
<p> Go To 
<a href='index'> Index </a> </p>
</html>
"
?>