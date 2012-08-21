<div class="row">
    <div class="span12">
        <h1><strong>
            <center>Отряд
        </strong></center></h1>
    </div>
    <div class="span12">
        <ul>
            <?php foreach ($users as $user) : ?>
            <li>
                <?php
                echo $user["name"];
?>
            </li>
            <?php endforeach ?>
        </ul>

    </div>
</div>
