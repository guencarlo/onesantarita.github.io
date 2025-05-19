<?php
require('./Database.php');

if (isset($_POST['create'])){
$Username = $_POST['username'];
$Password = $_POST['password'];

$querryCreate = "INSERT INTO account VALUES (null, '$Username', '$Password')";
$sqlCreate = mysqli_query($connection, $querryCreate);

echo '<script>alert("Successfully Created!")</script>';
echo '<script>window.location.href = "/CRUD/Index.php"</script>';
}
    else {
        echo '<script>window.location.href = "/CRUD/Index.php"</script>';
    }
?>