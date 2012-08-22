<div class="row">
    <div class="span12">
        <h1><strong>
            <center>Отряды</center></strong></h1>
        <ol>
            <?php
            foreach ($seasons as $season) {
                echo "<li><a href='season/".$season["id"]."'>";
                echo $season["type"]."-".$season["year"];
                echo "</a></li>";
            }
            ?>
        </ol>
    </div>
</div>