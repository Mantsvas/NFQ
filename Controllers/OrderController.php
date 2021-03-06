<?php
require_once 'Controllers/Controller.php';
require_once 'Models/Order.php';


class OrderController extends Controller
{
	/*
	 * Sets page parameters
	 *
	 * @return template file
	 */
	public function index()
	{
		// set page number
		$this->view->perPage = 10;
		if (isset($_GET['page'])) {
			$this->view->page = $_GET['page'];
		} else {
			$this->view->page = 1;
		}
		$this->view->pageFirstRecord = ($this->view->page - 1) * $this->view->perPage;
		// Set Filter parameters
		if (isset($_GET['orderby']) && isset($_GET['direction'])) {
			$this->view->orderby = $_GET['orderby'];
			$this->view->direction = $_GET['direction'];
		} else {
			$this->view->orderby = 'total_price';
			$this->view->direction = 'ASC';
		}
		if (!empty($_GET['date1']) && !empty($_GET['date2'])) {
			$this->view->date1 = $_GET['date1'];
			$this->view->date2 = $_GET['date2'];
		} else {
			$this->view->date1 = '2000-01-01';
			$this->view->date2 = '2200-01-01';
		}
		if (!empty($_GET['quantity1']) && !empty($_GET['quantity2'])) {
			$this->view->quantity1 = $_GET['quantity1'];
			$this->view->quantity2 = $_GET['quantity2'];
		}
		if (!empty($_GET['status'])) {
			$this->view->status = $_GET['status'];
		}
		if (!empty($_GET['search'])) {
			$this->view->search = htmlspecialchars($_GET['search']);
		}
		$order = new Order;
		$this->view->orders = $order->selectOrders($_GET);
        $this->view->view('orders/index');
	}

	/*
	 * Store Order to DB
	 *
	 * @param $_POST contains data from inputs
	 */
    public function store()
	{
		$data = [
			'productId' => htmlspecialchars($_POST['product_id']),
			'quantity' => htmlspecialchars($_POST['quantity']),
			'totalPrice' => htmlspecialchars($_POST['price'])  * htmlspecialchars($_POST['quantity']),
			'adress' => htmlspecialchars($_POST['adress']),
			'city' => ucfirst(htmlspecialchars($_POST['city'])),
			'name' => ucfirst(htmlspecialchars($_POST['customer_name'])),
			'lastname' => ucfirst(htmlspecialchars($_POST['customer_last_name'])),
			'email' => htmlspecialchars($_POST['customer_email']),
			'orderDate' => date('Y-m-d'),
		];
		session_start();
		$_SESSION['quantity'] = $data['quantity'];
		$_SESSION['adress'] = $data['adress'];
		$_SESSION['city'] = $data['city'];
		$_SESSION['customer_name'] = $data['name'];
		$_SESSION['customer_last_name'] = $data['lastname'];
		$_SESSION['customer_email'] = $data['email'];
		$_SESSION['error'] = $this->validateOrder($_POST);
		if ($_SESSION['error'] != NULL) {
			header('Location: '. '/');
			exit();
		}
		$newOrder = new Order;
		$newOrder->saveOrder($data);
		$_SESSION['success'] = 'Jūsų užsakymas priimtas.';
        header('Location: '. '/');
        exit();
	}

   	/*
	 * Validate Order Form
	 *
	 * @param array $data contains data from inputs
	 * @return NULL if data is correct and string if something is wrong with data
	 */
	private function validateOrder($data)
	{
		if (preg_match("/^[a-zA-ZĄąČčĘęĖėĮįŠšŲųŪūŽž]+$/", $data['customer_name'])) {
			if (preg_match("/^[a-zA-ZĄąČčĘęĖėĮįŠšŲųŪūŽž]+$/", $data['customer_last_name'])) {
				if (filter_var($data['quantity'],FILTER_VALIDATE_INT)) {
					if (filter_var($data['customer_email'],FILTER_VALIDATE_EMAIL)) {
						if (preg_match("/^[a-zA-Z0-9ĄąČčĘęĖėĮįŠšŲųŪūŽž\040\.\-]+$/i", $data['adress'])) {
							if (preg_match("/^[a-zA-ZĄąČčĘęĖėĮįŠšŲųŪūŽž\040]+$/", $data['city'])) {
								return;
							} else {
								return 'Netinkamai įvestas Miestas';
							}
						} else {
							return 'Netinkamai įvestas Adresas';
						}
					} else {
						return 'Netinkamai įvestas El. Paštas';
					}
				} else {
					return 'Netinkamai įvestas pageidaujamas kiekis';
				}
			} else {
				return 'Netinkamai įvesta Pavardė';
			}
		} else {
			return 'Netinkamai įvestas Vardas';
		}
	}
}
