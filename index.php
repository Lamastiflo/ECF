<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "header.php";

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$limit = 12;
$offset = ($page - 1) * $limit;

$pdo = new PDO('mysql:host=localhost;dbname=blog;port=3306', "root", "");
$stmt = $pdo->prepare("SELECT posts.id, title, createdAt, user.name AS author, body FROM posts JOIN user ON posts.userId = user.id LIMIT :limit OFFSET :offset");
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

?>

    <h1>Bienvenue</h1>


<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "footer.php";
?>