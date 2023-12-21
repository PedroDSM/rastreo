<?php

namespace Drupal\FormularioVentas\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioVentasController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioVentas'
    ];
    return $build;
  }

}
?>