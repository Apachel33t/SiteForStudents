<?php

include 'Models/Recommendation.php';

class Recommendations
{
    public function returnRecommendations()
    {
        return (new Recommendation())->returnAllRecommendations();
    }
}