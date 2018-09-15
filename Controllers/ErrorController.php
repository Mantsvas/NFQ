<?php
require_once 'Controllers/Controller.php';

class ErrorController extends Controller
{
	/*
	 * Returns Default page when given page doesnt exist
	 */
	public function index()
	{
		$this->view->message = "The page doesn't exist!";
		$this->view->view('error/index');
	}
}
