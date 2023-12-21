<?php

namespace Drupal\FormularioContacto\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioContactoController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioContacto'
    ];
    return $build;
  }

}
?>