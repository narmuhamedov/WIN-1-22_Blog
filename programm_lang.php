<?php include('menu_footer/header.php'); ?>
<br>
<div class="container">
    <ul>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM programm_language");
        $myrow = mysqli_fetch_array($result);

        do {
            printf("<li>
                        <h1>%s</h1>
                        <img src='%s' alt='' width='300' height='300'>
                        <br>
                        <button><a href='programm_lang_detail.php?id=%s'>Детально</a></button>
                        <hr>
                    </li>", $myrow['title'], $myrow['image'], $myrow['id']);
        } while ($myrow = mysqli_fetch_array($result));
        ?>
    </ul>
</div>
<br>
<?php include('menu_footer/footer.php'); ?>
