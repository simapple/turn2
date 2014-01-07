<?php

abstract class Turn{
    abstract protected function createmap();//must do map
    abstract protected function execute();
    abstract protected function createsql();
    abstract protected static function gettablename();
}
