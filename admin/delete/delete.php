<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
<h1>Select blog for delete</h1>
<form action="drop.php" method="POST">
    <?php
    include ('db.php');
    $result = mysqli_query($connect, "SELECT id, title from blog_programm_language");
    $myrow = mysqli_fetch_array($result);

    do{
        printf("<label><input type='radio' name='id' value='%s'>%s</label>",
        $myrow['id'], $myrow['title']);
    }while($myrow = mysqli_fetch_array($result));

    ?>
    <button type="submit">Удалить</button>
</form>

</body>
</html>