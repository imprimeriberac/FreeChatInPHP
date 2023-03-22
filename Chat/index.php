<?php

require_once "src\control\Control.php";

$control = new Control();
$control->verifAjoutMessage();
$control->refreshMessage();
$control->afficherTemplate();
$control->verifAfficherMessage();
