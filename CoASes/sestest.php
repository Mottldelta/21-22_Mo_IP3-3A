<?php
session_start();

echo $_SESSION['uzivatel'];
session_unset();
session_destroy();
?>