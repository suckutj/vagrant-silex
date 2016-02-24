<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 *
 * @var dbConnection Doctrine\DBAL\Connection
 * @var template Symfony\Component\Templationg\DelegatingEngine
 */

$dbConnection = $app['db'];
$template = $app['templating'];

$app->get('/welcome/{name}', function ($name) use ($template) {
    return $template->render(
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

$app->get('/home', function () use ($template) {
    return $template->render(
        'home.html.php',
        array('active' => 'home')
    );
});

$app->get('/blog/{id}', function ($id) use ($template, $dbConnection) {
    if ($id >= 0) {
        $sql = "select * from blog_post where id=$id;";
    } else {
        $sql = "select * from blog_post;";
    }
    $content = $dbConnection->fetchAll($sql);

    if ($id >= 0) {
        return $template->render(
            'blog.html.php',
            array(
                'active' => 'blog',
                'content' => $content,
                'single' => true
            )
        );
    } else {
        return $template->render(
            'blog.html.php',
            array(
                'active' => 'blog',
                'content' => $content,
                'single' => false
            )
        );
    }
})->value('id', -1);

$app->match('/newblogpost', function (Request $request) use ($app, $template, $dbConnection) {

    $user = $app['session']->get('user');

    if ($request->isMethod('GET')) {
        if ($user) {
            return $template->render(
                'newBlogPost.html.php',
                array(
                    'active' => 'newblogpost',
                    'error' => false,
                    'title' => '',
                    'text' => '',
                    'user' => $user['username']
                )
            );
        } else {
            return $template->render(
                'login.html.php',
                array(
                    'active' => 'login'
                )
            );
        }
    } elseif ($request->isMethod('POST')) {
        $title = $request->get('title', '');
        $text = $request->get('text', '');
        $user = $app['session']->get('user');

        $createdAt = date('c');     //get current date

        if ($title and $text) {     //if title and text field are both filled
            //DB-insert
            $dbConnection->insert(
                'blog_post',        //table name: blog-post     columns: ID (auto), author, title, text, created_at
                array(
                    'title' => $title,
                    'author' => $user['username'],
                    'text' => $text,
                    'created_at' => $createdAt
                )
            );

            //display webpage
            return $template->render(
                'validPost.html.php',
                array(
                    'active' => 'newblogpost',
                    'title' => $title,
                    'text' => $text
                )
            );
        } else {                    //if title and text field are not both filled
            return $template->render(
                'newBlogPost.html.php',
                array(
                    'active' => 'newblogpost',
                    'error' => true,
                    'title' => $title,
                    'text' => $text,
                    'user' => $user['username']
                )
            );
        }
    } else {
        $app->abort(405);
    }
});

$app->match('/login', function (Request $request) use ($app, $template, $dbConnection) {
    if ($request->isMethod('GET')) {
        return $template->render(
            'login.html.php',
            array(
                'active' => 'login'
            )
        );
    } else if ($request->isMethod('POST')) {
        $username = $request->get('username', '');

        if ($username && strlen(trim($username)) != 0) {
            $app['session']->set('user', array('username' => $username));

            return $app->redirect('/newblogpost');
        } else {
            return $app->redirect('/login');
        }
    } else {
        $app->abort(405);
    }
});