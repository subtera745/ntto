<?php
/**
 * @file
 * Contains \Drupal\gow_ntto\Plugin\Block\GowBlock.
 */
 
namespace Drupal\gow_ntto\Plugin\Block;
use Drupal\Core\Block\BlockBase;
 
/**
 * Provides a 'GovWisely_NTTO_Search' Block
 *
 * @Block(
 *   id = "gow_block",
 *   admin_label = @Translation("gow block"),
 * )
 */
class GowBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => '<div id="explorer-app"></div>
  <script type="text/javascript" src="bundle.js"></script>',
  		'#attached' => array(
  			'library' => array(
  				'gow_ntto/ntto',
  			),
  		),
    );
  }
 
}