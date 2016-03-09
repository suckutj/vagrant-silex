<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php')
?>

<!-- navbar & footer included with layout -->
<!-- send a new blog post - title and text must be filled in - if not: warning message -->
<!-- gets parameter:    $active (for navbar)
                        $error (boxes are not all filled in)
                        $title (title of the blog post
                        $text (text of the blog post)
                        $user (username from login) -->

<!-- color information:
        blog entries:   - title: darkBlue
                        - text: lightBlue
                        - font: smoky white
        new Blog:       - same as blog entries -->

<div class="container wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron darkBlue">
                <form method="POST" action="/newblogpost">
                    <div class="form-group">
                        <p class="colorWhite">
                            <strong id="blogHeader">Write a new blog</strong>
                            <small><em>logged in as <?= $user ?></em></small>
                        </p>
                        <input type="text" class="form-control" name="title" placeholder="Type in a title"
                               value="<?= $title ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="text" id="formText" placeholder="Type in a text"
                                  rows="5"><?= $text ?></textarea>
                    </div>
                    <?php if ($error) : ?>
                        <div class="alert alert-warning" role="alert">
                            Please fill in all boxes!
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
