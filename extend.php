<?php
namespace Kitbur\RubyText;
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[ruby={TEXT1}]{TEXT2}[/ruby]',
                '<ruby>{TEXT2}<rt>{TEXT1}</rt></ruby>'
            );
        })
];