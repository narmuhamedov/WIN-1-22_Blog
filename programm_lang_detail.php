<?php include('menu_footer/header.php'); ?>
<br>
<?php
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM programm_language WHERE id=$id");
$myrow = mysqli_fetch_array($result);
?>

<div class="content">
    <h1><?php echo $myrow['title'] ?> <p>Actuality-<?php echo $myrow['actuality'] ?></p></h1>
    <p><?php echo $myrow['description'] ?></p>
    <img src="<?php echo $myrow['image'] ?>" alt="">
    <p>Дата создания: <?php echo $myrow['year'] ?></p>
    <iframe src="<?php echo $myrow['url_video'] ?>" frameborder="0"></iframe>

</div>
<br>
<?php include('menu_footer/footer.php'); ?>
