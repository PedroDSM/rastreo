<?php

namespace Drupal\FormularioPlataformaYM\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioPlataformaYMController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioPlataformaYM'
    ];
    return $build;
  }

}
?>