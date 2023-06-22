<?php
include('includes/header.php');

session_destroy();// funzione che distrugge la sessione

header('Location: /cms');
die();