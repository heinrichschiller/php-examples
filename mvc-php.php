<?php

// Simple 'Hello-World' example in PHP and MVC-Pattern

class Model
{
	public $text;

	public function __construct() {
		$this->text = 'Hello World';
	}
}

class View
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function output()
	{
		return '<a href="index.php?action=textclicked">' . $this->model->text . '</a>';
	}
}

class Controller
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function textClicked()
	{
		$this->model->text = 'Text updated!';
	}
}

$model = new Model();

// It is important that the view and controller share the Model
$controller = new Controller($model);
$view = new View($model);

if (isset($_GET['action']) && is_string($_GET['action'])) {
	$controller->{$_GET['action']}();
}

echo $view->output();