<?php namespace Albrightlabs\Backendsettings;

use App;
use Event;
use Backend;
use Albrightlabs\Backendsettings\Models\Settings;
use System\Classes\PluginBase;

/**
 * backendsettings Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Elevate plugin abilities
     */
    public $elevated = true;

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Backend Settings',
            'description' => 'Provides a few extra backend settings.',
            'author'      => 'Albright Labs',
            'icon'        => 'icon-gear'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        if (App::runningInBackend()) {

            // Hide the CMS and Media navigation items if turned off
            Event::listen('backend.menu.extendItems', function($navigationManager) {
                if(Settings::instance()->hide_cms == true){
                    $navigationManager->removeMainMenuItem('October.Cms', 'cms');
                }
                if(Settings::instance()->hide_media == true){
                    $navigationManager->removeMainMenuItem('October.Backend', 'media');
                }
            });

            // Inject login page CSS
            Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
                $controller->addCss('/plugins/albrightlabs/backendsettings/assets/css/login.css');
            });

            // Inject sidenav CSS and JS
            Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
                if (strpos($_SERVER['REQUEST_URI'], 'backend/cms') == false) {
                    // $controller->addCss('/plugins/albright/base/assets/css/backend.css');
                    if (!$controller instanceof \RainLab\Pages\Controllers\Index && !$controller instanceof \Cms\Controllers\Index && !$controller instanceof \Cms\Controllers\Media){
                        $controller->addCss('/plugins/albrightlabs/backendsettings/assets/css/sidenav.css');
                        $controller->addJs('/plugins/albrightlabs/backendsettings/assets/js/sidenav.js');
                    }
                } else {
                    // $controller->addCss('/plugins/albright/base/assets/css/cms.css');
                }
              });

        }
    }

    /**
     * Register settings
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Backend Settings',
                'description' => 'Toggle display of the CMS and Media navigation items.',
                'category'    => 'system::lang.system.categories.system',
                'icon'        => 'icon-cog',
                'class'       => 'Albrightlabs\Backendsettings\Models\Settings',
                'order'       => 500,
                'keywords'    => 'admin backend settings',
                'permissions' => ['albrightlabs.backendsettings.access_settings']
            ]
        ];
    }
}
