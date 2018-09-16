<?php

require_once 'Models/Model.php';


class Order extends Model
{
    /*
     *  Generates SQL query from $data
     *
     * @param array @data is $_GET request passed to function
     * @return array of data returned from DB that match SQL query
     */
    public function selectOrders($data)
    {
        if (isset($data['orderby']) && isset($data['direction'])) {
			$orderby = $data['orderby'].' '.$data['direction'];
		} else {
			$orderby = "total_price ASC";
		}
		if (!empty($data['date1']) && !empty($data['date2'])) {
			$date = "WHERE order_date BETWEEN '".$data['date1']."' AND '" .$data['date2']."'";
		} else {
			$date = "WHERE order_date > 2000-01-01";
		}
		if (!empty($data['quantity1']) && !empty($data['quantity2'])) {
			$quantity = "AND quantity BETWEEN ".$data['quantity1']." AND " .$data['quantity2'];
		} else {
			$quantity = '';
		}
		if (!empty($data['status'])) {
			$status = "AND status = '".$data['status']."'";
		} else {
			$status = '';
		}
		if (!empty($data['search'])) {
			$search = htmlspecialchars($data['search']);
			$search = "AND (customer_name LIKE '%$search%' OR customer_last_name LIKE '%$search%' OR adress LIKE '%$search%' OR city LIKE '%$search%' )";
		} else {
			$search = '';
		}
        $sql = "SELECT * FROM orders $date $quantity $status $search ORDER BY $orderby";
		return $this->select($sql);
    }

    /*
     * Prepare SQL query and sends it to save method to insert it to DB
     *
     * @param array $array contains data prepared for DB
     */
    public function saveOrder($array)
    {
        $sql = 'INSERT INTO orders(product_id,quantity,total_price,adress,city,customer_name,customer_last_name,customer_email,order_date)
            VALUES (:productId,:quantity,:totalPrice,:adress,:city,:name,:lastname,:email,:orderDate)';
        $this->save($array,$sql);
        return;
    }
}
