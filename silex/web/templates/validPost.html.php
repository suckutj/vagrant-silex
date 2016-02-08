<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php')
?>

<div id="wrapper" class="container">
    <div class="row">
        <div class="col-12">
            <ul class="list-group" id="valid">
                <li class="list-group-item list-group-item-success">
                    <h1>Thank you for your post!</h1>
                </li>
                <br/>
                <div id="form_in_valid" class="form-group">
                    <input type="text" class="form-control" name="title" value="<?= $title ?>">
                </div>
                <div id="form_in_valid" class="form-group">
                    <textarea class="form-control" name="text" id="text" rows="5"><?= $text ?></textarea>
                </div>
            </ul>
        </div>
    </div>
</div> <!--wrapper end-->
</body>
</html>
