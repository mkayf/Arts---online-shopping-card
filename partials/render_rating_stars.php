<?php
// Generate stars icon for product rating
// NOTE: We are assuming these products ratings are based on pre online sales 
// according to the owner or the owner can give ratings to his products

function renderRatingStars ($rating){
    $ratingStars = [];

    for($star = 0; $star < 5; $star++){
        if($rating > 0.5){
            $ratingStars[] = '<i class="fa-solid fa-star"></i>';
            $rating--;
        }
        else if($rating > 0 && $rating < 1){
            $ratingStars[] = '<i class="fa-solid fa-star-half-stroke"></i>';
            $rating--;
        }
        else{
            $ratingStars[] = '<i class="fa-regular fa-star"></i>';
        }
    }

    return implode('', $ratingStars);
}

?>