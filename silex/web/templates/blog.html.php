<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php');
?>

<div id="wrapper" class="container">
    <div class="row">
        <div class="col-12">
            <?php
            foreach ($content as $dataSet) {
                ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        <a href="/blog/<?= $dataSet['id'] ?>" alt="blog <?= $dataSet['id'] ?>">
                            <strong><?= $dataSet['title'] ?></strong>
                        </a>
                        <br/>
                        <em>created by <?php echo $dataSet['author']==NULL ? "(anonym)" : $dataSet['author'] ?> at <?= $dataSet['created_at'] ?></em>
                    </li>
                    <li class="list-group-item">
                        <?php echo $single==true ? nl2br($dataSet['text']) : substr($dataSet['text'], 0, 10) . "   (...)" ?>
                    </li>
                </ul>
                <?php
            }
            if ($single) : ?>
                <a href="/blog" alt="back to blog"><button type="button" class="btn btn-default">back</button></a>
            <?php endif; ?>
        </div>
    </div>
</div> <!--wrapper end-->
</body>
</html>
