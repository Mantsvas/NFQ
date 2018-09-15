<?php

require_once 'Models/Model.php';


class Order extends Model
{
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
