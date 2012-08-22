<div class="row">
    <div class="span12">
        <h1><strong>
            <center>Отряды</center></strong></h1>
                <ol>
                        <?php
                        foreach ($groups as $name) {
                            echo "<li><a href='../group/".$name["id"]."'>";
                            echo $name["name"];
                            echo "(" . $name["nickname"] . ")";
                            echo "</a></li>";
                        }
                        ?>
                </ol>
    </div>
</div>