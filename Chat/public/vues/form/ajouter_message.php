<?php $e = $_SESSION["e"]; ?>
<form method="post">
    <input type="text" name="message" placeholder="Votre message ici . . ."> <br>
    <button type="submit" name="add">Envoyer</button>
    <button type="submit" name="ref">Refresh</button>
    <?= $e; ?>
</form>