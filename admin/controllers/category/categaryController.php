<?php
class categaryController
{
    public $categaryModels;

    function __construct()
    {
        $this->$categaryModels = new category();
    }

}