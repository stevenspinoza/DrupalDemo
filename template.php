<?php
/**
 * Override or insert variables into the page template.
 */
function oc_preprocess(&$vars) {
  $vars['footer_text'] = 'This site was built as a collaboration between <span class="sky-color">Manifesto Digital</span> and <span class="sky-color">Compucorp</span>';
}