<?php

include __DIR__ . '/src/Model/IndexModel.php';
include __DIR__ . '/src/Model/UserModel.php';
include __DIR__ . '/src/View/View.php';
include __DIR__ . '/src/Controller/Index.php';
include __DIR__ . '/src/Controller/User.php';

if(isset($_GET['controller']) && is_string($_GET['controller'])) {
    $controller = ucfirst(htmlspecialchars($_GET['controller']));
} else {
    $controller = 'index';
}

if(isset($_GET['action']) && is_string($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);
} else {
    $action = 'index';
}

echo 'Controller: ' . $controller;
echo '<br>';
echo 'Action: ' . $action;
// -----------------------------------------------------------------------------
echo '<br><hr>';

if (isset($action)) {
    $controller = new $controller();
	echo $controller->{$action.'Action'}();
}
