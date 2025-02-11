<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/bdconceptos/view/login.php");
exit();
?>