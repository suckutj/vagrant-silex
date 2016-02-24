<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php');
?>

<div id="wrapper" class="container">
    <div class="row">
        <div class="col-xs-12" id="displayBlog">
            <?php foreach ($content as $dataSet) { ?>
                <ul class="list-group">
                    <li class="list-group-item darkBlue colorWhite">
                        <a href="/blog/<?= $dataSet['id'] ?>">
                            <?= $dataSet['title'] ?>
                        </a>
                        <br/>
                        <em>
                            created by <?php echo $dataSet['author'] == NULL ? "(anonym)" : $dataSet['author'] ?>
                            at <?= $dataSet['created_at'] ?>
                        </em>
                    </li>
                    <li class="list-group-item lightBlue">
                        <?php echo $single == true ? nl2br($dataSet['text']) : substr($dataSet['text'], 0, 18) . "   (...)" ?>
                    </li>
                </ul>
            <?php } /*----end foreach----*/ ?>
            <?php if ($single) : ?>
                <form action="/blog">
                    <button type="submit" class="btn btn-default">back</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
