<?php
namespace Trois\Bake;

use Bake\Plugin as BasePlugin;
use Cake\Core\Configure;
use Cake\Core\PluginApplicationInterface;

class Plugin extends BasePlugin
{
  protected $name = 'Trois/Bake';

  public function bootstrap(PluginApplicationInterface $app): void
  {
    parent::bootstrap($app);
    Configure::write('Bake.theme', 'Trois/Bake');
    $app->addPlugin('Search');
  }
}
