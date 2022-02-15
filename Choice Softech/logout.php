<?php
session_start();
SESSION_DESTROY();
header("Location:index.php");
//alert(echo "logout successfully...!!!";);
?>