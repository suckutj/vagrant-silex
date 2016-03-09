<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php')
?>

<!-- navbar & footer included with layout -->
<!-- just a simple welcome page :) -->
<!-- gets parameter:    $active (for navbar) -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <p id="welcome">Welcome</p>
        </div>
    </div>
</div>
</body>
</html>
