<?php

namespace PinaSnippets\Widgets;

use PinaSnippets\SQL\SnippetGateway;
use Pina\Controls\Control;

class Snippets extends Control
{

    protected function draw()
    {
        $snippets = SnippetGateway::instance()
            ->whereBy('enabled', 'Y')
            ->column('code');

        return implode($snippets);
    }

}