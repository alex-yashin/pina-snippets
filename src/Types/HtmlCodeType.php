<?php

namespace PinaSnippets\Types;

use Pina\App;
use Pina\Controls\FormControl;
use Pina\Data\Field;
use Pina\Html;
use Pina\Types\TextType;

class HtmlCodeType extends TextType
{

    public function makeControl(Field $field, $value): FormControl
    {
        App::assets()->addScript('/textarea.js');
        return parent::makeControl($field, $value);
    }

    public function draw($value): string
    {
        App::assets()->addCss("https://unpkg.com/prismjs@1.29.0/themes/prism.css");
        App::assets()->addScript('https://unpkg.com/prismjs@1.29.0/components/prism-core.min.js');
        App::assets()->addScript('https://unpkg.com/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js');

        return Html::nest('pre.language-html/code.language-html', htmlspecialchars($value));
    }

}