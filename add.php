<?php

// require_once 'app/init.php';

$dbconn = pg_connect('dbname=php_to_do');

if(isset($_POST['name'])) {
    $name = trim($_POST['name']);

    

// $res = pg_insert($dbconn, 'name', $_POST, PG_DML_ESCAPE);
// if ($res) {
//     echo "POST data is successfully logged\n";
// } else {
//     echo "User must have sent wrong inputs\n";
// }

// $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=myadmin123");
// $query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
// '$_POST[price]','$_POST[dop]')";
// $result = pg_query($query);

    if(!empty($name)) {

        $query = "INSERT INTO items VALUES ('$_POST[name]')";
        $result = pg_query($query);

        // $addedQuery = $db->prepare("
        // INSERT INTO items (name, user, done, created)
        // VALUES (:name, :user, 0, NOW())
        // ");
        // $addedQuery->execute([
        //     'name' => $name
        //     // 'user' => $_SESSION['user_id']
        // ]);
    }
}

header('Location: index.php');