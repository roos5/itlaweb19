
<?php

session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: http://localhost/htdocs/codes2/modulo5/login.html');

?>