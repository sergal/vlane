<?php
$this->load->helper('form');
echo form_open('users/login');
echo form_input('login');
echo "<br>";
echo form_password('password');
echo "<br>";
echo form_submit(array('value' => 'Войти', 'class' => 'btn btn-primary'));


