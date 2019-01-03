<?php
namespace Trois\Bake;

use Cake\Core\Configure;
use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;

class Plugin extends BasePlugin
{
  public function bootstrap(PluginApplicationInterface $app)
  {
    Configure::write('Bake.theme', 'Trois/Bake');
    $app->addPlugin('Search');
  }
}
