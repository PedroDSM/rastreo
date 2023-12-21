<?php

namespace Drupal\Inicio\Controller;

use Drupal\Core\Controller\ControllerBase;

class InicioController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'Inicio'
    ];
    return $build;
  }

}
?>