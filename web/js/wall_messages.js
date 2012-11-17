function newWallMsg(uid){
		var wall_msg_body = document.getElementById('new_wall_msg').value;
		$.post(
			"<?php echo site_url("wall/create"); ?>",
				{
					'wall_msg_body': wall_msg_body,
					'uid': uid
				},
			function(data) { onSuccessWall(data, uid); }
		);
	}
	function deleteWallMsg(uid, mid){
		$.post(
			"<?php echo site_url("wall/delete"); ?>",
				{
					'mid': mid,
					'uid': uid
				},
			onSuccessDeleteWall(mid)
		);
	}
	function clearWall(uid){
		$.post(
			"<?php echo site_url("wall/clear_wall"); ?>",
				{
					'uid': uid
				},
			clearWallSuccess
		);
	}
function onSuccessWall(data, uid)
{
	var msg_body = document.getElementById("new_wall_msg").value;
	var uname = document.getElementById("user_name").innerHTML;
	var html = '<div id="msg"><div id="' + data + '"><a href="<?php echo site_url("users/show").'/'; ?>' + uid +'">' + uname + '</a><button type="button" class="close" onClick="deleteWallMsg('+ uid +', ' + data +')">?</button><br>' + msg_body + '<hr><br></div></div>';
	$("#wall-body").after(html).fadeIn('medium');
}
function onSuccessDeleteWall(mid)
{
  $('#' + mid +'').fadeOut('medium');
}
function clearWallSuccess(){
  document.getElementById("wall-body").innerHTML = '';
 }