<?php
    $gpi_title = "task5";
    include "../_html/head.html";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task5="); ?>
    <p><a href="/">На главную страницу</a></p>

    <h2>Загрузить картинку</h2>
    <form action="gpi_image_info.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input class="form-control" type="file" name="img_upload" />
        </div>
        <input class="btn btn-primary" type="submit" name="upload" value="Загрузить выбранную картинку" />
    </form>
</div>
