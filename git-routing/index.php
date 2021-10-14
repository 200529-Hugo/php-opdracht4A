<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// ...
$router->get('/testpagina', function() {
    echo 'Hallo lezer, dit is een test';
});

$router->get('/foto/{photoId}', function($photoId) use ($router) {
    if (file_exists('./img/'.$photoId .'.jpg')) {
        echo '<img src="http://localhost/git-routing/img/' . $photoId . '.jpg">';

    } else {
        header('HTTP/1.1 404 Not Found');
    }
});

$router->get('/blog/{blogId}', function($blogId) {
    if($blogId == 1){
        header('Location: https://thefilm.blog/2021/06/02/cruella-review/');
    } else{
        header('HTTP/1.1 404 Not Found');
    }
});

$router->get('/login', function() {
    echo "<form method='post' action='http://localhost/git-routing/login'>";
    echo "<input type='text' name='name' id='name' placeholder='Name:'><br>";
    echo "<input type='password' name='password' id='password' placeholder='Password:'><br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
});

$router->post('/login', function() {
    echo 'Name:'. $_POST['name'];
    echo '<br>';
    echo 'Password:'. $_POST['password'];
});


// Run it!
$router->run();

?>