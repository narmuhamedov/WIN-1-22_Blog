<?php include('menu_footer/header.php'); ?>
    <div class="container">
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>

            <?php
            $result = mysqli_query($connect, "SELECT * FROM blog_programm_language");

            while ($myrow = mysqli_fetch_array($result)) {
                printf('<tr>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td><img src="%s" alt="%s"></td>
        </tr>', $myrow['id'], $myrow['title'], $myrow['description'], $myrow['image'], $myrow['title']);
            }
            ?>

        </table>
        <br>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM Reviews");

        while ($myrow = mysqli_fetch_array($result)) {
            printf("<div class='review'>
            <h2>%s</h2>
            <div class='stars'>
                <span class='rating' style='width: %s'></span>
            </div>
            <p>%s</p>
        </div>", $myrow['text'], ($myrow['stars'] * 10) . '%', $myrow['stars']);
        }


        ?>

    </div>

<?php include('menu_footer/footer.php'); ?>