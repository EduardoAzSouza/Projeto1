<?php
session_start();
unset($_SESSION['usuario']);
header('Location: ../admLogin.html');
exit();
