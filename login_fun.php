<?php
session_start();
ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'db_connection.php';

        $username = '';
        $password = '';

        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        } else {
            header("Location: home.php");
        }

        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            header("Location: home.php");
        }

        global $con;
        $query = $con->prepare("SELECT * from users WHERE username = ? AND password = ?;");
        $query->execute(
            array( $username, $password)
        );
        $count = $query->rowCount();
        $result = $query->fetch();
        if($count > 0) {
            $_SESSION['userId'] = $result['user_id'];
            header("Location: home.php");
        } else {
            echo " تأكد من البريد الإلكتروني او كلمة المررور ";
        }
    } else {
        header("Location: home.php");
		die();
    }
?>