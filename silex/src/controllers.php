<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 */

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/home', function () use ($app) {
    return $app['templating']->render(
        'home.html.php'
    );
});

$app->get('/blog', function () use ($app) {
    return $app['templating']->render(
        'blog.html.php'
    );
});

$app->get('/newblogpost', function () use ($app) {
    return $app['templating']->render(
        'newBlogPost.html.php'
    );
});