<?php

namespace Drupal\custom_hooks\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * Controller for the Custom Hooks module.
 */
class CustomHooksController extends ControllerBase {

    /**
     * Example custom hook controller method.
     */
    public function example() {
        return [
            '#markup' => $this->t('Hello, custom hook!'),
        ];
    }
}
?>