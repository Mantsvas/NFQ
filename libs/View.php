<?php

class View
{
	public function __construct()
	{

	}

	/*
	 * Require template
	 *
	 * @param $viewScript contains string with path to template and template file name
	 */
	public function view($viewScript)
	{
		require("views/$viewScript.php");
	}
}
