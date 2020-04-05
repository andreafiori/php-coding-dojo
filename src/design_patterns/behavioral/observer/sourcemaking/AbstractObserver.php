<?php

namespace design_patterns\behavioral\observer\sourcemaking;

abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
}