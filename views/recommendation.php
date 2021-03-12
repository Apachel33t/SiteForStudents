<?php

include 'Utils/Recommendations.php';
include 'blades/recommendation.php';

returnRecommendationsBlade((new Recommendations())->returnRecommendations());