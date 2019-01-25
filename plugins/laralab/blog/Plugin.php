<?php namespace Laralab\Blog;

use System\Classes\PluginBase;
use Event;
use BackendAuth;
use Session;
use Redirect;
use Backend;

class Plugin extends PluginBase
{

    public function boot()
    {

            // listen for the display event of the Dashboard controller
        Event::listen('backend.page.beforeDisplay', function ($controller, $action) {
            //echo $action;
            //echo $controller;
            //exit;
            // redirect from dashboard to somewhere else
            if ($action == 'index' && $controller instanceof \Backend\Controllers\Index) {

                if (BackendAuth::getUser()->role->code === 'client') {
                    return Backend::redirect('rainlab/blog/posts');
                }

            }
        });
    }


    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'iframe_src' => function ($str) {
                    $doc = new \DOMDocument();
                    $doc->loadHTML($str);
                    $src = '';//$doc->getElementsByTagName('iframe')->item(0)->getAttribute('src');
                    return $src;
                },
            ]
        ];
    }
}
