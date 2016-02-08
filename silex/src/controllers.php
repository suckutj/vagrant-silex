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
        'home.html.php',
        array('active' => 'home')
    );
});

$app->get('/blog', function () use ($app) {
    return $app['templating']->render(
        'blog.html.php',
        array('active' => 'blog')
    );
});

$app->get('/newblogpost', function () use ($app) {
    return $app['templating']->render(
        'newBlogPost.html.php',
        array(
            'active' => 'newblogpost',
            'error' => false,
            'title' => '',
            'text' => ''
        )
    );
});

$app->match('/new', function (Request $request) use ($app) {
    $dbConnection = $app['db'];

    if ($request->isMethod('POST')) {
        $title = $request->get('title', '');
        $text = $request->get('text', '');
        $createdAt = date('c');

        if ($title and $text) {
            //DB-insert
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $text,
                    'created_at' => $createdAt
                )
            );

            //display webpage
            return $app['templating']->render(
                'validPost.html.php',
                array(
                    'active' => 'newblogpost',
                    'title' => $title,
                    'text' => $text
                )
            );
        } else {
            return $app['templating']->render(
                'newBlogPost.html.php',
                array(
                    'active' => 'newblogpost',
                    'error' => true,
                    'title' => $title,
                    'text' => $text
                )
            );
        }
    }
});