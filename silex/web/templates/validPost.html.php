<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php')
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ul class="list-group validGreen">
                <li class="list-group-item list-group-item-success">
                    <h1>Thank you for your post!</h1>
                </li>
                <li class="list-group-item darkBlue colorWhite" id="titleBlog">
                    <?= $title ?>
                    <br/>
                </li>
                <li class="list-group-item lightBlue">
                    <?= nl2br($text) ?>
                </li>
            </ul>
            <form action="/blog">
                <p>
                    <button id="validBtn" type="submit" class="btn btn-default">Ok</button>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
