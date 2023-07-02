<?php

namespace PinaSnippets;

use PinaSnippets\Endpoints\SnippetEndpoint;
use Pina\App;
use Pina\ModuleInterface;
use PinaDashboard\Dashboard;

class Module implements ModuleInterface
{

    public function __construct()
    {
    }

    public function getPath()
    {
        return __DIR__;
    }

    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    public function getTitle()
    {
        return 'Snippets';
    }

    public function http()
    {
        /** @var Dashboard $dashboard */
        $dashboard = App::load(Dashboard::class);
        $dashboard->register('snippets', SnippetEndpoint::class);

        return [];
    }
}