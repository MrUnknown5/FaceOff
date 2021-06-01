<?php
include("db-config.php");
$sql = "DELETE FROM globalimages WHERE imagename='" . $_GET["deleteid"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
    header("location:mytest.php?requestid=1");
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
    header("location:mytest.php?requestid=2");
}
mysqli_close($mysqli);
?>