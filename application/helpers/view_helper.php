<?php

use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
  function view($view, $data = []) {
    $path = APPPATH.'\modules\views';
    $blade = new Blade($path, $path.'/cache');
    $blade->make($view, $data);
  }
}

 ?>
