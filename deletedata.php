<?php
include "connectionfile.php";

if (isset($_GET["id"])) {

    $id = $_GET["id"];



    $sql = "DELETE FROM 1stproject WHERE id= '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
