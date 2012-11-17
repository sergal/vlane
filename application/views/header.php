<?php $this->load->helper('url');
$this->load->library('session');
$uid = $this->session->userdata('user_id'); ?>
<!DOCTYPE html>
<html>
<head>
    <META CHARSET="UTF-8">
    <title>вЛАНе</title>
    <link href="<?php echo base_url("web/css/bootstrap.css"); ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url("web/favicon.ico"); ?>" type="image/x-icon"/>
	<script src="<?php echo base_url("web/js/jquery.js"); ?>"></script>
	<script src="<?php echo base_url("web/js/bootstrap.min.js"); ?>"></script>
	<?php if ($active_page == 0) : ?>
	<script>
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
	</script>
	<script>
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
		function clearWallSuccess()
		{
			document.getElementById("wall-body").innerHTML = '';
	}
	</script>
	<?php endif ?>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="brand"><a href="<?php echo site_url("users/show/".$uid); ?>">
                <img src="<?php echo base_url("web/img/InLANLogo.png"); ?>" width="135px" height="30px" </a></div>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse">
                <ul class="nav">
                    <?php if ($user_id != null) : ?>
                    <li <?php if ($active_page == 0) { echo "class=active"; }?>><a href="<?php echo site_url("users/show/".$uid); ?>">Моя страница</a></li>
                    <?php endif ?>
                    <li <?php if ($active_page == 1) { echo "class=active"; }?>><a href="<?php echo site_url("groups/show"); ?>">Отряды</a></li>
                    <?php if ($user_id != null) : ?>
                    <li <?php if ($active_page == 2) { echo "class=active"; }?>><a
                        href="<?php echo site_url("messages/show/".$user_id); ?>">Сообщения<?php if ($messages > 0) {
                        echo ' (' . $messages . ')';
                    }
                        ?>
                        <li <?php if ($active_page == 3) { echo "class=active"; }?>><a href="<?php echo site_url("users/get_friends"); ?>">Друзья</a></li>
                    </a></li><?php endif ?>
                </ul>
                <form class="navbar-search pull-left" method="post" action="<?php echo site_url('search/process') ?>">
                    <input type="text" name="txt" class="search-query span2" placeholder="Поиск людей">
                </form>
                <?php if ($user_id != null) : ?>

                <ul class="nav pull-right">
                    <li><a href="<?php echo site_url("users/logout"); ?>">Выйти</a></li>

                </ul>
                <?php else : ?>
                <ul class="nav pull-right">
                    <li><a href="<?php echo site_url("users/login"); ?>">Войти</a></li>

                </ul>
                <?php endif ?>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="container">
