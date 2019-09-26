  
<?php
    session_start();
    if (@!$_SESSION['picaud_id']) {
        header('Location:./login.php');
    }
?>