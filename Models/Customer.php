<?php

include_once '../Database/ConnectDB.php';

class Customer extends ConnectDB
{
    /*
     * createCustomer(username)
     */
    public function createCustomer(string $name)
    {
        try {
            if (!parent::$sql->real_query("INSERT INTO lead_collections.customers (name) values ('$name');"))
            {
                // В случае неудачи вернет исключение и путь к этому исключению
                throw new Exception("Не удалось создать запись. В ".getcwd());
            }
        } catch (mysqli_sql_exception $e) {
            throw new mysqli_sql_exception($e);
        }
        return parent::$sql->insert_id;
    }

    public function returnCustomer(string $name)
    {
        parent::$sql->real_query("SELECT * FROM customers WHERE name = '$name'");
    }

    public function returnAllCustomers()
    {
        parent::$sql->real_query("SELECT * FROM customers");
    }

    public function deleteCustomerById($id)
    {
        parent::$sql->real_query("DELETE FROM customers WHERE id = '$id'");
    }
}