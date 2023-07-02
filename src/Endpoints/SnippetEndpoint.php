<?php

namespace PinaSnippets\Endpoints;

use PinaSnippets\Collections\SnippetCollection;
use Pina\App;
use Pina\Http\DelegatedCollectionEndpoint;
use Pina\Http\Request;

class SnippetEndpoint extends DelegatedCollectionEndpoint
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->composer->configure('Блоки кода', "Создать блок кода");
        $this->collection = App::make(SnippetCollection::class);
    }

}