<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php');
?>

<!-- navbar & footer included with layout -->
<!-- before posting users have to be logged in (only their username is required)
        starts a session (remembers username) -->
<!-- gets parameter:    $active (for navbar) -->

<!-- color information:
        blog entries:   - title: darkBlue
                        - text: lightBlue
                        - font: smoky white
        login:          - same as blog entries -->

<div class="container wrapper">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
            <ul>
                <li class="list-group-item darkBlue colorWhite">
                    <h2 id="login">Login</h2>
                </li>
                <li class="list-group-item lightBlue">
                    <form action="/login" method="post">
                        <input type="text" class="form-control" name="username" placeholder="User name">
                        <button id="loginBtn" type="submit" class="btn btn-default">Login</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
