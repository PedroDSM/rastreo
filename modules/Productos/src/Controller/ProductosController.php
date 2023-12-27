<?php

namespace Drupal\Productos\Controller;

use Drupal\Core\Controller\ControllerBase;

class ProductosController extends ControllerBase {

  public function content() {
    $build = [
      '#theme' => 'Productos'
    ];
    return $build;
  }

}
?>