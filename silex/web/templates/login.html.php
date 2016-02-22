<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

$view->extend('layout.html.php');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div>
                <li class="list-group-item darkBlue colorWhite">
                    <h2 id="login">Login</h2>
                </li>
                <li class="list-group-item lightBlue">
                    <form action="/login" method="post">
                        <input type="text" class="form-control" name="username" placeholder="User name">
                        <button id="loginBtn" type="submit" class="btn btn-default">Login</button>
                    </form>
                </li>
            </div>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
