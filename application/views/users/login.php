<?php
$this->load->helper('form');
echo form_open('users/login');
echo form_input('login')."<br>";
echo form_password('password')."<br>";
echo form_submit('submit','Войти');
