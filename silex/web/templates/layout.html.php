<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<!DOCTYPE html>

<!-- all pages have a navigation bar -->

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
                    <a href="home">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home
                    </a>
                </li>
                <li <?= $active == 'blog' ? 'class="active"' : '' ?>>
                    <a href="blog">
                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                        Blog
                    </a>
                </li>
                <li <?= $active == 'newblogpost' ? 'class="active"' : '' ?>>
                    <a href="newblogpost">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        New Blog Post
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $slots->output('_content') ?>
