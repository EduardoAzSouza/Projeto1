<?php
session_start();
if(!$_SESSION['usuario']){
    header('Location: ../admLogin.html');
    exit();
}