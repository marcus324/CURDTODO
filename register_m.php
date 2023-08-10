<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <form action="./register.php" method="post" enctype="multipart/form-data">
        <input class="form-control" type="text" name="name" placeholder="please enter name">
        <?php if (isset($_GET['name'])) { ?>
            <p class="error"><?php echo $_GET['name']; ?></p>
        <?php } ?>
        <input class="form-control" type="text" name="email" placeholder="please enter email">
        <?php if (isset($_GET['email'])) { ?>
            <p class="error"><?php echo $_GET['email']; ?></p>
        <?php } ?>


        <input class="form-control" type="password" name="password" placeholder="please enter password">
        <?php if (isset($_GET['password'])) { ?>
            <p class="error"><?php echo $_GET['password']; ?></p>
        <?php } ?>

        <select class="form-control" name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>

        <?php if (isset($_GET['gender'])) { ?>
            <p class="error"><?php echo $_GET['gender']; ?></p>
        <?php } ?>
        <input type="file" name="image">
        <input class="form-control" type="submit">

   
    </form>
    
</body>


<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome to the Homepage</h1>

    <a href="users.json">Go to CRUD Page</a>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>   </title>
</head>
<body>
    <h1>   </h1>

    <form method="post" action="create.php">
        <input type="submit" name="create" value="create">
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


