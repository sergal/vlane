<h1><?php if($token_status == FALSE): ?>
Код приглашения не действителен. Возможно он был указан неверно или уже использован для регистрации.
<?php else : ?>
Регистрация успешно завершена! Нижу указаны ваш логин и пароль. Запишите и запомните их и никогда и никому не говорите.
Никогда... <hr><br>
<strong>Логин:</strong> <?php echo $login ?>
<strong>Пароль:</strong> <?php echo $password ?><br>
<hr><br>
Нажми <a href="<?php $this->load->helper('url');
        echo site_url('users/login') ?>" >СЮДА</a> для перехода к странице входа
<?php endif; ?>
</h1>