<?php

include 'Database/ConnectDB.php';

class Recommendation extends ConnectDB
{
    private int $id;
    private int $customer_id;
    private string $title;
    private string $text;

    public function createRecommendation()
    {}

    public function returnAllRecommendations()
    {
        parent::$sql->real_query('SELECT * FROM lead_collections.recommendations');
        return parent::$sql->use_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteRecommendation()
    {}
}