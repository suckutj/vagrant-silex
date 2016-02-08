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
            <div class="jumbotron" id="blog_form">
                <form method="POST" action="/new">
                    <div class="form-group">
                        <p>Write a new blog</p>
                        <input type="text" class="form-control" name="title" placeholder="Gib einen Titel ein"
                               value="<?= $title ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="text" id="text" placeholder="Gib einen Text ein"
                                  rows="5"><?= $text ?></textarea>
                    </div>
                    <?php if ($error) : ?>
                        <div class="alert alert-warning" role="alert">
                            Bitte alle Felder ausfüllen!
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> <!--wrapper end-->
</body>
</html>
