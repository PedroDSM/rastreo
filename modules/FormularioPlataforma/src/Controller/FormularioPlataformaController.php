<?php

namespace Drupal\FormularioPlataforma\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioPlataformaController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioPlataforma'
    ];
    return $build;
  }

}
?>