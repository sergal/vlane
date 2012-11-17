<meta charset="utf-8">

<div id="pass_change">
<caption>Старый пароль</caption><br><input type="password" id="old_pass"><br>
<caption>Новый пароль</caption><br><input type="password" id="new_pass"><br>
<caption>Повторите новый пароль</caption><br><input type="password" id="retr_new_pass"><br>
<button id="pass_change" onClick="check_this();">Сменить пароль</button>
</div>
<script>
function check_this(){
	var old_pass = document.getElementById("old_pass").value;
	var new_pass = document.getElementById("new_pass").value;
	var retr_new_pass = document.getElementById("retr_new_pass").value;
	if(old_pass != "<?php $prefs[0]['password']; ?>"){
		$("pass_change").after("<span class=\"alert\">Неверно введен старый пароль</span><br>");
	} else if(new_pass != retr_new_pass){
		$("pass_change").after("<span class=\"alert\">Введенные пароли не совпадают</span><br>");
	} else {
		pass_chg();
	}
}
function pass_chg(){
	var new_pass = document.getElementById("new_pass").value;
	var old_pass = document.getElementById("old_pass").value;
	$.post(
			"<?php echo site_url("users/set_pref"); ?>",
				{
					'act': 'pass_chg',
					'new_pass': new_pass,
					'old': old_pass
				},
			passSuccess(data)
		);
}
function passSuccess(data){
	alert("Done!" + data);
}
</script>