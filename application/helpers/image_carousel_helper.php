<?php

function showImageCarousel($string) {
    $html = '';
    $filename = explode(',', $string);
    $active = 'active';
    foreach ($filename as $image) {
    $html .= '<div class="carousel-item '.$active.'">
            <img src="'.base_url('assets/img/potensi/'.$image).'" class="d-block w-100" alt="...">
            </div>';
    $active = '';
    }        
    return $html;
}

 ?>
