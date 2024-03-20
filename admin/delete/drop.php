<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if ($id == '') {
        unset($id);
    }
}

if (isset($id)) {
    include ('db.php');
    $result = mysqli_query($connect, "DELETE FROM blog_programm_language WHERE id='$id' ");
    if ($result==true){
        echo "<h1>Блог успешно удален</h1>";
    }else{
        echo "<h1 style='color: red;'>Ошибка в коде</h1>";
    }
}else{
    echo "<h1>Вы не выбрали блог</h1>";
}
?>