<?php include("config.php") ?>
<?php
$sql = "DELETE FROM user WHERE id = '".$_SESSION['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header('Location:index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>