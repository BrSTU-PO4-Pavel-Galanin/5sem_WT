<?php
    $gpi_title = "Task9";
    include "../_html/head.html";
    include "../_php/gpi_cat.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task9="); ?>
    <p><a href="/">На главную страницу</a></p>
    <pre><?php gpi_cat("someFile.txt") ?></pre>
    <pre><?php gpi_cat("someFile2.txt") ?></pre>
</div>
