<!DOCTYPE html>
<html>
<head>
    <META CHARSET="UTF-8">
    <title>вЛАНе</title>
    <link href="http://localhost/web/css/bootstrap.css" rel="stylesheet">
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
                    <li class="active"><a href="http://localhost/index.php/users/show">Моя страница</a></li>
                    <li><a href="">Отряды</a></li>
                    <li><a href="">Link</a></li>
                    <li><a href="">Link</a></li>
                </ul>
                <?php if(isset($_COOKIE['ci_session'])) :?>
                <form class="navbar-search pull-left" method="post" action="http://localhost/index.php/search/process">
                    <input type="text" name="txt" class="search-query span2" placeholder="Search">
                </form>
                    <?php endif ?>
                <ul class="nav pull-right">
                    <li><a href="http://localhost/index.php/users/logout">Выйти</a></li>

                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
