<?php

/**
 * Preprocessor for theme_page().
 */
function weldir_preprocess_page(&$vars) {
   $vars['logo'] = theme_get_setting('logo');
}
