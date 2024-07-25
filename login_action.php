<?php
include("config.php");
include("firebaseRDB.php");

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "") {
    echo "Email is required";
} else if ($password == "") {
    echo "Password is required";
} else {
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, 1);

    if (count($data) == 0){
        echo 'User does not exist';
    } else {
        $id = array_keys($data)[0];
        if (isset($data[$id]['password']) && $data[$id]['password'] == $password) {
            echo 'Login success';
            $_SESSION['user'] = $data[$id];
            header("location: dashboard.php");
        } else {
            echo 'login failed';
        }
    }
}
?>