<?php
use Ecf\Users;
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "header.php";

$pdo = new PDO('mysql:host=localhost;dbname=blog;port=3306', "root", "");
$users = $pdo->query("SELECT * FROM user")->fetchAll(PDO::FETCH_CLASS,
    Users::class);

?>

    <h1>Administration</h1>

    <h3>Gestion des utilisateurs</h3>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th># ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->getID() ?></td>
                            <td><?= $user->getName() ?></td>
                            <td><?= $user->getEmail() ?></td>
                            <td><?= $user->getRole() ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "footer.php";
?>