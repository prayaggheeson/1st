<?php
include 'connectionfile.php';

$sql = "INSERT INTO 1stproject (name, address, email)
VALUES ('John', 'Doe12313', 'john@example.com')";
$sql = "INSERT INTO 1stproject (name, address, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO 1stproject (name, address, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO 1stproject (name, address, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";


//cretae a new record in the database
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// get id from database
// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }


// select id from database
// $sql = "SELECT id, name, address, email  FROM 1stproject";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["tname"]. " " . $row["address"]. "" .$row["email"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }


// deleted a selected id from database
// $sql = "DELETE FROM 1stproject WHERE id=3";

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

//updated a selected if from database
// $sql = "UPDATE 1stproject SET name='prayag' WHERE id=2";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }


$sql = "SELECT * FROM 1stproject WHERE address='doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "address already exist";
  
} else {
  echo "data does not exist";
}

  
  $conn->close();
