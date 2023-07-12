<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

class CustomBlock extends BlockBase {

 
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\customblock\Form\customForm');

    return $form;
   }
}
?>