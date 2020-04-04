<?php

namespace design_patterns\behavioral\template_method\book;

class TemplateExclaim extends TemplateAbstract
{
    /**
     * @param string $title
     * @return mixed
     */
    public function processTitle($title) {
        return Str_replace(' ','!!!',$title);
    }

    /**
     * @param string $author
     * @return mixed
     */
    public function processAuthor($author) {
        return Str_replace(' ','!!!',$author);
    }
}