<!DOCTYPE html>
<html>
<head>
    <title>CRUD Buttons</title>
</head>
<body>
    <h1>CRUD Buttons</h1>

    <form method="post" action="create.php">
        <input type="submit" name="create" value="Create">
    </form>

    <form method="post" action="read.php">
        <input type="submit" name="read" value="Read">
    </form>

    <form method="post" action="update.php">
        <input type="submit" name="update" value="Update">
    </form>

    <form method="post" action="delete.php">
        <input type="submit" name="delete" value="Delete">
    </form>

</body>
</html>




<?php


if (isset($_POST['create'])) {
    
    echo "Create operation executed!";
}
?>

