<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "contacts";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Something went wrong;");
}

$isMessageSent = false;

if(isset($_POST['button'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contacts_db(name,email,message)VALUES('$name','$email','$message')";

    if(mysqli_query($conn, $query)){
        echo "Success";
        $isMessageSent = true;
        header('location:index.php');
    } else {
        $isMessageSent = false;
        echo "Error".mysqli_error($conn);
    }
}
?>