<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/myBlog.css" type="text/css" />

    <title>myBlog</title>
</head>
<body>
<nav class="container">
    <div class="row">
        <div id="website" class="col-xs-11 col-sm-2">
            WebSiteName
        </div>
        <div id="home" class="hidden-xs col-sm-1">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            Home
        </div>
        <div id="blog" class="hidden-xs col-sm-1">
            <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
            Blog
        </div>
        <div id="newBlogPost" class="hidden-xs col-sm-2">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            New Post Blog
        </div>
        <div id="menue" class="col-xs-1 visible-xs">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </div>
    </div>
</nav>

<?php $slots->output('_content') ?>
