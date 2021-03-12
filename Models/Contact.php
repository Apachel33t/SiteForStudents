<?php

include_once '../Database/ConnectDB.php';

class Contact extends ConnectDB
{
    protected int $id;
    protected int $contacts_type_id;
    protected string $contact;

    public function createContact($customer_id, $type_id, $contact)
    {
        //$customer_id = (string) $customer_id;
        try {
            if (!parent::$sql->real_query("INSERT INTO lead_collections.contacts (customer_id, contacts_type_id, contact) values ('$customer_id', '$type_id', '$contact');"))
            {
                echo parent::$sql->error;
                throw new Exception('Не удалось создать запись в lead.collections.contacts');
            }
        } catch (mysqli_sql_exception $e) {
            throw new mysqli_sql_exception('Исключение ' . getcwd() . ' ' . $e);
        }
    }

    public function returnContact($customer_id)
    {
        parent::$sql->real_query("SELECT * FROM lead_collections.contacts where customer_id = '$customer_id'");
    }

    public function returnContacts()
    {
        parent::$sql->real_query("SELECT * FROM lead_collections.contacts");
    }

    public function deleteContactByCustomerId($customer_id)
    {
        parent::$sql->real_query("DELETE FROM lead_collections.contacts WHERE customer_id = '$customer_id'");
    }
}