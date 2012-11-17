function sendMessage(rid){
		var msg_body = document.getElementById("msg_body").value;
		if(msg_body == ''){
				return false; 
		}	
		var uid = "<?php echo $user_id ?>";
		$.post(
			"<?php echo site_url("messages/send"); ?>",
				{
					'msg_body': msg_body,
					'uid': uid,
					'rid': rid
				},
			onSuccesMsg
		);
	}
function onSuccessMsg()
{
  $('#msgWindow').modal('hide');
  alert ('Сообщение отправлено');
}