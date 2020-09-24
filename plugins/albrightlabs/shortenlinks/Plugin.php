<?php namespace AlbrightLabs\ShortenLinks;

use Backend;
use System\Classes\PluginBase;

/**
 * ShortenLinks Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ShortenLinks',
            'description' => 'No description provided yet...',
            'author'      => 'AlbrightLabs',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'AlbrightLabs\ShortenLinks\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'albrightlabs.shortenlinks.some_permission' => [
                'tab' => 'ShortenLinks',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'shortenlinks' => [
                'label'       => 'ShortenLinks',
                'url'         => Backend::url('albrightlabs/shortenlinks/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['albrightlabs.shortenlinks.*'],
                'order'       => 500,
            ],
        ];
    }
}
