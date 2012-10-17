<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="span4">
        <p>
            <img src="<?php echo base_url("web/img/") ?>/<?php if (empty($user['photo'])) {
                echo 'no_avatar.jpg';
            } else {
                echo $user["photo"];
            } ?>" alt="фото">
        </p>
		<?php if($user['id'] == $user_id) : ?>
		<p><a href="<?php echo site_url("photo") ?>" class="btn"><i class="icon-user"></i> Сменить фотографию</a>
		<a href="<?php echo site_url("users/perf") ?>" class="btn">Мои настройки</a>
		</p>
		<?php endif ?>
		
        <?php if ($user['id'] != $user_id&&$logged_in==true) : ?><p>
        <!--<a href="<?php //echo site_url("/messages/create") . "/" . $user["id"]; ?>" class="btn">!-->
		<a id="snd_msg" href="#" onclick="$('#msgWindow').modal('toggle')" class="btn">Отправить сообщение</a></p>
		
			<div style="display:none;" class="modal" id="msgWindow" tabindex="-1" role="dialog" aria-labelledby="msgShowLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" onClick="$('#msgWindow').modal('show')" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="msgWindowLabel" >Отправить сообщение</h3>
</div>
<div class="modal-body">
<textarea id="msg_body"></textarea>
</div>
<div class="modal-footer">
<button id="sendMsg" onClick="sendMessage(<?php echo $user['id'] ?>);" class="btn btn-primary">Отправить сообщение</button>
</div>
</div>
<div style="display:none;" class="alert modal alert-success" id="msgSuccess" tabindex="-1">
			Сообщение отправлено
    </div>

</div><?php endif ?><?php if($user['id'] == $user_id){ echo '</div>'; } ?>
</p>
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
        ?>
        <h3></h3>
        <strong>Список отрядов:</strong><br><br>
        <ul>
            <?php
            foreach ($groups as $group) {
                echo "<li>" . "<a href=/users/group/" . $group["id"] . ">" . $group["name"] . "</a>" . " ";
                echo "(" . $group["type"] . "-" . $group["year"] . ")</li>";
            }
            if (($user_id != 0) && ($user_id != $user["id"]) && ($check_friend)) : ?>
                <br>
                <form action="../add_friend" method="post">
                    <input type="submit" value="Добавить в друзья" class="btn">
                    <input type="hidden" name="fid" value="<?php echo $user["id"] ?>"></form>
                <?php endif ?>
        </ul>
    </div>
</div>