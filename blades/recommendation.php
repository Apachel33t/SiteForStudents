<?php

function returnRecommendationsBlade($object)
{
    for($i = 0; $i < count($object); $i++)
    {
        echo "<div class='column is-one-third'>
                <img class='circle' src='src/img/{$object[$i]['img_src']}' alt='{$object[$i]['img_src']}'/>
                <p class='little-title'>{$object[$i]['title']}</p>
                <p>{$object[$i]['text']}</p>
             </div>";
    }
}