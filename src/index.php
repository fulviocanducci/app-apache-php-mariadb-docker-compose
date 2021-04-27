<?php
    //phpinfo();

    $pdo = new PDO("mysql:host=mariadb;port=3306;dbname=test", "root", "1234@@");

    $stmt = $pdo->prepare("SELECT * FROM credit ORDER BY id ASC");
    $stmt->execute();
    $obj = $stmt->fetchAll();
    foreach($obj as $o) 
    {
        echo $o['id'] . ' - ' . $o['name'];
        echo '<br />';
    }
