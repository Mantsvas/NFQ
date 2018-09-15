<?php

require_once 'Models/Model.php';
require_once 'libs/View.php';

class Controller
{
	public function __construct()
	{
		$this->view = new View();
	}

	/*
	 * Selects products from DB
	 *
	 * @return welcome template
	 */
    public function index()
    {
		$sql = 'SELECT * FROM products';
        $product = new Model;
        $this->view->product = $product->select($sql);
        $this->view->view('welcome');
    }
}
