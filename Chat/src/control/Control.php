<?php

require_once "src/model/ModelMessagerie.php";

use Model;

class Control
{
    public function refreshMessage()
    {
        if (isset($_POST["ref"])) {
            unset($_POST);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
    function afficherTemplate()
    {
        require_once "public/vues/template/header.php";
        require_once "public/vues/form/ajouter_message.php";
        require_once "public/vues/template/footer.php";
        // switch ($_GET["page"]) {
        //     case "";
        //         break;
        //     case "";
        //         break;
        //     default;
        //         break;
        // }
        // require_once "../../public/vues/form/ajouter_message.php";
        // require_once "../../public/vues/template/footer.php";
    }
    function verifAjoutMessage()
    {
        $model = new ModelMessagerie();
        $message = strip_tags($_POST["message"]);
        if (strlen($message) >= 1 && strlen($message) <= 250) {
            if (preg_match('/^[a-zA-Z0-9\s\à\'\"\é\è\^\:\,\.\+\-\/\(\)\?\!\;]+$/', $message)) {
                $model->ajouterMessage($message);
                unset($_POST);
                unset($message);
            } else {
                $_SESSION["e"] = "Par soucis de sécurité, certains caractères ne sont pas autorisés";
            }
        } else {
            $_SESSION["e"] = "Par soucis de sécurité, votre message doit être entre 3 et 250 caractères maximum";
        }
    }
    function verifAfficherMessage()
    {
        $model = new ModelMessagerie();
        echo $model->afficherMessage();
    }
}
