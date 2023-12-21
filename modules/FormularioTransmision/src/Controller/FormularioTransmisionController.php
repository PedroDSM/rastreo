<?php

namespace Drupal\FormularioTransmision\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioTransmisionController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioTransmision'
    ];
    return $build;
  }

}
?>