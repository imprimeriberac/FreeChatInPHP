<?php
if (!empty($_POST)) {
    $_SESSION["mdp"] = strip_tags($_POST["mdp"]);
    if ($_SESSION["mdp"] === "vhR8sBj3j2j2AaC423XE") {
        session_start();
        header("Location: ../../../");
        die("CACA");
    } else {
        die("ERREUR SERVEUR " . " \" " . $_SESSION["mdp"] . " \" ");
    }
}
?>
<form method="post">
    <input type="text" name="mdp">
    <input type="submit" value="Envoyer">
</form>