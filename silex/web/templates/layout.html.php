<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<!DOCTYPE html>

<!-- all pages have a navigation bar and a footer -->

<!-- color information:
        blog entries:   - title: darkBlue
                        - text: lightBlue
                        - font: smoky white
        new Blog:       - same as blog entries
        login:          - same as blog entries
        valid post:     - validGreen -->

<html>
<head>
    <meta charset="utf-8"/>

    <!-- include bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap-theme.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- include bootstrap end -->

    <!-- include individual css -->
    <link rel="stylesheet" href="/css/myBlog.css" type="text/css"/>

    <title>myBlog</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand">WebSiteName</span>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li <?= $active == 'home' ? 'class="active"' : '' ?>>
                    <a href="/home">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home
                    </a>
                </li>
                <li <?= $active == 'blog' ? 'class="active"' : '' ?>>
                    <a href="/blog">
                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                        Blog
                    </a>
                </li>
                <li <?= $active == 'newblogpost' ? 'class="active"' : '' ?>>
                    <a href="/newblogpost">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        New Blog Post
                    </a>
                </li>
                <li <?= $active == 'login' ? 'class="active"' : '' ?>>
                    <a href="/login">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<footer>
    <div class="navbar navbar-brand navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    © Joas Suckut
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $slots->output('_content') ?>
