<?php

/**
 * Implements hook_theme().
 */
function dependency_injection_services_theme($existing, $type, $theme, $path) {
  return [
    'my_template' => [
      'variables' => ['data' => NULL],
    ],
  ];
}
?>