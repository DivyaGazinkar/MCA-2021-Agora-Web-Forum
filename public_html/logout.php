<?php


session_start();
if (session_destroy())
{
   // header("Location: index.php")
    echo '<meta http-equiv="refresh" content="0;url=index.php" />';
}

?>