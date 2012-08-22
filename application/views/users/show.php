<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="span4">
        <p>
            <img src="/web/img/<?php echo $user["photo"] ?>" alt="фото">
        </p>

        <p>
            <a href="http://localhost/index.php/messages/create/<?php echo $user["id"] ?>" class="btn">Отправить
                сообщение</a>
        </p>
    </div>
    <div class="span8">
        <h2>
            <?php
            echo $user["name"];
            ?>
        </h2>
        <?php
        echo $user["city"];
        echo"<br>";
        echo $user["birthday"];
        echo"<br>";
        echo $user["school"];
        echo "<br>" . "<br>";
        echo "<h3></h3>";
        echo "<strong>" . "Список отрядов :" . "</strong>" . "<br>" . "<br>";
        ?>
        <ul>
            <?php
            foreach ($groups as $group) {
                echo "<li>" . "<a href=/users/group/" . $group["id"] . ">" . $group["name"] . "</a>" . " ";
                echo "(" . $group["type"] . "-" . $group["year"] . ")</li>";
            }
            if (($user_id != 0) & ($user_id != $user["id"])) {
                echo "<br><form action='../add_friend' method='post'>
             <input type='submit' value='Добавить в друзья' class='btn'>
         <input type='hidden' name='fid' value='" . $user["id"] . "'></form>";
            } ?>
            <ul>
    </div>
</div>
