<?php
function pixma_js_alter(&$javascript){
  // Swap out jQuery to use an updated version of the library.
$javascript['misc/jquery.js']['data'] = '/sites/all/themes/pixma/js/jquery.min.js';
}
?>