<?php

namespace PinaSnippets\Collections;

use PinaSnippets\SQL\SnippetGateway;
use Pina\Data\DataCollection;
use Pina\Data\Schema;

class SnippetCollection extends DataCollection
{

    public function getListSchema(): Schema
    {
        return parent::getListSchema()->forgetField('code');
    }

    protected function makeQuery()
    {
        return SnippetGateway::instance();
    }

}