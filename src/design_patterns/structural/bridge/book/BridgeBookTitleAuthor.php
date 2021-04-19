<?php

namespace design_patterns\structural\bridge\book;
  
class BridgeBookTitleAuthor extends BridgeBook
{
    public function showTitleAuthor() {
        return $this->showTitle() . ' by ' . $this->showAuthor();
    }
}
