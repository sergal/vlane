<?php
$this->load->helper('form');
echo form_open('users/login', array('class' => 'form-horizontal'));
echo "<legend>Вход для пользователей</legend>";
echo '<fieldset>';
echo '<div class="control-group">';
echo form_label('Логин:', 'login', array('class' => 'control-label'));
echo '<div class="controls">';
echo form_input(array('id' => 'login', 'name' => 'login'));
echo "</div></div>";
echo '<div class="control-group">';
echo form_label('Пароль:', 'password', array('class' => 'control-label'));
echo '<div class="controls">';
echo form_password(array('id' => 'password', 'name' => 'password'));
echo "</div></div>";
echo '<div class="control-group">';
echo '<div class="controls">';
echo form_submit(array('value' => 'Войти', 'class' => 'btn btn-primary'));
echo "</div></div>";
echo '</fieldset>';
echo form_close();

