<?php

namespace App\Snippets\SQL;

use App\Snippets\Types\HtmlCodeType;
use Pina\Data\Schema;
use Pina\TableDataGateway;
use Pina\Types\EnabledType;
use Pina\Types\StringType;
use Exception;

class SnippetGateway extends TableDataGateway
{

    protected static $table = 'snippet';

    /**
     * @return Schema
     * @throws Exception
     */
    public function getSchema()
    {
        $schema = new Schema();
        $schema->addAutoincrementPrimaryKey('id', 'ID');
        $schema->add('title', 'Наименование', StringType::class);
        $schema->add('code', 'Код', HtmlCodeType::class);
        $schema->add('enabled', 'Активность', EnabledType::class);
        return $schema;
    }

}