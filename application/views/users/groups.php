<div class="row">
    <div class="span12">
        <h1><strong>
            <center>Отряды
                <ol>
                    <li>
                        <?php
                        foreach ($groups as $name) {
                            echo "<br>";
                            echo $name["name"];
                            echo "(" . $name["nickname"] . ")";
                        }
                        ?>
                    </li>
                </ol>
    </div>
</div>