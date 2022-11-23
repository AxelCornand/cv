<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
<?php
$dbh = new PDO('mysql:host=localhost;port=80;', 'test', 'test' );
$stmt = $dbh->prepare("create database IF NOT EXISTS test;");
$stmt->execute();
$dbh = new PDO('mysql:host=localhost;port=80;dbname=test;', 'test', 'test' );
$stmt->execute();

$stmt=$dbh->prepare("create table if not exists dev(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (255)
    )");
$stmt->execute();
$dbh= new PDO('mysql:host=localhost;port=80;dbname=test;', 'test', 'test' );
$stmt=$dbh->prepare("GRANT ALL PRIVILEGES ON wild TO PUBLIC;");
$stmt->execute();

if (isset($_GET['name'])
    && !empty($_GET['name'])) {
    $dbh = new PDO('mysql:host=localhost;port=80;dbname=test;', 'test', 'test');
    $stmt = $dbh->prepare('insert into dev values (NULL,:name)');
    $stmt->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
    $stmt->execute();
}
?>

    <h2>Ajouter votre prénom</h2>
    <form class="new-member-form">
        <label for="name">Nom du babydéveloppeur</label>
        <input id="name" name="name" type="text" placeholder="Charalampos" />
        <button type="submit">Envoyer</button>
</body>
</html>