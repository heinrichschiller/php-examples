<?php

class View
{
	private $_template = '';

	public function setTemplate($template)
	{
		$this->_template = $template;
	}

	public function renderTemplate($data = [])
	{
		extract($data);

		$template = __DIR__ . '/../templates/' . $this->_template .'.tpl.php';

		require_once __DIR__ . '/../templates/main.tpl.php';
	}
}
