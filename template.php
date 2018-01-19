<?php


function hook_preprocess_page(&$vars) {
	drupal_add_js('https://use.fontawesome.com/cf47a57aea.js', 'external');
}

function SDEMO_preprocess_block(&$variables) {
 //print_r($variables['theme_hook_suggestions']);     
}