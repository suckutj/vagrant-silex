<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php')
?>


<div id="wrapper" class="container">
    <div id="my_first_bootstrap_website" class="row">
        <div class="col-12">
            <h1>Blog</h1>
            </br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit...
            </br>
            <button id="button_search" type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                Search
            </button>
        </div>
    </div>
    <div class="row">
        <div id="selectors" class="col-xs-12 col-sm-4">
            <div class="alert alert-info" role="alert">info box</div>
            <div class="alert alert-danger" role="alert">danger box</div>
            <div class="alert alert-warning" role="alert">warning box</div>
            <div class="alert alert-success" role="alert">success box</div>
        </div>
        <div id="article1" class="col-xs-12 col-sm-4">
            1Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
            erat, sed diam voluptua. At vero eos et accusam et justo duo
            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
            invidunt ut labore et dolore magna aliquyam erat, sed diam
            voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
            dolor sit amet.
        </div>
        <div id="article2" class="col-xs-12 col-sm-4">
            2Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
            erat, sed diam voluptua. At vero eos et accusam et justo duo
            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
            invidunt ut labore et dolore magna aliquyam erat, sed diam
            voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
            dolor sit amet.
        </div>
    </div>
</div> <!--wrapper end-->
</body>
</html>
