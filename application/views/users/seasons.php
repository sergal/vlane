<div class="row">
    <div class="span12">
        <h1><strong>
            <center>Сезоны</center></strong></h1>
        <ol>
            <?php
            foreach ($seasons as $season) {
                echo "<li><a href='show_group/".$season["id"]."'>";
                echo $season["type"]."-".$season["year"];
                echo "</a></li>";
            }
            ?>
        </ol>
    </div>
</div>