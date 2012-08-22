<?php
$this->load->helper('index');
echo form_open('users/login');
echo form_input('login');
echo "<br>";
echo form_password('password');
echo "<br>";
echo form_submit('submit','Войти');
