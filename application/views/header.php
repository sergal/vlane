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
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="brand">вЛАНе</div>

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
                <form class="navbar-search pull-left" method="post" action="http://localhost/index.php/search/process">
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
