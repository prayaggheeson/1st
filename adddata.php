<?php
include 'connectionfile.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO 1stproject (name, address) VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: form.php");
    }
}
