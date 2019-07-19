<?php

namespace Drupal\dkomito_dev_tools\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DKomitoDevToolsController.
 */
class DKomitoDevToolsController extends ControllerBase {

  /**
   * Style_compliance_guide.
   *
   * @return string
   *   Return Hello string.
   */
  public function style_compliance_guide() {
    return [
      '#type' => 'theme',
			'#theme' => 'style_compliance_guide',
			'#title' => 'Style & Compliance Guide (Heading 1)'
    ];
  }

}
