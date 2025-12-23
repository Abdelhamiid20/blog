<?php
include("header.php");
include("dbcon.php");

// Make sure ID exists
if (!isset($_GET['id'])) {
    die("ID not provided");
}

$id = $_GET['id'];

// Fetch student data
$query = "SELECT * FROM students WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$row = mysqli_fetch_assoc($result);

// Update student
if (isset($_POST['update_students'])) {

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age   = $_POST['age'];

    $query = "
        UPDATE students
        SET first_name = '$fname',
            last_name  = '$lname',
            age        = '$age'
        WHERE id = '$id'
    ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('Location: index.php?update_msg=You have successfully updated the data');
        exit();
    }
}
?>

<form action="update_page_1.php?id=<?php echo $id; ?>" method="post">

    <div class="mb-3">
        <label>First Name</label>
        <input type="text" name="f_name" class="form-control"
               value="<?php echo $row['first_name']; ?>">
    </div>

    <div class="mb-3">
        <label>Last Name</label>
        <input type="text" name="l_name" class="form-control"
               value="<?php echo $row['last_name']; ?>">
    </div>

    <div class="mb-3">
        <label>Age</label>
        <input type="text" name="age" class="form-control"
               value="<?php echo $row['age']; ?>">
    </div>

    <input type="submit" class="btn btn-success" name="update_students" value="Update">

</form>

<?php include("footer.php"); ?>
