<?php

namespace design_patterns\behavioral\template_method\book;

class TemplateStars extends TemplateAbstract
{
    /**
     * @inheritDoc
     */
    public function processTitle($title)
    {
        return Str_replace(' ','*',$title);
    }
}