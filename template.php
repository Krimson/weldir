<?php

/**
 * Preprocessor for theme_page().
 */
function weldir_preprocess_page(&$vars) {
   $vars['logo'] = theme_get_setting('logo');

   // Get & print the roles of current user as body classes
   if ($vars['user']) {
      foreach ($vars['user']->roles as $key => $role) {
         $role_class = "role-" . strtolower(str_replace(' ', '-', $role));
         $vars['body_classes'] .= ' ' . $role_class;
      }
   }
}
