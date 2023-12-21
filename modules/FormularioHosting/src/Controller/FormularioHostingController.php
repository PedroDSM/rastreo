<?php

namespace Drupal\FormularioHosting\Controller;

use Drupal\Core\Controller\ControllerBase;

class FormularioHostingController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'FormularioHosting'
    ];
    return $build;
  }

}
?>