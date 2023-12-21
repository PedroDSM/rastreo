<?php

namespace Drupal\FormularioFacturas\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioFacturasController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioFacturas'
    ];
    return $build;
  }

}
?>