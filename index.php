<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "header.php";


$pdo = new PDO('mysql:host=localhost;dbname=blog;port=3306', "root", "");
$stmt = $pdo->prepare("SELECT posts.id, title, createdAt, user.name AS author, body FROM posts JOIN user ON posts.userId = user.id");

$stmt->execute();

?>

    <h1>Bienvenue</h1>


<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "footer.php";
?>