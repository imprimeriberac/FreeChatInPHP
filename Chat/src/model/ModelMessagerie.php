<?php
require_once "Base.php";

use Base;

class ModelMessagerie
{
    private $_pdo = null;
    public function __construct()
    {
        $this->_pdo = new PDO("mysql:host=localhost;dbname=messagerie", "root", "root");
    }
    public function ajouterMessage($message)
    {
        $number = rand(1, 500);
        $name = "user n°" . $number;
        $sql = "INSERT INTO message (user_id, message) VALUES (:user_id, :message)";
        $request = $this->_pdo->prepare($sql);
        $request->bindValue(":user_id", $name);
        $request->bindValue(":message", $message);
        $request->execute();
    }
    public function afficherMessage()
    {
        $sql = "SELECT * FROM `message` ORDER BY id DESC LIMIT 50";
        $request = $this->_pdo->prepare($sql);
        $request->execute();
        $show = $request->fetchAll();
        foreach ($show as $message) {
?>
            <div class="content">
                <h4><?= $message["user_id"] . " : "; ?></h4>
                <p><?= $message["message"]; ?></p>
            </div>
<?php
        }
    }
}
