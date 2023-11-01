<!DOCTYPE html>
<html lang="en">
<?php
include "connectionfile.php";
if (isset($_POST["name"]) && isset($_POST["password"])) {
    $name = $_POST['name'];
    $password = $_POST['address'];
    $id = $_GET['id'];

    $sql = "UPDATE 1stproject SET `name`= '$name', `address`= '$password'  WHERE id= '$id'" ;
    if ($conn->query($sql) === TRUE) {
        header("location: form.php");
        echo "upodated successfully";
    } else {
        echo "Something went wrong. Please try again later.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php
            include "connectionfile.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM 1stproject WHERE id = '$id'"; 
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $Name = $row['name'];
                    $password = $row['address'];

            ?>
                    <form action="updatedata.php?id=<?php echo $id; ?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for=""> Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $Name ?>" required>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="">password</label>
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo $password ?>" required>
                            </div>
                            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </section>
</body>

</html>